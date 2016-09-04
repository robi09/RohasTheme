<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */
?>

 <article <?php post_class('post single-post'); ?>>
	<div class="post_content">
		<?php do_action('rohas_page_content_before'); ?>
		<h3><?php the_title(); ?></h3>
		<?php 

		the_content(); 

		do_action('rohas_page_content_after'); ?>
	</div><!-- / .post_content -->
</article><!-- / .post -->