<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use EasyWeChat;

class WechatController extends Controller
{
    //

    public function serve()
    {

        $wechatServer = EasyWeChat::server();
        return $wechatServer->serve();
    }
}
