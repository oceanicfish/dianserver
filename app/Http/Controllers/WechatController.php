<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat;
use Illuminate\Support\Facades\Log;
use EasyWeChat\Message\Text;
use EasyWeChat\Server\Guard;

class WechatController extends Controller
{
    //
    public $wechatService = null;
    public $userService = null;

    public function __construct()
    {
        $this->wechatService = EasyWeChat::server();
        $this->userService = EasyWeChat::user();
    }

//    /**
//     * @return null
//     */
//    public function getWechatService()
//    {
//        return $this->wechatService;
//    }
//
//    /**
//     * @return null
//     */
//    public function getUserService()
//    {
//        return $this->userService;
//    }

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
        $message = $this->wechatService->getMessage();
        $openID = $message['FromUserName']; // 用户的 openid
        $user = $this->userService->get($openID);
        $text = new Text(['content' => '您好！'. $user->nickname]);
        dd($text);
//        this::$wechatService->setMessageHandler("您好");
//
////        $server->setMessageHandler(function ($message) use ($userService) {
////            $openID = $message->FromUserName; // 用户的 openid
////            $user = $userService->get($openID);
////            // $message->MsgType // 消息类型：event, text....
////            return "您好！".$user->nickname.", 欢迎关注我!";
////        });
//
//        return this::$wechatService->serve();

    }

//    public function reply($message)
//    {
//
//    }
}
