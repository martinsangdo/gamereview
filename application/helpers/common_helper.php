<?php
function public_url($url='')
{
    return base_url('public/'.$url);
}

function format_post_time($time){
    return date_format(date_create($time), 'Y-M-d H:i');
}