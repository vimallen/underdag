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

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underdag' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<svg version="1.1"
					 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
					 x="0px" y="0px" width="165.6px" height="127.5px" viewBox="0 0 165.6 127.5" style="enable-background:new 0 0 165.6 127.5;"
					 xml:space="preserve">
				<defs>
				</defs>
				<g>
					<path d="M64.6,22.9c-0.2-0.1-0.5-0.2-0.7-0.2c2.5,2.6,4.3,5.8,6.5,8.6c8.5,0,16.9,0,25.4,0c1.5-3.9-0.7-6.9-3.2-9.7
						c-2-2.2-6.2-6.8-2.6-9.5c2,1.1,2.8,3.5,4.3,5.1c0.1-1.1-0.4-1.5-0.3-2.6c0.8-0.6,0.4-1.9,0.7-2.8c-1.2-1.7-1.8-4.2-4.4-3.8
						c-2.4,0.3-4,2.6-4.7,4.7c-0.8,2.5-0.4,5.1,1,7.3c1.2,1.9,3,3.5,3.7,5.6c-2.4-0.9-3.9-2.7-6.1-3.9c-2.3-0.1-2.8-2-4.2-2.9
						c-1,0.3-1.1-0.8-1.8-0.5c-0.5-0.2-0.4-0.9-0.9-1.1c-0.7,0.2-0.4,1.2-1.3,0.6c-0.3,0.3,0.1,0.3,0,0.8c-0.7-0.1-1.2,0.1-1.8,0.2
						c0,0.7,0.8,0.6,1,1.1c-1.3-0.4-2.7,0.1-3.7,0.5c0.3,0.4,1.1,0.1,1.6,0.2c-1,0.3-2.3,0.2-3.1,0.6c0.2,0.5,1.3-0.1,1.5,0.3
						c-1.1,0.2-2,0.7-3,1.1c0,0.3,0.4,0.3,0.7,0.3c-0.1,0.4-0.8,0.3-0.7,0.9c0.3,0.1,0.1,0.6,0.6,0.9C67.7,25.8,66.2,23.7,64.6,22.9z"/>
					<path d="M113.4,30.6C113.1,17.9,105,6.2,93,1.8C81-2.6,67.4,1.2,59.2,11c-4.6,5.5-7.3,12.5-7.5,19.7H0v1h52.6v-0.1h0.1
						c0-12.5,7.8-24.2,19.5-28.7c11.8-4.5,25.3-0.6,33.3,9.1c4.5,5.5,6.9,12.5,6.9,19.5h0.1v0.1h53v-1H113.4z"/>
					<path d="M2.6,64.6c3.5,2.1,8.4,2.8,12,0.6c3.3-2,5-6,3.5-9.7c-1.6-4.2-7-5-10.6-6.8c-1.7-0.9-3-2.2-3.2-4.1c-0.2-2,0.9-3.8,2.8-4.5
						c2-0.7,4.4,0,5.9,1.5c1.6,1.7,2.3,4,2.9,6.2h1.5l-0.2-9h-1.5L15,40.1c-3.5-2.2-8.2-2.8-11.6,0c-3.1,2.5-3.7,7.5-0.8,10.5
						c1.3,1.4,3,2.1,4.8,2.8c1.8,0.7,4,1.2,5.6,2.5c3.1,2.5,2.5,8.1-1.8,8.8c-5.3,0.9-8.4-3.5-9.6-8.1H0L0.3,66h1.5L2.6,64.6z"/>
					<path d="M45.4,64C45.2,63.9,45.2,63.9,45.4,64c-0.8-0.6-1.3-1.2-1.7-2.1l-9.1-23.4h-1.5c-1.9,5-3.8,9.9-5.8,14.9
						c-0.9,2.4-1.8,4.7-2.8,7.1c-0.4,1-0.8,2.1-1.6,2.9c-0.9,0.9-2,1.3-3.3,1.3V66H30v-1.4c-1-0.1-2.2-0.2-3.1-0.7
						c-0.8-0.4-0.9-1-0.7-1.9c0.3-1.9,1.1-3.7,1.8-5.5h9.5l2.2,6.1c0.7,1.9-2.1,1.9-3.3,2V66h11.3v-1.4C46.9,64.6,46.1,64.4,45.4,64
						C45.5,64,45.5,64,45.4,64z M28.6,54.9l4.1-10.5l4.1,10.5H28.6z"/>
					<path d="M45.4,64c0,0-0.1,0-0.1-0.1C45.3,64,45.3,64,45.4,64C45.4,64,45.4,64,45.4,64z"/>
					<path d="M53.8,62.1c-0.5,2-2.4,2.4-4.2,2.6V66h11v-1.4c-1,0-2.7-0.4-3.5-1.1c-1.3-1.2-1.2-3.7-1.2-5.3V41.9h0.2L65,65.6h1l9.3-23.1
						h0.3v19.8c0,0.9-0.4,1.6-1.1,2c-0.8,0.5-2.1,0.4-3.1,0.5V66h12v-1.4c-1.6-0.1-3.7-0.5-3.7-2.5V42.6c0-2.1,2-2.3,3.7-2.4v-1.4h-8.9
						c-0.1,1.1-0.5,2.3-0.9,3.3l-6.6,17.1L59,38.8h-9.3v1.4c2.7,0.1,4.3,1.6,4.3,4.3v13.9C54,60.1,54,61.3,53.8,62.1z M53.8,62.3
						C53.7,62.3,53.8,62.3,53.8,62.3L53.8,62.3z"/>
					<polygon points="94.7,41.4 94.7,41.4 94.7,41.4 	"/>
					<path d="M94.7,41.4C94.6,41.5,94.6,41.6,94.7,41.4C94.7,41.3,94.7,41.3,94.7,41.4c0.4-1.1,2.5-1.2,3.4-1.2v-1.4H86.8v1.4
						c1.6,0.1,3.6,0.7,3.6,2.6v16.1c0,5.4,5.5,7.8,10.2,7.8c5,0,9.8-3.3,9.8-8.6V46.3c0-1.4-0.1-3.4,0.7-4.6c0.7-1.1,2.5-1.4,3.7-1.4
						v-1.4h-11.1v1.4c1.2,0.1,3.2,0.4,4,1.5c0.9,1.3,0.8,3.3,0.8,4.8v11.1c0,4.3-3.3,6.9-7.4,6.9c-1.7,0-3.4-0.4-4.7-1.6
						c-1.4-1.4-1.8-3.4-1.8-5.3v-15C94.4,42.2,94.5,41.8,94.7,41.4z"/>
					<path d="M120.6,63.5C120.6,63.4,120.7,63.3,120.6,63.5C120.5,63.6,120.5,63.6,120.6,63.5c-0.6,1.2-2.5,1.1-3.6,1.2V66h22.5l0.5-8
						h-1.4c-0.5,1.6-1.3,3.2-2.3,4.5c-0.4,0.6-0.8,1.2-1.5,1.4c-0.8,0.3-1.7,0.4-2.6,0.5c-1.7,0.1-3.4,0.1-5.1-0.1
						c-2-0.3-2.3-1.7-2.3-3.5v-8.1h3.1c1.2,0,2.4,0.1,3.2,1.1c0.8,0.9,1.1,2.4,1.2,3.5h1.4V46.7h-1.4c-0.1,1.2-0.5,2.6-1.3,3.5
						c-0.8,0.9-2,1-3.1,1h-3.1V40.4h4.3c1.4,0,3.3-0.2,4.5,0.7c1.3,1,2.5,2.8,2.9,4.4h1.4v-6.5h-21v1.4c1.7,0.1,3.9,0.5,3.9,2.6v19.5
						C120.8,62.8,120.7,63.2,120.6,63.5z"/>
					<polygon points="120.6,63.5 120.6,63.5 120.6,63.5 	"/>
					<path d="M146.5,63.5c-0.6,1.1-2.3,1-3.4,1.1V66h21.2l0.6-8.1h-1.4c-0.6,1.5-1.4,3-2.3,4.3c-0.4,0.5-0.7,1.2-1.3,1.5
						c-0.6,0.4-1.5,0.5-2.3,0.6c-1.6,0.2-3.5,0.3-5.2,0c-1.7-0.4-1.7-2-1.7-3.4V42.7c0-2.1,2.1-2.4,3.8-2.5v-1.4h-11.5v1.4
						c0.8,0.1,1.8,0.3,2.5,0.7c0.8,0.4,1.1,1.1,1.1,2v19.4C146.7,62.8,146.7,63.2,146.5,63.5z"/>
					<path d="M2.3,80.5c0.6-1.3,1.5-2.9,2.7-3.7C6,76,7.8,76.2,9,76.2h1.1v21.9c0,2.4-2.6,2.3-4.4,2.4v1.4h12.8v-1.4
						c-1.7,0-4.4-0.4-4.4-2.6V76.2h1.1c1.8,0,3.5-0.2,4.8,1.3c1.1,1.3,2.1,3,2.6,4.6H24v-7.4H0.3v7.4h1.3C1.8,81.6,2,81.1,2.3,80.5z"/>
					<path d="M41.8,95.3c-1.6-5.7-3.4-11.4-4.9-17.2c-0.2-0.8-0.3-1.3,0.6-1.6c0.9-0.3,1.9-0.3,2.8-0.4v-1.4H29.2V76
						c1.2,0.1,2.3,0.5,3.1,1.4c0.5,0.6,0.7,1.5,0.9,2.2c0.5,1.9,1.1,3.8,1.6,5.8c1.6,5.6,3.1,11.2,4.7,16.7h1.7l7.1-20.9l6.9,20.9H57
						c1.6-5.1,3.2-10.2,4.7-15.4c0.7-2.3,1.4-4.6,2.1-6.8c0.6-2.1,1.9-3.9,4.3-4v-1.4h-9.9V76c1.3,0.1,3.9,0.2,3.8,2.1
						c-0.1,1.7-0.7,3.4-1.2,5c-1.1,4.2-2.3,8.4-3.5,12.5l-6.8-20.6h-1.9L41.8,95.3z"/>
					<polygon points="77.8,99.3 77.8,99.3 77.8,99.3 	"/>
					<path d="M77.8,99.3C77.8,99.2,77.9,99.2,77.8,99.3C77.7,99.5,77.7,99.4,77.8,99.3c-0.6,1.2-2.5,1.1-3.6,1.2v1.4h22.5l0.5-8h-1.4
						c-0.5,1.6-1.3,3.2-2.3,4.5c-0.4,0.6-0.8,1.2-1.5,1.4c-0.8,0.3-1.7,0.4-2.6,0.5c-1.7,0.1-3.4,0.1-5.1-0.1c-2-0.3-2.3-1.7-2.3-3.5
						v-8.1h3.1c1.2,0,2.4,0.1,3.2,1.1c0.8,0.9,1.1,2.4,1.2,3.5h1.4V82.6h-1.4c-0.1,1.2-0.5,2.6-1.3,3.5c-0.8,0.9-2,1-3.1,1h-3.1V76.2
						h4.3c1.4,0,3.3-0.2,4.5,0.7c1.3,1,2.5,2.8,2.9,4.4h1.4v-6.5h-21V76c1.7,0.1,3.9,0.5,3.9,2.6v19.5C78,98.6,77.9,99,77.8,99.3z"/>
					<path d="M104.7,76c1.7,0.1,3.9,0.5,3.9,2.6v19.5c0,2.2-2.2,2.2-3.9,2.3v1.4h22.5l0.5-8h-1.4c-0.5,1.6-1.3,3.2-2.3,4.5
						c-0.4,0.6-0.8,1.2-1.5,1.4c-0.8,0.3-1.7,0.4-2.6,0.5c-1.7,0.1-3.4,0.1-5.1-0.1c-2-0.3-2.3-1.7-2.3-3.5v-8.1h3.1
						c1.2,0,2.4,0.1,3.2,1.1c0.8,0.9,1.1,2.4,1.2,3.5h1.4V82.6h-1.4c-0.1,1.2-0.5,2.6-1.3,3.5c-0.8,0.9-2,1-3.1,1h-3.1V76.2h4.3
						c1.4,0,3.3-0.2,4.5,0.7c1.3,1,2.5,2.8,2.9,4.4h1.4v-6.5h-21V76z"/>
					<path d="M135.6,76c1.7,0.1,3.6,0.6,3.6,2.6v19.6c0,2.1-2.1,2.3-3.7,2.3v1.4h11.3c5.8,0,11.9-2.8,14-8.5c1.9-5.1,0.7-11.8-3.7-15.4
						c-2.6-2.2-6.2-3.3-9.6-3.3h-11.9V76z M143.3,76.3c3.1-0.1,6.1-0.2,8.8,1.5c2.4,1.6,3.9,4.3,4.5,7.1c1.1,5.5-0.1,13.3-6.4,14.9
						c-2.5,0.7-6.9,0.8-6.9-2.8V76.3z"/>
					<path d="M13.8,125.6v-8.4c0-0.9,0.9-1,1.6-1v-0.6h-3.8c0,0.5-0.2,1-0.4,1.4l-2.8,7.3L5,115.6H1v0.6c1.2,0.1,1.8,0.7,1.8,1.8v6
						c0,1.6-0.2,2.5-1.9,2.7v0.6h4.7v-0.6c-0.4,0-1.2-0.2-1.5-0.5c-0.6-0.5-0.5-1.6-0.5-2.3V117h0.1l3.8,10.1h0.4l4-9.9H12v8.5
						c0,0.4-0.2,0.7-0.5,0.9c-0.4,0.2-0.9,0.2-1.3,0.2v0.6h5.1v-0.6c-0.4,0-0.8-0.1-1.1-0.2C13.9,126.3,13.8,126,13.8,125.6z"/>
					<path d="M19.4,117.5c-1.9,2.4-1.7,6.4,0.6,8.6c2.2,2.1,5.9,1.9,7.9-0.4c2-2.3,2-6.4-0.2-8.7C25.4,114.6,21.4,114.9,19.4,117.5z
						 M27.1,123.6C27.1,123.9,27.1,123.7,27.1,123.6c-0.5,2.2-2.7,4.2-5,2.8c-2.2-1.3-2.3-4.9-1.8-7.1c0.5-2.3,2.7-4.2,5.1-2.7
						C27.5,117.9,27.6,121.4,27.1,123.6C27.2,123.4,27.2,123.3,27.1,123.6z"/>
					<path d="M27.7,117C28.2,117.5,27.2,116.5,27.7,117L27.7,117z"/>
					<path d="M27.1,123.6C27.1,123.6,27.1,123.6,27.1,123.6C27.1,123.6,27.1,123.6,27.1,123.6C27.1,123.6,27.1,123.6,27.1,123.6z"/>
					<path d="M39.3,116.2c0.7,0,1.6,0.3,1.6,1.1v3.5h-5.5v-3.6c0-0.9,0.8-1,1.5-1v-0.6h-4.8v0.6c0.7,0,1.6,0.3,1.6,1.1v8.4
						c0,0.4-0.1,0.7-0.5,0.8c-0.3,0.1-0.7,0.1-1.1,0.1v0.6H37v-0.6c-0.7,0-1.5-0.2-1.5-1.1v-4.1h5.5v4.1c0,0.4-0.1,0.7-0.5,0.8
						c-0.3,0.1-0.7,0.1-1.1,0.1v0.6h4.8v-0.6c-0.7,0-1.5-0.2-1.5-1.1v-8.4c0-0.9,0.8-1,1.5-1v-0.6h-4.8V116.2z"/>
					<path d="M57,126.4C57,126.4,57,126.4,57,126.4C57,126.4,57,126.4,57,126.4C57,126.4,57,126.4,57,126.4z"/>
					<path d="M57,126.4C56.9,126.3,57,126.4,57,126.4c-0.3-0.2-0.6-0.5-0.7-0.9l-3.9-10h-0.7c-0.9,2.2-1.7,4.4-2.6,6.6
						c-0.6,1.6-1.1,4.4-3.2,4.6v0.6h4.4v-0.6c-0.7,0-1.7-0.1-1.7-1c0-0.8,0.5-1.7,0.8-2.5h4.1l1,2.6c0.3,0.8-0.9,0.8-1.4,0.8v0.6H58
						v-0.6C57.7,126.7,57.3,126.6,57,126.4C57,126.4,57.1,126.4,57,126.4z M49.8,122.5l1.7-4.5l1.8,4.5H49.8z"/>
					<path d="M59.6,116.2c0.7,0,1.7,0.2,1.7,1.1v8.4c0,1-1.1,0.9-1.7,1v0.6h5.2v-0.6c-0.4,0-0.8-0.1-1.2-0.2c-0.3-0.1-0.5-0.4-0.5-0.8
						v-8.4c0-0.9,1-1,1.7-1v-0.6h-5.2V116.2z"/>
					<polygon points="77.9,126.5 77.9,126.5 77.9,126.5 	"/>
					<path d="M77.9,126.5C77.8,126.4,77.9,126.4,77.9,126.5c-1-0.5-1.6-1.5-2.2-2.4c-0.6-0.8-1.2-1.7-1.9-2.5c1.6-0.5,2.9-1.5,2.8-3.3
						c-0.1-1.9-2-2.6-3.7-2.6h-5.4v0.6c0.7,0.1,1.6,0.2,1.6,1.1v8.4c0,0.9-0.8,0.9-1.6,1v0.6h4.9v-0.6c-0.7,0-1.6-0.1-1.6-1V122h1.2
						c1.3,1.7,2.5,3.5,3.7,5.3H79v-0.6C78.7,126.7,78.3,126.6,77.9,126.5C78,126.5,78,126.5,77.9,126.5z M72,121.3H71v-5h1.4
						C75.7,116.3,75.2,121.3,72,121.3z"/>
					<path d="M86.1,116.2c0.7,0.1,1.7,0.2,1.7,1.1v8.4c0,0.3-0.1,0.7-0.5,0.8c-0.3,0.2-0.8,0.1-1.2,0.1v0.6h5v-0.6
						c-0.7,0-1.6-0.2-1.6-1.1v-4h1.3c1.3,0,1.9,0.7,2,2h0.6v-4.6h-0.6c-0.1,1.2-0.8,1.9-2,1.9h-1.3v-4.7h2c0.6,0,1.4-0.1,1.9,0.3
						c0.6,0.4,1.1,1.3,1.3,2h0.6v-2.9h-9.1V116.2z"/>
					<path d="M107.5,126.4C107.5,126.4,107.5,126.4,107.5,126.4C107.5,126.4,107.5,126.4,107.5,126.4
						C107.5,126.4,107.5,126.4,107.5,126.4z"/>
					<path d="M107.5,126.4C107.4,126.3,107.4,126.4,107.5,126.4c-0.3-0.2-0.6-0.5-0.7-0.9l-3.9-10h-0.7c-0.9,2.2-1.7,4.4-2.6,6.6
						c-0.6,1.6-1.1,4.4-3.2,4.6v0.6h4.4v-0.6c-0.7,0-1.7-0.1-1.7-1c0-0.8,0.5-1.7,0.8-2.5h4.1l1,2.6c0.3,0.8-0.9,0.8-1.4,0.8v0.6h4.8
						v-0.6C108.1,126.7,107.8,126.6,107.5,126.4C107.5,126.4,107.5,126.4,107.5,126.4z M100.3,122.5l1.7-4.5l1.8,4.5H100.3z"/>
					<path d="M118.5,121.8c-0.6-0.5-1.4-0.7-2.2-0.8V121c1.5-0.3,2.9-1.3,2.8-3c-0.1-1.7-1.9-2.4-3.4-2.4h-5.4v0.6
						c0.7,0.1,1.5,0.3,1.5,1.1v8.4c0,0.9-0.9,0.9-1.6,1v0.6h5.5c1.4,0,3-0.6,3.7-1.9C120,124.2,119.6,122.6,118.5,121.8z M113.5,116.3
						c1.3,0,3.1-0.2,3.4,1.4c0.4,1.7-0.7,3.1-2.4,3.1h-1V116.3z M117,125.9C116.8,126.1,116.9,126,117,125.9c-0.7,0.8-3.5,1.3-3.5-0.3
						v-4.1c1.2-0.1,2.7-0.2,3.6,0.8C117.9,123.2,117.8,125,117,125.9C117.1,125.8,117.2,125.7,117,125.9z"/>
					<polygon points="117,125.9 117,125.9 117,125.9 	"/>
					<path d="M118.5,121.8C118.8,122.1,118.2,121.6,118.5,121.8L118.5,121.8z"/>
					<path d="M132.8,126.5C132.7,126.4,132.8,126.4,132.8,126.5c-1-0.5-1.6-1.5-2.2-2.4c-0.6-0.8-1.2-1.7-1.9-2.5
						c1.6-0.5,2.9-1.5,2.8-3.3c-0.1-1.9-2-2.6-3.7-2.6h-5.4v0.6c0.7,0.1,1.6,0.2,1.6,1.1v8.4c0,0.9-0.8,0.9-1.6,1v0.6h4.9v-0.6
						c-0.7,0-1.6-0.1-1.6-1V122h1.2c1.3,1.7,2.5,3.5,3.7,5.3h3.1v-0.6C133.5,126.7,133.1,126.6,132.8,126.5
						C132.9,126.5,132.9,126.5,132.8,126.5z M126.9,121.3h-1.1v-5h1.4C130.6,116.3,130.1,121.3,126.9,121.3z"/>
					<polygon points="132.8,126.5 132.8,126.5 132.8,126.5 	"/>
					<path d="M135.5,116.2c0.7,0,1.7,0.2,1.7,1.1v8.4c0,1-1.1,0.9-1.7,1v0.6h5.2v-0.6c-0.4,0-0.8-0.1-1.2-0.2c-0.3-0.1-0.5-0.4-0.5-0.8
						v-8.4c0-0.9,1-1,1.7-1v-0.6h-5.2V116.2z"/>
					<path d="M152.2,125c-1.1,1.6-3.2,2.1-4.9,1c-1.7-1.2-2.1-3.4-2-5.3c0.1-1.8,0.8-4,2.7-4.5c2.4-0.7,3.7,1.6,4.1,3.6h0.7l-0.1-4.2
						h-0.7l-0.3,0.6c-2-1.2-4.7-1-6.5,0.6c-1.7,1.6-2.3,4.2-1.8,6.5c1.1,4.9,7.8,6,9.8,1.1l-0.6-0.3C152.6,124.4,152.4,124.7,152.2,125z
						"/>
					<path d="M162.9,121.9C162.8,121.8,162.9,121.9,162.9,121.9c-1.4-1.5-5.9-1.6-5.4-4.4c0.2-1.3,1.7-1.7,2.8-1.3
						c1.3,0.5,1.8,2,2.1,3.3h0.7l-0.1-3.9h-0.7l-0.3,0.6c-1.9-1.2-4.9-1.2-5.9,1.3c-1,2.5,1.1,3.9,3.1,4.6c1,0.4,2.1,0.7,2.6,1.8
						c0.4,0.8,0.3,2-0.5,2.6c-0.8,0.6-2.2,0.5-3.1,0c-1.1-0.7-1.6-1.9-1.9-3.1h-0.7l0.1,4h0.7l0.4-0.6c1.6,1,3.9,1.2,5.5,0
						C163.7,125.6,164.2,123.4,162.9,121.9C163,122,163.1,122.1,162.9,121.9z"/>
					<rect x="0.7" y="108.7" width="164.9" height="1"/>
				</g>
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

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'underdag' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
