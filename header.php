<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gifted_Community_Center
 */


 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php  
		
		// Only show the subscribe box on the homepage only!!! 
		if(is_front_page()): 
			get_template_part('template-parts/content', 'newsletter');
		endif; 
	?>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="2" stroke="#dfdfdf"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#0b71b9"/></svg></div>

	<!-- Sidemenu  -->
	<section class="menu-drawer">
		<div class="card rounded-0 border-0 bg-transparent ">
			<!-- Links  -->
			<div class="card-body card-contents">
				<?php 
					wp_nav_menu(
						array(
							'theme_location'  => 'menu-3',
							'menu_id'         => 'mobile-menu-items',
							'menu_class'      => 'mobile-menu-items list-unstyled text-uppercase',
							'depth'           => 1,
							'fallback_cb'     => '',
						)
					); 
				?>
			</div> 
		</div>
	</section>
	
	<div id="page" class="site">
		<header id="masthead" class="site-header gcc-header">
			<div class="container gcc-br">
				<div class="row">
					<nav class="navbar navbar-expand-md w-100">
						<!-- Site logo  -->
						<?php the_custom_logo(''); ?>

						<!-- Toggle Button -->
						<div class="toggle-container menu-drawer-button">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<?php
							wp_nav_menu([
								'menu'            => 'menu-1',
								'theme_location'  => 'menu-1',
								'container'       => 'div',
								'container_id'    => 'bs4navbar',
								'container_class' => 'collapse navbar-collapse justify-content-end w-100',
								'menu_id'         => false,
								'menu_class'      => 'navbar-nav gcc-menu',
								'depth'           => 2,
								'fallback_cb'     => 'bs4navwalker::fallback',
								'walker'          => new bs4navwalker()
							]);
						?>
					</nav>
				</div>
			</div>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
