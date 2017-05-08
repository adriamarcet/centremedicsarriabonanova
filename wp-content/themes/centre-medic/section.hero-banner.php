<?php if( have_rows('diapositiva') ): ?>
	<section class="section section__hero-banner" id="slideshow">
	<?php while( have_rows('diapositiva') ): the_row(); 

		// vars
		$diapositivaImg = get_sub_field('diapositiva-img');
		$diapositivaText = get_sub_field('diapositiva-text');
		$diapositivaCta = get_sub_field('diapositiva-cta');
		$diapositivaCtaLink = get_sub_field('diapositiva-cta--link');

		?>

		<div class="slideshow__item" style="background-image: url(' <?php echo $diapositivaImg['url']; ?> ')">
			<div>

			<?php if( $diapositivaText ): ?>

				<h1 class="hero"><?php echo $diapositivaText; ?></h1>

			<?php endif; ?>

			<?php if( $diapositivaCta ): ?>
				<a href="<?php echo $diapositivaCtaLink; ?>" class="pure-button pure-button-primary uppercase"><?php echo $diapositivaCta; ?></a>

			<?php endif; ?>

			</div>
		</div>
	<?php endwhile; ?>
	</section>
<?php endif; ?>