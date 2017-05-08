<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
	        <meta http-equiv="x-ua-compatible" content="ie=edge">	
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			wp_title( '|', true, 'right' );
		?><?php bloginfo( 'title' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		<?php
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
	</head>
	<body <?php body_class(); ?>>
	<?php ie_browse_happy(); ?>
		<header>
			<div class="top-bar group">
				<div class="limit-center align-right content">
					<?php wp_nav_menu( array(
						'container' 		=> 		false,
						'container_class' 	=>		'',
						'menu_class' 		=>  	'language-switcher-menu',
					) ); ?>
					<p>C/ Vilana nº2 Barcelona</p>
					<p>Tel. 93 211 37 00</p>
				</div>
			</div>
			<div class="logo-bar group">
				<div class="limit-center content">
					<div class="group__col--2-3">
						<h1 class="hero logo">
							<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="sidekick"><?php bloginfo( 'description' ); ?></h2>
					</div>
					<div class="group__col--1-3 hidden--mobile ">
					</div>
				</div>
			</div>
			<div class="pure-menu pure-menu-horizontal ">
				<button class="hamburger hamburger--collapse" type="button">
				  <span class="hamburger-box">
				    <span class="hamburger-inner"></span>
				  </span>
				</button>
				<div class="main-menu">
					<div class="limit-center">
					<?php wp_nav_menu( array(
						'container' 	=> 		false,
						'menu_class' 	=>  	'pure-menu-list',
						'menu' 			=> 		'menu-principal',
					) ); ?>
					</div>
				</div>
			</div>
		</header>
		<main role="main">
