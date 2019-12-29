<?php
/**
 * Template part for displaying inner content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Community_Center
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
        echo get_the_content(); 
    ?>
</article><!-- #post-<?php the_ID(); ?> -->
