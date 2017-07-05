<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat;
use Illuminate\Support\Facades\Log;
use EasyWeChat\Message\Text;
use EasyWeChat\Server\Guard;
use EasyWeChat\Payment\Order;

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
                "url"  => "http://server.diandianplay.cn/pay/order"
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
        $returnMsg =", 欢迎关注点点剧团公众号!";
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

//        return "您好！".$user->nickname.$returnMsg;
        return "http://server.diandianplay.cn/pay/order";
    }

    public function order(Request $request)
    {
        Log::DEBUG("enter order function");
        $payment = EasyWeChat::payment();
        $attributes = [
            'trade_type'       => 'JSAPI', // JSAPI，NATIVE，APP...
            'body'             => '测试订单2017070501_body',
            'detail'           => '测试订单2017070501_detail',
            'out_trade_no'     => '1217752501201407033233368018',
            'total_fee'        => 1, // 单位：分
            'notify_url'       => 'http://server.diandianplay.cn/pay/done', // 支付结果通知网址，如果不设置则会使用配置里的默认地址
            'openid'           => 'o2jOswqdNjdg5xqcUERzhkywWawU', // trade_type=JSAPI，此参数必传，用户在商户appid下的唯一标识，
            // ...
        ];
        $order = new Order($attributes);

        $result = $payment->prepare($order);
        if ($result->return_code == 'SUCCESS' && $result->result_code == 'SUCCESS'){
            $prepayId = $result->prepay_id;
            Log::DEBUG("&&&& paid successfully, prepay id : " . $prepayId);
        }
        return "";
    }

    public function paid(Request $request)
    {
        $payment = EasyWeChat::payment();
        $response = $payment->handleNotify(function($notify, $successful){
            Log::DEBUG("&&&& paid [" . $successful->result_code . "], notify_total_fee : " . $notify->total_fee);
            return true; // 或者错误消息
        });

        return $response;
    }
}





























