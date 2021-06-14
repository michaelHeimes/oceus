<?php

// -----------------------------------------------------------------------------
//! Setup
// -----------------------------------------------------------------------------

define( 'DISALLOW_FILE_EDIT', true );

function oceus_setup() {

	add_theme_support( 'title-tag' );
	// Register Menus
	register_nav_menus( array(
		'header' => __( 'Header', 'Header' ),
        'utility' => __( 'Utility', 'Utility' ),
		'footer' => __( 'Footer', 'Footer' )
	) );
}
add_action( 'after_setup_theme', 'oceus_setup' );


// -----------------------------------------------------------------------------
//! Remove unused admin items
// -----------------------------------------------------------------------------

function oceus_remove_menu_items() {
    remove_menu_page( 'edit-comments.php' );

	global $submenu;
	unset($submenu['themes.php'][6]);
}
add_action( 'admin_menu', 'oceus_remove_menu_items' );


add_action( 'wp_dashboard_setup', 'remove_default_dashboard_widgets' );
	function remove_default_dashboard_widgets() {
		global $wp_meta_boxes;
		
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
	}

// -----------------------------------------------------------------------------
//! Remove Comments From Other Places
// -----------------------------------------------------------------------------

	// Removes from post and pages
	add_action('init', 'remove_comment_support', 100);
	
	function remove_comment_support() {
	    remove_post_type_support( 'post', 'comments' );
	    remove_post_type_support( 'page', 'comments' );
	}
	// Removes from admin bar
	function mytheme_admin_bar_render() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('comments');
	}
	add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
	
// -----------------------------------------------------------------------------
//! Customize login page
// -----------------------------------------------------------------------------

function oceus_login_logo() { ?>
    <style type="text/css">
        #login h1 a,
		.login h1 a {
			background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/oceus.png);
			height: 44px;
			width: 184px;
			background-size: contain;
			background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'oceus_login_logo' );


// -----------------------------------------------------------------------------
//! Add favicon to admin pages
// -----------------------------------------------------------------------------

function oceus_admin_favicon() {
  	$favicon_url = get_stylesheet_directory_uri() . '/favicon.png';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '">';
}
add_action( 'login_head', 'oceus_admin_favicon' );
add_action( 'admin_head', 'oceus_admin_favicon' );


// -----------------------------------------------------------------------------
//! Allow svg uploads
// -----------------------------------------------------------------------------

function oceus_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
  	return $mimes;
}
add_filter('upload_mimes', 'oceus_mime_types');



// -----------------------------------------------------------------------------
//! Preview ACF
// -----------------------------------------------------------------------------

/*
   Debug preview with custom fields
   Taken from: http://support.advancedcustomfields.com/forums/topic/preview-solution/
   See also: http://support.advancedcustomfields.com/forums/topic/2nd-every-other-post-preview-throws-notice/
*/
add_filter('_wp_post_revision_fields', 'add_field_debug_preview');
function add_field_debug_preview($fields){
   $fields["debug_preview"] = "debug_preview";
   return $fields;
}
add_action( 'edit_form_after_title', 'add_input_debug_preview' );
function add_input_debug_preview() {
   echo '<input type="hidden" name="debug_preview" value="debug_preview">';
}
