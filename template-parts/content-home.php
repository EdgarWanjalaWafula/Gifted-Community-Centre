<?php 
/**
 * Template part for displaying home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Community_Center
 */
get_header(); 
?>
<div class="gcc-slider">
    <?php echo do_shortcode('[rev_slider alias="gcc-slider-1"][/rev_slider]'); ?>
</div>

<div class="about-intro gcc-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="section-tagline">our story</span>
                <h2 class="section-title aos-animate" data-aos="fade-in" data-aos-delay="100">Gifted Community Center</h2>
                <p class="aos-animate" data-aos="fade-up" data-aos-delay=""><?php echo the_field('about_us_intro'); ?></p>

                <a href="<?php echo home_url('about-us'); ?>">Read More</a>
            </div>
            <div class="col-md-6 justify-content-between position-relative">
                <div class="" data-scrollax-parent="true">
                    <img data-scrollax=" properties: { translateY: '-50%'}" class="aboutus-intro-img" src="<?php echo the_field('about_us_intro_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="gcc-padding our-values text-white">
    <div class="container">
        <div class="row">
            <?php 

                if(get_field('our_values')){

                    $i = 0; 

                    ?>
                        <div class="nav flex-column nav-pills col-md-3 our-values-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php 
                            while(have_rows('our_values')): the_row(); 

                            $i++; 
                             
                                ?>
                                    <a class="nav-link aos-animate"  data-aos="fade-in" data-aos-delay="<?php echo $i; ?>00" id="v-pills-<?php echo get_sub_field('value_title'); ?>-tab" data-toggle="pill" href="#v-pills-<?php echo get_sub_field('value_title'); ?>" role="tab" aria-controls="v-pills-<?php echo get_sub_field('value_title'); ?>" aria-selected="true"><?php echo get_sub_field('value_title'); ?></a>
                            <?php 
                            endwhile; 
                            ?>
                        </div> 

                        <div class="tab-content col-md-8" id="v-pills-tabContent">
                            <?php 
                                while(have_rows('our_values')): the_row(); 
                                    ?>
                                        <div class="tab-pane animated fadeIn " id="v-pills-<?php echo get_sub_field('value_title'); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo get_sub_field('value_title'); ?>-tab">
                                            <h5 class="animated fadeInUp primary-gcc-color"><?php echo get_sub_field('value_title'); ?></h5>
                                            <p class="activate-gcc-animation gcc-slide-in text-justify"><?php echo get_sub_field('value_content'); ?></p>
                                        </div> 
                                <?php 
                                endwhile; 
                            ?>
                        </div>
                    <?php 
                } else {
                    echo "The content of this section is still being developed. Check back later."; 
                }
            ?>
        </div>
    </div>
</section>

<!-- Video  -->
<section class="gcc-video gcc-padding position-relative" style="background-image:url('<?php echo the_field('video_section_background_image'); ?>')">
    <div class="container text-white">
        <div class="row d-flex align-items-center">
            <div class="col-md-8">
                <h1 class="aos-animate" data-aos="fade-in" >Gifted Community Center</h1>
                <p class="aos-animate" data-aos="fade-in-up" data-aos-delay="200"><?php echo the_field('video_paragraph'); ?></p>
            </div>

            <div class="col-md-4 d-flex justify-content-center" data-scrollax-parent="true">
                <ion-icon data-scrollax=" properties: { translateY: '100%'}" class="icon ion-ios-play text-center" data-toggle="modal" data-target="#modelId"></ion-icon>
            </div>
        </div>
    </div>
</section>
<?php 
get_footer();