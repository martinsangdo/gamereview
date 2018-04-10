/**
 * author: Martin SangDo
 */
//get & show post detail
function get_article_detail(){
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
                $('#loading_img').remove();
            }
        }, function(err){});
    } else if (site_type == 'rss'){
        $content_container.html($('#post_excerpt').html());
        $content_container.append('<a href="'+$('#original_post_id').val()+'">Go detail >></a>');
        $('a', $content_container).attr('target', '_blank');
        $('#loading_img').remove();
    }
}
//get & show related posts
function get_related_posts(){
    common.ajaxPost(API_URI.GET_RELATED_POSTS, {post_id: $('#post_id').val()}, function(top_list){
        var len = top_list.length;
        if (len == 0){
            return;
        }
        var $item_tmpl = $('#related_post_tmpl');      //item template
        var $item;
        for (var i=0; i<len; i++){
            $item = $item_tmpl.clone(false);
            $('div.thumb_url', $item).css('background-image', 'url('+top_list[i]['thumb_url']+')').
                css('cursor', 'pointer').attr('onclick', 'common.redirect("/news/'+top_list[i]['slug']+'");');
            $('a.title', $item).html(top_list[i]['title']).attr('href', '/news/'+top_list[i]['slug']);
            $('#related_posts_container').append($item.removeClass('hidden'));
        }
    });
}
//
function window_onload(){
    get_article_detail();
    get_related_posts();
    //replace broken images
    $('img').each(function() {
        if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            // image was broken, replace with your new image
            this.src = '/public/unity_assets/img/missing_img.png';
        }
    });
}

window.onload = window_onload;