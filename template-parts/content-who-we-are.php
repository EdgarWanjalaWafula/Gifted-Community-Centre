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
<div class="section who-we-are">
    <div class="container">
        <div class="row">            
            <div class="col-md-6 position-relative" >
                <img class="img-who-we-are" src="<?php echo the_field('who_we_are_image'); ?>" alt="">
            </div>
            <div class="col-md-6">
                <span class="section-tagline"><?php the_field('who_we_are_tag_line'); ?></span>
                <h4 class="section-title"><?php the_field('who_we_are_title'); ?></h4>
                <?php the_field('who_we_are_content'); ?>
                &nbsp; 
            </div>

        </div>
    </div>
</div>

<div class="vision-mission gcc-padding">
    <div class="container">
        <div class="row values">
            <div class="col-md-10 offset-1">
                <div class="row">
                <?php 
                if(have_rows('missionvision')){
                    while(have_rows('missionvision')): the_row(); 
                        ?>
                            <div class="col-md-6 position-relative">
                                <div class="card bg-transparent text-center p-4 position-relative">
                                    <h4 class="text-uppercase primary-gcc-colo text-white"><?php echo the_sub_field('vision_mission_title'); ?></h4> 
                                    <p class="text-white"><?php echo the_sub_field('vision_mission_content'); ?></p>
                                </div>
                            </div>
                        <?php 
                    endwhile; 
                } else {
                    "";
                }
            ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our-objectives gcc-padding">
    <div class="container">
        <div class="row">  
            <div class="col-md-8">
                <h4 class="section-title">Our Objectives</h4>
                <div class="ob-desc"><?php echo the_field('our_objectives_description'); ?></div>
                <ul class="list-unstyled">
                <?php  
                    $i = 0; 
                    if(have_rows('our_objectives')){
                        $i++; 
                        while(have_rows('our_objectives')): the_row(); 
                            ?>
                            <li class="d-flex aos-animate" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00"><i class="icon ion-ios-arrow-round-forward"></i><?php echo the_sub_field('objective'); ?></li>
                            <?php 
                        endwhile; 
                    } else {
                        "";
                    }
                ?>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="" data-scrollax-parent="true">
                    <img data-scrollax=" properties: { translateY: '-20%'}" class="img-fluid" src="<?php echo the_field('our_objectives_img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
get_footer(); 