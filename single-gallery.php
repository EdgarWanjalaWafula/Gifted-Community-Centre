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
        <section class="gallery-single gcc-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="lightgallery">
                        <?php 
                            while ( have_posts() ) :
                                the_post();
    
                                get_template_part( 'template-parts/content', get_post_type() );
    
                            endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php 
get_footer();
