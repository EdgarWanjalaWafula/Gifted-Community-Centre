<?php 

// Template Name: Inner Page 
get_header(); 

// Page title
get_template_part('template-parts/content', 'page-title'); 
?>
        <section class="inner gcc-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-12">
                   <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'inner' );

                        endwhile; // End of the loop.
                    ?>
                   </div>
                </div>
            </div> 
        </section> 
<?php 
get_footer(); 