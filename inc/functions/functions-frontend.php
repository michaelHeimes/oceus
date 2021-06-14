<?php

// -----------------------------------------------------------------------------
//! Make Gravity Form scroll to form on failed submission
// -----------------------------------------------------------------------------

add_filter( 'gform_confirmation_anchor', '__return_true' );

// -----------------------------------------------------------------------------
//! Add page slug to body class
// -----------------------------------------------------------------------------

function oceus_add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'oceus_add_slug_body_class' );