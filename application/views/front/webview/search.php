<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Latest game review, news, trailer</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="Latest game review, news, trailer">
    <meta name="keywords" content="latest game review, game trailer, game news, pc game, mobile game, xbox game, wii game, ps game">
    <meta name="author" content="Martin SangDo">
    <meta name="copyright" content="Copyright © 2018 by gamereviewnews.com"/>

    <meta property="og:title" content="Latest game review, news, trailer" />
    <meta property="og:description" content="Latest game review, news, trailer" />
    <meta property="og:type" content="gamereviewnews:category" />
    <meta property="og:url" content="<?php echo full_url($_SERVER); ?>" />
    <meta property="og:site_name" content="Gamereviewnews" />
    <meta property="fb:app_id" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/public/favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700%7COpen+Sans:400,600,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/animate.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="/public/unity_assets/css/styles.bm-classic.css"/>

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/public/unity_assets/css/custom.css">

    <script src="/public/unity_assets/vendor/jquery/jquery.min.js"></script>
    <script src="/public/unity_assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="/public/js/constant.js"></script>
    <script src="/public/js/common.js"></script>
    <script src="/public/js/category.js"></script>

</head>

<body>
<main>
    <?php require_once('header.php'); ?>
    <!-- Related Posts -->
    <div class="<?php echo (!$posts)?'container text-center bold':'g-bg-secondary'; ?> g-py-20">
        <?php
        if (!$posts){
            echo '<div>Keyword not found</div>';
        } else {
            for ($j = 0; $j < 5; $j++) {     //5 rows
                ?>
                <div class="container g-mt-20">
                    <!-- Carousel -->
                    <div class="js-carousel g-mx-minus-10"
                         data-infinite="true"
                         data-slides-show="4"
                         data-lazy-load="ondemand"
                         data-arrows-classes="u-arrow-v1 g-pos-abs g-top-minus-40 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover"
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
                        $start_index = $j * 4;
                        for ($i = $start_index; $i < $start_index + 4; $i++) {
                            if (isset($posts[$i])) {
                                ?>
                                <div class="js-slide g-px-10 cat_fix_height_slide">
                                    <!-- Article -->
                                    <article>
                                        <div class="detail-center-cropped thumb_url"
                                             style="background-image: url(<?php echo $posts[$i]->thumb_url; ?>);"></div>

                                        <div class="g-bg-white g-pa-20 cat_desc_cut">
                                            <h3 class="g-font-size-15"><a
                                                        class="u-link-v5 g-color-main g-color-primary--hover"
                                                        href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a>
                                            </h3>
                                            <p class="g-font-size-13"><?php echo $posts[$i]->excerpt; ?></p>
                                        </div>
                                    </article>
                                    <!-- End Article -->
                                </div>
                                <?php
                            }   //end if
                        } //end for $i
                        ?>
                    </div>
                </div>
            <?php } //end for $j
            }   //end if
        ?>
    </div>
    <!-- End Related Posts -->

    <!-- Pagination -->
    <?php echo $pagination; ?>
    <!-- End Pagination -->
    <div class="g-mb-20"></div>
    <!-- Footer -->
    <footer class="g-bg-secondary">
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

<div class="u-outer-spaces-helper"></div>

<!-- JS Global Compulsory -->
<script src="/public/unity_assets/vendor/jquery/jquery.min.js"></script>
<script src="/public/unity_assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="/public/unity_assets/vendor/popper.min.js"></script>
<script src="/public/unity_assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/public/unity_assets/vendor/appear.js"></script>
<script src="/public/unity_assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/public/unity_assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="/public/unity_assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="/public/unity_assets/js/hs.core.js"></script>
<script src="/public/unity_assets/js/components/hs.header.js"></script>
<script src="/public/unity_assets/js/helpers/hs.hamburgers.js"></script>
<script src="/public/unity_assets/js/components/hs.dropdown.js"></script>
<script src="/public/unity_assets/js/components/hs.carousel.js"></script>
<script src="/public/unity_assets/js/components/hs.popup.js"></script>
<script src="/public/unity_assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="/public/unity_assets/js/custom.js"></script>
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

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });
</script>

</body>
</html>
