<?php

loadCSS("aprovados");
loadJS("aprovados");

useSplide();

$titulo = get_sub_field("titulo", true, true);
$imagens = get_sub_field("imagens", true, true);
?>

<section class="aprovados wrapper">
	<h2><?= $titulo ?></h2>
	<div
		class="aprovados__slide splide"
		role="group"
		aria-label="Aprovados"
		id="aprovados"
	>
		<ul class="splide__pagination"></ul>

		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach ($imagens as $slide) {
					render_img($slide["aprovado"], array("splide__slide"), false);
				} ?>
			</ul>
		</div>
	</div>
</section>