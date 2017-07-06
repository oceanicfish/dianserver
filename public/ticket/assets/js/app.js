/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('ticketApp', []);

app.controller('ticketController', ['$http', '$scope', function($http, $scope){

    $scope.amount = 1;
    $scope.price = 150;
    $scope.sum = $scope.price;
    $scope.prepayid = '';
    $scope.config = '';
    $scope.sid = 1;

    /**
     * plus symbol clicked
     */
    $scope.addOne = function() {
        if ($scope.amount < 20) {
            $scope.amount = $scope.amount + 1;
            $scope.sum = $scope.price * $scope.amount;
        }
    }

    /**
     * minus symbol clicked
     */
    $scope.deleteOne = function() {
        if ($scope.amount > 1) {
            $scope.amount = $scope.amount - 1;
            $scope.sum = $scope.price * $scope.amount;
        }
    }

    /**
     * buy button clicked
     */
    $scope.buy = function () {

        $http.get("http://server.diandianplay.cn/wechat/pay/order/" + $scope.sid)
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