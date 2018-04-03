<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title><?php echo $article_detail->title; ?></title>
    <meta name="title" content="<?php echo $article_detail->title; ?>"/>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="description" content="<?php echo preg_replace( "/\r|\n/", "", strip_tags($article_detail->excerpt)); ?>">
    <meta name="keywords" content="latest game review, game trailer, game news, pc game, mobile game, xbox game, wii game, ps game">
    <meta name="author" content="Martin SangDo">
    <meta name="copyright" content="Copyright © 2018 by gamereviewnews.com"/>

    <meta property="og:title" content="<?php echo $article_detail->title; ?>" />
    <meta property="og:description" content="<?php echo strip_tags($article_detail->excerpt); ?>" />
    <meta property="og:type" content="gamereviewnews:article" />
    <meta property="og:url" content="<?php echo full_url($_SERVER); ?>" />
    <meta property="og:site_name" content="Gamereviewnews" />
    <meta property="fb:app_id" content="" />
    <meta property="og:image" content="<?php echo $article_detail->thumb_url; ?>"  />
    <meta property="og:image:url" content="<?php echo $article_detail->thumb_url; ?>" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/public/favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C300%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/animate.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="/public/unity_assets/css/styles.bm-classic.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/public/unity_assets/css/custom.css">

    <script src="/public/js/common.js"></script>
    <script src="/public/js/article_detail.js"></script>

</head>

