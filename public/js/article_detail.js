/**
 * author: Martin SangDo
 */

function window_onload(){
    var url = 'https://metro.co.uk/wp-json/wp/v2/posts/7436728';
    common.ajaxRawGet(url, function(resp){
        common.dlog(resp);
        common.dlog(resp.content.rendered);

        if (resp.content && resp.content.rendered){
            var $content_container = $('#article_detail_container');
            $content_container.html(resp.content.rendered);
            $('a', $content_container).attr('target', '_blank');
            $('img', $content_container).css('max-width', '825px');
        }
    }, function(err){});
}

window.onload = window_onload;