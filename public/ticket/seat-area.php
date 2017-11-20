<html ng-app="ticketApp">
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

<body ng-controller="ticketController">

<!-- Navigation
    ================================================== -->
<div class="container">
    <div class="row stage-area"><h2>舞台</h2></div>
    <div class="row">
        <div class="col-xs-6 area-a">
            <a href="sear-chart-a.html">
                <div class="area a text-center">
                    <h3>A区</h3>
                    <h5>票价：150元</h5>
                </div>
            </a>
        </div>
        <div class="col-xs-6 area-b">
            <a href="sear-chart-b.html">
                <div class="area b text-center">
                    <h3>B区</h3>
                    <h5>票价：150元</h5>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <a href="sear-chart-c.html">
                <div class="area c text-center">
                    <h3>C区</h3>
                    <h5>票价：150元</h5>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 area-d">
            <a href="sear-chart-d-1.html">
                <div class="area d text-center">
                    <h4>D1区</h4>
                    <h6>票价：150元</h6>
                </div>
            </a>
        </div>
        <div class="col-xs-4 area-d">
            <a href="sear-chart-d-2.html">
                <div class="area d text-center">
                    <h4>D2区</h4>
                    <h6>票价：150元</h6>
                </div>
            </a>
        </div>
        <div class="col-xs-4 area-d">
            <a href="sear-chart-d-3.html">
                <div class="area d text-center">
                    <h4>D3区</h4>
                    <h6>票价：150元</h6>
                </div>
            </a>
        </div>
    </div>
    <input type="hidden" value="<?php echo $_GET['amount']?>">
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>

<script src="assets/js/angular.min.js"></script>
<script type="text/javascript" src="assets/js/qrcode.min.js"></script>
<script src="assets/js/app.js"></script>

</body>

</html>