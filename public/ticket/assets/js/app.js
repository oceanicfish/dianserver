/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('ticketApp', []);

app.controller('ticketController', ['$http', '$scope', function($http, $scope){

    $scope.amount = 1;
    $scope.price = 150;
    $scope.sum = $scope.price;
    $scope.prepayid = '';
    $scope.config = [];

    $scope.addOne = function() {
        if ($scope.amount < 20) {
            $scope.amount = $scope.amount + 1;
            $scope.sum = $scope.price * $scope.amount;
        }
    }

    $scope.deleteOne = function() {
        if ($scope.amount > 1) {
            $scope.amount = $scope.amount - 1;
            $scope.sum = $scope.price * $scope.amount;
        }
    }

    $scope.buy = function () {

        $http.get("http://server.diandianplay.cn/wechat/pay/order")
            .success(function(data) {
                if(data != "null") {
                    $scope.config = data;

                    wx.chooseWXPay({
                        timestamp : $scope.config.timestamp,
                        nonceStr : $scope.config.nonceStr,
                        package : $scope.config.package,
                        signType : $scope.config.signType,
                        paySign : $scope.config.paySign, // 支付签名
                        success : function (res) {
                            $scope.prepayid = res;
                        // 支付成功后的回调函数
                    }
                });
                }
            });
    }



}]);