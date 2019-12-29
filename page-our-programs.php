<?php		

    // Check if has posts
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'programs' );

	endwhile; // End of the loop.