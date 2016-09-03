		</div><!-- / .wrapper -->
	</main>
	<footer id="footer">
		<?php

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

					//First sidebar
					if($sidebars[0]) {
						echo '<div class="col '. $col .'">';
						dynamic_sidebar( 'footer_sidebar_one' );
						echo '</div>';
					}

					//Secound sidebar
					if($sidebars[1]) {
						echo '<div class="col '. $col .'">';
						dynamic_sidebar( 'footer_sidebar_two' );
						echo '</div>';
					}

					//Third sidebar
					if($sidebars[2]) {
						echo '<div class="col '. $col .'">';
						dynamic_sidebar( 'footer_sidebar_three' );
						echo '</div>';
					}
					

				echo '</div><!-- / .wrapper -->';
			}
		?>
		<div class="copyright"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>. All rights reserved.</div><!-- / .copyright -->
		<?php wp_footer(); ?>
	</footer><!-- /#footer  -->
</body>
</html>