<?php

$titulo = get_sub_field("titulo", true, true);
$subtitulo = get_sub_field("subtitulo", true, true);
$grande = get_sub_field("grande", true, true);
$estrelas = get_sub_field("estrelas", true, true);

if ($grande == "1") {

	if ($estrelas == "2") {
		loadCSS("s-star");
?>
		<section class="s-star">
			<h2><?= $titulo ?></h2>
			<p class="s-star__full"><?= $subtitulo ?></p>
			<div class="s-star__star"></div>
		</section>
<?php
	} else if ($estrelas == "1") {
		loadCSS("s-star");
?>
		<section class="s-star">
			<h2><?= $titulo ?></h2>
			<p class="s-star__full"><?= $subtitulo ?></p>
			<div class="s-star__star s-star__star--small"></div>
		</section>
<?php } else {
		loadCSS("f-timeline");
?>
		<section class="f-timeline">
			<div class="f-timeline__left">
				<h2><?= $titulo ?></h2>
				<p><?= $subtitulo ?></p>
			</div>
		</section>
<?php
	}
} else {
	if ($estrelas == "2") {
		loadCSS("s-star");
?>
		<section class="s-star">
			<h2><?= $titulo ?></h2>
			<p><?= $subtitulo ?></p>
			<div class="s-star__star"></div>
		</section>
<?php
	} else if ($estrelas == "1") {
		loadCSS("s-star");
?>
		<section class="s-star">
			<h2><?= $titulo ?></h2>
			<p><?= $subtitulo ?></p>
			<div class="s-star__star s-star__star--small"></div>
		</section>
<?php } else {
	loadCSS("s-slide");
?>
	<section class="s-slide">
		<h2><?= $titulo ?></h2>
		<p><?= $subtitulo ?></p>
	</section>
<?php }
} ?>
