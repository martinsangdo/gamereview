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
    // initialization of popups
    $.HSCore.components.HSModalWindow.init('[data-modal-target]');
    //init event of search
    $('#txt_search_keyword').unbind();
    $('#txt_search_keyword').bind('keypress', function (e) {
        if (e.which == 13) {
            //pressed Enter
            common.redirect('/category/search/' + $.trim($('#txt_search_keyword').val()))
        }
    });
    //replace broken images
    /*
    setTimeout(function() {
        $('img').each(function () {
            if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
                // image was broken, replace with your new image
                this.src = '/public/unity_assets/img/missing_img.png';
            }
        });
    }, 3000);
    */
});