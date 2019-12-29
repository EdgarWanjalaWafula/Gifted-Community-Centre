<?php 
/**
 * Template part for displaying home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Community_Center
 */
get_header(); 

// Page title
get_template_part('template-parts/content', 'page-title'); 
?>
    <section class="section gcc-programs pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="programs-div row">
                    <?php 
                        $programs   = array('post_type' =>  'our_programs', );

                        $loop       = new wp_query($programs); 

                        $img        = ""; 
                        $img_class  = ""; 
                        $i          = ""; 

                        while($loop->have_posts()): $loop->the_post(); 
                            
                            $i++; 
                            
                            if(has_post_thumbnail()){
                                $img        = get_the_post_thumbnail_url(); 
                                $img_class  = ""; 
                            } else {
                                $img        = wp_get_attachment_image_url('26', 'full'); 
                                $img_class  = "no-img"; 
                            }
                            ?>
                                <div class="col-md-6 col-xs-6">
                                    <div class="shop">
                                    <div class="shop-img">
                                    <img src="<?php echo $img; ?>" alt="">
                                    </div>
                                    <div class="shop-body">
                                    <?php echo the_title('<h4>', '</h4>'); ?>
                                    <a href="<?php echo the_permalink(); ?>" class="cta-btn">View <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                    </div>
                                </div>
                            <?php 
                        endwhile;
                    ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar">
                    <?php get_sidebar('our-programs'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
get_footer(); 