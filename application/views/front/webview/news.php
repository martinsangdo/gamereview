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
    <?php require_once('header.php'); ?>

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
    <footer class="g-bg-secondary g-pt-10">
        <div class="container">
            <?php require_once("footer.php"); ?>
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

<div class="u-outer-spaces-helper">
    <div id="meta_data_container">
        <input type="hidden" id="site_api_uri" value="<?php echo $site_detail->api_uri; ?>"/>
        <input type="hidden" id="original_post_id" value="<?php echo $article_detail->original_post_id; ?>"/>
        <input type="hidden" id="site_type" value="<?php echo $site_detail->type; ?>"/>
        <div class="hidden" id="post_excerpt"><?php echo htmlspecialchars_decode($article_detail->excerpt); ?></div>
    </div>
</div>

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
