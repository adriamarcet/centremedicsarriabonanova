<?php if( have_rows('services') ): ?>
	<section class="section section__services limit-center">
		<div class="group content">

		<?php while( have_rows('services') ): the_row(); 

			// vars
			$serviceTitle = get_sub_field('service-title');
			$serviceDesc = get_sub_field('service-desc');
			$serviceCta = get_sub_field('service-cta');
			$serviceCtaLink = get_sub_field('service-cta--link');

			?>

			<div class="section__services--a-service group__col--1-3 content content--left">

				<h3 class="uppercase"><?php echo $serviceTitle; ?></h3>
				<p><?php echo $serviceDesc; ?></p>		

				<?php if( $serviceCta ): ?>
					<a href="<?php echo $serviceCtaLink; ?>"><?php echo $serviceCta; ?></a>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>