<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use EasyWeChat;

class WechatController extends Controller
{
    //

    public function serve(Request $request)
    {

        dd($request);
//        $wechatServer = EasyWeChat::server();
//        dd($wechatServer);
//        return $wechatServer->serve();
    }
}
