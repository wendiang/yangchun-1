<?php
require_once dirname(__FILE__) . '/config/config.php';
$title =  (isset($title)?$title .' - ':'') ."阳春";
if (!isset($keyword)){
    $keyword ="";
}
if (!isset($description)){
    $description ="";
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?=$title ?></title>
<meta name="description" content="<?=$description?>" />
<meta name="keywords" content="<?=$keyword?>" />

<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
 <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/public_css.css" />
<!--<link rel="stylesheet" href="css/site.css" />-->
<link rel="stylesheet" href="css/clock.css" />
<link rel="stylesheet" href="css/main-site.css" />

<script src="js/respond.js"></script>
<script src="js/html5.js"></script>

<!--jquery-->
<script type="text/javascript" src="js/Jq1.9.js"></script>
<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--unslider-->
<script type="text/javascript" src="js/unslider.js"></script>
<!--moment-->
<script type="text/javascript" src="js/moment.min.js"></script>

<!--自定义-->
<script type="text/javascript" src="js/web_home.js"></script>
<!--百度地图API-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=nop4rKvmf5EWs7MzLiZAFShTnk9ySlGs"></script>
</head>
<body class="">
    <!--头部导航 start -->
    <header class="yc-header">
        <nav id="w4" class="navbar-default yc-navbar-head navbar" role="navigation">
            <div class="container">
                <button type="button" class="navbar-toggle yc-navbar-toggle" data-toggle="collapse" data-target="#yc-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header">
                    <a class="navbar-brand yc-navbar-brand" href="index.php"><img src="images/city_logo.png" alt="返回首页"></a>
                </div>
                <div id="w4-collapse" class="collapse navbar-collapse">
                    <ul id="w5" class="navbar-nav navbar-right nav pull-right text-right">
                            <li><a href="#">注册</a></li>
                            <li><a href="#">登录</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav id="w7" class="yc-navbar-menu navbar-default navbar"
             role="navigation">
            <div class="container">
                <!--<div class="navbar-header">
                    <button type="button" class="navbar-toggle yc_navbar_type" data-toggle="collapse" data-target="#yc-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>-->

                <div id="yc-collapse" class="collapse navbar-collapse">
                    <ul id="w8" class="nav navbar-nav">
                        <li <?=$page=='index.php'?' class="active"':''?>><a href="index.php">概览</a></li>
                        <li class="dropdown <?=in_array($page,['device.php','client.php','model.php'])?'active':''?>">
                            <a class="dropdown-toggle" href="view.php" data-toggle="dropdown" >阳春八景<b class="caret"></b></a>
                            <ul id="w9" class="dropdown-menu city_menu">
                                <li><a href="view_1.php" tabindex="-1">凌霄秀色</a></li>
                                <li><a href="view_2.php" tabindex="-1">鹅凰飘瀑</a></li>
                                <li><a href="view_3.php" tabindex="-1">春湾奇观</a></li>
                                <li><a href="view_4.php" tabindex="-1">东湖春晓</a></li>
                                <li><a href="view_5.php" tabindex="-1">崆峒禅踪</a></li>
                                <li><a href="view_6.php" tabindex="-1">漠阳古韵</a></li>
                                <li><a href="view_7.php" tabindex="-1">春都氡泉</a></li>
                                <li><a href="view_8.php" tabindex="-1">凤凰朝阳</a></li>
                            </ul></li>
                        <li <?=$page=='view_2.php'?' class="active"':''?>><a href="#">阳春特产</a></li>
                        <li <?=$page=='view_3.php'?' class="active"':''?>><a href="#">阳春美食</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="input-group input-group-md nav_search_box">
                            <input type="text" class="form-control nav_search" id="search-input" placeholder="百度搜索...">
                            <a class="input-group-btn search_btn">
								<button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
							</a>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!--头部导航 end-->
