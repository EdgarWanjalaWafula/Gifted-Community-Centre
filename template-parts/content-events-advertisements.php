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
    <section class="section gcc-advertisements gcc-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php 
                        $eventsadvs = get_field('posters');
                        
                        $posters = $eventsadvs['upload_posters']; 

                        // foreach($posters as )
                    ?>
                </div>

                <div class="col-md-4">

                </div>
            </div>
        </div>
    </section>
<?php 
get_footer(); 