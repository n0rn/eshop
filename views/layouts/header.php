<!DOCTYPE html>
<html>
<head>
    <title>E Shop | Home</title>
    <link href="/template/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/template/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/template/css/component.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--webfont-->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="/template/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <!-- cart -->
    <script src="/template/js/simpleCart.min.js"> </script>
    <!-- cart -->
    <link rel="stylesheet" href="/template/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
<!-- header-section-starts -->
<div class="header">
    <div class="header-top-strip">
        <div class="container">
            <div class="header-top-left">
                <ul>
                    <li><a href="/user/register"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>
                    <?php if(User::isGuest()) :?>
                    <li><a href="/user/login"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
                    <?php else :?>
                        <li><a href="/cabinet/"><span class="glyphicon glyphicon-user"> </span> Account</a></li>
                    <li><a href="/user/logout"><span class="glyphicon glyphicon-log-out"> </span> Logout</a></li>
                    <?php endif;?>
                </ul>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="/template/images/bag.png" alt=""></h3>
                    </a>
                    <p><a href="/cart/" class="simpleCart_empty">Empty cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- header-section-ends -->
<div class="banner-top">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1><a href="/"><span>E</span> -Shop</a></h1>
                </div>
            </div>
            <!--/.navbar-header-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Главная</a></li>
                    <li class="dropdown">
                        <a href="/category/" class="dropdown-toggle" data-toggle="dropdown">Категории<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <?php foreach ($categories as $category): ?>
                                        <li><a href="/category/<?php echo $category['id'];?>"><?php echo $category['name'];?></a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="typography.html">TYPO</a></li>
                    <li><a href="/contacts/">Контакты</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
</div>
