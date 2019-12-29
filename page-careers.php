<?php		

    get_header();         
    
    // Page title
        get_template_part('template-parts/content', 'page-title'); ?>
        <section class="gcc-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            // Check if has posts
                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', 'careers' );

                            endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php get_footer(); 