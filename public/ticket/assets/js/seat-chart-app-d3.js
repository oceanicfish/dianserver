/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('seatChartApp_D3', ['ngCookies']);

app.controller('seatChartController_D3', ['$http', '$scope', '$cookies','$cookieStore', function($http, $scope,$cookies, $cookieStore){

    $scope.selectedSeats = (!$cookies.getObject('selectedSeats')) ? [] : $cookies.getObject('selectedSeats');
    $scope.errorMessage = '';

    $scope.ticket = $cookies.getObject('ticket');
    if(!$scope.ticket)
        $scope.ticket = 0;

    $scope.occupiedSeats = ['D113', 'D130', 'D141'];

    for (i=113; i <= 154; i++) {
        seatNumber = "D" + i;
        if ($scope.occupiedSeats.indexOf(seatNumber) != -1) {
            angular.element('#' + seatNumber).addClass("occupied-d3");
        }else if($scope.selectedSeats.indexOf(seatNumber) != -1) {
            angular.element('#' + seatNumber).addClass("selected-d3");
        }else {
            angular.element('#' + seatNumber).addClass("available-d3");
        }
    }


    /**
     *
     * @param seatNumber
     */
    $scope.clickSeat = function (seatNumber) {

        if ($scope.occupiedSeats.indexOf(seatNumber) != -1) {
            return false;
        }else {
            if ($scope.selectedSeats.length >= $scope.ticket && $scope.selectedSeats.indexOf(seatNumber) == -1) {
                $scope.errorMessage = '您已经选完了' + $scope.ticket + '张票。';
                return false;
            }

            if ( angular.element('#' + seatNumber).attr('class') == "available-d3") {
                console.log(seatNumber + "available-d3");
                angular.element('#' + seatNumber).removeClass("available-d3").addClass("selected-d3");
                $scope.selectedSeats.push(seatNumber);
                $cookies.putObject('selectedSeats', $scope.selectedSeats);
                console.log($scope.selectedSeats);
            }else {
                console.log(seatNumber + "selected-d3");
                angular.element('#' + seatNumber).removeClass("selected-d3").addClass("available-d3");
                var index = $scope.selectedSeats.indexOf(seatNumber);
                $scope.selectedSeats.splice(index, 1);
                $cookies.putObject('selectedSeats', $scope.selectedSeats);
                console.log($scope.selectedSeats);
            }

            if ($scope.selectedSeats.length <= $scope.ticket) {
                $scope.errorMessage = '';
            }
        }

    }

}]);