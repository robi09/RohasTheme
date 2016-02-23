		</div><!-- / .wrapper -->
	</main>
	<footer id="footer">
		<?php
			if ( is_active_sidebar( 'footer_sidebar' ) ) {
				echo '<div class="wrapper">';

					dynamic_sidebar( 'sidebar_blog' );

				echo '</div><!-- / .wrapper -->';
			}
		?>
		<div class="copyright"><?php bloginfo('name'); ?> © <?php echo date('Y'); ?>. All rights reserved.</div><!-- / .copyright -->
		<?php wp_footer(); ?>
	</footer><!-- /#footer  -->
</body>
</html>