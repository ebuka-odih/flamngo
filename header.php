<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/bonx/bonx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 11:20:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bonx - Gaming Website Template HTML Version</title>
    <meta name="description" content="Bonx is a terrific esports website template with a slick and modern look.  It’s a robust gaming HTML template for bloggers and online gamers who want to share their enthusiasm for games on the internet."/>
    <meta name="keywords" content="	bootstrap, clean, esports, game, game portal, Game website, gamer, games, gaming, magazine, match, modern, online game, sport, sports">
    <meta name="author" content="Code Carnival">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/png">

    <!-- CSS 
    ========================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Metal+Mania&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="body__bg" data-bgimg="assets/img/bg/body-bg.webp">

    <!--header area start-->
    <header class="header_section header_transparent sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <a class="sticky_none" href="index.php">
                                <h3 style="font-weight: bolder; ">FLAMNGO</h3>
<!--                                <img aria-label="logo" width="215" height="79" src="assets/img/logo/logo.webp" alt="">-->
                            </a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block"> 
                            <nav>  
                                <ul class="d-flex">
                                    <li><a href="index.html">Home</a></li> 
                                    <li><a href="match.html">Match</a>
                                        <ul class="sub_menu">
                                            <li><a href="match.html">Match Page</a></li>
                                            <li><a href="match-details.html">Match Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub_menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="all-game.html">All Game</a></li>
                                            <li><a href="game-details.html">Game Details</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>
                                            <li><a href="players.html">Players</a></li>
                                            <li><a href="player-details.html">Player Details</a></li>
                                            <li><a href="registration.html">Sign Up</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-left-sidebar.html">blog</a>
                                        <ul class="sub_menu">
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
                                             <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                            <li><a href="blog-grid-without-sidebar.html">Blog Grid Without Sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>  
                            </nav>
                        </div>
                        <!--main menu end-->
                        <div class="header_right_sidebar d-flex align-items-center">
                            <div class="sing_up_btn">
                                <a class="btn btn-link" href="registration.html">SIGN UP <img width="15" height="15" src="assets/img/icon/arrrow-icon2.webp" alt=""> </a>
                            </div>
                            <div class="canvas_open">
                                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"><i class="icofont-navigation-menu"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->

    <!--offcanvas menu area start-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
        <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas_main_menu">
                <li class="menu-item-has-children active">
                    <a href="index.html">Home</a>
                </li>
                <li class="menu-item-has-children"><a href="#">Match</a>
                    <ul class="sub-menu">
                        <li><a href="match.html">Match Page</a></li>
                        <li><a href="match-details.html">Match Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="all-game.html">All Game</a></li>
                        <li><a href="game-details.html">Game Details</a></li>
                        <li><a href="faq.html">Faq Page</a></li>
                        <li><a href="players.html">Players</a></li>
                        <li><a href="player-details.html">Player Details</a></li>
                        <li><a href="registration.html">Sign Up</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="404.html">Error 404</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        <li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
                        <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                        <li><a href="blog-grid-without-sidebar.html">Blog Grid Without Sidebar</a></li>
                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                        <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!--offcanvas menu area end-->

 

   