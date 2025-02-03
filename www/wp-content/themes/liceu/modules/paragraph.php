<?php

loadCSS("i-description");

$titulo = get_sub_field("titulo", true, true);
$texto_lado_esquerdo = get_sub_field("texto_lado_esquerdo", true, true);
$texto_lado_direito = get_sub_field("texto_lado_direito", true, true);
?>

<section class="i-description">
	<h2><?= $titulo ?></h2>
	<div class="i-description__text i-description__text--paragraph">
		<p><?= $texto_lado_esquerdo ?></p>
		<p><?= $texto_lado_direito ?></p>
	</div>
</section>