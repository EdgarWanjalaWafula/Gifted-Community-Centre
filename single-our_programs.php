<?php
/**
 * The template for displaying single posts for the Our Services post type. 
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
                <div class="col-md-8 single-our-programs-articles">
                    <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'single-services' );

                        endwhile; // End of the loop.
                    ?>
                </div>

                <div class="col-md-4">
                    <div class="sidebar">
                        <?php get_sidebar('our-programs'); ?>
                    </div>
                    
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
