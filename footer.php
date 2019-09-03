<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gifted_Community_Center
 */

?>

    </div><!-- #content -->
    
    <section class="facebook-photos gcc-padding">
        <div class="container-fluid">
            Facebook images will appear here...
        </div>
    </section>

	<footer id="colophon" class="gcc-footer gcc-padding">
		<div class="site-info container text-white">
            <div class="row">
                <div class="col-md-6">
                    &copy; <?php echo date('Y'); ?> Gifted Community Centre 
                </div>
                <div class="col-md-6">
                    <ul class=" list-unstyled d-flex">
                        <li class="aos-animate" data-aos="fade-up" data-aos-delay="100"><a href=""><ion-icon class="ion ion-logo-facebook"></ion-icon></a></li>
                        <li class="aos-animate" data-aos="fade-up" data-aos-delay="200"><a href=""><ion-icon class="ion ion-logo-twitter"></ion-icon></a></li>
                        <li class="aos-animate" data-aos="fade-up" data-aos-delay="300"><a href=""><ion-icon class="ion ion-logo-instagram"></ion-icon></a></li>
                        <li class="aos-animate" data-aos="fade-up" data-aos-delay="400"><a href=""><ion-icon class="ion ion-logo-linkedin"></ion-icon></a></li>
                    </ul>
                </div>
            </div>
		</div><!-- .site-info -->
    </footer><!-- #colophon -->    
    
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
                            <iframe width="740" height="400" src="https://www.youtube-nocookie.com/embed/<?php echo $video_id; ?>?mode=opaque&amp;rel=0&amp;autohide=1&amp;showinfo=0&amp;wmode=transparent&amp;enablejsapi=1" frameborder="0" showinfo="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php 
                        } else {
                            ""; 
                        }
                    ?>  
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
