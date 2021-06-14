<?php

// -----------------------------------------------------------------------------
//  Add editor css
// -----------------------------------------------------------------------------

	add_filter( 'mce_css', function( $urls ) {
		$urls .= ',' . get_bloginfo( 'template_directory' ) . '/tinymce.css';

		return $urls;
	});


// -----------------------------------------------------------------------------
//  ADD EXTRA BUTTONS
// -----------------------------------------------------------------------------

function add_extra_tinymce_buttons() {
	// Killswitches
	if( ! current_user_can( 'edit_posts' ) || ! current_user_can( 'edit_pages' ) ) return;

	// Make sure the WYSIWYG is on
	if( get_user_option( 'rich_editing' ) )
	{
		add_filter( 'mce_buttons', 'custom_tinymce_button_row_1' );
		add_filter( 'tiny_mce_before_init', 'adjust_tinymce_init_parameters' );
	}
}
add_action( 'init', 'add_extra_tinymce_buttons' );


// -----------------------------------------------------------------------------
//! UNIFIED BUTTON ROW
// -----------------------------------------------------------------------------

	function custom_tinymce_button_row_1( $buttons ) {
		$buttons = array_merge( [ 'styleselect' ], $buttons );

		return $buttons;
	}

// -----------------------------------------------------------------------------
//  PRE-INIT SETUP
// -----------------------------------------------------------------------------

	function adjust_tinymce_init_parameters( $init )
	{
		$init['style_formats'] = json_encode( [
			[
				'title' => 'Normal Text',
				'format' => 'removeformat'
			],
			[
				'title' => 'Preface',
				'inline' => 'span',
				'classes' => 'large'
			],
			[
				'title' => 'Highlighted',
				'inline' => 'span',
				'classes' => 'highlight'
			]
		] );

		return $init;
	}
