<article <?php post_class('post single-post'); ?>>
	<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
	?>
	<div class="post_content">
		<?php 
			if($image) {
				echo '<figure class="featured_image" style="background-image: url('.esc_url($image[0]).');"></figure>';
			}
		?>
		<div class="post_content">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div><!-- / .post_content -->
		
	</div><!-- / .post_content -->
</article><!-- / .post -->