<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */

 /*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
<div id="comments">
	<?php do_action('rohas_comments_before'); ?>
	<h2>
		<?php
			printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'rohas-lite' ), number_format_i18n( get_comments_number() ));
		?>
	</h2>
	<ol class="comments-list">
		<?php

			do_action('rohas_comments_list_before');

			wp_list_comments( array(
				'style'       => 'ol',
				'max_depth'   => '4',
				'avatar_size' => 0
			) );

			echo '<div class="navigation">';
				paginate_comments_links();
			echo '</div>';

			do_action('rohas_comments_list_after');
		?>
	</ol><!-- / .comments-list -->
	<?php 

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'rohas-lite' ); ?></p>
	<?php
	endif;

	do_action('rohas_comments_form_before'); 

	comment_form(); 

	do_action('rohas_comments_after'); 

	?>

</div><!-- /#comments  -->
