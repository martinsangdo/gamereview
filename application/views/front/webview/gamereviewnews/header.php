<!-- Header -->
<header id="js-header" class="u-header u-header--static u-shadow-v19">
    <!-- Top Bar -->
    <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-py-18">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-md-3 g-hidden-md-down">
                    <a href="<?php echo base_url(); ?>" class="navbar-brand">
                        <img src="/public/unity_assets/img/logo.png" alt="Logo"/>
                    </a>
                </div>
                <!-- End Logo -->

                <!-- Search Form -->
                <div class="col-6 col-md-5">
                    <div class="input-group rounded">
                        <input class="form-control w-100 g-brd-secondary-light-v2 g-brd-primary--focus g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-white g-font-weight-400 g-font-size-13 rounded g-px-20 g-py-12" type="text" placeholder="Search the entire site" id="txt_search_keyword" value="<?php if (isset($keyword)) echo $keyword; ?>" />
                        <span class="input-group-addon g-brd-none g-py-0 g-pr-0">
                            <button class="btn u-btn-white g-color-primary--hover g-bg-secondary g-font-weight-600 g-font-size-13 text-uppercase rounded g-py-12 g-px-20" type="button" onclick="common.redirect('/category/search/'+$.trim($('#txt_search_keyword').val()));">
                              <span class="g-hidden-md-down">Search</span>
                              <i class="g-hidden-lg-up fa fa-search"></i>
                            </button>
                          </span>
                    </div>
                </div>
                <!-- End Search Form -->

                <div class="col-md-4">
                    <img src="/public/img/top_banner_background.png"/>
                </div>

            </div>
        </div>
    </div>
    <!-- End Top Bar -->

    <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg g-px-0">
            <div class="container g-px-15">
                <!-- Logo -->
                <a class="navbar-brand g-hidden-lg-up" href="bm-classic-home-page-1.html">
                    <img src="/public/unity_assets/img/logo.png" alt="Logo">
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 ml-auto" type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                <span class="hamburger hamburger--slider g-pa-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
                </button>
                <!-- End Responsive Toggle Button -->
                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                    <ul class="navbar-nav g-font-weight-600">
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/1">
                                Popular
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/2">
                                PC
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/3">
                                PS4
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/4">
                                Xbox - Nintendo
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/5">
                                2DS - 3DS
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/6">
                                Featured
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/7">
                                Mobile
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/8">
                                Guides - Cheats
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/category/group/9">
                                Uncategorized
                            </a>
                        </li>
                        <li class="nav-item g-mx-10--lg g-mx-20--xl">
                            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="/video">
                                Videos
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->