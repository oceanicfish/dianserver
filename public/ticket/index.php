<html ng-app="ticketApp">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>点点儿童剧团</title>
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

</head>

<body ng-controller="ticketController">

<!-- Navigation
    ================================================== -->
<div class="hero-background">
    <div>
        <img class="strips" src="assets/images/strips.png">
    </div>
    <div class="container">
        <div class="header-container header">
            <!--<a class="navbar-brand logo" href="#"> <img class="logo" src="assets/images/logo.svg"/> </a>-->
            <!--<div class="header-right">-->
            <!--<a class="navbar-item" href="#team">The Team</a>-->
            <!--<a class="navbar-item" href="#pricing">Pricing</a>-->
            <!--<a class="navbar-item" href="#features">Features</a>-->
            <!--</div>-->
        </div>
        <!--navigation-->

    </div><!--hero-background-->


    <!-- Pricing
      ================================================== -->
    <div id="pricing" class="pricing-background">

        <h2 class="pricing-section-header light text-center">《咕噜姆的奇幻旅程》</h2>

        <div class="pricing-table row">
            <div class="col-sm-4">
                <div class="plan">
                    <h3 class="plan-title light">单人票</h3>
                    <h4 class="plan-cost bold"> {{sum}}</h4>
                    <h3 class="monthly bold">
                        <label class="btn btn-small btn-default" ng-click="deleteOne()"><i class="fa fa-minus"></i> </label>
                        &nbsp;&nbsp; {{amount}} 张 &nbsp;&nbsp;
                        <label class="btn btn-small btn-default" ng-click="addOne()"><i class="fa fa-plus"></i> </label>
                    </h3>
                    <ul class="plan-features">
                        <li>
                            2017年6月5日 - 下午 16:00 ( <a href="#" class="text-danger">更改时间</a> )
                        </li>
                        <li>
                            铁西1905创意广场 ( <a href="#">地图</a> )
                        </li>
                    </ul>
                    <div class="plan-price-div text-center">
                        <div class="choose-plan-div">
<!--                            test-->
<!--                            <label>--><?php //echo $_GET['openID']?><!--</label>-->
                            <input type="hidden" name="hidden-openid" ng-model="myOpenID" ng-init="myOpenID='<?php echo $_GET['openID']?>'" value="<?php echo $_GET['openID']?>">
<!--                            <label>{{myOpenID}}</label>-->
                            <label class="plan-btn light" ng-click="buy()">
                                确认支付
                            </label>
                        </div>
                    </div>
                </div><!--basic-plan--->
            </div><!--col-->

        </div>  <!--pricing-table-->

    </div><!--pricing-background-->

    <!-- Footer
      ================================================== -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 webscope">
                    <span class="webscope-text"> 点点儿童剧团 diandianplay.cn </span>
                </div>
                <!--webscope-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--footer-->
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