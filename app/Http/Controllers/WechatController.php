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
     * @var wechat openid
     */
    public $openID = null;

    /**
     * WechatController constructor.
     */
    public function __construct()
    {
        $this->wechatService = EasyWeChat::server();
        $this->userService = EasyWeChat::user();
        $this->openID = "";
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
        Log::INFO("&& access_token : " . $access_token->getToken());

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
                        "name" => "8月5日飞翔吧潘达",
                        "url"  => "http://gallery.diandianplay.cn/gallery_0805.html"
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
        Log::INFO("enter reply");
        $this->openID = $message->FromUserName; // 用户的 openid
        $user = $this->userService->get($this->openID);
        // $message->MsgType // 消息类型：event, text....
        $returnMsg =", 欢迎关注点点剧团公众号!";
//        if ($message->MsgType == 'event') {
//            Log::INFO("&&&& message event key : " . $message->EventKey);
//            switch ($message->EventKey) {
//                case 'V1001_GOOD':
//                    $returnMsg = ", 谢谢亲";
//                    break;
//                default:
//                    $returnMsg = "";
//                    break;
//            }
//        }

        session(['myOpenID' => $this->openID]);
        Log::INFO("&&&& user : " . $user->nickname . " open id : ". $this->openID);
        Log::INFO("&&&& msgtype : " . $message->MsgType . " content: ". $message->Content);
        if ($message->MsgType == 'text' && $message->Content == 'paytest') {
            return "http://server.diandianplay.cn/ticket/index.html";
        }

        return "您好！" . $user->nickname . $returnMsg;
    }


    /**
     * @param $sid
     * @return string
     */
    public function order($sid)
    {

//        $this->openID = 'o_qPfwQW8Oi_nDpp9uxV-bEnUNJY';
        $this->openID = session('myOpenID');

        Log::INFO("&&&& enter order function, showid=". $sid . ", openid=" . $this->openID);

        $payment = EasyWeChat::payment();

        $attributes = [
            'trade_type'       => 'JSAPI', // JSAPI，NATIVE，APP...
            'body'             => '测试订单_body',
            'detail'           => '测试订单_detail',
            'out_trade_no'     => $this->runTradeNo(),
            'total_fee'        => 1, // 单位：分
            'notify_url'       => 'http://server.diandianplay.cn/wechat/pay/done', // 支付结果通知网址，如果不设置则会使用配置里的默认地址
            'openid'           => $this->openID, // trade_type=JSAPI，此参数必传，用户在商户appid下的唯一标识，
            // ...
        ];

        //git test
        $order = new Order($attributes);
        $result = $payment->prepare($order);


        if ($result->return_code == 'SUCCESS' && $result->result_code == 'SUCCESS'){
            $prepayId = $result->prepay_id;
            Log::INFO("&&&& paid successfully, prepay id : " . $prepayId);

            //get config
            $config = $payment->configForJSSDKPayment($prepayId);
            Log::INFO("&&&& prepay config : " . json_encode($config, JSON_UNESCAPED_UNICODE));

            return json_encode($config, JSON_UNESCAPED_UNICODE);
        }

        Log::INFO("&&&& paid [" . $result->return_code . "] , result return code : " . $result->return_msg);

        return json_encode($result->return_msg, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @return mixed
     */
    public function paid()
    {
        Log::INFO("enter paid function");
        $payment = EasyWeChat::payment();
        $response = $payment->handleNotify(function($notify, $successful){
            Log::INFO("&&&& paid [" . json_encode($successful, JSON_UNESCAPED_UNICODE) . "], notify_total_fee : " . json_encode($notify, JSON_UNESCAPED_UNICODE));
            return true; // 或者错误消息
        });
        Log::INFO("exiting order function");
        return $response;
    }

    /**
     * @return string
     */
    public function runTradeNo() {
        $rnd = time() . rand(1000,time());
        if (strlen($rnd) > 32) {
            return substr($rnd, 32);
        }
        return $rnd;
    }
}





























