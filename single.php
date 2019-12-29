<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gifted_Community_Center
 */

get_header();

// Page title
get_template_part('template-parts/content', 'page-title'); 
?>

	<div id="primary" class="content-area gcc-padding">
		<main id="main" class="site-main container">
			<div class="row">
				<div class="col-md-8">
					<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>
				</div>
				<div class="col-md-4">
					<div class="sidebar">
					<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
