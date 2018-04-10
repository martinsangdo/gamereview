<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Multipage - Blog and Magazine Page Layout 2 | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

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
    <!-- Promo Articles -->
    <div class="js-carousel"
         data-infinite="true"
         data-arrows-classes="u-arrow-v1 g-pos-abs g-absolute-centered--x g-bottom-20 text-center g-width-30 g-height-28 g-color-secondary-dark-v1 g-color-primary--hover"
         data-arrow-left-classes="fa fa-angle-left g-ml-minus-50"
         data-arrow-right-classes="fa fa-angle-right g-ml-50"
         data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-30 text-center">
        <div class="js-slide">
            <!-- Promo Articles -->
            <div class="g-bg-secondary">
                <div class="container g-pt-20 g-pb-20">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            <!-- Info -->
                            <div class="">
                                <div class="mb-4">
                                    <h1 class="mb-4"><?php echo $posts[0]->title; ?></h1>
                                    <p class="g-color-secondary-dark-v1 g-font-size-16"><?php echo $posts[0]->excerpt; ?></p>
                                </div>

                                <a class="btn u-btn-black g-color-primary--hover g-font-weight-700 g-font-size-13 text-uppercase rounded g-py-12 g-px-20" href="<?php echo detail_uri($posts[0]->slug); ?>">Read More</a>
                            </div>
                            <!-- End Info -->
                        </div>

                        <div class="col-md-6 col-lg-5 g-mb-50">
                            <img class="img-fluid" src="<?php echo $posts[0]->thumb_url; ?>" alt="<?php echo $posts[0]->title; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Promo Articles -->
        </div>

        <div class="js-slide">
            <!-- Promo Articles -->
            <div class="g-bg-darkblue-v1">
                <div class="container g-pt-20 g-pb-20">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            <!-- Info -->
                            <div class="g-mb-70">
                                <div class="mb-4">
                                    <h2 class="g-color-white mb-4"><?php echo $posts[1]->title; ?></h2>
                                    <p class="g-color-secondary-dark-v1 g-font-size-16"><?php echo $posts[1]->excerpt; ?></p>
                                </div>

                                <a class="btn u-btn-white g-color-primary--hover g-font-weight-700 g-font-size-13 text-uppercase rounded g-py-12 g-px-20" href="<?php echo detail_uri($posts[1]->slug); ?>">Read More</a>
                            </div>
                            <!-- End Info -->
                        </div>

                        <div class="col-md-6 col-lg-5 g-mb-50">
                            <img class="img-fluid" src="<?php echo $posts[1]->thumb_url; ?>" alt="<?php echo $posts[1]->title; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Promo Articles -->
        </div>
    </div>
    <!-- End Promo Articles -->
    <!-- Articles -->
    <div class="g-max-width-700 mx-auto g-px-20 g-px-0--md g-pt-20">
    <?php
    for ($i=2;$i<6;$i++){
        if (isset($posts[$i])) {
            ?>
            <!-- Article -->
            <article class="g-mb-20">
                <div class="text-center">
                    <h2 class="h3 mb-3"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                           href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a>
                    </h2>
                </div>

                <figure class="mb-4 pointer text_center">
                    <img class="img-fluid" src="<?php echo $posts[$i]->thumb_url; ?>"
                         alt="<?php echo $posts[$i]->title; ?>"
                         onclick="common.redirect('<?php echo detail_uri($posts[$i]->slug); ?>');">
                </figure>

                <!-- Info -->
                <div class="mb-4 text-center">
                    <p><?php echo $posts[$i]->excerpt; ?></p>
                </div>
                <!-- End Info -->
            </article>
            <!-- End Article -->
            <?php
            } //end if
        } //end for ?>
    </div>
    <!-- End Articles -->

    <!-- Related Posts -->
    <div class="g-bg-secondary g-py-20">
        <div class="container">
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
                for ($i=6; $i<10; $i++){
                if (isset($posts[$i])) {
                    ?>
                    <div class="js-slide g-px-10 cat_fix_height_slide">
                        <!-- Article -->
                        <article>
                            <div class="detail-center-cropped thumb_url"
                                 style="background-image: url(<?php echo $posts[$i]->thumb_url; ?>);"></div>

                            <div class="g-bg-white g-pa-20 cat_desc_cut">
                                <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                                              href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a>
                                </h3>
                                <p class="g-font-size-13"><?php echo $posts[$i]->excerpt; ?></p>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                    <?php
                    }   //end if
                } //end for ?>
            </div>
        </div>

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
                for ($i=10; $i<14; $i++){
                    if (isset($posts[$i])) {
                        ?>
                        <div class="js-slide g-px-10 cat_fix_height_slide">
                            <!-- Article -->
                            <article>
                                <div class="detail-center-cropped thumb_url"
                                     style="background-image: url(<?php echo $posts[$i]->thumb_url; ?>);"></div>

                                <div class="g-bg-white g-pa-20 cat_desc_cut">
                                    <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                                                  href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a>
                                    </h3>
                                    <p class="g-font-size-13"><?php echo $posts[$i]->excerpt; ?></p>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>
                        <?php
                    }   //end if
                } //end for ?>
            </div>
        </div>

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
                for ($i=14; $i<18; $i++){
                    if (isset($posts[$i])) {
                        ?>
                        <div class="js-slide g-px-10 cat_fix_height_slide">
                            <!-- Article -->
                            <article>
                                <div class="detail-center-cropped thumb_url"
                                     style="background-image: url(<?php echo $posts[$i]->thumb_url; ?>);"></div>

                                <div class="g-bg-white g-pa-20 cat_desc_cut">
                                    <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                                                  href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a>
                                    </h3>
                                    <p class="g-font-size-13"><?php echo $posts[$i]->excerpt; ?></p>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>
                        <?php
                    }   //end if
                } //end for ?>
            </div>
        </div>

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
                for ($i=18; $i<22; $i++){
                    if (isset($posts[$i])) {
                        ?>
                        <div class="js-slide g-px-10 cat_fix_height_slide">
                            <!-- Article -->
                            <article>
                                <div class="detail-center-cropped thumb_url"
                                     style="background-image: url(<?php echo $posts[$i]->thumb_url; ?>);"></div>

                                <div class="g-bg-white g-pa-20 cat_desc_cut">
                                    <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                                                  href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a>
                                    </h3>
                                    <p class="g-font-size-13"><?php echo $posts[$i]->excerpt; ?></p>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>
                        <?php
                    }   //end if
                } //end for ?>
            </div>
        </div>

    </div>
    <!-- End Related Posts -->

    <!-- Articles -->
    <div class="g-max-width-700 mx-auto g-px-20 g-px-0--md g-pt-20">
        <?php
        for ($i=22;$i<26;$i++){
            if (isset($posts[$i])) {
                ?>
                <!-- Article -->
                <article class="g-mb-20">
                    <div class="text-center">
                        <h2 class="h3 mb-3"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                               href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a>
                        </h2>
                    </div>

                    <figure class="mb-4 pointer text_center">
                        <img class="img-fluid" src="<?php echo $posts[$i]->thumb_url; ?>"
                             alt="<?php echo $posts[$i]->title; ?>"
                             onclick="common.redirect('<?php echo detail_uri($posts[$i]->slug); ?>');">
                    </figure>

                    <!-- Info -->
                    <div class="mb-4 text-center">
                        <p><?php echo $posts[$i]->excerpt; ?></p>
                    </div>
                    <!-- End Info -->
                </article>
                <!-- End Article -->
                <?php
                }   //end if
            } //end for ?>
    </div>
    <!-- End Articles -->
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
