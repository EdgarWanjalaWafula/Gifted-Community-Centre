<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gifted_Community_Center
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
        <h5>Job Description</h5>
		<?php
			$blog_content = ""; 

			if(is_single()){
				echo the_content(); 
			} else {
				echo wp_trim_words(get_the_content(), '65', ''); 
			}
		?>
    </div><!-- .entry-content -->
    
</article><!-- #post-<?php the_ID(); ?> -->
