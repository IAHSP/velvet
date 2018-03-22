<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Velvet
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
    <meta name="keywords" content="IAHSP, Home Staging" />
    <meta name="description" content="IAHSP members serve using the principles, practices, and education of approved Home Staging courses and designations." />
    <meta name="Author" content="IAHSP.com" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/api/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/css/superslides.css" rel="stylesheet" type="text/css" />

    <!-- REVOLUTION SLIDER -->
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/slider.revolution.v4/css/settings.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/css/layout-responsive.css" rel="stylesheet" type="text/css" />
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/css/color_scheme/yellow.css" rel="stylesheet" type="text/css" /><!-- orange: default style -->

    <!-- Morenizr -->
    <script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/modernizr.min.js"></script>
	
	<!-- WordPress -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Top Bar -->
        <header id="topHead" class="color">
            <div class="container">
				<i class="fa fa-phone"></i> <a href="tel:8003927161">800-392-7161</a>
				&bull;&nbsp; <i class="fa fa-envelope-o"></i> <a class="hidden-xs" href="mailto:help@iahsp.com">Help@IAHSP.com</a>

				<!-- Member Login -->
				<div class="pull-right nav signin-dd">
					<a id="quick_sign_in" class="btn btn-default btn-xs" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i><span class="hidden-xs"> Sign In</span></a>

					<div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

						<h4>Sign In</h4>

						<!-- Sustains width of popup.  Does nothing else. -->
						<form role="form"></form>

						<hr />

						<!-- IAHSP President Login -->
						<a href="https://iahsp.com/login" class="btn-facebook fullwidth radius3"><i class="fa fa-user" aria-hidden="true"></i> Member Login</a>
						<a href="https://admin.iahsp.com/checkuser.php" target="_blank" class="btn-twitter fullwidth radius3"><i class="fa fa-external-link-square" aria-hidden="true"></i> President Login</a>

						<p class="bottom-create-account">
							<a href="https://iahsp.com/register">New Member Registration</a>
						</p>
					</div>
				</div>

				<!-- LINKS -->
				<div class="pull-right nav hidden-xs">
					<a href="https://www.facebook.com/InternationalAssociationofHomeStagingProfessionals/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
					<a href="https://plus.google.com/111999019043473881716" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
					<a href="https://iahspblog.com/blog/" target="_blank"><i class="fa fa-wordpress fa-lg"></i></a>
				</div>
				<!-- /LINKS -->
			</div>
					
        </header>
        <!-- /Top Bar -->

        <!-- TOP NAV -->
        <header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Logo text or image -->
                <a class="logo">
                    <img src="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/logo.jpg" width="120px" alt="IAHSP" />
                </a>

                <!-- Top Nav -->
                <div class="navbar-collapse nav-main-collapse collapse pull-right">
                    <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main scroll-menu" id="topMain">
                            <li><a href="https://iahsp.com/">HOME</a></li>
                            <li><a href="https://iahsp.com/join">JOIN</a></li>
                            <li><a href="https://iahsp.com/wwssw">WWSSW</a></li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    EVENTS <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Public Content -->
                                    <li><a href="https://iahspconexpo.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> 2018 IAHSP Conference</a></li>
                                    <li><a href="https://www.eventbrite.com/e/iahsp-midwest-regional-conference-tickets-36834420744" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> IAHSP Midwest Regional Conference</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
								<a class="dropdown-toggle" href="#">
									EDUCATION <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<!-- Public Content -->
                                    <li><a href="https://pages.iahsp.com/bts-designation-course"><i class="fa fa-external-link" aria-hidden="true"></i> Earn Your Buyer Trends Designation</a></li>
                                    <li><a href="https://pages.iahsp.com/fast-track"><i class="fa fa-external-link" aria-hidden="true"></i> FAST Track Designation</a></li>
								</ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    ABOUT <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Public Content -->
                                    <li><a href="https://iahsp.com/history"><i class="fa fa-info-circle" aria-hidden="true"></i> History</a></li>
                                    <li><a href="https://iahsp.com/board"><i class="fa fa-users" aria-hidden="true"></i> Board</a></li>
                                    <li><a href="https://pages.iahsp.com/contact/"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact</a></li>
                                </ul>
                            </li>
                            
                            <!-- Resources: Logged In -->
                            <li class="dropdown mega-menu-item mega-menu-fullwidth">
                                <a class="dropdown-toggle" href="#">
                                    <i class="fa fa-lock" aria-hidden="true"></i> RESOURCES <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="mega-menu-content">
                                            <div class="row">
																							
                                                <!-- PUBLIC Content -->
                                                <div class="col-md-4">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">Members Only</span>
                                                            <small>You need to sign in to view membership content.</small>
                                                            <ul class="sub-menu">
                                                                <li><a href="https://iahsp.com/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                                                                <li><a href="https://iahsp.com/register"><i class="fa fa-check" aria-hidden="true"></i> IAHSP Membership Registration</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">More IAHSP Resources</span>
                                                            <ul class="sub-menu">
                                                                <li><a href="http://www.iahspconexpo.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> 2018 IAHSP Conference</a></li>
                                                                <li><a href="https://iahspvendordirectory.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> IAHSP Vendor Directory</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /row -->
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /Top Nav -->

            </div>
        </header>
        <!-- /TOP NAV -->
