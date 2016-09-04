<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rohas
 */

do_action('rohas_wrapper_bottom'); ?>

		</div><!-- / .wrapper -->
	</main>
	<footer id="footer">
		<?php

			do_action('rohas_footer_top');

			$sidebars = array(
				is_active_sidebar( 'footer_sidebar_one' ),
				is_active_sidebar( 'footer_sidebar_two' ),
				is_active_sidebar( 'footer_sidebar_three' ),
				);

			$sidebars_count = count(array_filter($sidebars));

			//Check if any sidebar is available
			if ( $sidebars[0] or $sidebars[1] or $sidebars[2] ) {
				
				//Add columns
				if($sidebars_count == 1){
				    $col = 'one';
				} elseif($sidebars_count == 2) {
					$col = 'two';
				} elseif($sidebars_count == 3) {
					$col = 'three';
				}

				echo '<div class="wrapper">';
					do_action('rohas_footer_wrapper_top');

					//First sidebar
					if($sidebars[0]) {
						echo '<div class="col '. $col .'">';

						do_action('rohas_footer_col_one_top');
						dynamic_sidebar( 'footer_sidebar_one' );
						do_action('rohas_footer_col_one_bottom');

						echo '</div>';
					}

					//Secound sidebar
					if($sidebars[1]) {
						echo '<div class="col '. $col .'">';

						do_action('rohas_footer_col_two_top');
						dynamic_sidebar( 'footer_sidebar_two' );
						do_action('rohas_footer_col_two_bottom');

						echo '</div>';
					}

					//Third sidebar
					if($sidebars[2]) {
						echo '<div class="col '. $col .'">';

						do_action('rohas_footer_col_three_top');
						dynamic_sidebar( 'footer_sidebar_three' );
						do_action('rohas_footer_col_three_bottom');
						
						echo '</div>';
					}
					

					do_action('rohas_footer_wrapper_bottom');
				echo '</div><!-- / .wrapper -->';
			}

			do_action('rohas_footer_bottom');
		?>
		<div class="copyright"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>. All rights reserved.</div><!-- / .copyright -->
		<?php wp_footer(); ?>
	</footer><!-- /#footer  -->
	<?php do_action('rohas_body_bottom'); ?>
</body>
</html>