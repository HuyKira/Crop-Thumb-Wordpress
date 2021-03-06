<?php 
require get_template_directory() . '/resize.php';
function hk_get_thumb($id, $w, $h){
	if(get_post_thumbnail_id($id)){
		$url = wp_get_attachment_url( get_post_thumbnail_id($id));
	} else {
		$url = get_bloginfo('template_directory').'/no-thumb.jpg';
	}                                                        
	$image = huykira_image_resize($url, $w, $h, true, false);
	return $image['url'];	
}

function hk_get_image($url, $w, $h){                                                        
	$image = huykira_image_resize($url, $w, $h, true, false);
	return $image['url'];	
}

function wpc_unset_imagesizes($sizes){  
    unset( $sizes['thumbnail']);  
    unset( $sizes['medium']);  
    unset( $sizes['medium_large']);  
    unset( $sizes['large']);  
}  
add_filter('intermediate_image_sizes_advanced', 'wpc_unset_imagesizes' ); 