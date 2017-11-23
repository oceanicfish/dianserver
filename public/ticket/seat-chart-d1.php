<!DOCTYPE html>
<html lang="en" ng-app="seatChartApp_D1">
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
<body ng-controller="seatChartController_D1">
<div class="container">
    <div class="container text-center"><h2 class="area-title">D1 区</h2></div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D1" ng-click="clickSeat('D1')">D1</div></li>
            <li class="seat"><div id="D2" ng-click="clickSeat('D2')">D2</div></li>
            <li class="seat"><div id="D3" ng-click="clickSeat('D3')">D3</div></li>
            <li class="seat"><div id="D4" ng-click="clickSeat('D4')">D4</div></li>
            <li class="seat"><div id="D5" ng-click="clickSeat('D5')">D5</div></li>
            <li class="seat"><div id="D6" ng-click="clickSeat('D6')">D6</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D7" ng-click="clickSeat('D7')">D7</div></li>
            <li class="seat"><div id="D8" ng-click="clickSeat('D8')">D8</div></li>
            <li class="seat"><div id="D9" ng-click="clickSeat('D9')">D9</div></li>
            <li class="seat"><div id="D10" ng-click="clickSeat('D10')">D10</div></li>
            <li class="seat"><div id="D11" ng-click="clickSeat('D11')">D11</div></li>
            <li class="seat"><div id="D12" ng-click="clickSeat('D12')">D12</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D13" ng-click="clickSeat('D13')">D13</div></li>
            <li class="seat"><div id="D14" ng-click="clickSeat('D14')">D14</div></li>
            <li class="seat"><div id="D15" ng-click="clickSeat('D15')">D15</div></li>
            <li class="seat"><div id="D16" ng-click="clickSeat('D16')">D16</div></li>
            <li class="seat"><div id="D17" ng-click="clickSeat('D17')">D17</div></li>
            <li class="seat"><div id="D18" ng-click="clickSeat('D18')">D18</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D19" ng-click="clickSeat('D19')">D19</div></li>
            <li class="seat"><div id="D20" ng-click="clickSeat('D20')">D20</div></li>
            <li class="seat"><div id="D21" ng-click="clickSeat('D21')">D21</div></li>
            <li class="seat"><div id="D22" ng-click="clickSeat('D22')">D22</div></li>
            <li class="seat"><div id="D23" ng-click="clickSeat('D23')">D23</div></li>
            <li class="seat"><div id="D24" ng-click="clickSeat('D24')">D24</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D25" ng-click="clickSeat('D25')">D25</div></li>
            <li class="seat"><div id="D26" ng-click="clickSeat('D26')">D26</div></li>
            <li class="seat"><div id="D27" ng-click="clickSeat('D27')">D27</div></li>
            <li class="seat"><div id="D28" ng-click="clickSeat('D28')">D28</div></li>
            <li class="seat"><div id="D29" ng-click="clickSeat('D29')">D29</div></li>
            <li class="seat"><div id="D30" ng-click="clickSeat('D30')">D30</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D31" ng-click="clickSeat('D31')">D31</div></li>
            <li class="seat"><div id="D32" ng-click="clickSeat('D32')">D32</div></li>
            <li class="seat"><div id="D33" ng-click="clickSeat('D33')">D33</div></li>
            <li class="seat"><div id="D34" ng-click="clickSeat('D34')">D34</div></li>
            <li class="seat"><div id="D35" ng-click="clickSeat('D35')">D35</div></li>
            <li class="seat"><div id="D36" ng-click="clickSeat('D36')">D36</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D37" ng-click="clickSeat('D37')">D37</div></li>
            <li class="seat"><div id="D38" ng-click="clickSeat('D38')">D38</div></li>
            <li class="seat"><div id="D39" ng-click="clickSeat('D39')">D39</div></li>
            <li class="seat"><div id="D40" ng-click="clickSeat('D40')">D40</div></li>
            <li class="seat"><div id="D41" ng-click="clickSeat('D41')">D41</div></li>
            <li class="seat"><div id="D42" ng-click="clickSeat('D42')">D42</div></li>
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
<script src="assets/js/seat-chart-app-d1.js"></script>
</body>
</html>