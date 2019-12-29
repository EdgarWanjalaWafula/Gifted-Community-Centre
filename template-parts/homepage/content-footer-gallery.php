<section class="facebook-photos" id="lightgallery">
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel owl-theme gallery-slide list-unstyled">
                    <?php 

                        $gallery = array(
                            'post_type'    =>   'gallery', 
                            'album'         =>  'footer-gallery', 
                            'posts_per_page'    =>  -1, 
                            'order'           =>  'rand'
                        ); 

                        $loop = new WP_QUERY($gallery); 
                        while($loop->have_posts()): $loop->the_post(); 
                            $images = get_field('footer_galler');

                            // var_dump($images); 

                            foreach($images as $item): ?>
                                <li class="img-thm" data-src="<?php echo $item['url']; ?>">
                                    <i class="icon ion-ios-search primary-gcc-color"></i>
                                    <img alt="<?php echo $item['url']; ?>" src="<?php echo $item['url']; ?>" />
                                </li>
                            <?php endforeach; 
                        endwhile; ?>
                </div>
            </div>
        </div>
    </section>