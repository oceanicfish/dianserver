<!DOCTYPE html>
<html lang="en" ng-app="seatChartApp_D3">
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
<body ng-controller="seatChartController_D3">
<div class="container">
    <div class="container text-center"><h2 class="area-title">D1 区</h2></div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D113" ng-click="clickSeat('D113')">D113</div></li>
            <li class="seat"><div id="D114" ng-click="clickSeat('D114')">D114</div></li>
            <li class="seat"><div id="D115" ng-click="clickSeat('D115')">D115</div></li>
            <li class="seat"><div id="D116" ng-click="clickSeat('D116')">D116</div></li>
            <li class="seat"><div id="D117" ng-click="clickSeat('D117')">D117</div></li>
            <li class="seat"><div id="D118" ng-click="clickSeat('D118')">D118</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D119" ng-click="clickSeat('D119')">D119</div></li>
            <li class="seat"><div id="D120" ng-click="clickSeat('D120')">D120</div></li>
            <li class="seat"><div id="D121" ng-click="clickSeat('D121')">D121</div></li>
            <li class="seat"><div id="D122" ng-click="clickSeat('D122')">D122</div></li>
            <li class="seat"><div id="D123" ng-click="clickSeat('D123')">D123</div></li>
            <li class="seat"><div id="D124" ng-click="clickSeat('D124')">D124</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D125" ng-click="clickSeat('D125')">D125</div></li>
            <li class="seat"><div id="D126" ng-click="clickSeat('D126')">D126</div></li>
            <li class="seat"><div id="D127" ng-click="clickSeat('D127')">D127</div></li>
            <li class="seat"><div id="D128" ng-click="clickSeat('D128')">D128</div></li>
            <li class="seat"><div id="D129" ng-click="clickSeat('D129')">D129</div></li>
            <li class="seat"><div id="D130" ng-click="clickSeat('D130')">D130</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D131" ng-click="clickSeat('D131')">D131</div></li>
            <li class="seat"><div id="D132" ng-click="clickSeat('D132')">D132</div></li>
            <li class="seat"><div id="D133" ng-click="clickSeat('D133')">D133</div></li>
            <li class="seat"><div id="D134" ng-click="clickSeat('D134')">D134</div></li>
            <li class="seat"><div id="D135" ng-click="clickSeat('D135')">D135</div></li>
            <li class="seat"><div id="D136" ng-click="clickSeat('D136')">D136</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D137" ng-click="clickSeat('D137')">D137</div></li>
            <li class="seat"><div id="D138" ng-click="clickSeat('D138')">D138</div></li>
            <li class="seat"><div id="D139" ng-click="clickSeat('D139')">D139</div></li>
            <li class="seat"><div id="D140" ng-click="clickSeat('D140')">D140</div></li>
            <li class="seat"><div id="D141" ng-click="clickSeat('D141')">D141</div></li>
            <li class="seat"><div id="D142" ng-click="clickSeat('D142')">D142</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D143" ng-click="clickSeat('D143')">D143</div></li>
            <li class="seat"><div id="D144" ng-click="clickSeat('D144')">D144</div></li>
            <li class="seat"><div id="D145" ng-click="clickSeat('D145')">D145</div></li>
            <li class="seat"><div id="D146" ng-click="clickSeat('D146')">D146</div></li>
            <li class="seat"><div id="D147" ng-click="clickSeat('D147')">D147</div></li>
            <li class="seat"><div id="D148" ng-click="clickSeat('D148')">D148</div></li>
        </ul>
    </div>
    <div class="container text-center">
        <ul class="seat-chart">
            <li class="seat"><div id="D149" ng-click="clickSeat('D149')">D149</div></li>
            <li class="seat"><div id="D150" ng-click="clickSeat('D150')">D150</div></li>
            <li class="seat"><div id="D151" ng-click="clickSeat('D151')">D151</div></li>
            <li class="seat"><div id="D152" ng-click="clickSeat('D152')">D152</div></li>
            <li class="seat"><div id="D153" ng-click="clickSeat('D153')">D153</div></li>
            <li class="seat"><div id="D154" ng-click="clickSeat('D154')">D154</div></li>
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
<script src="assets/js/seat-chart-app-d3.js"></script>
</body>
</html>