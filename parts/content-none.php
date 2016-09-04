<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */

?>
<article <?php post_class('post'); ?>>

	<div class="post_content"<?php echo $full_width; ?>>
		<h3><?php esc_html_e( 'Nothing Found', 'rohas-lite' ); ?></h3>
	</div><!-- / .post_content -->
</article><!-- / .post -->