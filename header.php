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
    <link rel="icon" type="image/png" sizes="192x192" href="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/favicons/android-icon-192x192.png">
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
    <link href="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/css/color_scheme/yellow.css" rel="stylesheet" type="text/css" />
    <!-- orange: default style -->

    <!-- Morenizr -->
    <script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/modernizr.min.js"></script>

    <!-- WordPress -->
    <?php wp_head(); ?>
    
  </head>

  <body <?php body_class(); ?>>
    <!-- Top Bar -->
    <header id="topHead" class="color">
      <div class="container">
        <i class="fa fa-phone"></i> <a href="tel:8003927161">800-392-7161</a> &bull;&nbsp; <i class="fa fa-envelope-o"></i> <a class="hidden-xs" href="mailto:help@iahsp.com">Help@IAHSP.com</a>

        <!-- Member Login -->
        <?php if ($_SERVER["SERVER_NAME"] === "pages.iahsp.com") { ?>
        <div class="pull-right nav signin-dd">
          <a id="quick_sign_in" class="btn btn-default btn-xs" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i><span class="hidden-xs"> Profile Menu</span></a>

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
        <?php } else { ?>
        <div class="pull-right nav signin-dd">
          <a id="quick_sign_in" class="btn btn-default btn-xs" href="https://iahsp.com" target="_blank"><i class="fa fa-user fa-lg"></i><span class="hidden-xs"> Visit IAHSP.com</span></a>
        </div>
        <?php } ?>

        <!-- LINKS -->
        <div class="pull-right nav hidden-xs">
          <a href="https://www.facebook.com/InternationalAssociationofHomeStagingProfessionals/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
          <a href="https://iahspblog.com/blog/" target="_blank"><i class="fa fa-wordpress fa-lg"></i></a>
        </div>
        <!-- /LINKS -->
      </div>
    </header>
    <!-- /Top Bar -->

    <!-- TOP NAV -->
    <header id="topNav" class="topHead">
      <!-- remove class="topHead" if no topHead used! -->
      <div class="container">

        <!-- Mobile Menu Button -->
        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

        <!-- Logo text or image -->
        <a href="https://www.iahsp.com" class="logo">
                    <img src="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/logo.jpg" width="120px" alt="IAHSP" />
                </a>

        <!-- Top Nav -->
        <div class="navbar-collapse nav-main-collapse collapse pull-right">
          <nav class="nav-main mega-menu">
            <?php if ($_SERVER["SERVER_NAME"] === "pages.iahsp.com") { ?>
            <ul class="nav nav-pills nav-main scroll-menu" id="topMain">

          <!-- Members: Logged In -->
          <li class="dropdown mega-menu-item mega-menu-fullwidth">
            <a class="dropdown-toggle padding-right-8" href="#">
              MEMBERS <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="mega-menu-content">
                  <div class="row">

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li><a href="https://iahsp.com/directory"><i class="fa fa-user" aria-hidden="true"></i>Members Directory Listing</a></li>
                        <li><a href="https://iahsp.com/directory-map"><i class="fa fa-globe" aria-hidden="true"></i>Members Map</a></li>
                      </ul>
                    </div>

                    <!-- Not Logged In -->
                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <span class="mega-menu-sub-title">Members Only</span>
                          <small>You need to sign in to view membership content.</small>
                          <ul class="sub-menu">
                            <li><a href="https://iahsp.com/login"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
                            <li><a href="https://iahsp.com/register"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP Membership Registration</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <span class="mega-menu-sub-title">More IAHSP<sup>&reg;</sup> Resources</span>
                          <ul class="sub-menu">
                            <li><a href="https://iahsp.com/#blog"><i class="fa fa-rss" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> News</a></li>
                            <li><a href="https://pages.iahsp.com/iahsp-wholesale-buying-program/"><i class="fa fa-shopping-cart" aria-hidden="true"></i> IAHSP<sup>&reg;</sup> Wholesale Buying Program</a></li>
                            <li><a href="https://pages.iahsp.com/home-staging-statistics/"><i class="fa fa-line-chart" aria-hidden="true"></i>Home Staging Statistics</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>

                    <div class="clearfix space-bottom-15 hidden-xs"></div>

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <span class="mega-menu-sub-title">Affiliate Associations</span>
                          <ul class="sub-menu">
                            <div class="col-md-6">
                              <li><a href="https://iahspeurope.com/home-stagers/italy/" target="_blank" rel="noopener"><i class="fa fa-flag" aria-hidden="true"></i>Italy</a></li>
                              <li><a href="https://iahspeurope.com/home-stagers/france/" target="_blank" rel="noopener"><i class="fa fa-flag" aria-hidden="true"></i>France</a></li>
                              <li><a href="https://iahspeurope.com/home-stagers/spain/" target="_blank" rel="noopener"><i class="fa fa-flag" aria-hidden="true"></i>Spain</a></li>
                              <li><a href="https://iahspeurope.com/home-stagers/united-kingdom/" target="_blank" rel="noopener"><i class="fa fa-flag" aria-hidden="true"></i>UK</a></li>
                            </div>

                            <div class="col-md-6">
                              <li><a href="https://iahspeurope.com/home-stagers/germany/" target="_blank" rel="noopener"><i class="fa fa-flag" aria-hidden="true"></i>Germany</a></li>
                              <li><a href="https://iahspeurope.com/home-stagers/austria/" target="_blank" rel="noopener"><i class="fa fa-flag" aria-hidden="true"></i>Austria</a></li>
                              <li><a href="https://iahspeurope.com/home-stagers/switzerland/" target="_blank" rel="noopener"><i class="fa fa-flag" aria-hidden="true"></i>Switzerland</a></li>
                            </div>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div><!-- /row -->
                </div>
              </li>
            </ul>
          </li>

          <li [routerLinkActive]="['active']" class="dropdown mega-menu-item">
            <a class="dropdown-toggle" href="#">
              JOIN <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="mega-menu-content">
                  <ul class="sub-menu">
                    <li>
                      <span class="mega-menu-sub-title">IAHSP<sup>&reg;</sup> North America</span>
                      <ul class="sub-menu">
                        <li><a href="https://iahsp.com/canada/register"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Canada</a></li>
                        <li><a href="https://iahsp.com/join"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> United States</a></li>
                      </ul>
                      <span class="mega-menu-sub-title">IAHSP<sup>&reg;</sup> International</span>
                      <ul class="sub-menu">
                        <li><a href="https://iahsp.com/australia/register"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Australia</a></li>
                        <li><a href="https://iahsp.com/brazil/register/create"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Brazil</a></li>
                        <li><a href="https://www.iahspeurope.com/join/" target="_blank" rel="noopener"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Europe</a></li>
                        <li><a href="https://iahsp.com/israel/register"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Israel</a></li>
                        <li><a href="https://iahsp.com/japan/register"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Japan</a></li>
                        <li><a href="https://iahsp.com/latin-america/register"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Latin America</a></li>
                        <li><a href="https://iahsp.com/russia/register"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Russia</a></li>
                        <li><a href="https://iahsp.com/south-africa/register"><i class="fa fa-user-plus" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> South Africa</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>

          <li><a href="https://iahsp.com/events">CALENDAR</a></li>

          <!-- Events -->
          <li class="dropdown mega-menu-item mega-menu-fullwidth">
            <a class="dropdown-toggle padding-right-8" href="#">
              EVENTS <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="mega-menu-content">
                  <div class="row">

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li><a href="https://iahspconexpo.com/" target="_blank" rel="noopener"><i class="fa fa-globe" aria-hidden="true"></i>2021 IAHSP<sup>&reg;</sup> Conference Expo</a></li>
                        <li><a href="https://iahspvirtualconexpo.com/" target="_blank" rel="noopener"><i class="fa fa-globe" aria-hidden="true"></i>2020 IAHSP<sup>&reg;</sup> Virtual Conference &amp; Expo</a></li>
                        <li><a href="https://iahspconexpo.com/2019" target="_blank" rel="noopener"><i class="fa fa-globe" aria-hidden="true"></i>2019 IAHSP<sup>&reg;</sup> Conference Expo</a></li>
                        <li><a href="https://iahspconexpo.com/2018" target="_blank" rel="noopener"><i class="fa fa-globe" aria-hidden="true"></i>2018 IAHSP<sup>&reg;</sup> Conference Expo</a></li>
                        <li><a href="https://iahsp.com/wholesale-market-experience"><i class="fa fa-calendar-o" aria-hidden="true"></i>Shop Wholesale Markets</a></li>
                      </ul>
                    </div>

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <span class="mega-menu-sub-title">AWARDS</span>
                          <ul class="sub-menu">
                              <li><a href="https://iahsp.com/staging-industry-awards"><i class="fa fa-star" aria-hidden="true"></i>Staging Industry Awards</a></li>                            
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div><!-- /row -->
                </div>
              </li>
            </ul>
          </li>

          <!-- Education -->
          <li class="dropdown mega-menu-item mega-menu-fullwidth">
            <a class="dropdown-toggle padding-right-8" href="#">
              EDUCATION <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="mega-menu-content">
                  <div class="row">

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <ul class="sub-menu">
                            <li><a href="https://pages.iahsp.com/about_accreditations/"><i class="fa fa-star" aria-hidden="true"></i>About Accreditations</a></li>
                            <li><a href="https://iahsp.com/advanced-stager-training"><i class="fa fa-star" aria-hidden="true"></i>Advanced Stager Training</a></li>
                            <li><a href="https://pages.stagedhomes.com/become-a-master-stager/" target="_blank" rel="noopener"><i class="fa fa-bullhorn" aria-hidden="true"></i>ASPM Course Promo</a></li>
                            <li><a href="https://pages.iahsp.com/add-home-staging-to-design-business/"><i class="fa fa-home" aria-hidden="true"></i>Adding Home Staging to a Design Business</a></li>
                            <li><a href="https://iahsp.com/buyer-trends-specialist"><i class="fa fa-book" aria-hidden="true"></i>Buyer Trends Designation</a></li>
                            <li><a href="https://coloranddesignforstagers.com/" target="_blank" rel="noopener noreferrer"><i class="fa fa-paint-brush" aria-hidden="true"></i>Color and Design Principles for Stagers</a></li>
                            <li><a href="https://pages.iahsp.com/confident-color-system-course/"><i class="fa fa-paint-brush" aria-hidden="true"></i>Confident Color System Course</a></li>                                                                            
                          </ul>
                        </li>
                      </ul>
                    </div>

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <ul class="sub-menu">                            
                            <li><a href="https://iahsp.com/cultural-diversity-expert"><i class="fa fa-user" aria-hidden="true"></i>Cultural Diversity Expert</a></li>                            
                            <li><a href="https://iahsp.com/financial-and-business-planning-webinar"><i class="fa fa-book" aria-hidden="true"></i>Financial &amp; Business Planning Webinar</a></li>
                            <li><a href="https://iahsp.com/members/fast-track"><i class="fa fa-book" aria-hidden="true"></i>Focused Accelerated Stager Training</a></li>
                            <li><a href="https://pages.iahsp.com/iahsp-approved-courses/"><i class="fa fa-book" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Approved Home Staging Courses</a></li>
                            <li><a href="https://pages.iahsp.com/iahsp-coaching-program/"><i class="fa fa-book" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Coaching Program</a></li>
                            <li><a href="https://iahsp.com/investor-staging-consultant"><i class="fa fa-book" aria-hidden="true"></i>Investor Staging Consultant</a></li>
                            
                          </ul>
                        </li>
                      </ul>
                    </div>

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <ul class="sub-menu">
                            <li><a href="https://pages.iahsp.com/iahsp-messages-for-motivation/"><i class="fa fa-comment" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Motivational Messages</a></li>
                            <li><a href="https://iahsp.com/luxury-home-staging-webinar"><i class="fa fa-book" aria-hidden="true"></i>Luxury Home Staging Webinar</a></li>
                            <li><a href="https://pages.iahsp.com/photographyforhomestagersandrealtors/"><i class="fa fa-camera" aria-hidden="true"></i>Photography Course</a></li>
                            <li><a href="https://iahsp.com/pricing-strategies-for-home-stagers"><i class="fa fa-usd" aria-hidden="true"></i>Pricing Strategies for Home Stagers</a></li>
                            <li><a href="https://iahsp.com//senior-staging-specialist"><i class="fa fa-home" aria-hidden="true"></i>Senior Staging Specialist</a></li>
                            <li><a href="https://iahsp.com/short-term-rental-specialist"><i class="fa fa-sticky-note" aria-hidden="true"></i>Short Term Rental Specialist</a></li>                  
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div><!-- /row -->
                </div>
              </li>
            </ul>
          </li>

          <!-- About -->
          <li class="dropdown mega-menu-item mega-menu-fullwidth">
            <a class="dropdown-toggle padding-right-8" href="#">
              ABOUT <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="mega-menu-content">
                  <div class="row">

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <ul class="sub-menu">
                            <li><a href="https://pages.iahsp.com/about_accreditations/"><i class="fa fa-star" aria-hidden="true"></i>About Accreditations</a></li>
                            <li><a href="https://iahsp.com/board"><i class="fa fa-users" aria-hidden="true"></i>Board</a></li>
                            <li><a href="https://chapters.iahsp.com"><i class="fa fa-globe" aria-hidden="true"></i>Member Chapters</a></li>
                            <li><a href="https://iahsp.com/history"><i class="fa fa-info-circle" aria-hidden="true"></i>Our History</a></li>
                            <li><a href="https://pages.iahsp.com/contact/"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>                                               
                          </ul>
                        </li>
                      </ul>
                    </div>

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <span class="mega-menu-sub-title">GIVING BACK</span>
                          <ul class="sub-menu">
                            <li><a href="https://pages.iahsp.com/iahsp-foundation/"><i class="fa fa-university" aria-hidden="true"></i>IAHSP<sup>&reg;</sup> Foundation</a></li>
                            <li><a href="https://iahsp.com/wwssw"><i class="fa fa-globe" aria-hidden="true"></i>World Wide Staging Service Week<sup>&reg;</sup></a></li>                        
                          </ul>
                        </li>
                      </ul>
                    </div>

                    <div class="col-sm-4">
                      <ul class="sub-menu">
                        <li>
                          <span class="mega-menu-sub-title">WHY IAHSP&reg;</span>
                          <ul class="sub-menu">
                            <li><a href="https://pages.iahsp.com/what-should-you-look-for-in-a-home-staging-association/"><i 
                            class="fa fa-user" aria-hidden="true"></i>What Should You Look for in a Home Staging Association</a></li>
                            <li><a href="https://pages.iahsp.com/why-iahsp/"><i 
                            class="fa fa-user" aria-hidden="true"></i>Why IAHSP</a></li>                  
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
            <?php } else { ?>
            <!-- Register WP Menu -->
            <?php wp_nav_menu(array(
                              "container"       => "ul",
                              "menu_id"         => "topMain",
                              "theme_location"  => "main-menu",
                              "menu_class"      => "nav nav-pills nav-main scroll-menu",
                              "walker"          => new MenuMainWalker
                            )); ?>
            <?php } ?>
            </ul>
          </nav>
        </div>
        <!-- /Top Nav -->

      </div>
    </header>
    <!-- /TOP NAV -->