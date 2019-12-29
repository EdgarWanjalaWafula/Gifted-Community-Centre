<?php 
/**
 * Template part for displaying Contact Us page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Community_Center
 */
get_header(); 

// Page title
get_template_part('template-parts/content', 'page-title'); 
?>
    <div class="section contact-us gcc-">
        <div class="container">
            <div class="row">
                
                <div class="col-md-3">
                    <?php 
                        if(get_field('contact_us_information')){

                            $i = 0; 
                            
                            while(have_rows('contact_us_information')): the_row(); 
                                
                                $i++; 
                                
                                ?>
                                    <div class="contact-card aos-animate" data-aos="fade-left" data-aos-delay="<?php echo ($i * 2); ?>00">
                                        <div class="contact-icon">
                                            <?php the_sub_field('contact_icon'); ?>
                                        </div>
                                        <div class="contact-content">
                                            <h6><?php the_sub_field('contact_name'); ?></h6>
                                            <span>
                                                <?php 
                                                    $string = str_replace('','', get_sub_field('contact_content'));
                                                    // var_dump($string); 

                                                    if($string === "info@giftedcommunitypwd.org"){
                                                        ?>
                                                            <span><a href="mailto:<?php echo get_sub_field('contact_content'); ?>"><?php get_sub_field('contact_content') ?></a></span>
                                                        <?php 
                                                    } else {
                                                        echo get_sub_field('contact_content'); 
                                                    }
                                                ?></span>
                                        </div>
                                    </div>
                                <?php 
                            endwhile; 
                        } else {
                            echo ""; 
                        }
                    ?>
                </div>

                <div class="col-md-9">
                    <div class="gcc-contact-form">
                        <h4>Send a message</h4>
                        <?php echo get_field('contact_us_message_') ?>
                        <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map -->
    <div class="gcc-map">
        <?php echo the_field('contact_us_map'); ?>
    </div>
<?php 
get_footer(); 