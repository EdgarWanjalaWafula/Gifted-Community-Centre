<?php
/**
 * Template part for displaying posts for our services post type
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Community_Center
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h4>About <span class="primary-gcc-color"><?php echo the_title(); ?></span></h4>
    <div class="post-thumbnail">
        <?php
            the_post_thumbnail( 'post-thumbnail our-program-img', array(
                    'class' => 'img-fluid our-program-img', 
                    'alt'   => the_title_attribute( array(
                    'echo'  => false,
                ) ),
            ));
        ?>
    </div>
    &nbsp; 
    <?php echo the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
