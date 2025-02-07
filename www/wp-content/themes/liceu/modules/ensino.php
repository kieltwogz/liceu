<?php

loadJS("ensino");
loadCSS("ensino");

loadCSS("s-slide");

loadJS("animation");

useSplide();

$titulo = get_sub_field("titulo", true, true);
$cartoes = get_sub_field("cartoes", true, true);
?>

<section class="ensino">
	<div
		class="ensino__wrapper wrapper splide s-slide"
		role="group"
		aria-label="Tipos de Ensino"
		id="ensino"
	>
		<header>
			<h2><?= $titulo ?></h2>
			<ul class="splide__pagination"></ul>
		</header>
		<div class="ensino__slider splide__track">
			<div class="ensino__cards splide__list">
				<?php foreach ($cartoes as $indice => $cartao) { ?>
					<a
						href="<?= $cartao["link"]["url"] ?>"
						target="<?= $cartao["link"]["target"] ?>"
						title="<?= $cartao["link"]["title"] ?>"
						class="ensino__card splide__slide animated animated--visible animated--grow"
					>
						<article>
							<h3><?= $cartao["titulo"] ?></h3>
							<p><?= $cartao["descricao"] ?></p>
						</article>
						<?php render_img($cartao["ilustracao"], array("img__" . $indice + 1)) ?>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
