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

        /**
         * handling custom menu
         */
        $menu = EasyWeChat::menu();
        $buttons = [
            [
                "type" => "click",
                "name" => "今日歌曲",
                "key"  => "V1001_TODAY_MUSIC"
            ],
            [
                "name"       => "菜单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "搜索",
                        "url"  => "http://www.soso.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "视频",
                        "url"  => "http://v.qq.com/"
                    ],
                    [
                        "type" => "click",
                        "name" => "赞一下我们",
                        "key" => "V1001_GOOD"
                    ],
                ],
            ],
        ];
        $menu->add($buttons);

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
        return "您好！".$user->nickname.", 欢迎关注测试号!";
    }
}
