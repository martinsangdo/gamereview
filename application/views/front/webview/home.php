<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Latest game review, news, trailer</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="description" content="Latest PC, Mobile, Playstation game review, trailers and news">
    <meta name="keywords" content="latest game review, game trailer, game news, pc game, mobile game, xbox game, wii game, ps game">
    <meta name="author" content="Martin SangDo">
    <meta name="copyright" content="Copyright © 2018 by gamereviewnews.com"/>

    <meta property="og:title" content="Latest game review, news, trailer" />
    <meta property="og:description" content="Latest PC, Mobile, Playstation game review, trailers and news" />
    <meta property="og:type" content="gamereviewnews:article" />
    <meta property="og:url" content="gamereviewnews.com" />
    <meta property="og:site_name" content="Gamereviewnews" />
    <meta property="fb:app_id" content="" />
    <meta property="og:image" content="<?php echo $block_key_1[0]->thumb_url;?>"  />
    <meta property="og:image:url" content="<?php echo $block_key_1[0]->thumb_url;?>" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/public/favicon.ico"/>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C300%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik"/>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/bootstrap/bootstrap.min.css"/>

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-line/css/simple-line-icons.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-line-pro/style.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-hs/style.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/dzsparallaxer/dzsparallaxer.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/dzsparallaxer/dzsscroller/scroller.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/dzsparallaxer/advancedscroller/plugin.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/animate.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/custombox/custombox.min.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/hs-megamenu/src/hs.megamenu.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/hamburgers/hamburgers.min.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/fancybox/jquery.fancybox.css"/>

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="/public/unity_assets/css/styles.bm-classic.css"/>

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/public/unity_assets/css/custom.css"/>
    <script src="/public/js/home.js"></script>

</head>

