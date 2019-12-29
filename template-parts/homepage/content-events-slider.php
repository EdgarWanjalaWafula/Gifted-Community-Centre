<div class="owl-carousel owl-theme owl-event-slider">
    <?php 
        $eventposters  = array(
            'post_type'         =>  'events', 
            'posts_per_page'    =>  -1
        ); 

        $i = 0; 

        $loop = new WP_Query($eventposters); 

        while($loop->have_posts()): $loop->the_post(); ?>
            <div class="card rounded-0 border-0">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
            </div>
        <?php 
        endwhile; 
        wp_reset_postdata(); 
        ?>
</div>