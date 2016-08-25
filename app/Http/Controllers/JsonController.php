<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JsonController extends Controller
{
    /**
     *
     *
     * json解码
     */
    public function decode(Request $request)
    {
        $text = $request->get('text');
        return response()->json((json_decode($text)));
        /*$data['code'] = 200;
        if(empty(json_decode($text))){
            $data['code'] = 400;
            $data['data'] = $text;
        }else{
            $data['data'] = json_decode($text);
        }

        return $data;*/
    }
    
}
