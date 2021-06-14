<?php 
	
// -----------------------------------------------------------------------------
//! Featured Images
// -----------------------------------------------------------------------------

add_theme_support('post-thumbnails', array('page','post') );

// -----------------------------------------------------------------------------
//! Image Sizes
// -----------------------------------------------------------------------------
	
	add_image_size( 'block-link', 575, 260, true );
	add_image_size( 'callout', 590, 370, true );
	add_image_size( 'hero', 1440, 750, true );
	add_image_size( 'product', 672, 460, true );
	add_image_size( 'related', 370, 248, true );
	add_image_size( 'case-study', 590, 370, true );
	add_image_size( 'gallery', 780, 780, true );

// -----------------------------------------------------------------------------
//! Use Relative Image Links instead of full path when uploading
// -----------------------------------------------------------------------------

add_filter('get_image_tag', 'theme_get_image_tag');
function theme_get_image_tag($html) {
    return str_replace(get_bloginfo('url'), '', $html);
}




// -----------------------------------------------------------------------------
//! Wrap iframe embeds
// -----------------------------------------------------------------------------

function oceus_wrap_iframe( $html, $url, $args ) {
	return '<div class="oembed-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'oceus_wrap_iframe', 10, 3 );
add_filter( 'oembed_result', 'oceus_wrap_iframe', 10, 3 );


// -----------------------------------------------------------------------------
//! Image embeds
// -----------------------------------------------------------------------------
/*

function oceus_format_image_embed( $html, $id, $caption, $title, $align, $url, $size, $alt ) {
	$src = wp_get_attachment_image_src( $id, 'full' );

	$html = '<div class="image-embed align' . $align . '">' .
				'<div class="image"><img src="' . $src[0] . '" alt="' . $alt . '"></div>';

	if( $caption ) {
		$html .= '<div class="caption">' . $caption . '</div>';
	}

	$html .= '</div>';
	return $html;
}
add_filter( 'image_send_to_editor', 'oceus_format_image_embed', 10, 8 );
*/