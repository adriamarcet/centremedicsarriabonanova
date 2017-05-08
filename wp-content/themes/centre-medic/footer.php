<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=content div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		</main>
		<footer>
			<p class="align-center">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></p>
		</footer>

		<!-- Return to Top -->
		<a href="javascript:" id="return-to-top"><span class="lnr lnr-arrow-up"></span></a>
		
		<footer class="group" role="contentinfo">
			<div class="limit-center">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
			</div>	
		</footer>

		<?php
			/* Always have wp_footer() just before the closing </body>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to reference JavaScript files.
			 */
			wp_footer();
		?>

	</body>
</html>