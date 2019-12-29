<?php		

    // Check if has posts
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'who-we-are' );

	endwhile; // End of the loop.