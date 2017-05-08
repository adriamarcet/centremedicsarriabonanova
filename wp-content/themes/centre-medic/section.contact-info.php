<?php 
	// var
	$locTitle = get_field('text-loc--title', 8);
	$hourTitle = get_field('text-loc-hora--title', 8);
	$hourOne = get_field('text-loc-horariu', 8);
	$hourTwo = get_field('text-loc-horaridos', 8);

?>
<section class="section section__contact-info content">
	<div class="group limit-center">
		<div class="group__col--1-2">
			<h3 class="uppercase"><?php echo $locTitle ?></h3>
			<div class="section__contact-info--unit">
				<span class="lnr lnr-location"></span>
				<p>C/ Vilana nº 2, Barcelona</p>
				<p>c.p: 08017</p>
				<p class="type-small">Estem just al davant del col·legi de metges</p>
			</div>
			<div class="section__contact-info--unit">
				<span class="lnr lnr-phone-handset"></span>
				<p>93 211 37 00</p>
			</div>
			<div class="section__contact-info--unit">
				<span class="lnr lnr-envelope"></span>
				<p>revisions@comb.cat</p>
			</div>
			<h3 class="uppercase"><?php echo $hourTitle ?></h3>
			<ul>
				<li class="group">
					<div class="group__col--1-2"><?php  echo $hourOne ?></div>
					<div class="group__col--1-2">08:15h - 14:00h</div>
				</li>
				<li class="group">
					<div class="group__col--1-2"><?php  echo $hourTwo ?></div>
					<div class="group__col--1-2">18:00h - 19:00h</div>
				</li>
			</ul>
		</div>

		<div class="group__col--1-2">
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.627674332902!2d2.127913914823036!3d41.40389150293585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498148131485f%3A0xcbe0d199882822e!2sSARRIA-BONANOVA+SCP!5e0!3m2!1ses!2ses!4v1490188693512" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>