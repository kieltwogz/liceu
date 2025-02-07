<?php

loadCSS("projetos");
loadJS("animation");

$titulo = get_sub_field("titulo", true, true);
$subtitulo = get_sub_field("subtitulo", true, true);
$projetos = get_sub_field("projetos", true, true);
$link = get_sub_field("link", true, true);
?>

<section class="projetos">
	<div class="projetos__wrapper wrapper">
		<header>
			<h2><?= $titulo ?></h2>
			<p><?= $subtitulo ?></p>
		</header>
		<div class="projetos__lista">
			<?php foreach ($projetos as $indice => $projeto) { ?>
				<article class="cartao animated animated--visible animated--grow">
					<div>
						<h3><?= $projeto["titulo"] ?></h3>
						<p><?= $projeto["descricao"] ?></p>
					</div>
					<div class="<?= $indice + 1 == 1 ? "cartao__arrow" : "" ?> <?= $indice + 1 == 2 ? "cartao__arrow2" : "" ?>">
						<?php if ($indice + 1 != 3) { ?>
						<a
							href="<?= $projeto["link"]["url"] ?>"
							target="<?= $projeto["link"]["target"] ?>"
							title="<?= $projeto["link"]["title"] ?>"
						></a>
						<?php } ?>
					</div>
				</article>
			<?php } ?>
		</div class="projetos__lista">

		<div class="projetos__botao">
			<?php if ($link) { ?>
				<a
					href="<?= $link["url"] ?>"
					target="<?= $link["target"] ?>"
					title="<?= $link["title"] ?>"
				>
					<?= $link["title"] ?>
				</a>
			<?php } ?>
		</div>
	</div>
</section>