<?php 
require get_template_directory() . '/resize.php';
function hk_get_thumb($id, $w, $h){
	$url = wp_get_attachment_url( get_post_thumbnail_id($id));
	$image = huykira_image_resize($url, $w, $h, true, false);
	return $image['url'];	
}

function hk_get_image($url, $w, $h){
	$image = huykira_image_resize($url, $w, $h, true, false);
	return $image['url'];	
}