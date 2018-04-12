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
    <meta name="description" content="<?php echo htmlspecialchars(preg_replace( "/\r|\n/", "", strip_tags($article_detail->excerpt))); ?>">
    <meta name="keywords" content="latest game review, game trailer, game news, pc game, mobile game, xbox game, wii game, ps game">
    <meta name="author" content="Martin SangDo">
    <meta name="copyright" content="Copyright © 2018 by gamereviewnews.com"/>

    <meta property="og:title" content="<?php echo $article_detail->title; ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars(preg_replace( "/\r|\n/", "", strip_tags($article_detail->excerpt))); ?>" />
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
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5acf23ea3368f4001495b81f&product=inline-share-buttons"></script>

    <script src="/public/js/constant.js"></script>
    <script src="/public/js/common.js"></script>
    <script src="/public/js/article_detail.js"></script>
    <script>
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/es_LA/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body>
<main>
    <?php require_once('header.php'); ?>

    <!-- News Content -->
    <section class="g-pt-50">
        <div class="container">
            <div class="row">
                <!-- Articles Content -->
                <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                    <article class="g-mb-20">
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
                        </header>

                        <div class="g-font-size-16 g-line-height-1_8 g-mb-30" id="article_detail_container">
                            <img id="loading_img" src="/public/unity_assets/img/loading.gif"/>
                            <!-- content be here -->
                        </div>

                        <!-- Sources & Tags -->
                        <div class="g-mb-30">
                            <h6 class="g-color-gray-dark-v1 g-mb-15">
                                <strong class="g-mr-5">Source:</strong> <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php echo $site_detail->name; ?></a>
                            </h6>
                            <?php if ($tag_list){ ?>
                            <h6 class="g-color-gray-dark-v1">
                                <strong class="g-mr-5">Tags:</strong>
                                <?php
                                for ($i=0; $i<count($tag_list); $i++){
                                ?>
                                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover
                                        g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="/category/<?php echo $tag_list[$i]->slug; ?>/<?php echo $tag_list[$i]->_id; ?>"><?php echo $tag_list[$i]->name; ?></a>
                                <?php } //end for ?>
                            </h6>
                            <?php } //end if ?>
                        </div>
                        <!-- End Sources & Tags -->

                        <hr class="g-brd-gray-light-v4">
                        <!-- Social Shares -->
                        <div class="g-mb-30">
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                        <!-- End Social Shares -->

                        <hr class="g-brd-gray-light-v4 g-mb-40">

                        <!-- Related Articles -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Related Articles</h2>
                            </div>

                            <!-- Article Video -->
                            <div class="col-lg-4 col-sm-6 g-mb-10 hidden" id="related_post_tmpl">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <div class="detail-center-cropped thumb_url"></div>
                                    </figure>

                                    <h3 class="g-font-size-16 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover title" href="#!"></a>
                                    </h3>
                                </article>
                            </div>
                            <!-- End Article Video -->

                            <div class="row" id="related_posts_container">
                                <!-- related posts will be here -->
                            </div>
                        </div>

                        <!-- Comment template -->
                        <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-10 g-mb-20 comment_detail" id="comment_tmpl">
                            <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15" src="/public/unity_assets/img/default_avatar.jpg" alt="Avatar">

                            <div class="media-body">
                                <div>
                                    <h5 class="d-flex justify-content-between align-items-center g-font-size-16 g-color-gray-dark-v1 mb-0">
                                        <span class="d-block g-mr-10 username"></span>
                                    </h5>
                                    <span class="g-color-gray-dark-v4 g-font-size-12 date"></span>
                                </div>

                                <div>
                                    <p class="g-color-gray-dark-v2 content"></p>
                                </div>

                            </div>
                        </div>
                        <!-- End Comment template -->

                        <!-- Comments -->
                        <div class="g-mb-20" id="comment_container">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary"><span id="comment_num">0</span> Comments</h2>
                            </div>
                            <div id="comment_list"></div>

                            <div class="text-center g-mt-30 hidden" id="btn_load_more_comment">
                                <a class="btn u-btn-outline-primary g-font-size-12 text-uppercase g-px-25 g-py-13" href="javascript:void(0);" onclick="load_more_comment();">
                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i> Load More Comments
                                </a>
                            </div>
                        </div>
                        <!-- Comments -->

                        <!-- Add Comment -->
                        <div class="g-mb-20">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Add a Comment</h2>
                            </div>

                            <form id="form_new_comment">
                                <div class="row">
                                    <div class="col-md-6 form-group g-mb-30">
                                        <input id="txt_name" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15" type="text" placeholder="Your Name">
                                    </div>

                                    <div class="col-md-6 form-group g-mb-30">
                                        <input id="txt_email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15" type="email" placeholder="Email (will be hidden)">
                                    </div>
                                </div>

                                <div class="g-mb-30">
                                    <textarea id="txt_content" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-pa-15" rows="12" placeholder="Your Message"></textarea>
                                </div>

                                <a class="btn u-btn-primary g-font-size-12 text-uppercase g-px-25 g-py-13" href="javascript:void(0);" onclick="add_new_comment();">
                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i> Add a Comment
                                </a>
                            </form>
                            <div class="red_color hidden" id="message"></div>
                        </div>
                        <!-- End Add Comment -->
                    </article>

                    <div id="stickyblock-end"></div>
                </div>
                <!-- End Articles Content -->

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <!-- Recent Posts -->
                    <div class="g-mb-30">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Recent Posts</h2>
                        </div>

                        <?php
                        $data_block = $block_key_3;
                        for ($i=0;$i<20;$i++){
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
                        <?php } //end for ?>
                    </div>
                    <!-- End Recent Posts -->

                    <!-- Popular Videos -->
                    <div class="g-mb-20">
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

                    <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
                        <!-- News Feed -->
                        <div class="g-mb-40">
                            <div class="u-heading-v3-1 g-mb-30">
                                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">News Feed</h2>
                            </div>

                            <?php
                            $data_block = $block_key_14;
                            for ($i=0;$i<10;$i++){
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
                            <?php } //end for ?>
                        </div>
                        <!-- End News Feed -->

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
        <input type="hidden" id="post_id" value="<?php echo $article_detail->_id; ?>"/>
        <input type="hidden" id="site_api_uri" value="<?php echo $site_detail->api_uri; ?>"/>
        <input type="hidden" id="original_post_id" value="<?php echo $article_detail->original_post_id; ?>"/>
        <input type="hidden" id="site_type" value="<?php echo $site_detail->type; ?>"/>
        <div class="hidden" id="post_excerpt"><?php echo htmlspecialchars_decode($article_detail->excerpt); ?></div>
        <input type="hidden" id="original_url" value="<?php echo $article_detail->original_url; ?>"/>
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
        //
        $('#txt_search_keyword').unbind();
        $('#txt_search_keyword').bind('keypress', function (e) {
            if (e.which == 13) {
                //pressed Enter
                common.redirect('/category/search/' + $.trim($('#txt_search_keyword').val()))
            }
        });
    });

    $(window).on('load', function () {
        // initialization of sticky blocks
        $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
    });
</script>
</body>
</html>
