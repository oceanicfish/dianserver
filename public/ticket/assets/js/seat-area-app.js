/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('seatAreaApp', ['ngCookies']);

app.controller('seatAreaController', ['$http', '$scope', '$cookies','$cookieStore', function($http, $scope,$cookies, $cookieStore){

    console.log("seat-area:" + $cookies);

    $scope.ticket = (!$cookies.getObject('ticket')) ? 1 : $cookies.getObject('ticket');

    console.log($cookies.getObject('selectedKidSeats'));

    $scope.selectedSeats = (!$cookies.getObject('selectedSeats')) ? [] : $cookies.getObject('selectedSeats');
    $scope.availableSeatsAmount =  $scope.ticket - $scope.selectedSeats.length;

    console.log($scope.ticket);
}]);