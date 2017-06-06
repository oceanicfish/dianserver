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
        $userService = EasyWeChat::user();
        $message = $server->getMessage();
        $openID = $message-['FromUserName']; // 用户的 openid
        $user = $userService->get($openID);
        dd($user);
//        $text = new Text(['content' => '您好！'.$user->nickname]);
//        $server->setMessageHandler($text);
//
////        $server->setMessageHandler(function ($message) use ($userService) {
////            $openID = $message->FromUserName; // 用户的 openid
////            $user = $userService->get($openID);
////            // $message->MsgType // 消息类型：event, text....
////            return "您好！".$user->nickname.", 欢迎关注我!";
////        });
//
//        return $server->serve();


    }
}
