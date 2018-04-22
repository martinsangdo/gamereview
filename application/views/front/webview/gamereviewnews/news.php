<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title><?php echo $article_detail->title; ?></title>
    <meta name="title" content="<?php echo $article_detail->title; ?>"/>
    <meta property="og:title" content="<?php echo $article_detail->title; ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars(preg_replace( "/\r|\n/", "", strip_tags($article_detail->excerpt))); ?>" />
    <meta property="og:url" content="<?php echo full_url($_SERVER); ?>" />
    <meta property="og:image" content="<?php echo $article_detail->thumb_url; ?>"  />
    <meta property="og:image:url" content="<?php echo $article_detail->thumb_url; ?>" />

    <?php require_once('common_head.php'); ?>

    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5acf23ea3368f4001495b81f&product=inline-share-buttons"></script>

    <script src="/public/js/article_detail.js"></script>
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

                            <div class="row" id="related_posts_container">
                                <?php
                                for ($i=0; $i<count($related_posts); $i++){
                                ?>
                                    <div class="col-lg-4 col-sm-6 g-mb-10">
                                        <article>
                                            <figure class="u-shadow-v25 g-pos-rel g-mb-20 pointer" onclick="common.redirect('<?php echo detail_uri($related_posts[$i]->slug); ?>');">
                                                <div class="detail-center-cropped" style="background-image: url(<?php echo $related_posts[$i]->thumb_url; ?>);"></div>
                                            </figure>

                                            <h3 class="g-font-size-16 g-mb-10">
                                                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo detail_uri($related_posts[$i]->slug); ?>"><?php echo $related_posts[$i]->title; ?></a>
                                            </h3>
                                        </article>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- Comment template -->
                        <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-10 g-mb-20 comment_detail hidden" id="comment_tmpl">
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
                    <!-- Random Posts -->
                    <div class="g-mb-30" id="random_posts_container">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Random Posts</h2>
                        </div>
                        <!-- random posts appear here -->
                    </div>
                    <!-- End Random Posts -->

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

                    <!-- Article -->
                    <article class="media g-mb-10 hidden" id="post_tmpl">
                        <a class="d-flex u-shadow-v25 mr-3" href="">
                            <img class="g-width-60 g-height-60 thumb_url"/>
                        </a>

                        <div class="media-body">
                            <h1 class="h6">
                                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover title" href=""></a>
                            </h1>
                        </div>
                    </article>
                    <!-- End Article -->

                    <!-- Recent Posts -->
                    <div class="g-mb-30" id="recent_posts_container">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Recent Posts</h2>
                        </div>
                        <!-- random posts appear here -->
                    </div>
                    <!-- End Recent Posts -->

                    <!-- Recent Videos -->
                    <div class="g-mb-30" id="video_list">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Recent Videos</h2>
                        </div>

                        <!-- Article -->
                        <article class="media g-mb-10 hidden" id="video_tmpl">
                            <a class="d-flex u-shadow-v25 mr-3" href="">
                                <img class="g-width-60 g-height-60" src=""/>
                            </a>

                            <div class="media-body">
                                <h1 class="h6">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="javascript:void(0);"></a>
                                </h1>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                    <!-- End Recent Videos -->

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
        <input type="hidden" id="extra_ids" value="<?php echo $extra_ids; ?>"/>
    </div>
</div>

<?php require_once('common_js.php'); ?>

</body>
</html>
