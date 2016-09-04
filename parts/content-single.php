<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */

?>
<article <?php post_class('post single-post'); ?>>
	<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'rohas-single-image' );
	?>
	<div class="post_content">
		<?php 
			if($image) {
				do_action('rohas_single_featured_image_before');
				echo '<figure class="featured_image" style="background-image: url('.esc_url($image[0]).');"></figure>';
				do_action('rohas_single_featured_image_after');
			}

			do_action('rohas_single_post_content_before');
		?>
			<h3><?php the_title(); ?></h3>
			<div class="post_meta"><?php echo the_date(); ?> -  <?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'rohas-lite' ), number_format_i18n( get_comments_number() ) ); ?></div>

			<?php 

			the_content(); 


			if(has_tag()) {
				echo '<div class="tags_single"><i class="fa fa-tags"></i> ';
					do_action('rohas_single_tags_before');
					the_tags();
					do_action('rohas_single_tags_after');
				echo '</div>';
			}

			wp_link_pages(array(
				'before'           => '<p class="paginated_post"><b class="title">' . __( 'The story continues', 'rohas-lite' ) . '</b>',
				'after'            => '</p>',
				'separator'		   => '',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			));

			do_action('rohas_single_post_content_after');

			?>
		
	</div><!-- / .post_content -->
</article><!-- / .post -->