<body>
<main>
    <?php require('header.php'); ?>

    <!-- Promo Block -->
    <section class="g-py-50">
        <div class="container">
            <!-- News Section -->
            <div class="row no-gutters">
                <?php
                $data_block = $block_key_1;
                for ($i=0; $i<2; $i++){ ?>
                <div class="col-lg-6 g-pr-1--lg g-mb-30 g-mb-2--lg">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                            <div class="home1-center-cropped"
                                 style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                            </div>
                        </figure>

                        <div class="g-pos-abs g-bottom-30 g-left-30 g-right-30">
                            <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> <?php echo format_post_time($data_block[$i]->time); ?>
                            </small>

                            <h3 class="h4 g-my-10">
                                <a class="g-color-white g-color-white--hover" href="/article/<?php echo $data_block[$i]->slug; ?>"><?php echo $data_block[$i]->title; ?></a>
                            </h3>

                        </div>
                    </article>
                    <!-- End Article -->
                </div>
                <?php } //end for ?>

                <?php for ($i=2; $i<5; $i++){ ?>
                <div class="col-lg-4 g-pr-1--lg g-mb-30 g-mb-0--lg">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-shadow-v25 u-bg-overlay g-bg-white-gradient-opacity-v1--after">
                            <div class="home2-center-cropped"
                                 style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                            </div>
                        </figure>

                        <div class="w-100 text-center g-absolute-centered g-px-30">
                            <h3 class="h4 g-mt-10">
                                <a class="g-color-white" href="/article/<?php echo $data_block[$i]->slug; ?>"><?php echo $data_block[$i]->title; ?></a>
                            </h3>
                            <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> <?php echo format_post_time($data_block[$i]->time); ?>
                            </small>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>
                <?php } //end for ?>
            </div>
            <!-- News Section -->
        </div>
    </section>
    <!-- End Promo Block -->

    <!-- News Content -->
    <section>
        <div class="container">
            <!-- News Section 1 -->
            <div class="row g-mb-60">
                <!-- Articles Content -->
                <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                    <!-- Latest News -->
                    <div class="g-mb-50">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Latest News</h2>
                        </div>

                        <div class="row">
                            <!-- Article (Leftside) -->
                            <div class="col-lg-7 g-mb-50 g-mb-0--lg">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <img class="img-fluid w-100" src="<?php echo $block_key_13[0]->thumb_url;?>"/>
                                    </figure>

                                    <h3 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_13[0]->title;?></a>
                                    </h3>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_13[0]->author_name;?></a>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_13[0]->time);?>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_13[0]->comment_num;?>
                                            </a>
                                        </li>
                                    </ul>

                                    <p class="g-color-gray-dark-v2"><?php echo $block_key_13[0]->excerpt;?></p>
                                </article>
                            </div>
                            <!-- End Article (Leftside) -->

                            <!-- Article (Rightside) -->
                            <div class="col-lg-5">
                                <!-- Article -->
                                <article class="media">
                                    <a class="d-flex u-shadow-v25 align-self-center mr-3" href="#!">
                                        <img class="g-width-80 g-height-80" src="<?php echo $block_key_13[1]->thumb_url;?>"/>
                                    </a>

                                    <div class="media-body">
                                        <h3 class="h6">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_13[1]->title;?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($block_key_13[1]->time);?>
                                            </li>
                                            <li class="list-inline-item">/</li>
                                            <li class="list-inline-item">
                                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_13[1]->comment_num;?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-my-25">

                                <!-- Article -->
                                <article class="media">
                                    <a class="d-flex u-shadow-v25 align-self-center mr-3" href="#!">
                                        <img class="g-width-80 g-height-80" src="<?php echo $block_key_13[2]->thumb_url;?>"/>
                                    </a>

                                    <div class="media-body">
                                        <h3 class="h6">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_13[2]->title;?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($block_key_13[2]->time);?>
                                            </li>
                                            <li class="list-inline-item">/</li>
                                            <li class="list-inline-item">
                                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_13[2]->comment_num;?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-my-25">

                                <!-- Article -->
                                <article class="media">
                                    <a class="d-flex u-shadow-v25 align-self-center mr-3" href="#!">
                                        <img class="g-width-80 g-height-80" src="<?php echo $block_key_13[3]->thumb_url;?>"/>
                                    </a>

                                    <div class="media-body">
                                        <h3 class="h6">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_13[3]->title;?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($block_key_13[3]->time);?>
                                            </li>
                                            <li class="list-inline-item">/</li>
                                            <li class="list-inline-item">
                                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_13[3]->comment_num;?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-my-25">

                                <!-- Article -->
                                <article class="media">
                                    <a class="d-flex u-shadow-v25 align-self-center mr-3" href="#!">
                                        <img class="g-width-80 g-height-80" src="<?php echo $block_key_13[4]->thumb_url;?>"/>
                                    </a>

                                    <div class="media-body">
                                        <h3 class="h6">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_13[4]->title;?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($block_key_13[4]->time);?>
                                            </li>
                                            <li class="list-inline-item">/</li>
                                            <li class="list-inline-item">
                                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_13[4]->comment_num;?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Article -->
                            </div>
                            <!-- End Article (Rightside) -->
                        </div>
                    </div>
                    <!-- End Latest News -->

                    <!-- Breaking News -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Breaking News</h2>
                        </div>

                        <div class="row g-mb-30">
                            <!-- Article Image -->
                            <div class="col-md-5">
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                                    <img class="img-fluid w-100" src="<?php echo $block_key_11[0]->thumb_url;?>"/>
                                </figure>
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="col-md-7 align-self-center">
                                <h3 class="h4 g-mb-15">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_11[0]->title;?></a>
                                </h3>

                                <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_11[0]->author_name;?></a>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_11[0]->time);?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_11[0]->comment_num;?>
                                        </a>
                                    </li>
                                </ul>

                                <p class="g-color-gray-dark-v2"><?php echo $block_key_11[0]->excerpt;?></p>
                            </div>
                            <!-- End Article Content -->
                        </div>
                    </div>
                    <!-- End Breaking News -->

                    <!-- Featured Articles -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Featured Articles</h2>
                        </div>

                        <div class="row g-mb-60">
                            <div class="col-lg-6 g-mb-30 g-mb-0--lg">
                                <!-- Article -->
                                <article class="g-mb-30">
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="home3-center-cropped"
                                             style="background-image: url('<?php echo $block_key_2[0]->thumb_url;?>');">
                                        </div>
                                    </figure>

                                    <h3 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="/article/<?php echo $block_key_2[0]->slug; ?>"><?php echo $block_key_2[0]->title;?></a>
                                    </h3>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_2[0]->author_name;?></a>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_2[0]->time);?>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_2[0]->comment_num;?>
                                            </a>
                                        </li>
                                    </ul>

                                    <p class="g-color-gray-dark-v2"><?php echo $block_key_2[0]->excerpt;?></p>
                                </article>
                                <!-- End Article -->

                                <!-- Article -->
                                <article>
                      <span class="g-font-size-12">
                        <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_2[1]->author_name;?></a>
                      </span>
                                    <h3 class="h6">
                                        <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_2[1]->title;?></a>
                                    </h3>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                                <!-- Article -->
                                <article>
                      <span class="g-font-size-12">
                        <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_2[2]->author_name;?></a>
                      </span>
                                    <h3 class="h6">
                                        <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_2[2]->title;?></a>
                                    </h3>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                                <!-- Article -->
                                <article>
                      <span class="g-font-size-12">
                        <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_2[3]->author_name;?></a>
                      </span>
                                    <h3 class="h6">
                                        <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_2[3]->title;?></a>
                                    </h3>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                                <!-- Article -->
                                <article>
                      <span class="g-font-size-12">
                        <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_2[4]->author_name;?></a>
                      </span>
                                    <h3 class="h6">
                                        <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_2[4]->title;?></a>
                                    </h3>
                                </article>
                                <!-- End Article -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Article -->
                                <article class="g-mb-30">
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="home3-center-cropped"
                                             style="background-image: url('<?php echo $block_key_2[5]->thumb_url;?>');">
                                        </div>
                                    </figure>

                                    <h3 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_2[5]->title;?></a>
                                    </h3>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_2[5]->author_name;?></a>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_2[5]->time);?>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_2[5]->comment_num;?>
                                            </a>
                                        </li>
                                    </ul>

                                    <p class="g-color-gray-dark-v2"><?php echo $block_key_2[5]->excerpt;?></p>
                                </article>
                                <!-- End Article -->

                                <!-- Article -->
                                <article>
                      <span class="g-font-size-12">
                        <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_2[6]->author_name;?></a>
                      </span>
                                    <h3 class="h6">
                                        <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_2[6]->title;?></a>
                                    </h3>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                                <!-- Article -->
                                <article>
                      <span class="g-font-size-12">
                        <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_2[7]->author_name;?></a>
                      </span>
                                    <h3 class="h6">
                                        <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_2[7]->title;?></a>
                                    </h3>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                                <!-- Article -->
                                <article>
                      <span class="g-font-size-12">
                        <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_2[8]->author_name;?></a>
                      </span>
                                    <h3 class="h6">
                                        <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_2[8]->title;?></a>
                                    </h3>
                                </article>
                                <!-- End Article -->

                                <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                                <!-- Article -->
                                <article>
                      <span class="g-font-size-12">
                        <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_2[9]->author_name;?></a>
                      </span>
                                    <h3 class="h6">
                                        <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_2[9]->title;?></a>
                                    </h3>
                                </article>
                                <!-- End Article -->
                            </div>
                        </div>
                    </div>
                    <!-- End Articles -->

                    <!-- Recent Videos -->
                    <div class="u-heading-v3-1 g-mb-30">
                        <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Recent Videos</h2>
                    </div>

                    <div class="row">
                        <!-- Article Video -->
                        <div class="col-lg-4 col-sm-6 g-mb-30">
                            <article>
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                    <img class="img-fluid w-100" src="<?php echo $video_block_1[0]->thumb_url; ?>"/>
                                    <a href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_1[0]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                            <i class="fa fa-play g-left-2"></i>
                                        </span>
                                    </a>

                                </figure>

                                <h3 class="g-font-size-16 g-mb-10">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $video_block_1[0]->title; ?></a>
                                </h3>
                            </article>
                        </div>
                        <!-- End Article Video -->

                        <!-- Article Video -->
                        <div class="col-lg-4 col-sm-6 g-mb-30">
                            <article>
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                    <img class="img-fluid w-100" src="<?php echo $video_block_1[1]->thumb_url; ?>"/>

                                    <a href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_1[1]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                            <i class="fa fa-play g-left-2"></i>
                                        </span>
                                    </a>
                                </figure>

                                <h3 class="g-font-size-16 g-mb-10">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $video_block_1[1]->title; ?></a>
                                </h3>
                            </article>
                        </div>
                        <!-- End Article Video -->

                        <!-- Article Video -->
                        <div class="col-lg-4 col-sm-6 g-mb-30">
                            <article>
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                    <img class="img-fluid w-100" src="<?php echo $video_block_1[2]->thumb_url; ?>"/>

                                    <a href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_1[2]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                            <i class="fa fa-play g-left-2"></i>
                                        </span>
                                    </a>
                                </figure>

                                <h3 class="g-font-size-16 g-mb-10">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $video_block_1[2]->title; ?></a>
                                </h3>
                            </article>
                        </div>
                        <!-- End Article Video -->

                        <!-- Article Video -->
                        <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                            <article>
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                    <img class="img-fluid w-100" src="<?php echo $video_block_1[3]->thumb_url; ?>"/>

                                    <a href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_1[3]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                            <i class="fa fa-play g-left-2"></i>
                                        </span>
                                    </a>
                                </figure>

                                <h3 class="g-font-size-16 g-mb-10">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $video_block_1[3]->title; ?></a>
                                </h3>
                            </article>
                        </div>
                        <!-- End Article Video -->

                        <!-- Article Video -->
                        <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                            <article>
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                    <img class="img-fluid w-100" src="<?php echo $video_block_1[4]->thumb_url; ?>"/>

                                    <a href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_1[4]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                            <i class="fa fa-play g-left-2"></i>
                                        </span>
                                    </a>
                                </figure>

                                <h3 class="g-font-size-16 g-mb-10">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $video_block_1[4]->title; ?></a>
                                </h3>
                            </article>
                        </div>
                        <!-- End Article Video -->

                        <!-- Article Video -->
                        <div class="col-lg-4 col-sm-6">
                            <article>
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                    <img class="img-fluid w-100" src="<?php echo $video_block_1[5]->thumb_url; ?>"/>

                                    <a href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_1[5]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                            <i class="fa fa-play g-left-2"></i>
                                        </span>
                                    </a>
                                </figure>

                                <h3 class="g-font-size-16 g-mb-10">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $video_block_1[5]->title; ?></a>
                                </h3>
                            </article>
                        </div>
                        <!-- End Article Video -->
                    </div>
                    <!-- End Recent Videos -->

                    <div id="stickyblock-end"></div>
                </div>
                <!-- End Articles Content -->

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <!-- Useful Links -->
                    <div class="g-mb-50">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Useful Links</h2>
                        </div>

                        <ul class="list-unstyled">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_4[0]->title;?></a>
                                </h4>
                            </li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_4[1]->title;?></a>
                                </h4>
                            </li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_4[2]->title;?></a>
                                </h4>
                            </li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_4[3]->title;?></a>
                                </h4>
                            </li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_4[4]->title;?></a>
                                </h4>
                            </li>
                        </ul>
                    </div>
                    <!-- End Useful Links -->

                    <!-- Subscribe -->
                    <div class="u-shadow-v25 u-bg-overlay g-bg-img-hero g-bg-white-gradient-opacity-v2--after g-py-40 g-px-20 g-mb-50" style="background-image: url(/public/unity_assets/img-temp/500x600/img1.jpg);">
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
                                <input class="form-control g-brd-none g-font-size-13 g-px-13 g-py-11" type="email" placeholder="Your Email">
                                <div class="input-group-btn">
                                    <button class="btn u-btn-primary text-uppercase g-px-20 g-py-11" type="submit">
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
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Recent Posts</h2>
                        </div>

                        <!-- Article -->
                        <article class="media g-mb-30">
                            <a class="d-flex u-shadow-v25 mr-3" href="#!">
                                <img class="g-width-60 g-height-60" src="<?php echo $block_key_3[0]->thumb_url;?>"/>
                            </a>

                            <div class="media-body">
                                <h3 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_3[0]->title;?></a>
                                </h3>

                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_3[0]->time);?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_3[0]->comment_num;?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="media g-mb-30">
                            <a class="d-flex u-shadow-v25 mr-3" href="#!">
                                <img class="g-width-60 g-height-60" src="<?php echo $block_key_3[1]->thumb_url;?>"/>
                            </a>

                            <div class="media-body">
                                <h3 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_3[1]->title;?></a>
                                </h3>

                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_3[1]->time);?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_3[1]->comment_num;?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="media g-mb-30">
                            <a class="d-flex u-shadow-v25 mr-3" href="#!">
                                <img class="g-width-60 g-height-60" src="<?php echo $block_key_3[2]->thumb_url;?>"/>
                            </a>

                            <div class="media-body">
                                <h3 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_3[2]->title;?></a>
                                </h3>

                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_3[2]->time);?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_3[2]->comment_num;?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="media">
                            <a class="d-flex u-shadow-v25 mr-3" href="#!">
                                <img class="g-width-60 g-height-60" src="<?php echo $block_key_3[3]->thumb_url;?>"/>
                            </a>

                            <div class="media-body">
                                <h3 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_3[3]->title;?></a>
                                </h3>

                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_3[3]->time);?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_3[3]->comment_num;?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                    <!-- End Recent Posts -->

                    <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
                        <!-- Popular Videos -->
                        <div class="g-mb-50">
                            <article class="g-pos-rel">
                                <figure class="u-shadow-v25 g-bg-img-hero g-min-height-400" style="background-image: url(/public/unity_assets/img-temp/500x650/img2.jpg);"></figure>

                                <span class="text-center g-pos-abs g-top-20 g-left-0">
                      <a class="btn u-btn-red text-uppercase rounded-0" href="#!">Discover</a>
                      <small class="g-bg-black g-color-white g-pa-5 d-block">July 09, 2017</small>
                    </span>

                                <span class="u-icon-v3 g-font-size-default g-bg-white g-color-black g-bg-gray-dark-v2--hover g-color-white--hover g-rounded-50x g-cursor-pointer g-absolute-centered">
                      <i class="fa fa-play g-left-2"></i>
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
                                <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Social Links</h2>
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
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
            <!-- News Section 1 -->

            <!-- News Section 2 -->
            <div class="row no-gutters g-mb-60">
                <div class="col-lg-4 g-pr-2--lg g-mb-30 g-mb-0--lg">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-shadow-v25 u-bg-overlay g-bg-white-gradient-opacity-v1--after">
                            <img class="u-block-hover__main--zoom-v1 img-fluid" src="<?php echo $block_key_5[0]->thumb_url;?>"/>
                        </figure>

                        <div class="w-100 text-center g-absolute-centered g-px-20">
                            <h3 class="h4 g-mt-10">
                                <a class="g-color-white" href="#!"><?php echo $block_key_5[0]->title;?></a>
                            </h3>
                            <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> <?php echo format_post_time($block_key_5[0]->time);?>
                            </small>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-lg-4 g-px-1--lg g-mb-30 g-mb-0--lg">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-shadow-v25 u-bg-overlay g-bg-white-gradient-opacity-v1--after">
                            <img class="u-block-hover__main--zoom-v1 img-fluid" src="<?php echo $block_key_5[1]->thumb_url;?>"/>
                        </figure>
                        <div class="w-100 text-center g-absolute-centered g-px-20">
                            <h3 class="h4 g-mt-10">
                                <a class="g-color-white" href="#!"><?php echo $block_key_5[1]->title;?></a>
                            </h3>
                            <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> <?php echo format_post_time($block_key_5[0]->time);?>
                            </small>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-lg-4 g-pl-2--lg">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-shadow-v25 u-bg-overlay g-bg-white-gradient-opacity-v1--after">
                            <img class="u-block-hover__main--zoom-v1 img-fluid" src="<?php echo $block_key_5[2]->thumb_url;?>"/>
                        </figure>
                        <div class="w-100 text-center g-absolute-centered g-px-20">
                            <h3 class="h4 g-mt-10">
                                <a class="g-color-white" href="#!"><?php echo $block_key_5[2]->title;?></a>
                            </h3>
                            <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> <?php echo format_post_time($block_key_5[2]->time);?>
                            </small>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>
            </div>
            <!-- News Section 2 -->

            <!-- News Section 3 -->
            <div class="row">
                <!-- Articles Content -->
                <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                    <!-- Popular News -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Popular News</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 g-mb-50 g-mb-0--lg">
                                <!-- Article -->
                                <article class="g-mb-40">
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="home3-center-cropped" style="background-image: url('<?php echo $block_key_6[0]->thumb_url;?>');"></div>
                                    </figure>

                                    <h3 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_6[0]->title;?></a>
                                    </h3>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_6[0]->author_name;?></a>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_6[0]->time);?>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_6[0]->comment_num;?>
                                            </a>
                                        </li>
                                    </ul>

                                    <p class="g-color-gray-dark-v2"><?php echo $block_key_6[0]->excerpt;?></p>
                                </article>
                                <!-- Article -->

                                <!-- Other Articles -->
                                <article class="media">
                                    <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                        <img class="g-width-140 g-height-80" src="<?php echo $video_block_2[0]->thumb_url; ?>"/>

                                        <figcaption class="g-pos-abs g-top-5 g-left-5">
                                            <a class="btn btn-xs u-btn-darkgray text-uppercase rounded-0" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[0]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                                <i class="fa fa-play g-mr-5"></i> Play
                                            </a>
                                        </figcaption>
                                    </figure>

                                    <div class="media-body">
                                        <h3 class="g-font-size-16">
                                            <a class="g-color-gray-dark-v1" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[0]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal"><?php echo $video_block_2[0]->title; ?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($video_block_2[0]->time); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Other Articles -->

                                <hr class="g-brd-gray-light-v4 g-my-25">

                                <!-- Other Articles -->
                                <article class="media">
                                    <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                        <img class="g-width-140 g-height-80" src="<?php echo $video_block_2[1]->thumb_url; ?>"/>

                                        <figcaption class="g-pos-abs g-top-5 g-left-5">
                                            <a class="btn btn-xs u-btn-darkgray text-uppercase rounded-0" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[1]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                                <i class="fa fa-play g-mr-5"></i> Play
                                            </a>
                                        </figcaption>
                                    </figure>

                                    <div class="media-body">
                                        <h3 class="g-font-size-16">
                                            <a class="g-color-gray-dark-v1" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[1]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal"><?php echo $video_block_2[1]->title; ?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($video_block_2[1]->time); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Other Articles -->

                                <hr class="g-brd-gray-light-v4 g-my-25">

                                <!-- Other Articles -->
                                <article class="media">
                                    <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                        <img class="g-width-140 g-height-80" src="<?php echo $video_block_2[2]->thumb_url; ?>"/>

                                        <figcaption class="g-pos-abs g-top-5 g-left-5">
                                            <a class="btn btn-xs u-btn-darkgray text-uppercase rounded-0" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[2]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                                <i class="fa fa-play g-mr-5"></i> Play
                                            </a>
                                        </figcaption>
                                    </figure>

                                    <div class="media-body">
                                        <h3 class="g-font-size-16">
                                            <a class="g-color-gray-dark-v1" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[2]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal"><?php echo $video_block_2[2]->title; ?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($video_block_2[2]->time); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Other Articles -->
                            </div>

                            <div class="col-lg-6 g-mb-50 g-mb-0--lg">
                                <!-- Article -->
                                <article class="g-mb-40">
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="home3-center-cropped" style="background-image: url('<?php echo $block_key_6[1]->thumb_url;?>');"></div>
                                    </figure>

                                    <h3 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_6[1]->title;?></a>
                                    </h3>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_6[1]->author_name;?></a>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_6[1]->time);?>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_6[1]->comment_num;?>
                                            </a>
                                        </li>
                                    </ul>

                                    <p class="g-color-gray-dark-v2"><?php echo $block_key_6[1]->excerpt;?></p>
                                </article>
                                <!-- End Article -->

                                <!-- Other Articles -->
                                <article class="media">
                                    <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                        <img class="g-width-140 g-height-80" src="<?php echo $video_block_2[3]->thumb_url; ?>"/>

                                        <figcaption class="g-pos-abs g-top-5 g-left-5">
                                            <a class="btn btn-xs u-btn-darkgray text-uppercase rounded-0" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[3]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                                <i class="fa fa-play g-mr-5"></i> Play
                                            </a>
                                        </figcaption>
                                    </figure>

                                    <div class="media-body">
                                        <h3 class="g-font-size-16">
                                            <a class="g-color-gray-dark-v1" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[3]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal"><?php echo $video_block_2[3]->title; ?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($video_block_2[3]->time); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Other Articles -->

                                <hr class="g-brd-gray-light-v4 g-my-25">

                                <!-- Other Articles -->
                                <article class="media">
                                    <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                        <img class="g-width-140 g-height-80" src="<?php echo $video_block_2[4]->thumb_url; ?>"/>

                                        <figcaption class="g-pos-abs g-top-5 g-left-5">
                                            <a class="btn btn-xs u-btn-darkgray text-uppercase rounded-0" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[4]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                                <i class="fa fa-play g-mr-5"></i> Play
                                            </a>
                                        </figcaption>
                                    </figure>

                                    <div class="media-body">
                                        <h3 class="g-font-size-16">
                                            <a class="g-color-gray-dark-v1" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[4]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal"><?php echo $video_block_2[4]->title; ?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($video_block_2[4]->time); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Other Articles -->

                                <hr class="g-brd-gray-light-v4 g-my-25">

                                <!-- Other Articles -->
                                <article class="media">
                                    <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                        <img class="g-width-140 g-height-80" src="<?php echo $video_block_2[5]->thumb_url; ?>"/>

                                        <figcaption class="g-pos-abs g-top-5 g-left-5">
                                            <a class="btn btn-xs u-btn-darkgray text-uppercase rounded-0" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[5]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                                <i class="fa fa-play g-mr-5"></i> Play
                                            </a>
                                        </figcaption>
                                    </figure>

                                    <div class="media-body">
                                        <h3 class="g-font-size-16">
                                            <a class="g-color-gray-dark-v1" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $video_block_2[5]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal"><?php echo $video_block_2[5]->title; ?></a>
                                        </h3>

                                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                            <li class="list-inline-item">
                                                <?php echo format_post_time($video_block_2[5]->time); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- End Other Articles -->
                            </div>
                        </div>
                    </div>
                    <!-- End Popular News -->

                    <!-- Weekly News -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Weekly News</h2>
                        </div>

                        <!-- Articles -->
                        <div class="row g-mb-30">
                            <!-- Article Image -->
                            <div class="col-md-5">
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                                    <img class="img-fluid w-100" src="<?php echo $block_key_9[0]->thumb_url; ?>"/>
                                </figure>
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="col-md-7 align-self-center">
                                <h3 class="h4 g-mb-15">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_9[0]->title; ?></a>
                                </h3>

                                <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_9[0]->author_name; ?></a>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_9[0]->time); ?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_9[0]->comment_num; ?>
                                        </a>
                                    </li>
                                </ul>

                                <p class="g-color-gray-dark-v2"><?php echo $block_key_9[0]->excerpt; ?></p>
                            </div>
                            <!-- End Article Content -->
                        </div>
                        <!-- End Articles -->

                        <!-- Articles -->
                        <div class="row g-mb-30">
                            <!-- Article Image -->
                            <div class="col-md-5">
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                                    <img class="img-fluid w-100" src="<?php echo $block_key_9[1]->thumb_url; ?>"/>
                                </figure>
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="col-md-7 align-self-center">
                                <h3 class="h4 g-mb-15">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_9[1]->title; ?></a>
                                </h3>

                                <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_9[1]->author_name; ?></a>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_9[1]->time); ?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_9[1]->comment_num; ?>
                                        </a>
                                    </li>
                                </ul>

                                <p class="g-color-gray-dark-v2"><?php echo $block_key_9[1]->excerpt; ?></p>
                            </div>
                            <!-- End Article Content -->
                        </div>
                        <!-- End Articles -->

                        <!-- Articles -->
                        <div class="row g-mb-30">
                            <!-- Article Image -->
                            <div class="col-md-5">
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                                    <img class="img-fluid w-100" src="<?php echo $block_key_9[2]->thumb_url; ?>"/>
                                </figure>
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="col-md-7 align-self-center">
                                <h3 class="h4 g-mb-15">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_9[2]->title; ?></a>
                                </h3>

                                <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_9[2]->author_name; ?></a>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_9[2]->time); ?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_9[2]->comment_num; ?>
                                        </a>
                                    </li>
                                </ul>

                                <p class="g-color-gray-dark-v2"><?php echo $block_key_9[2]->excerpt; ?></p>
                            </div>
                            <!-- End Article Content -->
                        </div>
                        <!-- End Articles -->

                        <!-- Articles -->
                        <div class="row">
                            <!-- Article Image -->
                            <div class="col-md-5">
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                                    <img class="img-fluid w-100" src="<?php echo $block_key_9[3]->thumb_url; ?>"/>
                                </figure>
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="col-md-7 align-self-center">
                                <h3 class="h4 g-mb-15">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!"><?php echo $block_key_9[3]->title; ?></a>
                                </h3>

                                <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $block_key_9[3]->author_name; ?></a>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($block_key_9[3]->time); ?>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> <?php echo $block_key_9[3]->comment_num; ?>
                                        </a>
                                    </li>
                                </ul>

                                <p class="g-color-gray-dark-v2"><?php echo $block_key_9[3]->excerpt; ?></p>
                            </div>
                            <!-- End Article Content -->
                        </div>
                        <!-- End Articles -->
                    </div>
                    <!-- End Weekly News -->
                </div>
                <!-- End Articles -->

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <!-- Popular Tags -->
                    <div class="g-mb-20">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Popular Tags</h2>
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

                    <div id="stickyblock-start-1" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start-1" data-end-point="#stickyblock-end-1">
                        <!-- News Feed -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">News Feed</h2>
                            </div>

                            <!-- Article -->
                            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_14[0]->author_name; ?></a>
                    </span>
                                <h3 class="h6">
                                    <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_14[0]->title; ?></a>
                                </h3>
                            </article>
                            <!-- End Article -->

                            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                            <!-- Article -->
                            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_14[1]->author_name; ?></a>
                    </span>
                                <h3 class="h6">
                                    <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_14[1]->title; ?></a>
                                </h3>
                            </article>
                            <!-- End Article -->

                            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                            <!-- Article -->
                            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#!"><?php echo $block_key_14[2]->author_name; ?></a>
                    </span>
                                <h3 class="h6">
                                    <a class="g-color-gray-dark-v1" href="#!"><?php echo $block_key_14[2]->title; ?></a>
                                </h3>
                            </article>
                            <!-- End Article -->
                        </div>
                        <!-- End News Feed -->

                        <!-- Top Authors -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Top Authors</h2>
                            </div>

                            <article class="media g-mb-10">
                                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="<?php echo $block_key_7[0]->thumb_url; ?>"/>
                                <div class="media-body">
                                    <h4 class="g-font-size-16">
                                        <small class="g-color-gray-dark-v4"><?php echo $block_key_7[0]->author_name; ?></small>
                                    </h4>
                                    <a class="g-color-gray-dark-v1" href="#"><?php echo $block_key_7[0]->title; ?></a>
                                </div>
                            </article>

                            <article class="media g-mb-10">
                                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="<?php echo $block_key_7[1]->thumb_url; ?>"/>
                                <div class="media-body">
                                    <h4 class="g-font-size-16 g-color-gray-dark-v1">
                                        <small class="g-color-gray-dark-v4"><?php echo $block_key_7[1]->author_name; ?></small>
                                    </h4>
                                    <a class="g-color-gray-dark-v1" href="#"><?php echo $block_key_7[1]->title; ?></a>
                                </div>
                            </article>

                            <article class="media">
                                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="<?php echo $block_key_7[2]->thumb_url; ?>"/>
                                <div class="media-body">
                                    <h4 class="g-font-size-16 g-color-gray-dark-v1">
                                        <small class="g-color-gray-dark-v4"><?php echo $block_key_7[2]->author_name; ?></small>
                                    </h4>
                                    <a class="g-color-gray-dark-v1" href="#"><?php echo $block_key_7[2]->title; ?></a>
                                </div>
                            </article>
                        </div>
                        <!-- End Top Authors -->
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
            <!-- News Section 3 -->
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
                                <img class="img-fluid" src="<?php echo $block_key_10[0]->thumb_url; ?>"/>
                            </figure>

                            <div class="media-body">
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"><?php echo $block_key_10[0]->title; ?></a></h4>
                                <small class="g-color-gray-dark-v4"><?php echo $block_key_10[0]->author_name; ?></small>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 mr-3">
                                <img class="img-fluid" src="<?php echo $block_key_10[1]->thumb_url; ?>"/>
                            </figure>
                            <div class="media-body">
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"><?php echo $block_key_10[1]->title; ?></a></h4>
                                <small class="g-color-gray-dark-v4"><?php echo $block_key_10[1]->author_name; ?></small>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 g-pos-rel mr-3">
                                <img class="img-fluid" src="<?php echo $block_key_10[2]->thumb_url; ?>"/>
                            </figure>
                            <div class="media-body">
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"><?php echo $block_key_10[2]->title; ?></a></h4>
                                <small class="g-color-gray-dark-v4"><?php echo $block_key_10[2]->author_name; ?></small>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 mr-3">
                                <img class="img-fluid" src="<?php echo $block_key_10[3]->thumb_url; ?>"/>
                            </figure>
                            <div class="media-body">
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"><?php echo $block_key_10[3]->title; ?></a></h4>
                                <small class="g-color-gray-dark-v4"><?php echo $block_key_10[3]->author_name; ?></small>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 mr-3">
                                <img class="img-fluid" src="<?php echo $block_key_10[4]->thumb_url; ?>"/>
                            </figure>
                            <div class="media-body">
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"><?php echo $block_key_10[4]->title; ?></a></h4>
                                <small class="g-color-gray-dark-v4"><?php echo $block_key_10[4]->author_name; ?></small>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 mr-3">
                                <img class="img-fluid" src="<?php echo $block_key_10[5]->thumb_url; ?>"/>
                            </figure>
                            <div class="media-body">
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"><?php echo $block_key_10[5]->title; ?></a></h4>
                                <small class="g-color-gray-dark-v4"><?php echo $block_key_10[5]->author_name; ?></small>
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
                    <div class="col-6 col-md-6 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                        <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">News</h3>

                        <!-- News -->
                        <ul class="list-unstyled mb-0">
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[0]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[1]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[2]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[3]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[4]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[5]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[6]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[7]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[8]->title; ?></a>
                            </li>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="#!"><?php echo $block_key_12[9]->title; ?></a>
                            </li>
                        </ul>
                        <!-- End News -->
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
                                        <div class="home4-center-cropped"
                                             style="background-image: url('<?php echo $block_key_8[0]->thumb_url;?>');">
                                        </div>
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h2 class="h4 g-color-white"><?php echo $block_key_8[0]->title;?></h2>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white"><?php echo $block_key_8[0]->author_name;?></span>
                                            </div>
                                            <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                        </figcaption>
                                    </figure>
                                    <!-- End Magazines -->
                                </div>

                                <div class="js-slide g-px-5">
                                    <!-- Magazines -->
                                    <figure class="u-block-hover g-pos-rel">
                                        <div class="home4-center-cropped"
                                             style="background-image: url('<?php echo $block_key_8[1]->thumb_url;?>');">
                                        </div>
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h2 class="h4 g-color-white"><?php echo $block_key_8[1]->title;?></h2>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white"><?php echo $block_key_8[1]->author_name;?></span>
                                            </div>
                                            <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                        </figcaption>
                                    </figure>
                                    <!-- End Magazines -->
                                </div>

                                <div class="js-slide g-px-5">
                                    <!-- Magazines -->
                                    <figure class="u-block-hover g-pos-rel">
                                        <div class="home4-center-cropped"
                                             style="background-image: url('<?php echo $block_key_8[2]->thumb_url;?>');">
                                        </div>
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h2 class="h4 g-color-white"><?php echo $block_key_8[2]->title;?></h2>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white"><?php echo $block_key_8[2]->author_name;?></span>
                                            </div>
                                            <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                        </figcaption>
                                    </figure>
                                    <!-- End Magazines -->
                                </div>

                                <div class="js-slide g-px-5">
                                    <!-- Magazines -->
                                    <figure class="u-block-hover g-pos-rel">
                                        <div class="home4-center-cropped"
                                             style="background-image: url('<?php echo $block_key_8[3]->thumb_url;?>');">
                                        </div>
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h2 class="h4 g-color-white"><?php echo $block_key_8[3]->title;?></h2>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white"><?php echo $block_key_8[3]->author_name;?></span>
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
                            <input class="form-control g-brd-secondary-light-v2 g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-secondary-light-v3 g-font-weight-400 g-font-size-13 rounded g-px-20 g-py-12" type="email" placeholder="Enter your email address">
                            <span class="input-group-addon g-brd-none g-py-0 g-pr-0">
                    <button class="btn u-btn-white g-color-primary--hover g-font-weight-600 g-font-size-13 text-uppercase rounded g-py-12 g-px-20" type="submit">Subscribe</button>
                  </span>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
            <!-- End Footer - Top Section -->

            <!-- Footer - Bottom Section -->
            <div class="row align-items-center">
                <div class="col-md-2 g-mb-30">
                    <!-- Copyright -->
                    <p class="g-color-secondary-light-v1 g-font-size-12 mb-0">&copy; 2018 XuFa Ltd.</p>
                    <!-- End Copyright -->
                </div>

                <div class="col-md-8 g-mb-30">
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
<!-- Youtube video modal window -->
<div id="yt_modal" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
    <button type="button" class="close pointer" onclick="Custombox.modal.close();">
        <i class="hs-icon hs-icon-close"></i>
    </button>
    <div id="main_video_container"></div>
</div>
<!-- End Youtube video modal window -->
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
<script src="/public/unity_assets/vendor/custombox/custombox.min.js"></script>

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
<script src="/public/unity_assets/js/components/hs.modal-window.js"></script>

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
            afterOpen: function () {
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
        // initialization of popups
        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
    });

    $(window).on('load', function () {
        // initialization of sticky blocks
        setTimeout(function() { // important in this case
            $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
        }, 1);
    });
</script>

</body>
</html>