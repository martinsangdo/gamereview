/**
 * author: Martin SangDo
 */

function window_onload(){
    var site_type = $('#site_type').val();
    var $content_container = $('#article_detail_container');

    if (site_type == 'wp'){
        var url = $('#site_api_uri').val() + 'posts/'+$('#original_post_id').val();
        common.ajaxRawGet(url, function(resp){
            // common.dlog(resp);
            // common.dlog(resp.content.rendered);
            if (resp.content && resp.content.rendered){
                $content_container.html(resp.content.rendered);
                $('a', $content_container).attr('target', '_blank');
                $('img', $content_container).css('max-width', '100%').css('height', 'auto');
                // $('iframe', $content_container).css('max-width', '100%').css('height', 'auto');
            }
        }, function(err){});
    } else if (site_type == 'rss'){
        $content_container.html($('#post_excerpt').html());
        $content_container.append('<a href="'+$('#original_post_id').val()+'">Go detail >></a>');
        $('a', $content_container).attr('target', '_blank');
    }

}

window.onload = window_onload;