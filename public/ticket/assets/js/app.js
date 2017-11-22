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

        $scope.selectedKidSeats = (!$cookies.getObject('selectedKidSeats')) ? [] : $cookies.getObject('selectedKidSeats');
        $scope.selectedAdultSeats = (!$cookies.getObject('selectedAdultSeats')) ? [] : $cookies.getObject('selectedAdultSeats');

        if ($scope.selectedKidSeats.length > 0 || $scope.selectedAdultSeats.length > 0) {
            ;
            $scope.selectedSeatsMessage = '您选择的座位：';

            for (var i = 0; i < $scope.selectedKidSeats.length; i++) {
                $scope.selectedSeatsMessage += " [ " + $scope.selectedKidSeats[i] + " ]";
            }

            for (var i = 0; i < $scope.selectedAdultSeats.length; i++) {
                $scope.selectedAdultSeats += $scope.selectedAdultSeats[i];
            }
        }else {
            $scope.selectedSeatsMessage = '还没选座';
        }
    }

    /**
     *
     * @type {*}
     */

    $scope.kidTicket = $scope.ticket;
    $scope.adultTicket = $scope.ticket;
    $scope.kidTicketPrice = 0;
    $scope.adultTicketPrice = 0;
    $scope.sum = $scope.kidTicketPrice + $scope.adultTicketPrice;
    $scope.prepayid = '';
    $scope.config = '';
    $scope.sid = 1;
    $scope.myOpenID = '';
    $scope.seatText = '选座';
    $scope.kidSeats = [];
    $scope.adultSeats = [];

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
            $scope.kidTicket = $scope.ticket;
            $scope.adultTicket = $scope.ticket;
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
            console.log($scope.selectedKidSeats.length);
            if ($scope.selectedKidSeats.length > 0 && $scope.selectedKidSeats.length >= $scope.ticket)
                $scope.selectedKidSeats.splice($scope.selectedKidSeats.length - 1, 1);
            if ($scope.selectedAdultSeats.length > 0)
                $scope.selectedAdultSeats.splice($scope.selectedAdultSeats.length - 1, 1);
            $scope.kidTicket = $scope.ticket;
            $scope.adultTicket = $scope.ticket;
            $cookies.putObject('ticket', $scope.ticket);
        }
    }

    /**
     * buy button clicked
     */
    $scope.buy = function () {

        console.log($cookies.getAll());
        $cookies.remove('selectedKidSeats');
        $cookies.remove('selectedAdultSeats');
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