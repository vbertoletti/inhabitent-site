<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
 * Remove sub menus, hidden from client to avoid mistakes. 
 */

function inhabitent_remove_submenus() {
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// change login logo 
function inhabitent_login_logo() {
	echo '<style type="text/css">                                                                   
	body.login div#login h1 a { background-image:url('.get_stylesheet_directory_uri().'/assets/images/inhabitent-logo-text-dark.svg) !important; 
		background-size: 300px 53px !important;
		width: 320px;
		margin: 0;
	} 
	#loginform {
		margin-top: 0;
	}
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');

/**
 * The following changes the logo url 
 */

function inhabitent_login_url( $url ) {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'inhabitent_login_url');