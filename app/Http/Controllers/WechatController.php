<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat;
use Illuminate\Support\Facades\Log;
use EasyWeChat\Message\Text;
use EasyWeChat\Server\Guard;

class WechatController extends Controller
{

    /**
     * @var wechat server
     */
    public $wechatService = null;
    /**
     * @var wechat user
     */
    public $userService = null;

    /**
     * WechatController constructor.
     */
    public function __construct()
    {
        $this->wechatService = EasyWeChat::server();
        $this->userService = EasyWeChat::user();
    }

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
        $this->wechatService->setMessageHandler([$this, 'reply']);
        return $this->wechatService->serve();

    }

    /**
     * @param $message
     * @return string
     */
    public function reply($message)
    {
        Log::DEBUG("enter reply");
        $openID = $message->FromUserName; // 用户的 openid
        $user = $this->userService->get($openID);
        // $message->MsgType // 消息类型：event, text....
        return "您好！".$user->nickname.", 欢迎关注我们!";
    }
}
