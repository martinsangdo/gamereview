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
    <meta property="og:image" content="<?php echo $videos[0]->thumb_url; ?>"  />
    <meta property="og:image:url" content="<?php echo $videos[0]->thumb_url; ?>" />
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
    <link rel="stylesheet" href="/public/unity_assets/vendor/custombox/custombox.min.css"/>
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
    <script src="/public/js/video.js"></script>

</head>

<body>
<main>
    <?php require_once('header.php'); ?>
    <!-- Related Posts -->
    <div class="container g-py-50">
        <div class="row">
            <?php
            for ($j=0; $j<5; $j++){     //5 rows
                $start_index = $j*4;
                for ($i=$start_index; $i<$start_index + 4; $i++){
                    if (isset($videos[$i])) {
                        ?>
                        <!-- Article Video -->
                        <div class="col-lg-3 col-sm-6 g-mb-10">
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
                        <?php
                    }   //end if
                } //end for $i
            } //end for $j ?>
        </div>
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
<!-- Youtube video modal window -->
<div id="yt_modal" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
    <button type="button" class="close pointer" onclick="Custombox.modal.close();$('iframe', $('#yt_modal')).remove();">
        <i class="hs-icon hs-icon-close"></i>
    </button>
    <div id="main_video_container"></div>
</div>
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
<script src="/public/unity_assets/vendor/custombox/custombox.min.js"></script>

<!-- JS Unify -->
<script src="/public/unity_assets/js/hs.core.js"></script>
<script src="/public/unity_assets/js/components/hs.header.js"></script>
<script src="/public/unity_assets/js/helpers/hs.hamburgers.js"></script>
<script src="/public/unity_assets/js/components/hs.popup.js"></script>
<script src="/public/unity_assets/js/components/hs.go-to.js"></script>
<script src="/public/unity_assets/js/components/hs.modal-window.js"></script>

<!-- JS Customization -->
<script src="/public/unity_assets/js/custom.js"></script>
<script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
        // initialization of popups
        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
    });
</script>

</body>
</html>