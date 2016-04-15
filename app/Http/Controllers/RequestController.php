<?php

namespace App\Http\Controllers;

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
        $data = str_replace("|","&",$data);
        if(!$url){
            return '地址错误';
        }
        if($type == 'get'){
            //get请求　　
            //初始化
            $ch = curl_init();//设置选项，包括URL
            curl_setopt($ch, CURLOPT_URL, $url.'?'.$data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            //执行并获取HTML文档内容
            $output = curl_exec($ch);
            //释放curl句柄
            curl_close($ch);
            //打印获得的数据
            if($output){
                return $output;
            }else{
                return response()->json('接口不可用');
            }

        }else{
            //post请求
            if($data){
                $dataArr = explode('&',$data);
                foreach($dataArr as $value){
                    $newdata = explode('=',$value);
                    $post_data[$newdata[0]] = $newdata[1];
                    
                }
            }else{
                $post_data=[];
            }
            
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
