<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Latest game review, news, trailer</title>

    <meta property="og:title" content="Latest game review, news, trailer" />
    <meta property="og:description" content="Latest game review, news, trailer" />
    <meta property="og:url" content="<?php echo full_url($_SERVER); ?>" />
    <meta property="og:image" content="<?php echo $posts[0]->thumb_url; ?>"  />
    <meta property="og:image:url" content="<?php echo $posts[0]->thumb_url; ?>" />

    <?php require_once('common_head.php'); ?>

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
        <?php if (isset($posts[0])) { ?>
        <div class="js-slide">
            <!-- Promo Articles -->
            <div class="g-bg-secondary">
                <div class="container g-pt-20 g-pb-20">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            <!-- Info -->
                            <div class="">
                                <div class="mb-4">
                                    <h1 class="mb-4"><a href="<?php echo detail_uri($posts[0]->slug); ?>"><?php echo $posts[0]->title; ?></a></h1>
                                    <p class="g-color-secondary-dark-v1 g-font-size-16"><?php echo shorten_str($posts[0]->excerpt, DETAIL_EXCERPT_LIMIT); ?></p>
                                </div>

                                <a class="btn u-btn-black g-color-primary--hover g-font-weight-700 g-font-size-13 text-uppercase rounded g-py-12 g-px-20"
                                   href="<?php echo detail_uri($posts[0]->slug); ?>">Read More</a>
                            </div>
                            <!-- End Info -->
                        </div>

                        <div class="col-md-6 col-lg-5 g-mb-50">
                            <img class="img-fluid" src="<?php echo $posts[0]->thumb_url; ?>"
                                 alt="<?php echo $posts[0]->title; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Promo Articles -->
        </div>
        <?php
        } //end if
        if (isset($posts[1])) { ?>
        <div class="js-slide">
            <!-- Promo Articles -->
            <div class="g-bg-darkblue-v1">
                <div class="container g-pt-20 g-pb-20">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            <!-- Info -->
                            <div class="g-mb-70">
                                <div class="mb-4">
                                    <h1 class="g-color-white mb-4"><a href="<?php echo detail_uri($posts[1]->slug); ?>"><?php echo $posts[1]->title; ?></a></h1>
                                    <p class="g-color-secondary-dark-v1 g-font-size-16"><?php echo shorten_str($posts[1]->excerpt, DETAIL_EXCERPT_LIMIT); ?></p>
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
        <?php } //end if ?>
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
                    <p><?php echo shorten_str($posts[$i]->excerpt, DETAIL_EXCERPT_LIMIT); ?></p>
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
        <?php
        for ($j=0; $j<6; $j++){     //6 rows
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
                $start_index = 6 + $j*4;
                for ($i=$start_index; $i<$start_index + 4; $i++){
                    if (isset($posts[$i])) {
                    ?>
                    <div class="js-slide g-px-10 cat_fix_height_slide">
                        <!-- Article -->
                        <article>
                            <div class="detail-center-cropped thumb_url pointer" onclick="common.redirect('<?php echo detail_uri($posts[$i]->slug); ?>');"
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
                } //end for $i?>
            </div>
        </div>
        <?php } //end for $j ?>
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

<?php require_once('common_js.php'); ?>

</body>
</html>
