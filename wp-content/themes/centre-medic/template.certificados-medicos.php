<?php
/**
 * Template Name: Certificados Médicos
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
		
		<?php get_template_part( 'section.lista-certificados' ); ?>
		<?php get_template_part( 'section.contact-form' ); ?>
		<?php get_template_part( 'section.contact-info' ); ?>

		<!--
		<div id="container" class="one-column">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>
			</div>
		</div> 
		-->

<?php get_footer(); ?>