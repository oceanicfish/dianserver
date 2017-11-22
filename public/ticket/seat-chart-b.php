<!DOCTYPE html>
<html lang="en" ng-app="seatChartApp_B">
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
<body ng-controller="seatChartController_B">
<div class="container">
    <div class="container text-center"><h2 class="area-title">B 区</h2></div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="B1" ng-click="clickSeat('B1')">B1</div></li>
            <li class="seat"><div id="B2" ng-click="clickSeat('B2')">B2</div></li>
            <li class="seat"><div id="B3" ng-click="clickSeat('B3')">B3</div></li>
            <li class="seat"><div id="B4" ng-click="clickSeat('B4')">B4</div></li>
            <li class="seat"><div id="B5" ng-click="clickSeat('B5')">B5</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="B6" ng-click="clickSeat('B6')">B6</div></li>
            <li class="seat"><div id="B7" ng-click="clickSeat('B7')">B7</div></li>
            <li class="seat"><div id="B8" ng-click="clickSeat('B8')">B8</div></li>
            <li class="seat"><div id="B9" ng-click="clickSeat('B9')">B9</div></li>
            <li class="seat"><div id="B10" ng-click="clickSeat('B10')">B10</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="B11" ng-click="clickSeat('B11')">B11</div></li>
            <li class="seat"><div id="B12" ng-click="clickSeat('B12')">B12</div></li>
            <li class="seat"><div id="B13" ng-click="clickSeat('B13')">B13</div></li>
            <li class="seat"><div id="B14" ng-click="clickSeat('B14')">B14</div></li>
            <li class="seat"><div id="B15" ng-click="clickSeat('B15')">B15</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="B16" ng-click="clickSeat('B16')">B16</div></li>
            <li class="seat"><div id="B17" ng-click="clickSeat('B17')">B17</div></li>
            <li class="seat"><div id="B18" ng-click="clickSeat('B18')">B18</div></li>
            <li class="seat"><div id="B19" ng-click="clickSeat('B19')">B19</div></li>
            <li class="seat"><div id="B20" ng-click="clickSeat('B20')">B20</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="B21" ng-click="clickSeat('B21')">B21</div></li>
            <li class="seat"><div id="B22" ng-click="clickSeat('B22')">B22</div></li>
            <li class="seat"><div id="B23" ng-click="clickSeat('B23')">B23</div></li>
            <li class="seat"><div id="B24" ng-click="clickSeat('B24')">B24</div></li>
            <li class="seat"><div id="B25" ng-click="clickSeat('B25')">B25</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="B26" ng-click="clickSeat('B26')">B26</div></li>
            <li class="seat"><div id="B27" ng-click="clickSeat('B27')">B27</div></li>
            <li class="seat"><div id="B28" ng-click="clickSeat('B28')">B28</div></li>
            <li class="seat"><div id="B29" ng-click="clickSeat('B29')">B29</div></li>
            <li class="seat"><div id="B30" ng-click="clickSeat('B30')">B30</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="B31" ng-click="clickSeat('B31')">B31</div></li>
            <li class="seat"><div id="B32" ng-click="clickSeat('B32')">B32</div></li>
            <li class="seat"><div id="B33" ng-click="clickSeat('B33')">B33</div></li>
            <li class="seat"><div id="B34" ng-click="clickSeat('B34')">B34</div></li>
            <li class="seat"><div id="B35" ng-click="clickSeat('B35')">B35</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="B36" ng-click="clickSeat('B36')">B36</div></li>
            <li class="seat"><div id="B37" ng-click="clickSeat('B37')">B37</div></li>
            <li class="seat"><div id="B38" ng-click="clickSeat('B38')">B38</div></li>
            <li class="seat"><div id="B39" ng-click="clickSeat('B39')">B39</div></li>
            <li class="seat"><div id="B40" ng-click="clickSeat('B40')">B40</div></li>
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
<script src="assets/js/seat-chart-app-b.js"></script>
</body>
</html>