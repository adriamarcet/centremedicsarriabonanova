<?php if( have_rows('featured_services') ): 
	
	//vars 
	$sectionRevisionesTitle = get_field('section-revisiones-title');
	$sectionRevisionesCta = get_field('section-revisiones-cta');
	$sectionRevisionesCtaLink = get_field('section-revisiones-cta--link');

?>

	<section class="section section__featured-services group content">
		<div class="limit-center">
			<h2 class="section--title uppercase"><?php echo $sectionRevisionesTitle; ?></h2>
			<div class="group">

			<?php while( have_rows('featured_services') ): the_row(); 

				// vars
				$featServiceIcon = get_sub_field('feat-service-icon');
				$featServiceTitle = get_sub_field('feat-service-title');
				$featServiceDesc = get_sub_field('feat-service-desc');
				$featServiceCta = get_sub_field('feat-service-cta');
				$featServiceCtaLink = get_sub_field('feat-service-cta--link');

				?>

				<div class="group__col--1-2 group__col--lg-1-4 section__featured-services--aservice">
				
					<span class="lnr lnr-<?php echo $featServiceIcon; ?>"></span>
					<h3 class="type-medium uppercase"><?php echo $featServiceTitle; ?></h3>
					<p class="type-small"><?php echo $featServiceDesc; ?></p>
					
					<?php if( $featServiceCta ): ?>
						<a href="<?php echo $featServiceCtaLink; ?>" class="pure-button uppercase"><?php echo $featServiceCta; ?></a>
					<?php endif; ?>
				</div>

			<?php endwhile; ?>
		</div>
		<div class="group">
			<div class="group__single align-center">
				<a href="<?php echo $sectionRevisionesCtaLink; ?>" class="pure-button pure-button-primary uppercase"><?php echo $sectionRevisionesCta; ?></a>
			</div>
		</div>
	</section>
<?php endif; ?>