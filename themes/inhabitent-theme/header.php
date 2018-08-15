<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>">

	<?php wp_head();?>
	</head>

	<body <?php body_class();?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html('Skip to content');?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></h1>
					<p class="site-description"><?php bloginfo('description');?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">

				<div class="logo-container">

				<a href="http://localhost:3000/inhabitent/">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-tent-white.svg"> -->

				<img class="green-logo-container" src="<?php echo get_template_directory_uri(); ?>/assets/images/inhabitent-logo-tent.svg">
				</a>

				</div>

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html('Primary Menu');?></button>

					
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu'));?>
					<form class="search">
						<input type="text">
						<i class="fas fa-search" href="#"></i>
						</input>
				</form>
					
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
