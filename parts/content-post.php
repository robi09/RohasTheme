<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */

?>
<article <?php post_class('post'); ?>>
	<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'rohas-post' );
		$full_width = '';

		if($image) {
			echo '<figure class="featured_image" style="background-image: url('.esc_url($image[0]).');"></figure>';
		} else {
			$full_width = ' style="width: 100%;"';
		}
	?>
	<div class="post_content"<?php echo $full_width; ?>>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="post_meta"><?php echo the_time(); ?> -  <?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'rohas-lite' ), number_format_i18n( get_comments_number() ) ); ?></div><!-- / .post_meta -->
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Read More', 'rohas-lite'); ?></a>
	</div><!-- / .post_content -->
</article><!-- / .post -->