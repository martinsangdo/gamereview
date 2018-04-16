<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Latest game review, news, trailer</title>

    <?php require_once ('common_head.php'); ?>

    <meta property="og:title" content="Latest game review, news, trailer" />
    <meta property="og:description" content="Latest game review, news, trailer" />
    <meta property="og:url" content="<?php echo full_url($_SERVER); ?>" />
    <meta property="og:image" content="<?php echo $videos[0]->thumb_url; ?>"  />
    <meta property="og:image:url" content="<?php echo $videos[0]->thumb_url; ?>" />

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

<?php require_once ('common_js.php'); ?>

</body>
</html>