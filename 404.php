<?php 
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rohas
 */

get_header(); ?>

<div id="main_content" class="no_sidebar error_page">
	<article class="post single-post">
		<div class="post_content formatting">
				<?php do_action('rohas_404_before'); ?>
				<h2 class="aligncenter"><?php _e('Page not found, 404 error.', 'rohas-lite'); ?></h2>
				<a class="aligncenter" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Return home', 'rohas-lite'); ?></a>
				<?php do_action('rohas_404_after'); ?>
		</div><!-- / .post_content -->
	</article><!-- / .post -->
</div><!--/ #main_content-->

<?php get_footer(); 
