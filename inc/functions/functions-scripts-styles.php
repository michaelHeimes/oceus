<?php

 // -----------------------------------------------------------------------------
 //! Scripts
 // -----------------------------------------------------------------------------


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", false, null);
	wp_enqueue_script('jquery');
}

function oceus_load_scripts() {
	wp_register_script( 'oceus_scripts', get_template_directory_uri() . '/dist/js/oceus.min.js', array('jquery'), filemtime(get_theme_file_path('/dist/js/oceus.min.js')), true  );
	$localized = [
		'themeDir' => get_template_directory_uri(),
		'siteUrl' => get_site_url(),
	];
	wp_localize_script( 'THEMENAME_scripts', 'localized', $localized );

	wp_enqueue_script( 'oceus_scripts' );
}
add_action( 'wp_enqueue_scripts', 'oceus_load_scripts' );


// -----------------------------------------------------------------------------
//! Styles
// -----------------------------------------------------------------------------

function oceus_load_styles() {
    wp_register_style( 'google_fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&display=swap' );
	wp_register_style( 'oceus_styles', get_template_directory_uri() . '/dist/css/oceus.min.css', false, filemtime(get_theme_file_path('/dist/css/oceus.min.css')) );

    wp_enqueue_style( 'google_fonts' );
	wp_enqueue_style( 'oceus_styles' );
}
add_action( 'wp_enqueue_scripts', 'oceus_load_styles' );


// -----------------------------------------------------------------------------
//! Remove jQuery migrate
// -----------------------------------------------------------------------------

function remove_jquery_migrate( $scripts ) {
    if ( !is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];

        if ( $script->deps ) {
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');


// -----------------------------------------------------------------------------
//! Remove emoji styles
// -----------------------------------------------------------------------------

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );