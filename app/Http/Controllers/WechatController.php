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
    public function serve(Request $request, $wechatServer)
    {
        /**
         * EasyWeChat = $app
         * EasyWeChat::server() = $app->server()
         */
        $server = EasyWeChat::server();

        $message = $server->getMessage();
        $openID = $message->FromUserName;
        $user = EasyWeChat::user($openID);
        $nickname = $user->nickname;

        $text = new Text(['content' => '您好！'.$nickname]);
        $server->setMessageHandler($text);
        return $server->serve();


    }
}
