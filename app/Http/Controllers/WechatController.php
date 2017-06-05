<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use EasyWeChat;
use Illuminate\Support\Facades\Log;

class WechatController extends Controller
{
    //

    public function serve(Request $request)
    {
        /**
         * EasyWeChat = $app
         * EasyWeChat::server() = $app->server()
         */
        $wechatServer = EasyWeChat::server();
        return $wechatServer->serve();
    }
}
