<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underdag
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underdag' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'underdag' ); ?></button>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav><!-- #site-navigation -->
		<div class="site-branding">
			<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
<svg version="1.1"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
	 x="0px" y="0px" width="80px" height="80px" viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve">
<defs>
</defs>
<path d="M53.1,46.1c-3.9-1.5-6.5-4.5-10.2-6.2c-3.8-0.1-4.5-3.2-6.9-4.7c-1.7,0.4-1.8-1.3-3-0.7c-0.8-0.3-0.7-1.4-1.5-1.7
	c-1.1,0.2-0.6,1.9-2.2,1c-0.5,0.5,0.2,0.4,0,1.2c-1,0-2,0.1-3,0.2c0,1.1,1.3,1,1.7,1.7c-2.1-0.4-4.3-0.1-6.2,0.7
	c0.9,0.3,1.8,0.4,2.7,0.2c-1.8,0.2-3.5,0.5-5.2,1c0.3,0.7,2.2-0.2,2.5,0.5c-1.7,0.5-3.3,1.1-4.9,1.9c0,0.5,0.6,0.5,1.2,0.5
	c-0.2,0.7-1.3,0.5-1.2,1.5c0.6,0.2,0.2,1,1,1.5c-3,2.2-5.7-2.4-9-3c4.1,4.2,7.2,9.3,10.9,13.9h42.4C67,43.7,51.4,39,50.4,29.4
	c-0.2-1.9,0.6-3.7,2.2-4.7c3.4,1.7,4.7,5.6,7.2,8.2c0.2-1.8-0.6-2.5-0.5-4.2c1.3-1.1,0.6-3.1,1.2-4.5c-1.9-2.6-2.7-6.4-6.9-6.2
	c-5.2,0.3-9.8,7.1-9,13.4C45.6,38,51.2,40.9,53.1,46.1z"/>
<path d="M40,0C17.9,0,0,17.9,0,40s17.9,40,40,40s40-17.9,40-40S62.1,0,40,0z M40,77.6C19.2,77.6,2.4,60.8,2.4,40S19.2,2.4,40,2.4
	S77.6,19.2,77.6,40S60.8,77.6,40,77.6z"/>
</svg>


			</a>
			</div><!--icon logo-->
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description visuallyhidden"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

			</header><!-- #masthead -->

	<div id="content" class="site-content">
