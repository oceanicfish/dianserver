/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('seatAreaApp', ['ngCookies']);

app.controller('seatAreaController', ['$http', '$scope', '$cookies','$cookieStore', function($http, $scope,$cookies, $cookieStore){

    $scope.ticket = $cookieStore.get('ticket');
    if(!$scope.ticket)
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

    console.log($scope.ticket);
}]);