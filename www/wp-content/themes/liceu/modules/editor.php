<?php

loadCSS("i-description");
loadCSS("c-description");
loadCSS("s-content");
loadCSS("formulario");

$cor = get_sub_field("cor", true, true);
$conteudo = get_sub_field("conteudo", true, true);

if ($cor == "branco") { ?>
	<section class="i-description s-content">
		<div class="i-description__text s-content__right s-content__left">
			<?= $conteudo ?>
		</div>
	</section>
<?php } else { ?>
	<section class="c-description c-description--purple">
		<div class="c-description__wrapper s-content__right s-content__left">
		<?= $conteudo ?>
		</div>
</section>
<?php } ?>