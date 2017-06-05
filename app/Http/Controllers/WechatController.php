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

//        Log::info($request->requestUri);
        dd($request->path());
//        $wechatServer = EasyWeChat::server();
//        dd($wechatServer);
//        return $wechatServer->serve();
    }
}
