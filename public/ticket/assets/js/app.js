/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('ticketApp', ['ngCookies']);

app.controller('ticketController', ['$http', '$scope','$cookies','$cookieStore', function($http, $scope, $cookies, $cookieStore){

    $scope.ticket = 1;
    $scope.kidTicket = $scope.ticket;
    $scope.adultTicket = $scope.ticket;
    $scope.kidTicketPrice = 0;
    $scope.adultTicketPrice = 0;
    $scope.sum = $scope.kidTicketPrice + $scope.adultTicketPrice;
    $scope.prepayid = '';
    $scope.config = '';
    $scope.sid = 1;
    $scope.myOpenID = '';
    $scope.seatText = '开始选座';
    $scope.kidSeats = [];
    $scope.adultSeats = [];

    /**
     * plus symbol clicked
     */
    $scope.addOne = function() {
        if ($scope.ticket < 20) {
            $scope.ticket = $scope.ticket + 1;
            $scope.kidTicket = $scope.ticket;
            $scope.adultTicket = $scope.ticket;
            $cookieStore.put('ticket', $scope.ticket);
            // $scope.sum = $scope.kidTicketPrice * $scope.kidTicket + $scope.adultTicketPrice * $scope.adultTicket;
        }
    }

    /**
     * minus symbol clicked
     */
    $scope.deleteOne = function() {
        if ($scope.ticket > 1) {
            $scope.ticket = $scope.ticket - 1;
            $scope.kidTicket = $scope.ticket;
            $scope.adultTicket = $scope.ticket;
            $cookieStore.put('ticket', $scope.ticket);
        }
    }

    /**
     * buy button clicked
     */
    $scope.buy = function () {

        $http.get("http://server.diandianplay.cn/wechat/pay/order?sid=" + $scope.sid + "&openID=" + $scope.myOpenID)
            .success(function(data) {
                if(data != "null") {
                    $scope.config = data;

                    $scope.payStr = {
                        appId: $scope.config.appId,
                        nonceStr: $scope.config.nonceStr,
                        package: $scope.config.package,
                        signType: $scope.config.signType,
                        paySign: $scope.config.paySign,
                        timeStamp: String($scope.config.timestamp)
                    };

                    WeixinJSBridge.invoke(
                        'getBrandWCPayRequest',
                        $scope.payStr,
                        function(res){
                            if(res.err_msg == "get_brand_wcpay_request:ok" ) {

                                // 使用以上方式判断前端返回,微信团队郑重提示：
                                // res.err_msg将在用户支付成功后返回
                                // ok，但并不保证它绝对可靠。
                                alert("paid successfully");
                            }
                        }
                    );

                }
            });
    }



}]);