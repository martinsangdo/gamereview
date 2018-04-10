/**
 * author: Martin SangDo
 */
//setup video into showing dialog
function show_video_dialog(original_vid_id){
    $('#main_video_container', $('#yt_modal')).html('<iframe width="560" height="400" src="https://www.youtube.com/embed/'+original_vid_id+'?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen autoplay></iframe>');
}
//find top read categories
function get_top_read_categories(){
    common.ajaxPost(API_URI.GET_TOP_CAT, {}, function(top_list){
        var len = top_list.length;
        if (len == 0){
            return;
        }
        var $item_tmpl = $('li', $('#popular_tags_tmpl'));      //item template
        var $item;
        //group categories which have same name
        var distinct_cat = {};
        for (var i=0; i<len; i++){
            if (common.isEmpty(distinct_cat[top_list[i]['name']])){
                distinct_cat[top_list[i]['name']] = [];
            }
            distinct_cat[top_list[i]['name']].push(top_list[i]['_id']);


        }
        $.each(distinct_cat, function (key, val) {
            $item = $item_tmpl.clone(false);
            $('a', $item).text(key).
                attr('href', '/category/popular-tags/'+distinct_cat[key].join('-'));
            $('#popular_tags').append($item);
        });
    });
}
//
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
    //replace broken images
    $('img').each(function() {
        if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            // image was broken, replace with your new image
            this.src = '/public/unity_assets/img/missing_img.png';
        }
    });
    //
    get_top_read_categories();
});