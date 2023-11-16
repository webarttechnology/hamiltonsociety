<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../apple-icon-72x72.html">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../apple-icon-152x152.html">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png">
<link rel="manifest" href="https://html.designingmedia.com/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/mobile.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="home-header-section">
        <header class="header">
            <div class="main-header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a class="navbar-brand mr-0" href="<?php echo get_site_url(); ?>">
                          <img src="<?php echo get_field('logo',52); ?>" alt="" class="img-fluid" style="width:125px;">
                          <!-- <h1 style="font-size:30px;color:#fff;margin:0;">LOGO HERE</h1> -->
                        </a>
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon navbar-toggler-icon2"></span>
                            <span class="navbar-toggler-icon navbar-toggler-icon2"></span>
                            <span class="navbar-toggler-icon navbar-toggler-icon2"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                	<?php wp_nav_menu( array('menu' => 'Header_Menu', 'container' => '', 'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>' )); ?>
                                    <!-- <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown sancare-li-color active">
                                            <a class="nav-link active text-white" href="index.php">Home</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link text-decoration-none navbar-text-color index2-navlink text-white" href="#">Supportive Services</a>
                                          <div class="service-menu">
                                            <a class="dropdown-item" href="low-income.php">Transitional/Low Income Housing</a>
                                            <a class="dropdown-item" href="benefit.php">Benefit Enrollment Assistance</a>
                                            <a class="dropdown-item" href="counselling.php">Counselling</a>
                                            <a class="dropdown-item" href="education.php">Continue Education</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link text-decoration-none navbar-text-color index2-navlink text-white" href="#">Program</a>
                                          <div class="service-menu">
                                            <a class="dropdown-item" href="housing.php">Hamilton Society Housing Program</a>
                                            <a class="dropdown-item" href="rental.php">Rental Assistance Program</a>
                                            </div>
                                        </li>
                                       <li class="nav-item">
                                        <a class="nav-link text-decoration-none navbar-text-color index2-navlink text-white" href="about.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-decoration-none navbar-text-color index2-navlink text-white" href="our-care.php">Our Care</a>
                                    </li>
                                       <li class="nav-item">
                                        <a class="nav-link text-decoration-none navbar-text-color index2-navlink text-white" href="demographic.php">Demographics We Serve</a>
                                   </li>
                                        
                                    </ul> -->
                            </div>
                    </nav>
                </div>
            </div>
        </header>
