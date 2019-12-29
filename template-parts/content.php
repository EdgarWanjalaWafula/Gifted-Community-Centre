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
	<?php
		the_post_thumbnail( 'post-thumbnail', array(
			'alt' => the_title_attribute( array(
				'echo' => false,
			) ),
			'class'=> 'gcc-post-image'
		) );
	?>

	<!-- If post type is post, display entry meta -->
	<?php 
		if('post' == get_post_type()){
			?>
				<div class="entry-meta">
					<?php gcc_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php 
		} else {
			""; 
		}
	?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<!-- Category, comments number & author -->
	<?php gcc_after_post_title(); ?>

	<div class="entry-content">
		<?php
			$blog_content = ""; 

			if(is_single()){
				echo the_content(); 
			} else {
				echo wp_trim_words(get_the_content(), '65', ''); 
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php 
			if(is_single('post')){
				""; 
			} else {
				gcc_custom_blog_footer();
			}
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
