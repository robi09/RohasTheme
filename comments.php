<?php
if ( post_password_required() )
	return;
?>
<div id="comments">
	<h2>
		<?php
			printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'rohas-lite' ), number_format_i18n( get_comments_number() ));
		?>
	</h2>
	<ol class="comments-list">
		<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'max_depth'   => '4',
				'avatar_size' => 0
			) );

			echo '<div class="navigation">';
				paginate_comments_links();
			echo '</div>';

		?>
	</ol><!-- / .comments-list -->
	<?php comment_form(); ?>
</div><!-- /#comments  -->