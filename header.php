<?php include('admin/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>KFI REG D.I.Yogyakarta</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Unicat project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
        <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="styles/courses.css">
        <link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
    </head>
    <body>

        <div class="super_container">

            <!-- Header -->

            <header class="header">

                <!-- Top Bar -->
                <div class="top_bar">
                    <div class="top_bar_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                        <ul class="top_bar_contact_list">
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <div>0852 4263 3355</div>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <div>kfijogja@gmail.com</div>
                                            </li>
                                        </ul>
                                        <div class="top_bar_login ml-auto">
                                            <div class="login_button"><a href="#">Register or Login</a></div>
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
                                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="logo_container">
                                        <a href="#">
                                            <div class="logo_text">KFI<span>REG DIY</span></div>
                                        </a>
                                    </div>
                                    <nav class="main_nav_contaner ml-auto">
                                        <ul class="main_nav">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="lomba.php">Lomba</a></li>
                                            <li><a href="profil.php">Profil</a></li>
                                            <li><a href="about.php">About</a></li>
                                        </ul>
                                        <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header Search Panel -->
                <div class="header_search_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
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
                </div>			
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
                        <li class="menu_mm"><a href="home.php">Home</a></li>
                        <li class="menu_mm"><a href="lomba.php">Lomba</a></li>
                        <li class="menu_mm"><a href="profil.php">Profil</a></li>
                        <li class="menu_mm"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>