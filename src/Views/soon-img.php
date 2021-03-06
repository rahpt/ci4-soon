<?php
$pageTitle = 'Sssoon Page';
$mainImg = '/assets/img/default.jpg';
$title = 'Sssoon';
$description = 'Find the best Bootstrap 3 freebies and themes on the web.';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <title><?= $pageTitle ?></title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="/assets/css/coming-sssoon.css" rel="stylesheet"/>
    <!--     Fonts     -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/assets/img/flags/US.png"/>
                        English(US)
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><img src="/assets/img/flags/DE.png"/> Deutsch</a></li>
                        <li><a href="#"><img src="/assets/img/flags/GB.png"/> English(UK)</a></li>
                        <li><a href="#"><img src="/assets/img/flags/FR.png"/> Fran??ais</a></li>
                        <li><a href="#"><img src="/assets/img/flags/RO.png"/> Rom??n??</a></li>
                        <li><a href="#"><img src="/assets/img/flags/IT.png"/> Italiano</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><img src="/assets/img/flags/ES.png"/> Espa??ol <span class="label label-default">soon</span></a></li>
                        <li><a href="#"><img src="/assets/img/flags/BR.png"/> Portugu??s <span class="label label-default">soon</span></a></li>
                        <li><a href="#"><img src="/assets/img/flags/JP.png"/> ????????? <span class="label label-default">soon</span></a></li>
                        <li><a href="#"><img src="/assets/img/flags/TR.png"/> T??rk??e <span class="label label-default">soon</span></a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#"> 
                    <i class="fa fa-facebook-square"></i>
                    Share
                </a>
            </li>
             <li>
                <a href="#"> 
                    <i class="fa fa-twitter"></i>
                    Tweet
                </a>
            </li>
             <li>
                <a href="#"> 
                    <i class="fa fa-envelope-o"></i>
                    Email
                </a>
            </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('<?= $mainImg ?>')">
    <div class="cover black" data-color="black"></div>
    <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->
    <div class="container">
        <h1 class="logo cursive">
            <?= $title ?>
        </h1>
        <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
        <div class="content">
            <h4 class="motto"><?= $description ?></h4>
            <div class="subscribe">
                <h5 class="info-text">
                    Join the waiting list for the beta. We keep you posted.
                </h5>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control transparent" placeholder="Your email here...">
                            </div>
                            <button type="submit" class="btn btn-danger btn-fill">Notify Me</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            Made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>. Free
            download <a href="https://www.creative-tim.com/product/coming-sssoon-page">here.</a>
        </div>
    </div>
</div>
</body>
<script src="/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>