<body>
<main>
    <!-- Header -->
    <header id="js-header" class="u-header u-header--static u-shadow-v19">
        <!-- Top Bar -->
        <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-py-18">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-md-3 g-hidden-md-down">
                        <a href="bm-classic-home-page-1.html" class="navbar-brand">
                            <img src="/public/unity_assets/img/logo.png" alt="Logo"/>
                        </a>
                    </div>
                    <!-- End Logo -->

                    <!-- Search Form -->
                    <div class="col-6 col-md-5">
                        <form class="input-group rounded">
                            <input class="form-control g-brd-secondary-light-v2 g-brd-primary--focus g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-white g-font-weight-400 g-font-size-13 g-px-20 g-py-12" type="text" placeholder="Search the entire site">
                            <span class="input-group-append g-brd-none g-py-0 g-pr-0">
                    <button class="btn u-btn-white g-color-primary--hover g-bg-secondary g-font-weight-600 g-font-size-13 text-uppercase g-py-12 g-px-20" type="submit">
                      <span class="g-hidden-md-down">Search</span>
                      <i class="g-hidden-lg-up fa fa-search"></i>
                    </button>
                  </span>
                        </form>
                    </div>
                    <!-- End Search Form -->

                    <!-- Language -->
                    <div class="col-4 col-lg-2 g-pos-rel g-px-15 ml-auto">
                        <a id="languages-dropdown-invoker" class="g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover" href="#!"
                           aria-controls="languages-dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-dropdown-event="hover"
                           data-dropdown-target="#languages-dropdown"
                           data-dropdown-type="css-animation"
                           data-dropdown-duration="300"
                           data-dropdown-hide-on-scroll="false"
                           data-dropdown-animation-in="fadeIn"
                           data-dropdown-animation-out="fadeOut">
                            <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                <defs>
                                    <clipPath id="a">
                                        <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                                    <g stroke-width="1pt">
                                        <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                                        <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                                        <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                                        <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                                    </g>
                                </g>
                            </svg>
                            <span>English</span> <i class="g-hidden-sm-down fa fa-angle-down g-ml-7"></i>
                        </a>

                        <ul id="languages-dropdown" class="list-unstyled g-width-160 g-brd-around g-brd-secondary-light-v2 g-bg-white rounded g-pos-abs g-py-5 g-mt-32"
                            aria-labelledby="languages-dropdown-invoker">
                            <li>
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                                    <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                        <defs>
                                            <clipPath id="a">
                                                <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                                            <g stroke-width="1pt">
                                                <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                                                <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                                                <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                                                <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                                            </g>
                                        </g>
                                    </svg>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                                    <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                        <g stroke-width="1pt" fill-rule="evenodd">
                                            <path fill="#fff" d="M0 0h640v480H0z"/>
                                            <path fill="#00267f" d="M0 0h213.33v480H0z"/>
                                            <path fill="#f31830" d="M426.67 0H640v480H426.67z"/>
                                        </g>
                                    </svg>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                                    <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                        <g fill-rule="evenodd" stroke-width="1pt">
                                            <path fill="#fff" d="M0 0h640v480H0z"/>
                                            <path fill="#0039a6" d="M0 160.003h640V480H0z"/>
                                            <path fill="#d52b1e" d="M0 319.997h640V480H0z"/>
                                        </g>
                                    </svg>
                                    Russian
                                </a>
                            </li>
                            <li>
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                                    <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                        <path fill="#ffce00" d="M0 320h640v160.002H0z"/>
                                        <path d="M0 0h640v160H0z"/>
                                        <path fill="#d00" d="M0 160h640v160H0z"/>
                                    </svg>
                                    German
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Language -->

                    <!-- Account -->
                    <div class="col-1">
                        <a id="account-dropdown-invoker" class="media align-items-center float-right g-text-underline--none--hover" href="#!"
                           aria-controls="account-dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-dropdown-event="hover"
                           data-dropdown-target="#account-dropdown"
                           data-dropdown-type="css-animation"
                           data-dropdown-duration="300"
                           data-dropdown-hide-on-scroll="false"
                           data-dropdown-animation-in="fadeIn"
                           data-dropdown-animation-out="fadeOut">
                            <div class="d-flex g-width-30 g-height-30 mr-2">
                                <img class="img-fluid rounded-circle" src="/public/unity_assets/img-temp/100x100/img11.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <span class="d-block g-hidden-sm-down g-color-main g-font-weight-600 g-font-size-13">Martin</span>
                            </div>
                        </a>

                        <ul id="account-dropdown" class="list-unstyled text-right g-width-160 g-brd-around g-brd-secondary-light-v2 g-bg-white rounded g-pos-abs g-right-0 g-py-5 g-mt-57"
                            aria-labelledby="account-dropdown-invoker">
                            <li>
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">My Account</a>
                            </li>
                            <li>
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">Notifications</a>
                            </li>
                            <li>
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">Settings</a>
                            </li>
                            <li>
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">Signout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Account -->
                </div>
            </div>
        </div>
        <!-- End Top Bar -->

        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
            <nav class="js-mega-menu navbar navbar-expand-lg g-px-0">
                <div class="container g-px-15">
                    <!-- Logo -->
                    <a class="navbar-brand g-hidden-lg-up" href="bm-classic-home-page-1.html">
                        <img src="/public/unity_assets/img/logo.png" alt="Logo">
                    </a>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 ml-auto" type="button"
                            aria-label="Toggle navigation"
                            aria-expanded="false"
                            aria-controls="navBar"
                            data-toggle="collapse"
                            data-target="#navBar">
                <span class="hamburger hamburger--slider g-pa-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                        <ul class="navbar-nav g-font-weight-600">
                            <!-- Home - Submenu -->
                            <li class="nav-item hs-has-sub-menu g-mr-10--lg g-mr-20--xl">
                                <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="#!"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   aria-controls="nav-submenu--home">
                                    Home
                                </a>

                                <!-- Submenu -->
                                <ul id="nav-submenu--home" class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-brd-top g-brd-primary g-brd-top-2 g-mt-17"
                                    aria-labelledby="nav-link--home">
                                    <li class="dropdown-item g-bg-secondary--hover">
                                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-1.html">Home Default</a>
                                    </li>
                                    <li class="dropdown-item g-bg-secondary--hover">
                                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-2.html">Home Option 2
                                            <span class="float-right u-label g-rounded-3 g-font-size-10 g-bg-lightred g-pos-rel g-top-minus-1 g-py-3 g-ml-5">New</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item g-bg-secondary--hover">
                                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-3.html">Home Option 3
                                            <span class="float-right u-label g-rounded-3 g-font-size-10 g-bg-lightred g-pos-rel g-top-minus-1 g-py-3 g-ml-5">New</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item g-bg-secondary--hover">
                                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-4.html">Home Option 4
                                            <span class="float-right u-label g-rounded-3 g-font-size-10 g-bg-lightred g-pos-rel g-top-minus-1 g-py-3 g-ml-5">New</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item g-bg-secondary--hover">
                                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-5.html">Home Option 5
                                            <span class="float-right u-label g-rounded-3 g-font-size-10 g-bg-lightred g-pos-rel g-top-minus-1 g-py-3 g-ml-5">New</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Submenu -->
                            </li>
                            <!-- End Home - Submenu -->

                            <!-- Pages - Submenu -->
                            <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-20--xl">
                                <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="#!"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   aria-controls="nav-submenu--pages">
                                    Pages
                                </a>

                                <!-- Submenu -->
                                <ul id="nav-submenu--pages" class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-brd-top g-brd-primary g-brd-top-2 g-mt-17"
                                    aria-labelledby="nav-link--pages">
                                    <li class="dropdown-item g-bg-secondary--hover">
                                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-single-1.html">Single Page</a>
                                    </li>
                                </ul>
                                <!-- End Submenu -->
                            </li>
                            <!-- End Pages - Submenu -->

                            <!-- Mega Menu Item -->
                            <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                                data-animation-in="fadeIn"
                                data-animation-out="fadeOut"
                                data-position="right">
                                <a id="mega-menu-label-1" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">World
                                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-1">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <ul class="list-unstyled mb-0">
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-5">
                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img1.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">8 health benefits and drawbacks of coffee</a></h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 30, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 12
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>

                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img2.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">5 Best cofee places with free WiFi in Victoria, BC</a>
                                                    </h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 18, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 56
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>

                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img3.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">Top 7 Luxury places to visit around Victoria, BC</a>
                                                    </h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 11, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 46
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-lg-5">
                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img1.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                                                    </h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 07, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 24
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>

                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img2.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6"><a class="g-color-main" href="#!">10 Most beautiful beaches</a></h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 20, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 18
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>

                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img3.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">Stylish things to do, see and buy this week</a></h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 16, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 31
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Mega Menu Item -->

                            <!-- Mega Menu Item -->
                            <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                                data-animation-in="fadeIn"
                                data-animation-out="fadeOut"
                                data-position="right">
                                <a id="mega-menu-label-5" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Sport
                                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-primary g-left-15 g-right-15 g-px-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-5">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="list-inline text-center mb-0">
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Transfer News</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Premier League</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Rugby</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Basketball</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Tennis</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">UFC</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Boxing</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">F1</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Racing</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Cricket</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">More</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Fantasy Football</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Mega Menu Item -->

                            <!-- Mega Menu Item -->
                            <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                                data-animation-in="fadeIn"
                                data-animation-out="fadeOut"
                                data-position="right">
                                <a id="mega-menu-label-3" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Fashion
                                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-3">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <article>
                                                <figure class="g-pos-rel">
                                                    <img class="img-fluid w-100 g-mb-20" src="/public/unity_assets/img-temp/900x600/img7.jpg" alt="Image Description">
                                                </figure>
                                                <h3 class="h4 g-mb-10"><a class="g-color-gray-dark-v2" href="#!">Love the mother nature</a>
                                                </h3>
                                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                    <li class="list-inline-item">
                                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">Kathy Reyes</a>
                                                    </li>
                                                    <li class="list-inline-item">/</li>
                                                    <li class="list-inline-item">July 20, 2016</li>
                                                    <li class="list-inline-item">/</li>
                                                    <li class="list-inline-item">
                                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                            <i class="fa fa-comments-o"></i> 18
                                                        </a>
                                                    </li>
                                                </ul>
                                            </article>
                                        </div>
                                        <div class="col-lg-4">
                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img1.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                                                    </h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 07, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 24
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>

                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img2.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6"><a class="g-color-main" href="#!">10 Most beautiful beaches</a></h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 20, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 18
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>

                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img3.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">Stylish things to do, see and buy this week</a></h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 16, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 31
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-lg-4">
                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img1.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">8 health benefits and drawbacks of coffee</a></h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 30, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 12
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>

                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img2.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">Stylish things to do, see and buy this week</a></h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 16, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 31
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>

                                            <article class="media g-mb-20">
                                                <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="/public/unity_assets/img-temp/500x320/img3.jpg" alt="Image Description"></a>
                                                <div class="media-body">
                                                    <h3 class="h6">
                                                        <a class="g-color-main" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                                                    </h3>
                                                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                        <li class="list-inline-item">July 07, 2016</li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                                <i class="fa fa-comments-o"></i> 24
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Mega Menu Item -->

                            <!-- Mega Menu Item -->
                            <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                                data-animation-in="fadeIn"
                                data-animation-out="fadeOut"
                                data-position="right">
                                <a id="mega-menu-label-4" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Hi-Tech
                                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <article class="u-block-hover">
                                                <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                                                    <img class="img-fluid u-block-hover__main--zoom-v1" src="/public/unity_assets/img-temp/500x320/img1.jpg" alt="Image Description">
                                                </figure>
                                                <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">Fashion</a>
                          </span>
                                                <span class="u-icon-v3 u-icon-size--sm g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-top-20 g-right-20">
                            <i class="icon-camera"></i>
                          </span>
                                                <header class="g-pos-abs g-bottom-10 g-left-20 g-right-20">
                                                    <small class="g-color-white">
                                                        <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 26, 2016
                                                    </small>
                                                    <h3 class="h4 g-font-weight-600 g-mt-5">
                                                        <a class="g-color-white g-color-white--hover" href="#!">Be ready, fashion of the year is coming this year</a>
                                                    </h3>
                                                </header>
                                            </article>
                                        </div>
                                        <div class="col-lg-4">
                                            <article class="u-block-hover">
                                                <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                                                    <img class="img-fluid u-block-hover__main--zoom-v1" src="/public/unity_assets/img-temp/500x320/img2.jpg" alt="Image Description">
                                                </figure>
                                                <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">Beaches</a>
                          </span>
                                                <span class="u-icon-v3 u-icon-size--sm g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-top-20 g-right-20">
                            <i class="icon-camera"></i>
                          </span>
                                                <header class="g-pos-abs g-bottom-10 g-left-20 g-right-20">
                                                    <small class="g-color-white">
                                                        <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 15, 2016
                                                    </small>
                                                    <h3 class="h4 g-font-weight-600 g-mt-5">
                                                        <a class="g-color-white g-color-white--hover" href="#!">Must be visited places in the USA - Florida Beaches</a>
                                                    </h3>
                                                </header>
                                            </article>
                                        </div>
                                        <div class="col-lg-4">
                                            <article class="u-block-hover">
                                                <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                                                    <img class="img-fluid u-block-hover__main--zoom-v1" src="/public/unity_assets/img-temp/500x320/img3.jpg" alt="Image Description">
                                                </figure>
                                                <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">Food</a>
                          </span>
                                                <span class="u-icon-v3 u-icon-size--sm g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-top-20 g-right-20">
                            <i class="icon-camera g-left-2"></i>
                          </span>
                                                <header class="g-pos-abs g-bottom-10 g-left-20 g-right-20">
                                                    <small class="g-color-white">
                                                        <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 8, 2016
                                                    </small>
                                                    <h3 class="h4 g-font-weight-600 g-mt-5">
                                                        <a class="g-color-white g-color-white--hover" href="#!">Why your next glass of juice will cost you more</a>
                                                    </h3>
                                                </header>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Mega Menu Item -->

                            <!-- Mega Menu Item -->
                            <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                                data-animation-in="fadeIn"
                                data-animation-out="fadeOut"
                                data-position="right">
                                <a id="mega-menu-label-5" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Archive
                                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-5">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h4 class="h5 text-uppercase g-font-weight-600">Title goes here</h4>
                                            <ul class="list-unstyled mb-0">
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4 class="h5 text-uppercase g-font-weight-600">Title goes here</h4>
                                            <ul class="list-unstyled mb-0">
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4 class="h5 text-uppercase g-font-weight-600">Title goes here</h4>
                                            <ul class="list-unstyled mb-0">
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4 class="h5 text-uppercase g-font-weight-600">Title goes here</h4>
                                            <ul class="list-unstyled mb-0">
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                                                <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                                                    <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Mega Menu Item -->

                            <!-- Mega Menu Item -->
                            <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                                data-animation-in="fadeIn"
                                data-animation-out="fadeOut"
                                data-position="right">
                                <a id="mega-menu-label-6" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Style
                                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-6">
                                    <div class="row">
                                        <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                                            <article class="u-block-hover">
                                                <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                                                    <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="/public/unity_assets/img-temp/500x320/img1.jpg" alt="Image Description">
                                                </figure>
                                                <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">
                              <i class="icon-energy"></i>
                            </a>
                            <a class="btn btn-sm u-btn-black rounded-0" href="#!">July 06, 2016</a>
                          </span>
                                                <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                                                    <ul class="list-inline g-font-size-12 g-color-white g-mb-5">
                                                        <li class="list-inline-item">
                                                            <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 152
                                                        </li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 17
                                                        </li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 35
                                                        </li>
                                                    </ul>
                                                    <h3 class="h5 g-font-weight-300 g-mb-0">
                                                        <a class="g-color-white g-color-white--hover" href="#!">Best work places around the World for your company</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>

                                        <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                                            <article class="u-block-hover">
                                                <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                                                    <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="/public/unity_assets/img-temp/500x320/img3.jpg" alt="Image Description">
                                                </figure>
                                                <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">
                              <i class="icon-energy"></i>
                            </a>
                            <a class="btn btn-sm u-btn-black rounded-0" href="#!">July 15, 2016</a>
                          </span>
                                                <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                                                    <ul class="list-inline g-font-size-12 g-color-white g-mb-5">
                                                        <li class="list-inline-item">
                                                            <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 264
                                                        </li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 52
                                                        </li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 26
                                                        </li>
                                                    </ul>
                                                    <h3 class="h5 g-font-weight-300 g-mb-0">
                                                        <a class="g-color-white g-color-white--hover" href="#!">Top 10 bust be used iOS apps for your next project</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>

                                        <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                                            <article class="u-block-hover">
                                                <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                                                    <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="/public/unity_assets/img-temp/500x320/img2.jpg" alt="Image Description">
                                                </figure>
                                                <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">
                              <i class="icon-energy"></i>
                            </a>
                            <a class="btn btn-sm u-btn-black rounded-0" href="#!">July 22, 2016</a>
                          </span>
                                                <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                                                    <ul class="list-inline g-font-size-12 g-color-white g-mb-5">
                                                        <li class="list-inline-item">
                                                            <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 124
                                                        </li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 65
                                                        </li>
                                                        <li class="list-inline-item">/</li>
                                                        <li class="list-inline-item">
                                                            <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 14
                                                        </li>
                                                    </ul>
                                                    <h3 class="h5 g-font-weight-300 g-mb-0">
                                                        <a class="g-color-white g-color-white--hover" href="#!">Discussing the project details is good step with team mates</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Mega Menu Item -->

                            <!-- Mega Menu Item -->
                            <li class="hs-has-mega-menu nav-item g-mx-10--lg g-ml-15--xl"
                                data-animation-in="fadeIn"
                                data-animation-out="fadeOut"
                                data-position="right">
                                <a id="mega-menu-label-7" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Life
                                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                                <!-- Mega Menu -->
                                <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-7">
                                    <div class="row">
                                        <div class="col-lg-3 g-mb-20 g-mb-0--lg">
                                            <!-- Article -->
                                            <article>
                                                <div class="g-font-size-12 g-mb-5">
                                                    <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> Aug 16, 2016
                                                </div>

                                                <h3 class="h6">
                                                    <a class="g-color-main" href="#!">You've been making French Pie all wrong - Until Now</a>
                                                </h3>
                                            </article>
                                            <!-- End Article -->

                                            <hr class="g-mt-15 g-mb-10">

                                            <!-- Article -->
                                            <article>
                                                <div class="g-font-size-12 g-mb-5">
                                                    <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> Aug 02, 2016
                                                </div>

                                                <h3 class="h6">
                                                    <a class="g-color-main" href="#!">Unify facts, study finds - sensitive to gluten without having coeliac disease</a>
                                                </h3>
                                            </article>
                                            <!-- End Article -->
                                        </div>

                                        <div class="col-lg-3 g-mb-20 g-mb-0--lg">
                                            <!-- Article -->
                                            <article>
                                                <div class="g-font-size-12 g-mb-5">
                                                    <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 18, 2016
                                                </div>

                                                <h3 class="h6">
                                                    <a class="g-color-main" href="#!">Why your next cup of cofee with milk will cost you more</a>
                                                </h3>
                                            </article>
                                            <!-- End Article -->

                                            <hr class="g-mt-15 g-mb-10">

                                            <!-- Article -->
                                            <article>
                                                <div class="g-font-size-12 g-mb-5">
                                                    <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 12, 2016
                                                </div>

                                                <h3 class="h6">
                                                    <a class="g-color-main" href="#!">Incredible product and quality: Unify best template of the year</a>
                                                </h3>
                                            </article>
                                            <!-- End Article -->
                                        </div>

                                        <div class="col-lg-3 g-mb-20 g-mb-0--lg">
                                            <!-- Article -->
                                            <article>
                                                <div class="g-font-size-12 g-mb-5">
                                                    <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> Aug 16, 2016
                                                </div>

                                                <h3 class="h6">
                                                    <a class="g-color-main" href="#!">Some post title will be implimented here and It's cool!</a>
                                                </h3>
                                            </article>
                                            <!-- End Article -->

                                            <hr class="g-mt-15 g-mb-10">

                                            <!-- Article -->
                                            <article>
                                                <div class="g-font-size-12 g-mb-5">
                                                    <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> Aug 02, 2016
                                                </div>

                                                <h3 class="h6">
                                                    <a class="g-color-main" href="#!">Wireframe approach for the news blocks and pages</a>
                                                </h3>
                                            </article>
                                            <!-- End Article -->
                                        </div>

                                        <div class="col-lg-3 g-mb-20 g-mb-0--lg">
                                            <!-- Article -->
                                            <article>
                                                <div class="g-font-size-12 g-mb-5">
                                                    <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 18, 2016
                                                </div>

                                                <h3 class="h6">
                                                    <a class="g-color-main" href="#!">Over thousands of components help you to boost your project</a>
                                                </h3>
                                            </article>
                                            <!-- End Article -->

                                            <hr class="g-mt-15 g-mb-10">

                                            <!-- Article -->
                                            <article>
                                                <div class="g-font-size-12 g-mb-5">
                                                    <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 12, 2016
                                                </div>

                                                <h3 class="h6">
                                                    <a class="g-color-main" href="#!">How to run a ticket: Best 10 point approaches for people who stands..</a>
                                                </h3>
                                            </article>
                                            <!-- End Article -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>
                            <!-- End Mega Menu Item -->

                            <!-- Main -->
                            <li class="nav-item g-mx-10--lg g-mx-20--xl">
                                <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="../../index.html">
                                    Main
                                </a>
                            </li>
                            <!-- End Main -->
                        </ul>
                    </div>
                    <!-- End Navigation -->
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- Page Title -->
    <section class="g-bg-secondary g-py-50" hidden>
        <div class="container">
            <div class="d-sm-flex text-center">
                <div class="align-self-center">
                    <h2 class="h3 g-mb-10 g-mb-0--md">Blog Single Page</h2>
                </div>

                <div class="align-self-center ml-auto">
                    <ul class="u-list-inline">
                        <li class="list-inline-item g-mr-5">
                            <a class="u-link-v5 g-color-main" href="#!">Home</a>
                            <i class="g-color-gray-light-v2 g-ml-5">/</i>
                        </li>
                        <li class="list-inline-item g-mr-5">
                            <a class="u-link-v5 g-color-main" href="#!">Pages</a>
                            <i class="g-color-gray-light-v2 g-ml-5">/</i>
                        </li>
                        <li class="list-inline-item g-color-primary">
                            <span>Blog Single Page</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- News Content -->
    <section class="g-pt-50 g-pb-100">
        <div class="container">
            <div class="row">
                <!-- Articles Content -->
                <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                    <article class="g-mb-60">
                        <header class="g-mb-30">
                            <h2 class="h1 g-mb-15"><?php echo $article_detail->title; ?></h2>

                            <ul class="list-inline d-sm-flex g-color-gray-dark-v4 mb-0">
                                <li class="list-inline-item">
                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $article_detail->author_name; ?></a>
                                </li>
                                <li class="list-inline-item g-mx-10">/</li>
                                <li class="list-inline-item">
                                    <?php echo format_post_time($article_detail->time); ?>
                                </li>
                            </ul>

                            <hr class="g-brd-gray-light-v4 g-my-15">

                            <ul class="list-inline text-uppercase mb-0">
                                <li class="list-inline-item g-mr-10">
                                    <strong class="align-middle g-font-size-24">423</strong>
                                </li>
                                <li class="list-inline-item g-mr-10">
                                    <span class="g-color-gray-dark-v5">|</span>
                                </li>
                                <li class="list-inline-item g-mr-10">
                                    <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">
                                        <i class="fa fa-facebook g-mr-5--sm"></i> <span class="g-hidden-xs-down">Share on Facebook</span>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mr-10">
                                    <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">
                                        <i class="fa fa-twitter g-mr-5--sm"></i> <span class="g-hidden-xs-down">Tweet on Twitter</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#!">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </header>

                        <div class="g-font-size-16 g-line-height-1_8 g-mb-30" id="article_detail_container">
                            <!-- content be here -->
                        </div>

                        <!-- Sources & Tags -->
                        <div class="g-mb-30">
                            <h6 class="g-color-gray-dark-v1 g-mb-15">
                                <strong class="g-mr-5">Source:</strong> <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">The Next Web (TNW)</a>
                            </h6>
                            <h6 class="g-color-gray-dark-v1">
                                <strong class="g-mr-5">Tags:</strong>
                                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">Business</a>
                                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">SaaS</a>
                                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">Web Design</a>
                                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">IT</a>
                            </h6>
                        </div>
                        <!-- End Sources & Tags -->

                        <hr class="g-brd-gray-light-v4">

                        <!-- Social Shares -->
                        <div class="g-mb-30">
                            <ul class="list-inline text-uppercase mb-0">
                                <li class="list-inline-item g-mr-10">
                                    <strong class="align-middle g-font-size-24">423</strong>
                                </li>
                                <li class="list-inline-item g-mr-10">
                                    <span class="g-color-gray-dark-v5">|</span>
                                </li>
                                <li class="list-inline-item g-mr-10">
                                    <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">
                                        <i class="fa fa-facebook g-mr-5--sm"></i> <span class="g-hidden-xs-down">Share on Facebook</span>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mr-10">
                                    <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">
                                        <i class="fa fa-twitter g-mr-5--sm"></i> <span class="g-hidden-xs-down">Tweet on Twitter</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#!">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social Shares -->

                        <hr class="g-brd-gray-light-v4 g-mb-40">

                        <!-- Related Articles -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Related Articles</h2>
                            </div>

                            <div class="row">
                                <!-- Article Video -->
                                <div class="col-lg-4 col-sm-6 g-mb-30">
                                    <article>
                                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                            <img class="img-fluid w-100" src="/public/unity_assets/img-temp/400x270/img2.jpg" alt="Image Description">

                                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                                <a class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!">Spa</a>
                                            </figcaption>
                                        </figure>

                                        <h3 class="g-font-size-16 g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Clark Valberg is a new CEO of InVision..</a>
                                        </h3>
                                    </article>
                                </div>
                                <!-- End Article Video -->

                                <!-- Article Video -->
                                <div class="col-lg-4 col-sm-6 g-mb-30">
                                    <article>
                                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                            <img class="img-fluid w-100" src="/public/unity_assets/img-temp/400x270/img3.jpg" alt="Image Description">

                                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                                <a class="btn btn-xs u-btn-pink text-uppercase rounded-0" href="#!">Internet</a>
                                            </figcaption>
                                        </figure>

                                        <h3 class="g-font-size-16 g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">How to run a ticket: Best 10 point..</a>
                                        </h3>
                                    </article>
                                </div>
                                <!-- End Article Video -->

                                <!-- Article Video -->
                                <div class="col-lg-4 col-sm-6 g-mb-30">
                                    <article>
                                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                            <img class="img-fluid w-100" src="/public/unity_assets/img-temp/400x270/img8.jpg" alt="Image Description">

                                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                                <a class="btn btn-xs u-btn-teal text-uppercase rounded-0" href="#!">Support</a>
                                            </figcaption>
                                        </figure>

                                        <h3 class="g-font-size-16 g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Skyscrapers from blocking sunlight..</a>
                                        </h3>
                                    </article>
                                </div>
                                <!-- End Article Video -->

                                <!-- Article Video -->
                                <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                                    <article>
                                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                            <img class="img-fluid w-100" src="/public/unity_assets/img-temp/400x270/img15.jpg" alt="Image Description">

                                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                                <a class="btn btn-xs u-btn-darkred text-uppercase rounded-0" href="#!">Coworking</a>
                                            </figcaption>
                                        </figure>

                                        <h3 class="g-font-size-16 g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Architects plan to from blocking out sunlight..</a>
                                        </h3>
                                    </article>
                                </div>
                                <!-- End Article Video -->

                                <!-- Article Video -->
                                <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                                    <article>
                                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                            <img class="img-fluid w-100" src="/public/unity_assets/img-temp/400x270/img12.jpg" alt="Image Description">

                                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                                <a class="btn btn-xs u-btn-indigo text-uppercase rounded-0" href="#!">Finance</a>
                                            </figcaption>
                                        </figure>

                                        <h3 class="g-font-size-16 g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Cooltex is one of the best technology company..</a>
                                        </h3>
                                    </article>
                                </div>
                                <!-- End Article Video -->

                                <!-- Article Video -->
                                <div class="col-lg-4 col-sm-6">
                                    <article>
                                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                            <img class="img-fluid w-100" src="/public/unity_assets/img-temp/400x270/img13.jpg" alt="Image Description">

                                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                                <a class="btn btn-xs u-btn-brown text-uppercase rounded-0" href="#!">Meeting</a>
                                            </figcaption>
                                        </figure>

                                        <h3 class="g-font-size-16 g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Cameron's silence on defence is shameful..</a>
                                        </h3>
                                    </article>
                                </div>
                                <!-- End Article Video -->
                            </div>
                        </div>

                        <!-- Author Block -->
                        <div class="g-mb-60">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">About The Author</h2>
                            </div>

                            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                                <img class="d-flex u-shadow-v25 g-width-80 g-height-80 rounded-circle g-mr-15" src="/public/unity_assets/img-temp/100x100/img8.jpg" alt="Image Description">

                                <div class="media-body">
                                    <h4 class="g-color-gray-dark-v1 g-mb-15">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Marina Olsson</a>
                                    </h4>

                                    <div class="g-mb-15">
                                        <p class="g-color-gray-dark-v2">About my site amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at.</p>
                                    </div>

                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item g-mr-10">
                                            <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mr-10">
                                            <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mr-10">
                                            <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Author Block -->

                        <!-- Comments -->
                        <div class="g-mb-60">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">24 Comments</h2>
                            </div>

                            <!-- Comment 1 -->
                            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                                <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15" src="/public/unity_assets/img-temp/100x100/img9.jpg" alt="Image Description">

                                <div class="media-body">
                                    <div class="g-mb-15">
                                        <h5 class="d-flex justify-content-between align-items-center g-font-size-16 g-color-gray-dark-v1 mb-0">
                                            <span class="d-block g-mr-10">James Coolman</span>
                                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Author</a>
                                        </h5>
                                        <span class="g-color-gray-dark-v4 g-font-size-12">2 days ago</span>
                                    </div>

                                    <div class="g-mb-15">
                                        <p class="g-color-gray-dark-v2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    </div>

                                    <ul class="list-inline d-sm-flex my-0">
                                        <li class="list-inline-item g-mr-20">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 214
                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mr-20">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 35
                                            </a>
                                        </li>
                                        <li class="list-inline-item ml-auto">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Comment 1 -->

                            <!-- Comment 2 -->
                            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-ml-40 g-mb-20">
                                <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15" src="/public/unity_assets/img-temp/100x100/img10.jpg" alt="Image Description">

                                <div class="media-body">
                                    <div class="g-mb-15">
                                        <h5 class="g-font-size-16 g-color-gray-dark-v1 mb-0">Alberta Watson</h5>
                                        <span class="g-color-gray-dark-v4 g-font-size-12">3 days ago</span>
                                    </div>

                                    <div class="g-mb-15">
                                        <p class="g-color-gray-dark-v2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    </div>

                                    <ul class="list-inline d-sm-flex my-0">
                                        <li class="list-inline-item g-mr-20">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 637
                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mr-20">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 12
                                            </a>
                                        </li>
                                        <li class="list-inline-item ml-auto">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Comment 2 -->

                            <!-- Comment 3 -->
                            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                                <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15" src="/public/unity_assets/img-temp/100x100/img11.jpg" alt="Image Description">

                                <div class="media-body">
                                    <div class="g-mb-15">
                                        <h5 class="g-font-size-16 g-color-gray-dark-v1 mb-0">David Lee</h5>
                                        <span class="g-color-gray-dark-v4 g-font-size-12">4 days ago</span>
                                    </div>

                                    <div class="g-mb-15">
                                        <p class="g-color-gray-dark-v2">Sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    </div>

                                    <ul class="list-inline d-sm-flex my-0">
                                        <li class="list-inline-item g-mr-20">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 192
                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mr-20">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 87
                                            </a>
                                        </li>
                                        <li class="list-inline-item ml-auto">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Comment 3 -->

                            <div class="text-center g-mt-30">
                                <a class="btn u-btn-outline-primary g-font-size-12 text-uppercase g-px-25 g-py-13" href="#!">
                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i> Load More Comments
                                </a>
                            </div>
                        </div>
                        <!-- Comments -->

                        <!-- Add Comment -->
                        <div class="g-mb-60">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Add a Comment</h2>
                            </div>

                            <form>
                                <div class="row">
                                    <div class="col-md-6 form-group g-mb-30">
                                        <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15" type="text" placeholder="Your Name">
                                    </div>

                                    <div class="col-md-6 form-group g-mb-30">
                                        <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15" type="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="g-mb-30">
                                    <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-pa-15" rows="12" placeholder="Your Message"></textarea>
                                </div>

                                <a class="btn u-btn-primary g-font-size-12 text-uppercase g-px-25 g-py-13" href="#!">
                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i> Add a Comment
                                </a>
                            </form>
                        </div>
                        <!-- End Add Comment -->
                    </article>

                    <div id="stickyblock-end"></div>
                </div>
                <!-- End Articles Content -->

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <!-- Useful Links -->
                    <div class="g-mb-50">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Useful Links</h2>
                        </div>

                        <ul class="list-unstyled">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Wrapbootstrap Marketplace</a>
                                </h4>
                            </li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Google Adwords &amp; Adsense</a>
                                </h4>
                            </li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Web Design with UX/UI</a>
                                </h4>
                            </li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Digital Marketing</a>
                                </h4>
                            </li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Support Forum &amp; Community</a>
                                </h4>
                            </li>
                            <li class="mb-0">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Unify Template Pages</a>
                                </h4>
                            </li>
                        </ul>
                    </div>
                    <!-- End Useful Links -->

                    <!-- Subscribe -->
                    <div class="u-shadow-v25 u-bg-overlay g-bg-img-hero g-bg-white-gradient-opacity-v2--after g-py-40 g-px-20 g-mb-50" style="background-image: url(assets/img-temp/500x600/img1.jpg);">
                        <div class="u-bg-overlay__inner text-center">
                            <div class="g-mb-40">
                                <h2 class="g-color-white">Vancouver, BC</h2>
                                <p class="g-color-white-opacity-0_8">Unit 25 Suite 3, 925 Prospect PI,<br>Beach Resort, 23001</p>
                            </div>

                            <div class="g-mb-30">
                                <h3 class="d-inline-block g-bg-primary-opacity-0_6 g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-py-5 g-px-10">Phone number</h3>
                                <span class="d-block g-color-white g-font-size-18">+01 (0) 333 444 55</span>
                            </div>

                            <div class="input-group rounded">
                                <input class="form-control g-brd-none g-px-13" type="email" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn u-btn-primary text-uppercase g-px-20 g-py-14" type="submit">
                                        <i class="icon-envelope g-pos-rel g-top-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Subscribe -->

                    <!-- Recent Posts -->
                    <div class="g-mb-30">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Recent Posts</h2>
                        </div>

                        <!-- Article -->
                        <article class="media g-mb-30">
                            <a class="d-flex u-shadow-v25 mr-3" href="#!">
                                <img class="g-width-60 g-height-60" src="/public/unity_assets/img-temp/100x100/img4.jpg" alt="Image Description">
                            </a>

                            <div class="media-body">
                                <h3 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Best dessert recipes for breakfast which will..</a>
                                </h3>

                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                    <li class="list-inline-item">
                                        July 20, 2017
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 18
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="media g-mb-30">
                            <a class="d-flex u-shadow-v25 mr-3" href="#!">
                                <img class="g-width-60 g-height-60" src="/public/unity_assets/img-temp/100x100/img5.jpg" alt="Image Description">
                            </a>

                            <div class="media-body">
                                <h3 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Stylish things to do, see and purchase..</a>
                                </h3>

                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                    <li class="list-inline-item">
                                        July 16, 2017
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 31
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="media g-mb-30">
                            <a class="d-flex u-shadow-v25 mr-3" href="#!">
                                <img class="g-width-60 g-height-60" src="/public/unity_assets/img-temp/100x100/img6.jpg" alt="Image Description">
                            </a>

                            <div class="media-body">
                                <h3 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Government plans to test new primary school..</a>
                                </h3>

                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                    <li class="list-inline-item">
                                        July 07, 2017
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 24
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="media">
                            <a class="d-flex u-shadow-v25 mr-3" href="#!">
                                <img class="g-width-60 g-height-60" src="/public/unity_assets/img-temp/100x100/img7.jpg" alt="Image Description">
                            </a>

                            <div class="media-body">
                                <h3 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                                </h3>

                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                    <li class="list-inline-item">
                                        July 11, 2017
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 46
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                    <!-- End Recent Posts -->

                    <!-- Popular Videos -->
                    <div class="g-mb-50">
                        <article class="g-pos-rel">
                            <figure class="u-shadow-v25 g-bg-img-hero g-min-height-400" style="background-image: url(assets/img-temp/500x650/img2.jpg);">
                            </figure>

                            <span class="text-center g-pos-abs g-top-20 g-left-0">
                    <a class="btn u-btn-red text-uppercase rounded-0" href="#!">Discover</a>
                    <small class="g-bg-black g-color-white g-pa-5 d-block">July 09, 2017</small>
                  </span>

                            <span class="u-icon-v3 g-font-size-18 g-bg-white g-color-black g-bg-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-cursor-pointer g-absolute-centered">
                    <i class="icon-control-play g-left-2"></i>
                  </span>

                            <header class="g-pos-abs g-bottom-20 g-left-0">
                                <h3 class="h5 g-bg-red-opacity-0_5 g-pa-5-10--sm">
                                    <a class="g-color-white g-color-white--hover" href="#!">Traveling</a>
                                </h3>
                            </header>
                        </article>
                    </div>
                    <!-- End Popular Videos -->

                    <!-- Social Links -->
                    <div class="g-mb-50">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Social Links</h2>
                        </div>

                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center justify-content-between g-mb-20">
                                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-facebook g-bg-facebook--hover g-color-white rounded-circle g-mr-10" href="#!">
                        <i class="fa fa-facebook"></i>
                      </span>
                                    Like
                                </a>
                                <span class="js-counter d-block g-color-gray-dark-v4">103832</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between g-mb-20">
                                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-lightred g-bg-lightred--hover g-color-white rounded-circle g-mr-10" href="#!">
                        <i class="fa fa-google-plus"></i>
                      </span>
                                    Add to Circle
                                </a>
                                <span class="js-counter d-block g-color-gray-dark-v4">47192</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between g-mb-20">
                                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-instagram g-bg-instagram--hover g-color-white rounded-circle g-mr-10" href="#!">
                        <i class="fa fa-instagram"></i>
                      </span>
                                    Follow Us
                                </a>
                                <span class="js-counter d-block g-color-gray-dark-v4">38291</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between g-mb-20">
                                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-teal g-bg-teal--hover g-color-white rounded-circle g-mr-10" href="#!">
                        <i class="fa fa-medium"></i>
                      </span>
                                    Writers
                                </a>
                                <span class="js-counter d-block g-color-gray-dark-v4">23871</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-twitter g-bg-twitter--hover g-color-white rounded-circle g-mr-10" href="#!">
                        <i class="fa fa-twitter"></i>
                      </span>
                                    Follow Us
                                </a>
                                <span class="js-counter d-block g-color-gray-dark-v4">391743</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->

                    <!-- Popular Tags -->
                    <div class="g-mb-20">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Popular Tags</h2>
                        </div>

                        <ul class="u-list-inline g-font-size-11 text-uppercase mb-0">
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Web Design</a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Bootstrap</a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">SASS</a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Marketing</a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Unify</a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Htmlstream</a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Pixeel</a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Free Themes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Popular Tags -->

                    <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
                        <!-- News Feed -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">News Feed</h2>
                            </div>

                            <!-- Article -->
                            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#!">Jonathan Owen</a>
                    </span>
                                <h3 class="h6">
                                    <a class="g-color-gray-dark-v1" href="#!">Architects plan to stop skyscrapers from blocking out sunlight</a>
                                </h3>
                            </article>
                            <!-- End Article -->

                            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                            <!-- Article -->
                            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#!">James Doe</a>
                    </span>
                                <h3 class="h6">
                                    <a class="g-color-gray-dark-v1" href="#!">Cooltex is one of the best technology company of our age and future</a>
                                </h3>
                            </article>
                            <!-- End Article -->

                            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                            <!-- Article -->
                            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#!">Albert Coolmen</a>
                    </span>
                                <h3 class="h6">
                                    <a class="g-color-gray-dark-v1" href="#!">Some text goes here with plain English and much more other texts go there..</a>
                                </h3>
                            </article>
                            <!-- End Article -->
                        </div>
                        <!-- End News Feed -->

                        <!-- Top Authors -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Top Authors</h2>
                            </div>

                            <article class="media g-mb-35">
                                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="/public/unity_assets/img-temp/100x100/img1.jpg" alt="Image Description">
                                <div class="media-body">
                                    <h4 class="g-font-size-16">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Htmlstream</a> <small class="g-color-gray-dark-v4">@Htmlstream</small>
                                    </h4>
                                    <p class="g-color-gray-dark-v2">Sed ultrices velit vitae tortor posuere and dial in the details.</p>
                                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase" href="#!">Follow</a>
                                </div>
                            </article>

                            <article class="media g-mb-35">
                                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="/public/unity_assets/img-temp/100x100/img3.jpg" alt="Image Description">
                                <div class="media-body">
                                    <h4 class="g-font-size-16 g-color-gray-dark-v1">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Pixeel</a> <small class="g-color-gray-dark-v4">@Pixeeluk</small>
                                    </h4>
                                    <p class="g-color-gray-dark-v2">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase" href="#!">Follow</a>
                                </div>
                            </article>

                            <article class="media">
                                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="/public/unity_assets/img-temp/100x100/img2.jpg" alt="Image Description">
                                <div class="media-body">
                                    <h4 class="g-font-size-16 g-color-gray-dark-v1">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">WrapBootstrap</a> <small class="g-color-gray-dark-v4">@WrapBootstrap</small>
                                    </h4>
                                    <p class="g-color-gray-dark-v2">Ulvinar leo ultricies ut, grab a cup of coffee and dial in the details.</p>
                                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase" href="#!">Follow</a>
                                </div>
                            </article>
                        </div>
                        <!-- End Top Authors -->
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </section>
    <!-- End News Content -->

    <!-- Footer -->
    <footer class="g-bg-secondary">
        <div class="g-brd-bottom g-brd-secondary-light-v2 g-py-50 g-mb-50">
            <div class="container">
                <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Popular Stories</h3>

                <!-- Footer - Popular Stories Carousel -->
                <div class="js-carousel g-mx-minus-10"
                     data-infinite="true"
                     data-slides-show="4"
                     data-autoplay="true"
                     data-speed="7000"
                     data-lazy-load="ondemand"
                     data-arrows-classes="u-arrow-v1 g-pos-abs g-top-minus-35 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover"
                     data-arrow-left-classes="fa fa-angle-left g-right-30"
                     data-arrow-right-classes="fa fa-angle-right g-right-0"
                     data-responsive='[{
                   "breakpoint": 1200,
                   "settings": {
                     "slidesToShow": 4
                   }
                 }, {
                   "breakpoint": 992,
                   "settings": {
                     "slidesToShow": 3
                   }
                 }, {
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 2
                   }
                 }, {
                   "breakpoint": 480,
                   "settings": {
                     "slidesToShow": 1
                   }
                 }]'>
                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 g-pos-rel mr-3">
                                <img class="img-fluid" src="/public/unity_assets/img-temp/230x230/img10.jpg" alt="Image Description">

                                <figcaption class="g-absolute-centered">
                                    <a class="js-fancybox d-block" href="javascript:;"
                                       data-src="//vimeo.com/167434033"
                                       data-speed="350"
                                       data-caption="Single Image">
                        <span class="u-icon-v2 u-icon-size--xs g-brd-white g-color-white g-color-primary--hover g-bg-white--hover rounded-circle g-cursor-pointer">
                          <i class="g-pos-rel g-left-2 fa fa-play"></i>
                        </span>
                                    </a>
                                </figcaption>
                            </figure>

                            <div class="media-body">
                                <a class="d-block g-color-bluegray g-font-weight-700 g-font-size-12 text-uppercase mb-1" href="#!">Architecture</a>
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Office III builds simple open-air center on Island</a></h4>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 mr-3">
                                <img class="img-fluid" src="/public/unity_assets/img-temp/230x230/img5.jpg" alt="Image Description">
                            </figure>

                            <div class="media-body">
                                <a class="d-block g-color-lightred g-font-weight-700 g-font-size-12 text-uppercase mb-1" href="#!">Travel</a>
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Revealed: World's 10 most beautiful cities</a></h4>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 g-pos-rel mr-3">
                                <img class="img-fluid" src="/public/unity_assets/img-temp/230x230/img6.jpg" alt="Image Description">

                                <figcaption class="g-absolute-centered">
                                    <a class="js-fancybox d-block" href="javascript:;"
                                       data-src="//vimeo.com/167434033"
                                       data-speed="350"
                                       data-caption="Single Image">
                        <span class="u-icon-v2 u-icon-size--xs g-brd-white g-color-white g-color-primary--hover g-bg-white--hover rounded-circle g-cursor-pointer">
                          <i class="g-pos-rel g-left-2 fa fa-play"></i>
                        </span>
                                    </a>
                                </figcaption>
                            </figure>

                            <div class="media-body">
                                <a class="d-block g-color-teal g-font-weight-700 g-font-size-12 text-uppercase mb-1" href="#!">Hi-Tech</a>
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Borrowing goes hi-tech at library</a></h4>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 mr-3">
                                <img class="img-fluid" src="/public/unity_assets/img-temp/230x230/img7.jpg" alt="Image Description">
                            </figure>

                            <div class="media-body">
                                <a class="d-block g-color-cyan g-font-weight-700 g-font-size-12 text-uppercase mb-1" href="#!">Sport</a>
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Adidas originals unveils the new tubular dawn</a></h4>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 mr-3">
                                <img class="img-fluid" src="/public/unity_assets/img-temp/230x230/img8.jpg" alt="Image Description">
                            </figure>

                            <div class="media-body">
                                <a class="d-block g-color-purple g-color-purple--hover g-font-weight-700 g-font-size-12 text-uppercase mb-1" href="#!">Start-Up</a>
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Apple video explain how iOS work on MacBook</a></h4>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 mr-3">
                                <img class="img-fluid" src="/public/unity_assets/img-temp/230x230/img9.jpg" alt="Image Description">
                            </figure>

                            <div class="media-body">
                                <a class="d-block g-color-brown g-font-weight-700 g-font-size-12 text-uppercase mb-1" href="#!">Fashion</a>
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Olivia Palermo reveals zara strategy</a></h4>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
                <!-- End Footer - Popular Stories Carousel -->
            </div>
        </div>

        <div class="container">
            <!-- Footer - Content -->
            <div class="g-brd-bottom--md g-brd-secondary-light-v2 g-pb-30--md g-mb-30">
                <div class="row">
                    <div class="col-6 col-md-3 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                        <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">News</h3>

                        <!-- News -->
                        <ul class="list-unstyled mb-0">
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">World</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">U.S.</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Politics</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Business</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Economy</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Tech</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Science</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Health</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Sports</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Education</a>
                            </li>
                        </ul>
                        <!-- End News -->
                    </div>

                    <div class="col-6 col-md-3 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                        <div class="g-pl-10--md">
                            <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Opinion</h3>

                            <!-- Opinion -->
                            <ul class="list-unstyled mb-0">
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Today's Opinion</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Contributing Writers</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Letters</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Sunday Review</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Taking Note</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Room for Debate</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Op-Ed Columnists</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Editorials</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Op-Ed Contributors</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Video: Opinion</a>
                                </li>
                            </ul>
                            <!-- End Opinion -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="g-pl-10--md">
                            <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Magazines</h3>

                            <!-- Carousel -->
                            <div class="js-carousel g-mx-minus-5"
                                 data-infinite="true"
                                 data-slides-show="2"
                                 data-lazy-load="ondemand"
                                 data-arrows-classes="u-arrow-v1 g-pos-abs g-top-minus-35 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover"
                                 data-arrow-left-classes="fa fa-angle-left g-right-30"
                                 data-arrow-right-classes="fa fa-angle-right g-right-0"
                                 data-responsive='[{
                         "breakpoint": 1200,
                         "settings": {
                           "slidesToShow": 2
                         }
                       }, {
                         "breakpoint": 992,
                         "settings": {
                           "slidesToShow": 1
                         }
                       }, {
                         "breakpoint": 768,
                         "settings": {
                           "slidesToShow": 2
                         }
                       }, {
                         "breakpoint": 480,
                         "settings": {
                           "slidesToShow": 1
                         }
                       }]'>
                                <div class="js-slide g-px-5">
                                    <!-- Magazines -->
                                    <figure class="u-block-hover g-pos-rel">
                                        <img class="img-fluid u-block-hover__main--zoom-v1 g-transition-0_5" src="/public/unity_assets/img-temp/350x400/img3.jpg" alt="Image Description">
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h2 class="h4 g-color-white">Singer<br>of the Year</h2>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white">Manchester Evening</span>
                                            </div>
                                            <div class="w-50 text-right g-pos-abs g-bottom-0 g-right-0 g-pa-20">
                                                <span class="d-block h6 g-color-white">2017</span>
                                            </div>
                                            <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                        </figcaption>
                                    </figure>
                                    <!-- End Magazines -->
                                </div>

                                <div class="js-slide g-px-5">
                                    <!-- Magazines -->
                                    <figure class="u-block-hover g-pos-rel">
                                        <img class="img-fluid u-block-hover__main--zoom-v1 g-transition-0_5" src="/public/unity_assets/img-temp/350x400/img2.jpg" alt="Image Description">
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h2 class="h4 g-color-white">Trip to<br>Wonderland</h2>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white">The New York Times</span>
                                            </div>
                                            <div class="w-50 text-right g-pos-abs g-bottom-0 g-right-0 g-pa-20">
                                                <span class="d-block h6 g-color-white">2017</span>
                                            </div>
                                            <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                        </figcaption>
                                    </figure>
                                    <!-- End Magazines -->
                                </div>

                                <div class="js-slide g-px-5">
                                    <!-- Magazines -->
                                    <figure class="u-block-hover g-pos-rel">
                                        <img class="img-fluid u-block-hover__main--zoom-v1 g-transition-0_5" src="/public/unity_assets/img-temp/350x400/img1.jpg" alt="Image Description">
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h2 class="h4 g-color-white">Science<br>in Yellow</h2>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white">Sunday News</span>
                                            </div>
                                            <div class="w-50 text-right g-pos-abs g-bottom-0 g-right-0 g-pa-20">
                                                <span class="d-block h6 g-color-white">2017</span>
                                            </div>
                                            <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                        </figcaption>
                                    </figure>
                                    <!-- End Magazines -->
                                </div>

                                <div class="js-slide g-px-5">
                                    <!-- Magazines -->
                                    <figure class="u-block-hover g-pos-rel">
                                        <img class="img-fluid u-block-hover__main--zoom-v1 g-transition-0_5" src="/public/unity_assets/img-temp/350x400/img4.jpg" alt="Image Description">
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h2 class="h4 g-color-white">Magnificent<br>Woman</h2>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white">The New York Times</span>
                                            </div>
                                            <div class="w-50 text-right g-pos-abs g-bottom-0 g-right-0 g-pa-20">
                                                <span class="d-block h6 g-color-white">2017</span>
                                            </div>
                                            <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                        </figcaption>
                                    </figure>
                                    <!-- End Magazines -->
                                </div>
                            </div>
                            <!-- End Carousel -->
                        </div>
                    </div>

                    <div class="w-100 g-brd-bottom--md g-brd-secondary-light-v2 g-pb-40--md g-mb-40"></div>

                    <div class="col-sm-4 col-md-3 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                        <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Arts</h3>

                        <!-- Arts -->
                        <ul class="list-unstyled mb-0">
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Movies</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Sculptures</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Books</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Dance</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Television</a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Video: Arts</a>
                            </li>
                        </ul>
                        <!-- End Arts -->
                    </div>

                    <div class="col-sm-8 col-md-6 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                        <div class="g-pl-10--md">
                            <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-2">Listing &amp; More</h3>

                            <div class="row">
                                <!-- Listing & More -->
                                <ul class="col list-unstyled mb-0">
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Reader Center</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Classifieds</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Tools &amp; Services</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Unify Topics</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Events Guide</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Blogs</a>
                                    </li>
                                </ul>
                                <!-- End Listing & More -->

                                <!-- Listing & More -->
                                <ul class="col list-unstyled mb-0">
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Multimedia</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Photography</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Music</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Video</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Unify Store</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Unify Journeys</a>
                                    </li>
                                </ul>
                                <!-- End Listing & More -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="g-pl-10--md">
                            <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Subscribe</h3>

                            <!-- Subscribe -->
                            <ul class="list-unstyled mb-0">
                                <li class="g-px-0 g-my-8">
                                    <i class="align-middle g-color-primary mr-2 icon-real-estate-044 u-line-icon-pro"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Home Delivery</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="align-middle g-color-primary mr-2 icon-education-060 u-line-icon-pro"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Digital Subscriptions</a>
                                </li>
                                <li class="g-px-0 g-my-15">
                                    <i class="align-middle g-color-primary mr-2 icon-finance-160 u-line-icon-pro"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!">Corporate Subscriptions</a>
                                </li>
                                <li class="dropdown-divider g-brd-secondary-light-v2 g-px-0 g-mt-8 g-my-15"></li>
                                <li class="row g-px-0 g-my-8 g-mx-minus-5">
                                    <div class="col g-px-5 mb-2">
                                        <!-- Button -->
                                        <button class="btn btn-block u-btn-black g-brd-primary--hover g-bg-primary--hover text-left g-px-12" type="button">
                                            <div class="media align-items-center">
                                                <div class="d-flex mr-3">
                                                    <i class="g-font-size-25 fa fa-android"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span class="d-block g-font-size-10">Get it for</span>
                                                    <span class="d-block g-font-size-15">Android</span>
                                                </div>
                                            </div>
                                        </button>
                                        <!-- End Button -->
                                    </div>

                                    <div class="col g-px-5 mb-2">
                                        <!-- Button -->
                                        <button class="btn btn-block u-btn-black g-brd-primary--hover g-bg-primary--hover text-left g-px-12" type="button">
                                            <div class="media align-items-center">
                                                <div class="d-flex mr-3">
                                                    <i class="g-font-size-25 fa fa-apple"></i>
                                                </div>
                                                <div class="media-body">
                                                    <span class="d-block g-font-size-10">Get it for</span>
                                                    <span class="d-block g-font-size-15">iOS</span>
                                                </div>
                                            </div>
                                        </button>
                                        <!-- End Button -->
                                    </div>
                                </li>
                            </ul>
                            <!-- End Subscribe -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer - Content -->

            <!-- Footer - Top Section -->
            <div class="g-brd-bottom g-brd-secondary-light-v2 g-mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4 g-hidden-sm-down g-mb-30">
                        <!-- Logo -->
                        <a href="bm-classic-home-2.html">
                            <img class="g-width-150" src="/public/unity_assets/img/logo.png" alt="Logo">
                        </a>
                        <!-- End Logo -->
                    </div>

                    <div class="col-md-4 ml-auto g-mb-30">
                        <!-- Social Icons -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded" href="#!"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Like Us on Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded" href="#!"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Follow Us on Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded" href="#!"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Join Our Cirlce on Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded" href="#!"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Subscribe to Our YouTube Channel">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded" href="#!"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Follow Us on Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded" href="#!"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="RSS">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Icons -->
                    </div>

                    <div class="col-md-4 text-center text-md-right g-mb-30">
                        <!-- Subscribe Form -->
                        <form class="input-group rounded">
                            <input class="form-control g-brd-secondary-light-v2 g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-secondary-light-v3 g-font-weight-400 g-font-size-13 g-px-20 g-py-12" type="email" placeholder="Enter your email address">
                            <span class="input-group-append g-brd-none g-py-0 g-pr-0">
                    <button class="btn u-btn-white g-color-primary--hover g-font-weight-600 g-font-size-13 text-uppercase g-py-12 g-px-20" type="submit">Subscribe</button>
                  </span>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
            <!-- End Footer - Top Section -->

            <!-- Footer - Bottom Section -->
            <div class="row align-items-center">
                <div class="col-md-2 g-brd-right--md g-brd-secondary-light-v2 g-mb-30">
                    <!-- Copyright -->
                    <p class="g-color-secondary-light-v1 g-font-size-12 mb-0">&copy; 2018 Htmlstream.</p>
                    <!-- End Copyright -->
                </div>

                <div class="col-md-8 g-brd-right--md g-brd-secondary-light-v2 g-mb-30">
                    <!-- Links -->
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item g-pl-0 g-pr-10">
                            <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Contact Us</a>
                        </li>
                        <li class="list-inline-item g-px-10">
                            <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Help</a>
                        </li>
                        <li class="list-inline-item g-px-10">
                            <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Work with Us</a>
                        </li>
                        <li class="list-inline-item g-px-10">
                            <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Advertise</a>
                        </li>
                        <li class="list-inline-item g-px-10">
                            <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Your Ad Choices</a>
                        </li>
                        <li class="list-inline-item g-px-10">
                            <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Privacy</a>
                        </li>
                        <li class="list-inline-item g-px-10">
                            <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Terms of Use</a>
                        </li>
                        <li class="list-inline-item g-px-10">
                            <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Send Feedback</a>
                        </li>
                    </ul>
                    <!-- End Links -->
                </div>

                <div class="col-md-2 g-mb-30">
                    <!-- Large Button Group -->
                    <div class="btn-group dropup float-md-right">
                        <button class="btn align-items-center g-color-secondary-light-v1 g-bg-transparent g-color-primary--hover g-font-size-12 g-px-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="g-pos-rel g-top-2" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                <defs>
                                    <clipPath id="a">
                                        <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                                    <g stroke-width="1pt">
                                        <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                                        <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                                        <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                                        <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                                    </g>
                                </g>
                            </svg>
                            English
                            <i class="g-font-size-12 ml-2 fa fa-caret-up"></i>
                        </button>
                        <div class="dropdown-menu g-brd-secondary-light-v2 g-bg-white g-font-size-12">
                            <a class="dropdown-item g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-py-5" href="#!">
                                <svg class="g-pos-rel g-top-1" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                    <defs>
                                        <clipPath id="a">
                                            <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                                        <g stroke-width="1pt">
                                            <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                                            <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                                            <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                                            <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                                        </g>
                                    </g>
                                </svg>
                                English
                            </a>
                            <a class="dropdown-item g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-py-5" href="#!">
                                <svg class="g-pos-rel g-top-1" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                    <g stroke-width="1pt" fill-rule="evenodd">
                                        <path fill="#fff" d="M0 0h640v480H0z"/>
                                        <path fill="#00267f" d="M0 0h213.33v480H0z"/>
                                        <path fill="#f31830" d="M426.67 0H640v480H426.67z"/>
                                    </g>
                                </svg>
                                Spanish
                            </a>
                            <a class="dropdown-item g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-py-5" href="#!">
                                <svg class="g-pos-rel g-top-1" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                    <g fill-rule="evenodd" stroke-width="1pt">
                                        <path fill="#fff" d="M0 0h640v480H0z"/>
                                        <path fill="#0039a6" d="M0 160.003h640V480H0z"/>
                                        <path fill="#d52b1e" d="M0 319.997h640V480H0z"/>
                                    </g>
                                </svg>
                                Russian
                            </a>
                            <a class="dropdown-item g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-py-5" href="#!">
                                <svg class="g-pos-rel g-top-1" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                    <path fill="#ffce00" d="M0 320h640v160.002H0z"/>
                                    <path d="M0 0h640v160H0z"/>
                                    <path fill="#d00" d="M0 160h640v160H0z"/>
                                </svg>
                                German
                            </a>
                        </div>
                    </div>
                    <!-- End Large Button Group -->
                </div>
            </div>
            <!-- End Footer - Bottom Section -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Go To -->
    <a class="js-go-to u-go-to-v2" href="#!"
       data-type="fixed"
       data-position='{
           "bottom": 15,
           "right": 15
         }'
       data-offset-top="400"
       data-compensation="#js-header"
       data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
    <!-- End Go To -->
