<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Latest game review, news, trailer</title>

    <?php require_once('common_head.php'); ?>

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
<?php require_once('common_js.php'); ?>


</body>
</html>
