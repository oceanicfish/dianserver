<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat;
use Illuminate\Support\Facades\Log;
use EasyWeChat\Message\Text;

class WechatController extends Controller
{
    //

    /**
     * @param Request $request
     * @return mixed
     */
    public function serve(Request $request)
    {
        /**
         * EasyWeChat = $app
         * EasyWeChat::server() = $app->server()
         */
        $server = EasyWeChat::server();
        $text = new Text();
        $text->content = '您好';

        $server->setMessageHandler($text);

//        $server->setMessageHandler(function ($message) {
//            // $message->FromUserName // 用户的 openid
//            // $message->MsgType // 消息类型：event, text....
//            return "您好！欢迎关注我!";
//        });

        return $server->serve();


    }
}
