/**
 * author: Martin SangDo
 */
//setup video into showing dialog
function show_video_dialog(original_vid_id){
    $('#main_video_container', $('#yt_modal')).html('<iframe width="560" height="400" src="https://www.youtube.com/embed/'+original_vid_id+'?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen autoplay></iframe>');
}