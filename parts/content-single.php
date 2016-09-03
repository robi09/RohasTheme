<article <?php post_class('post single-post'); ?>>
	<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'rohas-single-image' );
	?>
	<div class="post_content">
		<?php 
			if($image) {
				echo '<figure class="featured_image" style="background-image: url('.esc_url($image[0]).');"></figure>';
			}
		?>
		<div class="post_content">
			<h3><?php the_title(); ?></h3>
			<div class="post_meta"><?php echo the_time('F j, Y'); ?> -  <?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'rohas-lite' ), number_format_i18n( get_comments_number() ) ); ?></div>

			<?php 

			the_content(); 

			if(has_tag()) {
				echo '<div class="tags_single"><i class="fa fa-tags"></i> ';
					the_tags();
				echo '</div>';
			}

			wp_link_pages(array(
				'before'           => '<p class="paginated_post"><b class="title">' . __( 'The story continues', 'rohas-lite' ) . '</b>',
				'after'            => '</p>',
				'separator'		   => '',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			));

			?>
		</div><!-- / .post_content -->
		
	</div><!-- / .post_content -->
</article><!-- / .post -->