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

        Log::info($request);
//        dd($request->all());
        $wechatServer = EasyWeChat::server();
        Log::info($wechatServer);
//        return $wechatServer->serve();
    }
}
