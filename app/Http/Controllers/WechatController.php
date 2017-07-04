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
         * EasyWeChat::server() = $app->server
         */

        $access_token = EasyWeChat::access_token();
        Log::DEBUG("&& access_token : " . $access_token->getToken());

        /**
         * handling custom menu
         */
        $menu = EasyWeChat::menu();

        $buttons = [
            [
                "type" => "view",
                "name" => "进入微店",
                "url"  => "https://weidian.com/s/1165656977?wfr=c&ifr=shopdetail"
            ],
            [
                "type" => "view",
                "name" => "微店购票",
                "url"  => "https://weidian.com/i/2125626128?wfr=c&ifr=itemdetail"
            ],
            [
                "name"       => "精彩瞬间",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "5月30日-嘉里中心",
                        "url"  => "http://gallery.diandianplay.cn/gallery_0530.html"
                    ],
                    [
                        "type" => "view",
                        "name" => "6月3日上午-1905",
                        "url"  => "http://gallery.diandianplay.cn/gallery_0603am.html"
                    ],
                    [
                        "type" => "view",
                        "name" => "6月3日下午-1905",
                        "url" => "http://gallery.diandianplay.cn/gallery_0603pm.html"
                    ],
                    [
                        "type" => "view",
                        "name" => "6月4日上午-1905",
                        "url"  => "http://gallery.diandianplay.cn/gallery_0604am.html"
                    ],
                    [
                        "type" => "view",
                        "name" => "6月4日下午-1905",
                        "url" => "http://gallery.diandianplay.cn/gallery_0604pm.html"
                    ],
                ],
            ],
        ];
        $menu->add($buttons);
        $menus = $menu->all();

        /**
         * handling message
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
        $returnMsg =", 欢迎关注测试号!";
//        if ($message->MsgType == 'event') {
//            Log::DEBUG("&&&& message event key : " . $message->EventKey);
//            switch ($message->EventKey) {
//                case 'V1001_GOOD':
//                    $returnMsg = ", 谢谢亲";
//                    break;
//                default:
//                    $returnMsg = "";
//                    break;
//            }
//        }

        return "您好！".$user->nickname.$returnMsg;
    }
}
