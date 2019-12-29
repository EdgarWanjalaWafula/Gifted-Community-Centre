<?php
/**
 * The sidebar containing related posts to our programs.   
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gifted_Community_Center
 */

if ( ! is_active_sidebar( 'program-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'program-sidebar' ); ?>
</aside><!-- #secondary -->