</main>

<div class="u-outer-spaces-helper"></div>

<!-- JS Global Compulsory -->
<script src="/public/unity_assets/vendor/jquery/jquery.min.js"></script>
<script src="/public/unity_assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="/public/unity_assets/vendor/popper.min.js"></script>
<script src="/public/unity_assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/public/unity_assets/vendor/appear.js"></script>
<script src="/public/unity_assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="/public/unity_assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="/public/unity_assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="/public/unity_assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/public/unity_assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="/public/unity_assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="/public/unity_assets/js/hs.core.js"></script>
<script src="/public/unity_assets/js/components/hs.header.js"></script>
<script src="/public/unity_assets/js/helpers/hs.hamburgers.js"></script>
<script src="/public/unity_assets/js/components/hs.dropdown.js"></script>
<script src="/public/unity_assets/js/components/hs.counter.js"></script>
<script src="/public/unity_assets/js/components/hs.onscroll-animation.js"></script>
<script src="/public/unity_assets/js/components/hs.sticky-block.js"></script>
<script src="/public/unity_assets/js/components/hs.carousel.js"></script>
<script src="/public/unity_assets/js/components/hs.popup.js"></script>
<script src="/public/unity_assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="/public/unity_assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of MegaMenu
        $('.js-mega-menu').HSMegaMenu();

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            afterOpen: function(){
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of scroll animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
    });

    $(window).on('load', function () {
        // initialization of sticky blocks
        $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
    });
</script>
</body>
</html>