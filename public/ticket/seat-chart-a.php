<!DOCTYPE html>
<html lang="en" ng-app="seatChartApp_A">
<head>
    <meta charset="UTF-8">
    <title>B区座位图(仅限儿童)</title>
    <!--    very important for wechat X5 browser -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="assets/css/angular-ui-notification.min.css">-->
    <link rel="stylesheet" type="text/css" href="assets/css/seat-chart-style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>
<body ng-controller="seatChartController_A">
<div class="container">
    <div class="container text-center"><h2 class="area-title">A 区</h2></div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="A1" ng-click="clickSeat('A1')">A1</div></li>
            <li class="seat"><div id="A2" ng-click="clickSeat('A2')">A2</div></li>
            <li class="seat"><div id="A3" ng-click="clickSeat('A3')">A3</div></li>
            <li class="seat"><div id="A4" ng-click="clickSeat('A4')">A4</div></li>
            <li class="seat"><div id="A5" ng-click="clickSeat('A5')">A5</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="A6" ng-click="clickSeat('A6')">A6</div></li>
            <li class="seat"><div id="A7" ng-click="clickSeat('A7')">A7</div></li>
            <li class="seat"><div id="A8" ng-click="clickSeat('A8')">A8</div></li>
            <li class="seat"><div id="A9" ng-click="clickSeat('A9')">A9</div></li>
            <li class="seat"><div id="A10" ng-click="clickSeat('A10')">A10</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="A11" ng-click="clickSeat('A11')">A11</div></li>
            <li class="seat"><div id="A12" ng-click="clickSeat('A12')">A12</div></li>
            <li class="seat"><div id="A13" ng-click="clickSeat('A13')">A13</div></li>
            <li class="seat"><div id="A14" ng-click="clickSeat('A14')">A14</div></li>
            <li class="seat"><div id="A15" ng-click="clickSeat('A15')">A15</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="A16" ng-click="clickSeat('A16')">A16</div></li>
            <li class="seat"><div id="A17" ng-click="clickSeat('A17')">A17</div></li>
            <li class="seat"><div id="A18" ng-click="clickSeat('A18')">A18</div></li>
            <li class="seat"><div id="A19" ng-click="clickSeat('A19')">A19</div></li>
            <li class="seat"><div id="A20" ng-click="clickSeat('A20')">A20</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="A21" ng-click="clickSeat('A21')">A21</div></li>
            <li class="seat"><div id="A22" ng-click="clickSeat('A22')">A22</div></li>
            <li class="seat"><div id="A23" ng-click="clickSeat('A23')">A23</div></li>
            <li class="seat"><div id="A24" ng-click="clickSeat('A24')">A24</div></li>
            <li class="seat"><div id="A25" ng-click="clickSeat('A25')">A25</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="A26" ng-click="clickSeat('A26')">A26</div></li>
            <li class="seat"><div id="A27" ng-click="clickSeat('A27')">A27</div></li>
            <li class="seat"><div id="A28" ng-click="clickSeat('A28')">A28</div></li>
            <li class="seat"><div id="A29" ng-click="clickSeat('A29')">A29</div></li>
            <li class="seat"><div id="A30" ng-click="clickSeat('A30')">A30</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="A31" ng-click="clickSeat('A31')">A31</div></li>
            <li class="seat"><div id="A32" ng-click="clickSeat('A32')">A32</div></li>
            <li class="seat"><div id="A33" ng-click="clickSeat('A33')">A33</div></li>
            <li class="seat"><div id="A34" ng-click="clickSeat('A34')">A34</div></li>
            <li class="seat"><div id="A35" ng-click="clickSeat('A35')">A35</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="A36" ng-click="clickSeat('A36')">A36</div></li>
            <li class="seat"><div id="A37" ng-click="clickSeat('A37')">A37</div></li>
            <li class="seat"><div id="A38" ng-click="clickSeat('A38')">A38</div></li>
            <li class="seat"><div id="A39" ng-click="clickSeat('A39')">A39</div></li>
            <li class="seat"><div id="A40" ng-click="clickSeat('A40')">A40</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <span class="text-danger">{{errorMessage}}</span>
    </div>
</div>
<div class="buy text-center">
    <a href="seat-area.php">选完了</a>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="assets/js/angular.min.js"></script>
<script type="text/javascript" src="assets/js/angular-cookies.min.js"></script>
<!--<script src="assets/js/angular-ui-notification.min.js"></script>-->
<script src="assets/js/seat-chart-app-a.js"></script>
</body>
</html>