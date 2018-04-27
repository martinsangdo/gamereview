/**
 * author: Martin SangDo
 */

function refresh_captcha(){
    common.ajaxPost(API_URI.GET_EXTRA_POSTS, params, function(lists){
        // console.log(lists);
        show_extra_posts(lists['random_posts'], $('#random_posts_container'));
        show_extra_posts(lists['recent_posts'], $('#recent_posts_container'));
    });
}

//
function check_login(){

}