<?php 
/**
 * Template part for displaying home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Community_Center
 */
get_header(); 

// Page title
get_template_part('template-parts/content', 'page-title'); 
    ?>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Support Us</h4>
                        <p class="lead"></p><?php echo the_field('donate_now_background'); ?></p>
                        <?php echo the_field('paybill_no'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php 
get_footer();