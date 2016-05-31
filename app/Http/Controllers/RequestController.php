<?php

namespace App\Http\Controllers;

use App\Helpers\UrlParmToArray;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class RequestController extends Controller
{
    /**
     * 页面
     */
    public function index()
    {
        return view('request.index');
    }

    /**
     * 获取请求
     *
     * @return Response
     */
    public function getRequest()
    {
        //
        $type = Input::get('typenew','get');

        $url = Input::get('url','');
        $data = Input::get('data','');
        $agent = Input::get('agent','');
        $header = Input::get('header','');
        $data = str_replace("|","&",$data);
        $header = str_replace("|","&",$header);
        $agentArr = [];
        if(empty($url)){
            return '地址错误';
        }
        if(!empty($agent)){
            $agentArr = array("User-Agent"=>$agent);
        }
        if((substr($url, 0,4))!='http'){
            $url = 'http://'.$url;
        }
        $urlarr = parse_url($url);
        if(!empty($header)){
            $header = UrlParmToArray::StrToArr($header);
        }
        //初始化
        $httpClient = new Client(['base_uri'=>$urlarr['scheme'].'://'.$urlarr['host']]);
        if($type == 'get'){
            //get请求　　
            $request  = $httpClient ->request('GET', $urlarr['path'],
              ['query'=>$data,
                '_conditional'=>$header,
                "headers"=>$agentArr
              ]);
            $response = $request->getBody()->getContents();
            $response = json_decode($response);
            return dump($response);

        }else{
            //post请求
            if(!empty($data)){
                $post_data = UrlParmToArray::StrToArr($data);
            }else{
                $post_data=[];
            }
            $request  = $httpClient ->request('POST', $urlarr['path'],
              ['form_params'=>$post_data,
                '_conditional'=>$header,
                "headers"=>$agentArr
              ]);
            $response = $request->getBody()->getContents();
            $response = json_decode($response);
            return dump($response);

            
           // $post_data = array ("username" => "bob","key" => "12345");
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            // post数据
            curl_setopt($ch, CURLOPT_POST, 1);
            // post的变量
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
            $output = curl_exec($ch);
            curl_close($ch);
            //打印获得的数据
            if($output){
                return $output;
            }else{
                return response()->json('接口不可用');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
