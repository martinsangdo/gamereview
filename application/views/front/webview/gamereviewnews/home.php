<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Latest game review, news, trailer</title>
    <meta property="og:title" content="Latest game review, news, trailer" />
    <meta property="og:description" content="Gamereviewnews is one of the most latest news source for PS4, Xbox One, PS3, Xbox 360, Wii U, PS Vita, Wii, PC, 3DS, and DS video game trailers, and more." />
    <meta property="og:url" content="gamereviewnews.com" />
    <meta property="og:image" content="<?php echo isset($block_key_1[0]->thumb_url)?$block_key_1[0]->thumb_url:'';?>"  />
    <meta property="og:image:url" content="<?php echo isset($block_key_1[0]->thumb_url)?$block_key_1[0]->thumb_url:'';?>" />

    <?php require_once('common_head.php'); ?>
    <script src="/public/js/home.js"></script>
</head>

<body>
<main>
    <?php require_once('header.php'); ?>

    <!-- Promo Block -->
    <section class="g-py-50">
        <div class="container">
            <!-- News Section -->
            <div class="row no-gutters">
                <?php
                $data_block = $block_key_1;
                for ($i=0; $i<2; $i++){
                    if (isset($data_block[$i])) {?>
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

                            <h1 class="h4 g-my-10">
                                <a class="g-color-white g-color-white--hover" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                            </h1>

                        </div>
                    </article>
                    <!-- End Article -->
                </div>
                <?php }} //end for ?>

                <?php for ($i=2; $i<5; $i++){
                    if (isset($data_block[$i])) {?>
                <div class="col-lg-4 g-pr-1--lg g-mb-30 g-mb-0--lg">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-shadow-v25 u-bg-overlay g-bg-white-gradient-opacity-v1--after">
                            <div class="home2-center-cropped"
                                 style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                            </div>
                        </figure>

                        <div class="w-100 text-center g-absolute-centered g-px-30">
                            <h1 class="h4 g-mt-10">
                                <a class="g-color-white" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                            </h1>
                            <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> <?php echo format_post_time($data_block[$i]->time); ?>
                            </small>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>
                <?php }} //end for ?>
            </div>
            <!-- News Section -->
        </div>
    </section>
    <!-- End Promo Block -->

    <!-- News Content -->
    <section>
        <div class="container">
            <!-- News Section 1 -->
            <div class="row g-mb-20">
                <!-- Articles Content -->
                <div class="col-lg-9 g-mb-20 g-mb-0--lg">
                    <!-- Latest News -->
                    <div class="g-mb-20 block_data_2">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Latest News</h2>
                        </div>

                        <div class="row">
                            <!-- Article (Leftside) -->
                            <?php if (isset($block_key_13[0])){ ?>
                            <div class="col-lg-7 g-mb-50 g-mb-0--lg">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <img class="img-fluid w-100" src="<?php echo $block_key_13[0]->thumb_url;?>"/>
                                    </figure>

                                    <h1 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($block_key_13[0]->slug); ?>"><?php echo $block_key_13[0]->title;?></a>
                                    </h1>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_13[0]->time);?>
                                        </li>
                                    </ul>

                                    <p class="g-color-gray-dark-v2"><?php echo $block_key_13[0]->excerpt;?></p>
                                </article>
                            </div>
                            <?php } //end if ?>
                            <!-- End Article (Leftside) -->

                            <!-- Article (Rightside) -->
                            <div class="col-lg-5">
                                <?php
                                $data_block = $block_key_13;
                                for ($i=1; $i<7; $i++){
                                    if (isset($data_block[$i])) { ?>
                                        <!-- Article -->
                                        <article class="media">
                                            <a class="d-flex u-shadow-v25 align-self-center mr-3"
                                               href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                <img class="g-width-80 g-height-80"
                                                     src="<?php echo $data_block[$i]->thumb_url; ?>"/>
                                            </a>

                                            <div class="media-body">
                                                <h1 class="h6">
                                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                                                       href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                                </h1>

                                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                    <li class="list-inline-item">
                                                        <?php echo format_post_time($data_block[$i]->time); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <!-- End Article -->
                                        <?php if ($i != 6) { ?>
                                            <hr class="g-brd-gray-light-v4 g-my-25 block_data_2_hr"/>
                                        <?php } //end if
                                    }} //end for ?>

                            </div>
                            <!-- End Article (Rightside) -->
                        </div>
                    </div>
                    <!-- End Latest News -->

                    <!-- Breaking News -->
                    <div class="g-mb-10">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Breaking News</h2>
                        </div>
                        <?php if (isset($data_block[7])){ ?>
                        <div class="row">
                            <!-- Article Image -->
                            <div class="col-md-5">
                                <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                                    <div class="home5-center-cropped"
                                         style="background-image: url('<?php echo $data_block[7]->thumb_url;?>');">
                                    </div>
                                </figure>
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="col-md-7 align-self-center">
                                <h1 class="h4">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($data_block[7]->slug); ?>"><?php echo $data_block[7]->title;?></a>
                                </h1>

                                <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                    <li class="list-inline-item">
                                        <?php echo format_post_time($data_block[7]->time);?>
                                    </li>
                                </ul>

                                <p class="g-color-gray-dark-v2"><?php echo $data_block[7]->excerpt;?></p>
                            </div>
                            <!-- End Article Content -->
                        </div>
                        <?php } //end if ?>
                    </div>
                    <!-- End Breaking News -->

                    <div class="g-mb-10">
                        <script type="text/javascript">
                            amzn_assoc_placement = "adunit0";
                            amzn_assoc_tracking_id = "gamereviewnews-20";
                            amzn_assoc_ad_mode = "search";
                            amzn_assoc_ad_type = "smart";
                            amzn_assoc_marketplace = "amazon";
                            amzn_assoc_region = "US";
                            amzn_assoc_default_search_phrase = "<?php echo $ad_keywords[0]; ?>";
                            amzn_assoc_default_category = "VideoGames";
                            amzn_assoc_linkid = "4e8af11fd9d5a146920de930e5bfa871";
                            amzn_assoc_default_browse_node = "468642";
                            amzn_assoc_design = "in_content";
                        </script>
                        <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
                    </div>
                    <!-- Featured Articles -->
                    <div class="g-mb-20">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Featured Articles</h2>
                        </div>

                        <div class="row g-mb-20">
                            <div class="col-lg-6 g-mb-30 g-mb-0--lg">
                                <!-- Article -->
                                <?php if (isset($block_key_2[0])){ ?>
                                <article class="g-mb-30">
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="home3-center-cropped"
                                             style="background-image: url('<?php echo $block_key_2[0]->thumb_url;?>');">
                                        </div>
                                    </figure>

                                    <h1 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($block_key_2[0]->slug); ?>"><?php echo $block_key_2[0]->title;?></a>
                                    </h1>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_2[0]->time);?>
                                        </li>
                                    </ul>

                                    <div class="ellipsis4lines"><p class="g-color-gray-dark-v2"><?php echo $block_key_2[0]->excerpt;?></p></div>
                                </article>
                                <?php }//end if ?>
                                <!-- End Article -->
                                <?php
                                $data_block = $block_key_2;
                                for ($i=1;$i<10;$i++){
                                if (isset($data_block[$i])) {
                                    ?>
                                    <article class="media g-mb-10">
                                        <a class="d-flex u-shadow-v25 mr-3"
                                           href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                            <img class="g-width-60 g-height-60"
                                                 src="<?php echo $data_block[$i]->thumb_url; ?>"/>
                                        </a>

                                        <div class="media-body">
                                            <h1 class="h6">
                                                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                                                   href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                            </h1>
                                            <span class=" g-color-gray-dark-v4 g-font-size-12"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                        </div>
                                    </article>
                                    <!-- End Article -->
                                    <?php if ($i != 9) { ?>
                                        <hr class="g-brd-gray-light-v4 g-mt-5 g-mb-5">
                                    <?php } //end if
                                }} //end for ?>
                            </div>

                            <div class="col-lg-6">
                                <!-- Article -->
                                <?php if (isset($data_block[10])) { ?>
                                <article class="g-mb-30">
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="home3-center-cropped"
                                             style="background-image: url('<?php echo $data_block[10]->thumb_url;?>');">
                                        </div>
                                    </figure>

                                    <h1 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[10]->title;?></a>
                                    </h1>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($data_block[10]->time);?>
                                        </li>
                                    </ul>

                                    <div class="ellipsis4lines"><p class="g-color-gray-dark-v2"><?php echo $data_block[10]->excerpt;?></p></div>
                                </article>
                                <?php } //end if ?>
                                <!-- End Article -->
                                <?php
                                $data_block = $block_key_2;
                                for ($i=11;$i<20;$i++){
                                    if (isset($data_block[$i])) {
                                    ?>
                                    <!-- Article -->
                                    <article class="media g-mb-10">
                                        <a class="d-flex u-shadow-v25 mr-3"
                                           href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                            <img class="g-width-60 g-height-60"
                                                 src="<?php echo $data_block[$i]->thumb_url; ?>"/>
                                        </a>

                                        <div class="media-body">
                                            <h1 class="h6">
                                                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                                                   href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                            </h1>
                                            <span class=" g-color-gray-dark-v4 g-font-size-12"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                        </div>
                                    </article>
                                    <!-- End Article -->
                                    <?php if ($i != 19) { ?>
                                        <hr class="g-brd-gray-light-v4 g-mt-5 g-mb-5">
                                    <?php } //end if
                                }} //end for ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Articles -->

                    <!-- Recent Videos -->
                    <div class="u-heading-v3-1 g-mb-30">
                        <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary pointer" onclick="common.redirect('/video')">Recent Videos</h2>
                    </div>

                    <div class="row">
                        <?php
                        for ($i=0; $i<9; $i++){
                        if (isset($data_block[$i])) {
                        ?>
                        <!-- Article Video -->
                        <div class="col-lg-4 col-sm-6 g-mb-10">
                            <article>
                                <figure class="u-shadow-v25 g-pos-rel g-mb-10">
                                    <img class="img-fluid w-100" src="<?php echo $videos[$i]->thumb_url; ?>"/>
                                    <a href="javascript:void(0);" onclick="show_video_dialog('<?php echo $videos[$i]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal">
                                        <span class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                            <i class="fa fa-play g-left-2"></i>
                                        </span>
                                    </a>

                                </figure>

                                <h1 class="g-font-size-16 g-mb-10">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="javascript:void(0);" onclick="show_video_dialog('<?php echo $videos[$i]->original_id; ?>');" data-modal-effect="fadein" data-modal-target="#yt_modal"><?php echo $videos[$i]->title; ?></a>
                                </h1>
                            </article>
                        </div>
                        <!-- End Article Video -->
                        <?php }} //end for ?>
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
                            <h3 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Useful Links</h3>
                        </div>

                        <ul class="list-unstyled">
                            <?php
                            $data_block = $block_key_4;
                            for ($i=0;$i<10;$i++){
                            if (isset($data_block[$i])) {?>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-mb-6">
                                <h4 class="h6">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title;?></a>
                                </h4>
                            </li>
                            <?php }} //end for ?>
                        </ul>
                    </div>
                    <!-- End Useful Links -->

                    <!-- Subscribe -->
                    <div class="u-shadow-v25 u-bg-overlay g-bg-img-hero g-bg-white-gradient-opacity-v2--after g-py-40 g-px-20 g-mb-50" style="background-image: url(/public/unity_assets/img-temp/500x600/img1.jpg);">
                        <div class="u-bg-overlay__inner text-center">
                            <div class="g-mb-40">
                                <h3 class="g-color-white">Subscription</h3>
                                <p class="g-color-white-opacity-0_8">Input your email to receive our latest news and review</p>
                            </div>

                            <div class="input-group rounded">
                                <input class="form-control g-brd-none g-font-size-13 g-px-13 g-py-11" type="email" placeholder="Your Email" id="txt_home_email_subscription"/>
                                <div class="input-group-btn">
                                    <button class="btn u-btn-primary text-uppercase g-px-20 g-py-11" type="input" onclick="save_subscription_email();"/>
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
                        <?php
                        $data_block = $block_key_3;
                        for ($i=0;$i<20;$i++){
                            if (isset($data_block[$i])) {
                        ?>
                        <!-- Article -->
                        <article class="media g-mb-10">
                            <a class="d-flex u-shadow-v25 mr-3" href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                <img class="g-width-60 g-height-60" src="<?php echo $data_block[$i]->thumb_url;?>"/>
                            </a>

                            <div class="media-body">
                                <h1 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title;?></a>
                                </h1>
                            </div>
                        </article>
                        <!-- End Article -->
                        <?php }} //end for ?>
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
                                    <h1 class="h5 g-bg-red-opacity-0_5 g-pa-5-10--sm">
                                        <a class="g-color-white g-color-white--hover" href="#!">Traveling</a>
                                    </h1>
                                </header>
                            </article>
                        </div>
                        <!-- End Popular Videos -->

                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
            <!-- News Section 1 -->

            <!-- News Section 2 -->
            <div class="row no-gutters g-mb-20">
                <?php
                $data_block = $block_key_5;
                for ($i=0; $i<3; $i++){
                if (isset($data_block[$i])) {?>
                <div class="col-lg-4 g-pr-2--lg g-mb-30 g-mb-0--lg">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-shadow-v25 u-bg-overlay g-bg-white-gradient-opacity-v1--after">
                            <div class="home2-center-cropped"
                                 style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                            </div>
                        </figure>

                        <div class="w-100 text-center g-absolute-centered g-px-20">
                            <h1 class="h4 g-mt-10">
                                <a class="g-color-white" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title;?></a>
                            </h1>
                            <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> <?php echo format_post_time($data_block[$i]->time);?>
                            </small>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>
                <?php }} //end for ?>
            </div>
            <!-- News Section 2 -->

            <!-- News Section 3 -->
            <div class="row">
                <!-- Articles Content -->
                <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                    <!-- Popular News -->
                    <div class="g-mb-20">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Popular News</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 g-mb-50 g-mb-0--lg">
                                <!-- Article -->
                                <?php if (isset($block_key_6[0])) { ?>
                                <article class="g-mb-20">
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="home3-center-cropped" style="background-image: url('<?php echo $block_key_6[0]->thumb_url;?>');"></div>
                                    </figure>

                                    <h1 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($block_key_6[0]->slug); ?>"><?php echo $block_key_6[0]->title;?></a>
                                    </h1>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="<?php echo detail_uri($block_key_6[0]->slug); ?>"><?php echo $block_key_6[0]->author_name;?></a>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_6[0]->time);?>
                                        </li>
                                    </ul>

                                    <p class="g-color-gray-dark-v2"><?php echo $block_key_6[0]->excerpt;?></p>
                                </article>
                                <?php }//end if ?>
                                <!-- Article -->
                                <?php
                                for ($i=9; $i<14; $i++){
                                    if (isset($videos[$i])) {
                                        ?>
                                        <!-- Other Articles -->
                                        <article class="media">
                                            <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                                <img class="g-width-140 g-height-80"
                                                     src="<?php echo $videos[$i]->thumb_url; ?>"/>

                                                <figcaption class="g-pos-abs g-top-5 g-left-5">
                                                    <a class="btn btn-xs u-btn-darkgray text-uppercase rounded-0"
                                                       href="javascript:void(0);"
                                                       onclick="show_video_dialog('<?php echo $videos[$i]->original_id; ?>');"
                                                       data-modal-effect="fadein" data-modal-target="#yt_modal">
                                                        <i class="fa fa-play g-mr-5"></i> Play
                                                    </a>
                                                </figcaption>
                                            </figure>

                                            <div class="media-body">
                                                <h1 class="g-font-size-16">
                                                    <a class="g-color-gray-dark-v1" href="javascript:void(0);"
                                                       onclick="show_video_dialog('<?php echo $videos[$i]->original_id; ?>');"
                                                       data-modal-effect="fadein"
                                                       data-modal-target="#yt_modal"><?php echo $videos[$i]->title; ?></a>
                                                </h1>

                                                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                    <li class="list-inline-item">
                                                        <?php echo format_post_time($videos[$i]->time); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <!-- End Other Articles -->
                                        <?php if ($i != 4) { ?>
                                            <hr class="g-brd-gray-light-v4 block_data_2_hr">
                                        <?php } //end if
                                    }} //end for ?>
                            </div>

                            <div class="col-lg-6 g-mb-50 g-mb-0--lg">
                                <!-- Article -->
                                <?php if (isset($block_key_6[1])) { ?>
                                <article class="g-mb-40">
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="home3-center-cropped" style="background-image: url('<?php echo $block_key_6[1]->thumb_url;?>');"></div>
                                    </figure>

                                    <h1 class="h4 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($block_key_6[1]->slug); ?>"><?php echo $block_key_6[1]->title;?></a>
                                    </h1>

                                    <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                        <li class="list-inline-item">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="<?php echo detail_uri($block_key_6[1]->slug); ?>"><?php echo $block_key_6[1]->author_name;?></a>
                                        </li>
                                        <li class="list-inline-item">/</li>
                                        <li class="list-inline-item">
                                            <?php echo format_post_time($block_key_6[1]->time);?>
                                        </li>
                                    </ul>

                                    <p class="g-color-gray-dark-v2"><?php echo $block_key_6[1]->excerpt;?></p>
                                </article>
                                <?php } //end if ?>
                                <!-- End Article -->
                                <?php
                                for ($i=14; $i<19; $i++){
                                if (isset($data_block[$i])) {
                                    ?>
                                    <!-- Other Articles -->
                                    <article class="media">
                                        <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                            <img class="g-width-140 g-height-80"
                                                 src="<?php echo $videos[$i]->thumb_url; ?>"/>

                                            <figcaption class="g-pos-abs g-top-5 g-left-5">
                                                <a class="btn btn-xs u-btn-darkgray text-uppercase rounded-0"
                                                   href="javascript:void(0);"
                                                   onclick="show_video_dialog('<?php echo $videos[$i]->original_id; ?>');"
                                                   data-modal-effect="fadein" data-modal-target="#yt_modal">
                                                    <i class="fa fa-play g-mr-5"></i> Play
                                                </a>
                                            </figcaption>
                                        </figure>

                                        <div class="media-body">
                                            <h1 class="g-font-size-16">
                                                <a class="g-color-gray-dark-v1" href="javascript:void(0);"
                                                   onclick="show_video_dialog('<?php echo $videos[$i]->original_id; ?>');"
                                                   data-modal-effect="fadein"
                                                   data-modal-target="#yt_modal"><?php echo $videos[$i]->title; ?></a>
                                            </h1>

                                            <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                                <li class="list-inline-item">
                                                    <?php echo format_post_time($videos[$i]->time); ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <!-- End Other Articles -->
                                    <?php if ($i != 8) { ?>
                                        <hr class="g-brd-gray-light-v4 block_data_2_hr">
                                    <?php } //end if
                                }} //end for ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Popular News -->
                    <div class="g-mb-10">
                        <script type="text/javascript">
                            amzn_assoc_placement = "adunit0";
                            amzn_assoc_tracking_id = "gamereviewnews-20";
                            amzn_assoc_ad_mode = "search";
                            amzn_assoc_ad_type = "smart";
                            amzn_assoc_marketplace = "amazon";
                            amzn_assoc_region = "US";
                            amzn_assoc_default_search_phrase = "<?php echo $ad_keywords[1]; ?>";
                            amzn_assoc_default_category = "VideoGames";
                            amzn_assoc_linkid = "4e8af11fd9d5a146920de930e5bfa871";
                            amzn_assoc_default_browse_node = "468642";
                            amzn_assoc_design = "in_content";
                        </script>
                        <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
                    </div>
                    <!-- Weekly News -->
                    <div class="g-mb-10">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Weekly News</h2>
                        </div>
                        <?php
                        $data_block = $block_key_9;
                        for ($i=0;$i<5;$i++){
                        if (isset($data_block[$i])) {?>
                        <!-- Articles -->
                        <div class="row">
                            <!-- Article Image -->
                            <div class="col-md-5">
                                <figure class="u-shadow-v25 g-pos-rel g-mb-10 g-mb-0--lg">
                                    <div class="home6-center-cropped" style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');"></div>
                                </figure>
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="col-md-7 align-self-center">
                                <h1 class="h4">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                </h1>
                                <div class="ellipsis4lines"><p class="g-color-gray-dark-v2"><?php echo $data_block[$i]->excerpt; ?></p></div>
                            </div>
                            <!-- End Article Content -->
                        </div>
                        <!-- End Articles -->
                        <?php }} //end for ?>
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

                        <ul class="u-list-inline g-font-size-11 text-uppercase mb-0 hidden" id="popular_tags_tmpl">
                            <li class="list-inline-item g-mb-10">
                                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!"></a>
                            </li>
                        </ul>
                        <ul class="u-list-inline g-font-size-11 text-uppercase mb-0" id="popular_tags">
                            <!-- real tags loaded by javascript here -->
                        </ul>
                    </div>
                    <!-- End Popular Tags -->

                    <div id="stickyblock-start-1" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start-1" data-end-point="#stickyblock-end-1">
                        <!-- News Feed -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">News Feed</h2>
                            </div>
                            <?php
                            $data_block = $block_key_14;
                            if ($data_block){
                                for ($i=0;$i<count($data_block);$i++){
                                ?>
                                <!-- Article -->
                                <article class="media g-mb-10">
                                    <a class="d-flex u-shadow-v25 mr-3" href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                        <img class="g-width-60 g-height-60" src="<?php echo $data_block[$i]->thumb_url;?>"/>
                                    </a>

                                    <div class="media-body">
                                        <h1 class="h6">
                                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title;?></a>
                                        </h1>
                                    </div>
                                </article>
                                <!-- End Article -->
                            <?php }} //end for ?>
                        </div>
                        <!-- End News Feed -->

                        <!-- Top Authors -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Top Authors</h2>
                            </div>
                            <?php
                            $data_block = $block_key_7;
                            for ($i=0; $i<count($data_block); $i++){
                            if (isset($data_block[$i])) {?>
                            <article class="media g-mb-10">
                                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="<?php echo $data_block[$i]->thumb_url; ?>"/>
                                <div class="media-body">
                                    <h4 class="g-font-size-16">
                                        <small class="g-color-gray-dark-v4"><?php echo $data_block[$i]->author_name; ?></small>
                                    </h4>
                                    <a class="g-color-gray-dark-v1" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                </div>
                            </article>
                            <?php }} //end for ?>
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
        <div class="g-brd-bottom g-brd-secondary-light-v2 g-py-10">
            <div class="container">
                <h1 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Popular Stories</h1>
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
                    <?php
                    $data_block = $block_key_10;
                    for ($i=0;$i<10;$i++){
                        if (isset($data_block[$i])){?>
                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article class="media g-bg-white g-pa-10">
                            <figure class="d-flex g-width-70 g-height-70 g-pos-rel mr-3">
                                <img class="img-fluid" src="<?php echo $data_block[$i]->thumb_url; ?>"/>
                            </figure>

                            <div class="media-body">
                                <h4 class="g-font-size-13 mb-0"><a class="u-link-v5 g-color-main g-color-primary--hover" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a></h4>
                                <small class="g-color-gray-dark-v4"><?php echo $data_block[$i]->author_name; ?></small>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                    <?php }} //end for ?>
                </div>
                <!-- End Footer - Popular Stories Carousel -->
            </div>
        </div>

        <div class="container">
            <!-- Footer - Content -->
            <div class="g-brd-bottom--md g-brd-secondary-light-v2 g-pb-30--md g-mb-30 g-pt-20">
                <div class="row">
                    <div class="col-6 col-md-6 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                        <h1 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">News</h1>

                        <!-- News -->
                        <ul class="list-unstyled mb-0">
                            <?php
                            $data_block = $block_key_8;
                            for ($i=0;$i<count($data_block);$i++){
                            if (isset($data_block[$i])) {?>
                            <li class="g-px-0 g-my-8">
                                <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7" href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                            </li>
                            <?php }} //end for ?>
                        </ul>
                        <!-- End News -->
                    </div>


                    <div class="col-md-6">
                        <div class="g-pl-10--md">
                            <h1 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Magazines</h1>

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
                                <?php
                                $data_block = $block_key_12;
                                if ($data_block){
                                for ($i=0;$i<count($data_block);$i++){ ?>
                                <div class="js-slide g-px-5">
                                    <!-- Magazines -->
                                    <figure class="u-block-hover g-pos-rel">
                                        <div class="home4-center-cropped"
                                             style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                        </div>
                                        <figcaption class="g-color-white">
                                            <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                <h3 class="h4 g-color-white"><?php echo $data_block[$i]->title;?></h3>
                                            </div>
                                            <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                <span class="d-block h6 g-color-white"><?php echo $data_block[$i]->author_name;?></span>
                                            </div>
                                            <a class="u-link-v2" href="<?php echo detail_uri($data_block[$i]->slug); ?>"></a>
                                        </figcaption>
                                    </figure>
                                    <!-- End Magazines -->
                                </div>
                                <?php }} //end for ?>
                            </div>
                            <!-- End Carousel -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Footer - Content -->

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

<div class="u-outer-spaces-helper"></div>
<!-- Youtube video modal window -->
<div id="yt_modal" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
    <button type="button" class="close pointer" onclick="Custombox.modal.close();$('iframe', $('#yt_modal')).remove();">
        <i class="hs-icon hs-icon-close"></i>
    </button>
    <div id="main_video_container"></div>
</div>
<!-- End Youtube video modal window -->

<?php require_once('common_js.php'); ?>

</body>
</html>