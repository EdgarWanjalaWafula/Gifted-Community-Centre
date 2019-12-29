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

    <?php get_template_part('template-parts/homepage/content', 'footer-gallery'); ?>

	<footer id="colophon" class="gcc-footer">
		<div class="site-info gcc-padding text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>address</h5>
                        <ul class="list-unstyled footer-address">
                            <li><i class="icon ion-ios-call"></i> <span>0725244703</span></li>
                            <li><i class="icon ion-ios-send"></i> <span>info@localhost</span></li>
                            <li><i class="icon ion-ios-pin"></i> <span>Karanja Road, Kibera.
Nairobi, Kenya.</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-border">
                        <h5>Programs</h5>
                        <?php 
                            $arrayName = array('post_type' => 'our_programs');

                            $loop = new WP_QUERY($arrayName);
                                ?>
                                    <ul class="list-unstyled"> 
                                    <?php                                 
                                    while($loop->have_posts()): $loop->the_post(); 
                                        ?>
                                            <li><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                                        <?php 
                                    endwhile;
                                ?>
                            </ul>
                    </div>
                    <div class="col">
                        <div class="donate-now-col position-relative">
                            <i class="flaticon-heart"></i>
                            <h5>thank you</h5>
                            <p>We thank you for partnering with us; it is acts like yours that enable us to make it happen for thousands of persons with disabilities in Kenya.</p> 
                            <p>To donate, you can also write to us to request for our banking information for direct wiring and we shall be happy to provide the details OR visit our <a class="text-uppercase" href="<?php echo home_url('donate-now'); ?>">Donate page</a> </p> 
                            <!-- <a href="<?php //echo home_url('donate-now'); ?>" class="text-uppercase primary-gcc-color bg-light bg-light text-center gcc-br">donate now</a> -->
                        </div>
                    </div>
                </div>
            </div>
		</div><!-- .site-info -->
    </footer><!-- #colophon -->    

    <div class="copyright small">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                <ul class="gcc-social-icons list-unstyled d-flex p-0 m-0">
                    <li><a target="_blank" href="https://www.facebook.com/giftedPWDcentre/"><ion-icon class="ion ion-logo-facebook"></ion-icon></a></li>
                    <li><a target="_blank" href="https://twitter.com/giftedpwdcentre"><ion-icon class="ion ion-logo-twitter"></ion-icon></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/giftedpwdcenter/"><ion-icon class="ion ion-logo-instagram"></ion-icon></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/nowd-trust/about/"><ion-icon class="ion ion-logo-linkedin"></ion-icon></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCCYAPAGRnt1D13eFz0gSWLQ"><ion-icon class="ion ion-logo-youtube"></ion-icon></a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
            <div class="col ">
                <p>Gifted Community Centre &copy; <?php echo date('Y'); ?> | Designed & Developed by <a class="primary-gcc-color" href="">318</a></p>
            </div>
        </div>
        </div> 

    </div>
</div><!-- #page -->

<script type="text/javascript">
var _userway_config = {
account: '6QSKL6yT5X'
};
</script>
<script type="text/javascript" src="https://usrwy.com/widget.js"></script>

<?php wp_footer(); ?>

</body>
</html>
