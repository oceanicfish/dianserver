/**
 * Created by yang on 26/04/2017.
 */
var app = angular.module('seatChartApp_D2', ['ngCookies']);

app.controller('seatChartController_D2', ['$http', '$scope', '$cookies','$cookieStore', function($http, $scope,$cookies, $cookieStore){

    $scope.selectedSeats = (!$cookies.getObject('selectedSeats')) ? [] : $cookies.getObject('selectedSeats');
    $scope.errorMessage = '';

    $scope.ticket = $cookies.getObject('ticket');
    if(!$scope.ticket)
        $scope.ticket = 0;

    $scope.occupiedSeats = ['D43', 'D58', 'D112'];

    for (i=43; i <= 112; i++) {
        seatNumber = "D" + i;
        if ($scope.occupiedSeats.indexOf(seatNumber) != -1) {
            angular.element('#' + seatNumber).addClass("occupied-c-d2");
        }else if($scope.selectedSeats.indexOf(seatNumber) != -1) {
            angular.element('#' + seatNumber).addClass("selected-c-d2");
        }else {
            angular.element('#' + seatNumber).addClass("available-c-d2");
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

            if ( angular.element('#' + seatNumber).attr('class') == "available-c-d2") {
                console.log(seatNumber + "available-c-d2");
                angular.element('#' + seatNumber).removeClass("available-c-d2").addClass("selected-c-d2");
                $scope.selectedSeats.push(seatNumber);
                $cookies.putObject('selectedSeats', $scope.selectedSeats);
                console.log($scope.selectedSeats);
            }else {
                console.log(seatNumber + "selected-c-d2");
                angular.element('#' + seatNumber).removeClass("selected-c-d2").addClass("available-c-d2");
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