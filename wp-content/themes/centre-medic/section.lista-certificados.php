
	<section class="section lista-certificados">
		<div class="limit-center content">
			<h2 class="section--title uppercase"><?php echo the_field('cert--title', 4); ?></h2>
			<div class="group">
				<p><?php echo the_field('cert--desc', 4); ?></p>
				<?php if( have_rows('certificate') ): ?>

					<ul>
					<?php while( have_rows('certificate') ): the_row(); 

						// vars
						$certificateTitle = get_sub_field('certificate--title');
						$cerTitShort = preg_replace('/\s+/', '', $certificateTitle);
						?>

						<li><a href="#<?php echo $cerTitShort ?>"><?php echo $certificateTitle ?></a></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>

			</div>

			<?php if( have_rows('certificate') ):
			?>
				<div class="group">
			<?php
				$count = 0;

				while( have_rows('certificate') ) : the_row(); 

				// vars
				$certificateTitle = get_sub_field('certificate--title');
				$certificateDesc = get_sub_field('certificate--desc');
				$cerTitShort = preg_replace('/\s+/', '', $certificateTitle);					

					?>
					<?php 
					if( $count > 0 && ( $count % 2 == 0 ))  : ?>
						</div><!-- closing group -->
						<div class="group"><!-- opening group -->

					<?php endif; ?>

						<div class="group__col--1-2">
							<?php  
								// print_r($count);	
							?>
							<h3 id="<?php echo $cerTitShort ?>"><?php echo $certificateTitle; ?></h3>
							<?php echo $certificateDesc; ?>

							<?php
							if( qtrans_getLanguage() == 'es' ){ ?>
							    <!-- English content here -->
								<a href="#mInfo">Pida más información</a>
							<?php }else { ?>
							    <!-- Other language content here -->
								<a href="#mInfo">Demana més informació</a>
							<?php } ?>
						</div><!-- closing col 1 2 -->
					<?php 
			 	    $count++;
				endwhile;
			endif; ?>
		</div>
	</section>