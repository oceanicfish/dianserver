/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('ticketApp', ['ngCookies']);

app.controller('ticketController', ['$http', '$scope','$window' ,'$cookies','$cookieStore', function($http, $scope, $window, $cookies, $cookieStore){

    /**
     * initialize total ticket amount
     */
    if (!$cookies.getObject('ticket')) {
        $scope.ticket = 1;
        $cookies.putObject('ticket', $scope.ticket);
    }else {
        $scope.ticket = $cookies.getObject('ticket');
    }

    /**
     * check if the user has already selected seats
     * @type {Array}
     */

    $scope.setMessage = function () {

        $scope.selectedSeats = (!$cookies.getObject('selectedSeats')) ? [] : $cookies.getObject('selectedSeats');

        if ($scope.selectedSeats.length > 0) {

            $scope.selectedSeatsMessage = '总价：';
            $scope.seatText = '座位号: '

            for (var i = 0; i < $scope.selectedSeats.length; i++) {
                $scope.selectedSeatsMessage += "¥ " + $scope.selectedSeats.length * 150;
                $scope.seatText += "[" + $scope.selectedSeats[i] + "]";
            }
        }else {
            $scope.seatText = '选座';
            $scope.selectedSeatsMessage = '还没选座';
        }
    }

    /**
     *
     * @type {*}
     */
    $scope.prepayid = '';
    $scope.config = '';
    $scope.sid = 1;
    $scope.myOpenID = '';
    $scope.seatText = ' 选座 ';

    /**
     * setup openID
     * @param openID
     */
    $scope.setOpenID = function (openID) {
        $scope.myOpenID = openID;
        $cookieStore.put('openid', $scope.myOpenID);
        console.log($cookieStore.get('openid'));
    }

    /**
     * plus symbol clicked
     */
    $scope.addOne = function() {
        if ($scope.ticket < 20) {
            $scope.ticket = $scope.ticket + 1;
            $cookies.putObject('ticket', $scope.ticket);
            // $cookieStore.put('ticket', $scope.ticket);
            console.log($cookies);
            // $scope.sum = $scope.kidTicketPrice * $scope.kidTicket + $scope.adultTicketPrice * $scope.adultTicket;
        }
    }

    /**
     * minus symbol clicked
     */
    $scope.deleteOne = function() {
        if ($scope.ticket > 1) {
            $scope.ticket = $scope.ticket - 1;
            console.log("$scope.selectedKidSeats : " + $scope.selectedSeats.length);
            if ($scope.selectedSeats.length > 0 && $scope.selectedSeats.length >= $scope.ticket)
                $scope.selectedSeats.splice($scope.selectedSeats.length - 1, 1);
            $cookies.putObject('selectedSeats', $scope.selectedSeats);
            $scope.setMessage();
            $cookies.putObject('ticket', $scope.ticket);
        }
    }

    /**
     * buy button clicked
     */
    $scope.buy = function () {

        console.log($cookies.getAll());
        $cookies.remove('selectedSeats');
        $scope.setMessage();
        console.log($cookies.getAll());
        // $http.get("http://server.diandianplay.cn/wechat/pay/order?sid=" + $scope.sid + "&openID=" + $scope.myOpenID)
        //     .success(function(data) {
        //         if(data != "null") {
        //             $scope.config = data;
        //
        //             $scope.payStr = {
        //                 appId: $scope.config.appId,
        //                 nonceStr: $scope.config.nonceStr,
        //                 package: $scope.config.package,
        //                 signType: $scope.config.signType,
        //                 paySign: $scope.config.paySign,
        //                 timeStamp: String($scope.config.timestamp)
        //             };
        //
        //             WeixinJSBridge.invoke(
        //                 'getBrandWCPayRequest',
        //                 $scope.payStr,
        //                 function(res){
        //                     if(res.err_msg == "get_brand_wcpay_request:ok" ) {
        //
        //                         // 使用以上方式判断前端返回,微信团队郑重提示：
        //                         // res.err_msg将在用户支付成功后返回
        //                         // ok，但并不保证它绝对可靠。
        //                         alert("paid successfully");
        //                     }
        //                 }
        //             );
        //
        //         }
        //     });
    }

    $scope.setMessage();

    console.log($cookies.getObject('ticket'));

}]);