<!DOCTYPE html>
<html lang="en" ng-app="seatChartApp_C">
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
<body ng-controller="seatChartController_C">
<div class="container">
    <div class="container text-center"><h2 class="area-title">C 区</h2></div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat area-c-d2"><div id="C1" ng-click="clickSeat('C1')">C1</div></li>
            <li class="seat area-c-d2"><div id="C2" ng-click="clickSeat('C2')">C2</div></li>
            <li class="seat area-c-d2"><div id="C3" ng-click="clickSeat('C3')">C3</div></li>
            <li class="seat area-c-d2"><div id="C4" ng-click="clickSeat('C4')">C4</div></li>
            <li class="seat area-c-d2"><div id="C5" ng-click="clickSeat('C5')">C5</div></li>
            <li class="seat area-c-d2"><div id="C6" ng-click="clickSeat('C6')">C6</div></li>
            <li class="seat area-c-d2"><div id="C7" ng-click="clickSeat('C7')">C7</div></li>
            <li class="seat area-c-d2"><div id="C8" ng-click="clickSeat('C8')">C8</div></li>
            <li class="seat area-c-d2"><div id="C9" ng-click="clickSeat('C9')">C9</div></li>
            <li class="seat area-c-d2"><div id="C10" ng-click="clickSeat('C10')">C10</div></li>

        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat area-c-d2"><div id="C11" ng-click="clickSeat('C11')">C11</div></li>
            <li class="seat area-c-d2"><div id="C12" ng-click="clickSeat('C12')">C12</div></li>
            <li class="seat area-c-d2"><div id="C13" ng-click="clickSeat('C13')">C13</div></li>
            <li class="seat area-c-d2"><div id="C14" ng-click="clickSeat('C14')">C14</div></li>
            <li class="seat area-c-d2"><div id="C15" ng-click="clickSeat('C15')">C15</div></li>
            <li class="seat area-c-d2"><div id="C16" ng-click="clickSeat('C16')">C16</div></li>
            <li class="seat area-c-d2"><div id="C17" ng-click="clickSeat('C17')">C17</div></li>
            <li class="seat area-c-d2"><div id="C18" ng-click="clickSeat('C18')">C18</div></li>
            <li class="seat area-c-d2"><div id="C19" ng-click="clickSeat('C19')">C19</div></li>
            <li class="seat area-c-d2"><div id="C20" ng-click="clickSeat('C20')">C20</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat area-c-d2"><div id="C21" ng-click="clickSeat('C21')">C21</div></li>
            <li class="seat area-c-d2"><div id="C22" ng-click="clickSeat('C22')">C22</div></li>
            <li class="seat area-c-d2"><div id="C23" ng-click="clickSeat('C23')">C23</div></li>
            <li class="seat area-c-d2"><div id="C24" ng-click="clickSeat('C24')">C24</div></li>
            <li class="seat area-c-d2"><div id="C25" ng-click="clickSeat('C25')">C25</div></li>
            <li class="seat area-c-d2"><div id="C26" ng-click="clickSeat('C26')">C26</div></li>
            <li class="seat area-c-d2"><div id="C27" ng-click="clickSeat('C27')">C27</div></li>
            <li class="seat area-c-d2"><div id="C28" ng-click="clickSeat('C28')">C28</div></li>
            <li class="seat area-c-d2"><div id="C29" ng-click="clickSeat('C29')">C29</div></li>
            <li class="seat area-c-d2"><div id="C30" ng-click="clickSeat('C30')">C30</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat area-c-d2"><div id="C31" ng-click="clickSeat('C31')">C31</div></li>
            <li class="seat area-c-d2"><div id="C32" ng-click="clickSeat('C32')">C32</div></li>
            <li class="seat area-c-d2"><div id="C33" ng-click="clickSeat('C33')">C33</div></li>
            <li class="seat area-c-d2"><div id="C34" ng-click="clickSeat('C34')">C34</div></li>
            <li class="seat area-c-d2"><div id="C35" ng-click="clickSeat('C35')">C35</div></li>
            <li class="seat area-c-d2"><div id="C36" ng-click="clickSeat('C36')">C36</div></li>
            <li class="seat area-c-d2"><div id="C37" ng-click="clickSeat('C37')">C37</div></li>
            <li class="seat area-c-d2"><div id="C38" ng-click="clickSeat('C38')">C38</div></li>
            <li class="seat area-c-d2"><div id="C39" ng-click="clickSeat('C39')">C39</div></li>
            <li class="seat area-c-d2"><div id="C40" ng-click="clickSeat('C40')">C40</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat area-c-d2"><div id="C41" ng-click="clickSeat('C41')">C41</div></li>
            <li class="seat area-c-d2"><div id="C42" ng-click="clickSeat('C42')">C42</div></li>
            <li class="seat area-c-d2"><div id="C43" ng-click="clickSeat('C43')">C43</div></li>
            <li class="seat area-c-d2"><div id="C44" ng-click="clickSeat('C44')">C44</div></li>
            <li class="seat area-c-d2"><div id="C45" ng-click="clickSeat('C45')">C45</div></li>
            <li class="seat area-c-d2"><div id="C46" ng-click="clickSeat('C46')">C46</div></li>
            <li class="seat area-c-d2"><div id="C47" ng-click="clickSeat('C47')">C47</div></li>
            <li class="seat area-c-d2"><div id="C48" ng-click="clickSeat('C48')">C48</div></li>
            <li class="seat area-c-d2"><div id="C49" ng-click="clickSeat('C49')">C49</div></li>
            <li class="seat area-c-d2"><div id="C50" ng-click="clickSeat('C50')">C50</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">

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
<script src="assets/js/seat-chart-app-c.js"></script>
</body>
</html>