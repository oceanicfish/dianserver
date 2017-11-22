/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('seatAreaApp', ['ngCookies']);

app.controller('seatAreaController', ['$http', '$scope', '$cookies','$cookieStore', function($http, $scope,$cookies, $cookieStore){

    console.log("seat-area:" + $cookies);

    $scope.ticket = (!$cookies.getObject('ticket')) ? 1 : $cookies.getObject('ticket');

    console.log($cookies.getObject('selectedKidSeats'));

    $scope.selectedKidSeats = (!$cookies.getObject('selectedKidSeats')) ? [] : $cookies.getObject('selectedKidSeats');
    $scope.selectedAdultSeats = (!$cookies.getObject('selectedAdultSeats')) ? [] : $cookies.getObject('selectedAdultSeats');
    $scope.availableKidSeatsAmount =  $scope.ticket - $scope.selectedKidSeats.length;
    $scope.availableAdultSeatsAmount = $scope.ticket - $scope.selectedAdultSeats.length;

    console.log($scope.ticket);
}]);