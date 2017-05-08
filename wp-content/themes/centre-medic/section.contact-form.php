<?php 
	// var
	$contactaTitle = get_field('text-contacta--title', 8);
	$contactaClarify = get_field('text-contacta--clarify', 8);
?>
<section class="section section__contact-form">
	<div class="content limit-center">
		<h2 id="mInfo" class="section--title uppercase"><?php echo $contactaTitle; ?></h2>
		<div class="group">
			<div class="group__col--1-3">
				<?php echo $contactaClarify; ?>
				<!--
				<ul>
					<li class="type-small">Rellena el siguiente formulario para pedir cita. Te llamaremos en breve para poder confirmar tu solicitud.</li>
					<li class="type-small">Si lo prefieres puedes añadir una descripción más detallada de tu consulta en el campo <em>comentario</em>.</li>
					<li class="type-small">Los campos marcados con <em>*</em> son obligatorios.</li>
				</ul>
			-->
			</div>
			<div class="group__col--2-3">
				<?php
				if( qtrans_getLanguage() == 'es' ){ ?>
				
				    <!-- Spanish content here -->
					<?php echo do_shortcode( '[contact-form-7 id="71" html_class="pure-form pure-form-aligned" title="Pide Cita ES"]' ); ?>

				<?php }else { ?>
				    <!-- Other language content here -->
					<?php echo do_shortcode( '[contact-form-7 id="75" html_class="pure-form pure-form-aligned" title="Pide Cita CAT"]' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</section>