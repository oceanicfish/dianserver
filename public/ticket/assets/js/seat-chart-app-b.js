/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('seatChartApp_B', ['ngCookies']);

app.controller('seatChartController_B', ['$http', '$scope', '$cookies','$cookieStore', function($http, $scope,$cookies, $cookieStore){

    $scope.selectedSeats = (!$cookies.getObject('selectedSeats')) ? [] : $cookies.getObject('selectedSeats');
    $scope.errorMessage = '';

    $scope.ticket = $cookies.getObject('ticket');
    if(!$scope.ticket)
        $scope.ticket = 0;

    $scope.occupiedSeats = ['B18', 'B35', 'B34'];

    for (i=1; i <= 40; i++) {
        seatNumber = "B" + i;
        if ($scope.occupiedSeats.indexOf(seatNumber) != -1) {
            angular.element('#' + seatNumber).addClass("occupied");
        }else if($scope.selectedSeats.indexOf(seatNumber) != -1) {
            angular.element('#' + seatNumber).addClass("selected");
        }else {
            angular.element('#' + seatNumber).addClass("available");
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

            if ( angular.element('#' + seatNumber).attr('class') == "available") {
                console.log(seatNumber + "available");
                angular.element('#' + seatNumber).removeClass("available").addClass("selected");
                $scope.selectedSeats.push(seatNumber);
                $cookies.putObject('selectedSeats', $scope.selectedSeats);
                console.log($scope.selectedSeats);
            }else {
                console.log(seatNumber + "selected");
                angular.element('#' + seatNumber).removeClass("selected").addClass("available");
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