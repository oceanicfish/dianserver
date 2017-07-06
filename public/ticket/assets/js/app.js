/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('ticketApp', []);

app.controller('ticketController', ['$http', '$scope', function($http, $scope){

    $scope.amount = 1;
    $scope.price = 150;
    $scope.sum = $scope.price;

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

}]);