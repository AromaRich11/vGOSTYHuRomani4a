<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
        <link href="/template/css_header/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/template/js_header/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="/template/css_header/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <!-- for bootstrap working -->
            <script type="text/javascript" src="/template/js_header/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <!-- cart -->
            <script src="/template/js_header/simpleCart.min.js"> </script>
        <!-- cart -->
        <link rel="stylesheet" href="/template/css_header/flexslider.css" type="text/css" media="screen" />
    </head>

    <body>
        <div class="page-wrapper">
            <header id="header"><!--header-->
                    <!-- header-section-starts -->
            <div class="header">
                <div class="header-top-strip">
                    <div class="container">
                        <div class="header-top-left">
                            <ul>
                                <?php if (User::isGuest()): ?>
                                <li><a href="/user/login/"><span class="glyphicon glyphicon-lock"> </span>вход</a></li>
                                <li><a href="/user/register/"><span class="glyphicon glyphicon-user"> </span>Регистрация</a></li>
                                <?php else: ?>
                                <li><a href="/cabinet/" ><span class="glyphicon glyphicon-user"> </span>Аккаунт</a></li>
                                <li><a href="/user/logout/"><span class="glyphicon glyphicon-lock"> </span>выход</a></li> 
                                <?php endif; ?>         
                            </ul>
                            <ul>
                                <li><a href="#"><i class="fa fa-phone"></i> +7(985)871-94-85</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> romanbi4-2011@mail.ru</a></li>
                            </ul>
                        </div>
                        <div class="header-right">
                                    <a href="/cart/">
                                        <h3>  <img src="/template/images_header/bag.png" alt="">  <a href="/cart/" class="simpleCart_empty">Корзина 
                                        (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)</a></h3>
                                    </a>    
                                <div class="clearfix"> </div>
                            </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>

            
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
                    <a href="/"><img src="/template/images/home/logotip.png" alt="" /></a>
                </div>
                </div>

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        <li><a href="/">Главная</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Магазин <b class="caret"></b></a>
                                <ul role="menu" class="sub-menu dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h3>Каталог</h>
                                                <?php foreach ($categories as $categoryItem): ?>
                                                    <li>
                                                        <a href="/category/<?php echo $categoryItem['id']; ?>"
                                                        class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
                                                        >                                                                                    
                                                        <?php echo $categoryItem['name']; ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                                <li><a href="/cart/">Корзина</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                                <li><a href="/about/">О магазине</a></li>
                                <li><a href="/contacts/">Контакты</a></li>
                        </ul>
                    </div>
                </div><!--header-bottom-->
            </div>
            </nav>
            </div>
            </header><!--/header-->