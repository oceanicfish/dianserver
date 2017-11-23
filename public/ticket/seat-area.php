<html ng-app="seatAreaApp">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>座位区域图</title>
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>
    <link rel="stylesheet" href="assets/css/seat-area.css"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

</head>

<body ng-controller="seatAreaController">

<!-- Navigation
    ================================================== -->
<div class="container">
<!--    <input type="hidden" ng-model="ticket" ng-init="setTicketAmount(--><?php //echo $_GET['ticket']?><!--)">-->
    <div class="row stage-area"><h2>舞台</h2></div>
    <div class="row">
        <div class="col-xs-6 area-a">
            <a href="seat-chart-a.php">
                <div class="area a text-center">
                    <h3>A区</h3>
                    <h6>票价：150元/座</h6>
                    <p>仅限儿童</p>
                </div>
            </a>
        </div>
        <div class="col-xs-6 area-b">
            <a href="seat-chart-b.php">
                <div class="area b text-center">
                    <h3>B区</h3>
                    <h6>票价：150元/座</h6>
                    <p>仅限儿童</p>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <a href="seat-chart-c.php">
                <div class="area c text-center">
                    <h3>C区</h3>
                    <h5>票价：100元/座</h5>
                    <p>家长可以陪伴孩子坐在此区域</p>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 area-d">
            <a href="seat-chart-d1.php">
                <div class="area d text-center">
                    <h4>D1区</h4>
                    <h6>票价：50元</h6>
                    <p>家长区</p>
                </div>
            </a>
        </div>
        <div class="col-xs-4 area-d">
            <a href="seat-chart-d2.php">
                <div class="area d text-center">
                    <h4>D2区</h4>
                    <h6>票价：50元</h6>
                    <p>家长区</p>
                </div>
            </a>
        </div>
        <div class="col-xs-4 area-d">
            <a href="seat-chart-d3.php">
                <div class="area d text-center">
                    <h4>D3区</h4>
                    <h6>票价：50元</h6>
                    <p>家长区</p>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container text-center" style="padding-top: 5px;">
    <p>您可以选<span style="font-size: 20px;">{{availableSeatsAmount}}</span>个<span class="text-danger">座位</span> </p>
</div>

<div class="row text-center bg-info buy"><a href="panda.php">返回购票页</a></div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>

<script src="assets/js/angular.min.js"></script>
<script type="text/javascript" src="assets/js/angular-cookies.min.js"></script>
<script type="text/javascript" src="assets/js/qrcode.min.js"></script>
<script src="assets/js/seat-area-app.js"></script>

</body>

</html>