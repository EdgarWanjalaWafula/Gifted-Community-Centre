<?php 
/**
 * Template part for displaying home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Community_Center
 */
get_header(); 

get_template_part('template-parts/homepage/content', 'homepage-slider'); 
?>


<div class="about-intro gcc-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="section-tagline">
                    <?php _e('our story', 'Gifted_Community_Center'); ?>
                </span>
                <h2 class="section-title aos-animate" data-aos="fade-up" data-aos-delay="100">
                    Story about <br> <span><?php _e('Gifted Community Center', 'Gifted_Community_Center'); ?></span>
                    
                </h2>
                <p class="aos-animate" data-aos="fade-up" data-aos-delay="200"><?php echo the_field('about_us_intro'); ?></p>

                <a class="about-us-cta btn primary-bg-color rounded-0 border-0 text-white w-50 text-uppercase" href="<?php echo home_url('about-us'); ?>">Read More</a>
            </div>
            <div class="col-md-6 justify-content-between position-relative">
                <div class="" data-scrollax-parent="true">
                    <img data-scrollax=" properties: { translateY: '-50%'}" class="img-fluid" src="<?php echo the_field('about_us_intro_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="our-values text-white bg-dark">
    <div class="container">
        <div class="row" data-scrollax-parent="true">
        <?php 
                $services = array(
                    'post_type'         =>  'our_programs', 
                    'posts_per_page'    =>  '-1', 
                );

                $i = 0; 
                $active = ""; 

                $loop = new wp_query($services);
                    ?>
                        <div class="col-md-4 primary-bg-color" data-scrollax=" properties: { translateY: '-50%'}">
                            <div class="nav h-100 flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php 
                                                                
                                    // Lets loop titles first then the content
                                    while($loop->have_posts()): $loop->the_post(); 
                                        ?>
                                            <a class="nav-link text-white position-relative d-flex align-items-center aos-animate" data-aos="fade-left" data-aos-delay="<?php echo $i; ?>00" id="v-pills-<?php echo the_id(); ?>-tab" data-toggle="pill" href="#v-pills-<?php echo the_id(); ?>" role="tab" aria-controls="v-pills-<?php echo the_id(); ?>" aria-selected="true"><?php echo the_title(); ?></a>
                                        <?php 
                                    endwhile; 
                                ?>
                            </div> 
                        </div>  

                        <div class="col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <h1><?php echo esc_html('Our Programs') ?></h1>
                                &nbsp; 
                                <?php                                 
                                    // Lets loop titles first then the content
                                    while($loop->have_posts()): $loop->the_post(); 
                                        $i++; 

                                        ?>
                                            <div class="tab-pane  animated fadeIn  show <?php echo $active = ($i==1) ? 'active show': ''; ?>" id="v-pills-<?php echo the_id(); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo the_id(); ?>-tab">
                                                <h5><?php echo the_title(); ?></h5>
                                                <div class="text-justify">
                                                    <?php 
                                                        echo wp_trim_words(get_the_content(), '30', ''); 
                                                    ?>  
                                                </div>
&nbsp; 
                                                <!-- Read more  -->
                                                <a class="section-link d-block primary-gcc-color" href="<?php echo the_permalink(); ?>">Read More</a>
                                            </div>
                                        <?php 
                                    endwhile; 
                                ?>
                               
                            </div>
                        </div>
                    <?php 
                //

                wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<?php 
    if(get_field('youtube_video')): 
        
        // Fetch Youtube thumbnail 
        $field = get_field('youtube_video'); 
        $video_id = explode("?v=", $field);
        $video_id = $video_id[1];
            ?>
                <!-- Video  -->
                <section class="gcc-video gcc-padding position-relative d-flex align-items-center justify-content-center">

                    <!-- Add background video here  -->
                    <div class="background-video-playing">
                        <iframe class="elementor-background-video-embed" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/<?php echo $video_id; ?>?autoplay=1&mute=1&controls=0&rel=0&enablejsapi=1" style="width: 1281px; height: 720.563px;" frameborder="0"></iframe>
                    </div>

                    <div class="container text-white">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ion-icon data-scrollax=" properties: { translateY: '-10%'}" class="icon ion-ios-play text-center d-block mx-auto" data-toggle="modal" data-target="#modelId"></ion-icon>                
                            </div>
                        </div>

                    <!-- Modal -->
                    <div class="modal fade gcc-youtube-video" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg bg-transparent border-0 rounded-0" role="document">
                            <div class="modal-content bg-transparent border-0 rounded-0">
                                <ion-icon class="icon ion-ios-close close" data-dismiss="modal" aria-label="Close"></ion-icon>  
                                <div class="modal-body text-center">
                                    <?php 
                                        if(get_field('youtube_video')){
                                            
                                            // Fetch Youtube thumbnail 
                                            $field = get_field('youtube_video'); 
                                            $video_id = explode("?v=", $field);
                                            $video_id = $video_id[1];

                                            // Add video to iframe 
                                            ?>
                                            <iframe width="100%" height="400" src="https://www.youtube-nocookie.com/embed/<?php echo $video_id; ?>?mode=opaque&amp;rel=0&amp;autohide=1&amp;showinfo=0&amp;wmode=transparent&amp;enablejsapi=1" frameborder="0" showinfo="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <?php 
                                        } else {
                                            ""; 
                                        }
                                    ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
            <?php 
    endif; 

get_template_part('template-parts/homepage/content', 'volunteer'); 
get_template_part('template-parts/homepage/content', 'homepage-social-feed'); 

get_footer();