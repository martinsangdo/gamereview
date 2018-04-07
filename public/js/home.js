/**
 * author: Martin SangDo
 */
//setup video into showing dialog
function show_video_dialog(original_vid_id){
    $('#main_video_container', $('#yt_modal')).html('<iframe width="560" height="400" src="https://www.youtube.com/embed/'+original_vid_id+'?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen autoplay></iframe>');
}

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
});

$(window).on('load', function () {
    // initialization of sticky blocks
    setTimeout(function() { // important in this case
        $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
    }, 1);
    $('img').each(function() {
        if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            // image was broken, replace with your new image
            this.src = '/public/unity_assets/img/missing_img.png';
        }
    });
});