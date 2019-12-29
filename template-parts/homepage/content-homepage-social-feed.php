<section class="social-feed gcc-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="section-tagline">
                    <?php _e('Social & Events', 'Gifted_Community_Center'); ?>
                </span>
                <h2>Our Twitter <span class="primary-gcc-color">Feed</span> </h2>
                <?php echo do_shortcode('[custom-twitter-feeds]'); ?>
            </div>
            <div class="col-md-6">
                <?php 
                    $twitterfeed = get_field('#twitter_feed_section'); 

                    if($twitterfeed): 
                        ?>
                            <div class="" data-scrollax-parent="true">
                                <img data-scrollax=" properties: { translateY: '0%'}" class="social-feed-background" src="<?php echo $twitterfeed['background_image']; ?>" alt="Gifted Community Center">
                            </div>
                        <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>