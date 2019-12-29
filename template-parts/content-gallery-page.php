<div class="gallery-page">
    <div class="row">
        <?php 

            $gallery = array(
                'post_type'     =>  'gallery', 
                'album'         =>  'main-gallery'
            ); 

            $loop = new WP_QUERY($gallery);

            while($loop->have_posts()): $loop->the_post(); 
                ?>
                    <div class="col-md-4">
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="card text-white rounded-0 border-0 position-relative d-flex align-items-center justify-content-center">
                                <img class="gallery-page-thumbnail" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                               <h4><?php echo the_title(); ?></h4> 
                            </div>
                        </a>
                    </div>
                <?php 
            endwhile; 

            wp_reset_postdata(); 

        ?>
    </div>
</div>