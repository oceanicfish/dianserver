<!DOCTYPE html>
<html lang="en" ng-app="ticketApp">
<head>
    <meta charset="UTF-8">
    <title>点点儿童剧团</title>
    <!--    very important for wechat X5 browser -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/ticket-style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>
<body ng-controller="ticketController">

    <div class="bg">

        <div class="text-area text-center">
            <h4 class="showname">《飞翔吧！潘达》</h4>
            <p class="text-danger">2017年12月17日 - 嘉里中心</p>
            <img src="assets/images/clipart-of-raffle-tickets-14.png" style="height: 100px;">
            <h6 style="padding-top: 15px;">亲子套票</h6>
            <p>(包含一张大人票和一张儿童票)</p>
            <div class="container text-center">
                <label class="btn btn-small btn-warning" ng-click="deleteOne()"><i class="fa fa-minus"></i> </label>
                &nbsp;&nbsp; {{amount}} 张 &nbsp;&nbsp;
                <label class="btn btn-small btn-primary" ng-click="addOne()"><i class="fa fa-plus"></i> </label>
            </div>
            <div class="container text-center">
                <label class="btn btn-small btn-success" ng-click="goSeatChart()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;开始选座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </div>
        </div>

        <div class="buy text-center">
            <input type="hidden" name="hidden-openid" ng-model="myOpenID" ng-init="myOpenID='<?php echo $_GET['openID']?>'" value="<?php echo $_GET['openID']?>">
            <span>确认购票</span>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="assets/js/angular.min.js"></script>
    <script type="text/javascript" src="assets/js/qrcode.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>