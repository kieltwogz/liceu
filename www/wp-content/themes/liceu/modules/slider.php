<?php

loadCSS("s-slide");
loadJS("s-slide");

useSplide();

$titulo = get_sub_field("titulo", true, true);
$subtitulo = get_sub_field("subtitulo", true, true);
$slides = get_sub_field("slides", true, true);
?>

<section class="s-slide">
	<h2><?= $titulo ?></h2>
	<p><?= $subtitulo ?></p>
	<div
		class="s-slide__slide splide"
		role="group"
		aria-label="Propostas"
	>
		<ul class="splide__pagination"></ul>

		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach ($slides as $slide) {
					if ($slide["titulo"]) {
?>
					<li class="splide__slide">
						<h4><?= $slide["titulo"] ?></h4>
						<p><?= $slide["texto"] ?></p>
					</li>
				<?php } else { ?>
					<li class="splide__slide"><?= $slide["texto"] ?></li>
				<?php }
				} ?>
			</ul>
		</div>
	</div>
</section>