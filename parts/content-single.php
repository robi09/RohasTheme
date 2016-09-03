<article <?php post_class('post single-post'); ?>>
	<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
	?>
	<div class="post_content">
		<?php 
			if($image) {
				echo '<figure class="featured_image" style="background-image: url('.esc_url($image[0]).');"></figure>';
			}
		?>
		<div class="post_content">
			<h3><?php the_title(); ?></h3>
			<div class="post_meta"><?php echo the_time('F j, Y'); ?> -  <?php comments_number( 'no comments', 'one comment', '% comments' ); ?></div>

			<?php 

			the_content(); 

			the_tags();

			wp_link_pages();

			?>
		</div><!-- / .post_content -->
		
	</div><!-- / .post_content -->
</article><!-- / .post -->