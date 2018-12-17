<!DOCTYPE html>
<html lang="en">
<head>
    <title>KPSG - Karachi Parents School Guide</title>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KSPG Karachi Parents School Guide | Search and Register Your Self">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URI?>styles/bootstrap4/bootstrap.min.css">
    <link href="<?php echo BASE_URI?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URI?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URI?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URI?>plugins/OwlCarousel2-2.2.1/animate.css">
    <?php echo (isset($headcss))? $headcss : ""; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URI?>styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URI?>styles/responsive.css">
    <link href='<?php echo BASE_URI?>styles/fontawesome-stars.css' rel='stylesheet' type='text/css'>


</head>
<body>
<div class="super_container">
    <header class="header">

        <!-- Top Bar -->
        <div class="top_bar">
            <div class="top_bar_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                <ul class="top_bar_contact_list">
                                    <li><div class="question">Have any questions?</div></li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <div> <?php  echo PORTAL_PHONE ?></div>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <div> <?php  echo PORTAL_EMAIL?></div>
                                    </li>
                                </ul>
                                <div class="top_bar_login ml-auto">


                                        <?php if(!isset($_SESSION['user_type'])):?>
                                        <div class="login_button">
                                            <a href="<?php echo BASE_URI?>login"><i class="fa fa-user"></i> Register</a> |
                                            <a href="<?php echo BASE_URI?>login"><i class="fa fa-sign-in"></i> Login</a>
                                        </div>
                                        <?php else: ?>
                                            Welcome <?php  echo $_SESSION['first_name'] ?>  <?php  echo $_SESSION['last_name'] ?>
                                             | <a href="<?php echo BASE_URI ?>logout" style="color:#fff;"><i class="fa fa-sign-out"></i> Logout</a>

                                        <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Content -->
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start row">
                            <div class="logo_container col-sm-3">
                                <a href="<?php echo BASE_URI?>">
                                    <div class="logo_text "><span><img src="<?php echo BASE_URI?>images/kpsg-logo.png " alt="Karachi Parents Schools Guide" width="65%" /></span></div>
                                </a>
                            </div>
                            <nav class="main_nav_contaner ml-auto col-sm-9 pull-right text-right">
                                <ul class="main_nav">
                                    <li><a href="about.html">Schools</a></li>
                                    <li><a href="about.html">Jobs</a></li>
                                    <li><a href="about.html">Worksheets</a></li>
                                    <li><a href="about.html">Building Character</a></li>
                                    <li><a href="about.html">Back to Schools</a></li>

                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Search Panel -->
       <!-- <div class="header_search_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="kpsg-serach-box">
                            <form action="#" class="header_search_form">
                                <input type="search" class="search_input" placeholder="Search" required="required">
                                <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>-->
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.html">Home</a></li>
                <li class="menu_mm"><a href="#">About</a></li>
                <li class="menu_mm"><a href="#">Courses</a></li>
                <li class="menu_mm"><a href="#">Blog</a></li>
                <li class="menu_mm"><a href="#">Page</a></li>
                <li class="menu_mm"><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
