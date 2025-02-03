<?php

$titulo = get_sub_field("titulo", true, true);
$lado_esquerdo = get_sub_field("lado_esquerdo", true, true);
$lado_direito = get_sub_field("lado_direito", true, true);
$lado_de_baixo = get_sub_field("lado_de_baixo", true, true);
$centralizado = get_sub_field("centralizado", true, true);

loadCSS("c-description");

?>
<section class="c-description c-description--purple">
	<div class="c-description__wrapper">
		<h2><?= $titulo ?></h2>
		<div class="c-description__text <?= $centralizado ? "c-description__text--center" : "" ?>">
			<?= $lado_esquerdo ?>
			<?= $lado_direito ?>
		</div>
		<p>
			<strong><?= $lado_de_baixo ?></strong>
		</p>
	</div>
</section>