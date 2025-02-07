<?php

loadCSS("vida");
loadCSS("noticias");
loadJS("animation");

$titulo_do_cartao_1 = get_sub_field("titulo_do_cartao_1", true, true);
$titulo_do_cartao_2 = get_sub_field("titulo_do_cartao_2", true, true);
$titulo_do_cartao_3 = get_sub_field("titulo_do_cartao_3", true, true);
$titulo_do_cartao_4 = get_sub_field("titulo_do_cartao_4", true, true);
$titulo_do_cartao_5 = get_sub_field("titulo_do_cartao_5", true, true);
$titulo_do_cartao_6 = get_sub_field("titulo_do_cartao_6", true, true);
$texto_do_cartao_1 = get_sub_field("texto_do_cartao_1", true, true);
$texto_do_cartao_2 = get_sub_field("texto_do_cartao_2", true, true);
$texto_do_cartao_3 = get_sub_field("texto_do_cartao_3", true, true);
$texto_do_cartao_4 = get_sub_field("texto_do_cartao_4", true, true);
$texto_do_cartao_5 = get_sub_field("texto_do_cartao_5", true, true);
$texto_do_cartao_6 = get_sub_field("texto_do_cartao_6", true, true);
$grande_texto = get_sub_field("grande_texto", true, true);
$quantas_noticias = get_sub_field("quantas_noticias", true, true);
$titulo_noticias = get_sub_field("titulo_noticias", true, true);
$link = get_sub_field("link", true, true);

?>

<section class="vida" id="vida">
	<div class="vida__row">
		<article class="vida__cartao whitestar">
			<h3><?= $titulo_do_cartao_1 ?></h3>
			<p><?= $texto_do_cartao_1 ?></p>
		</article>
		<article class="vida__cartao">
			<h3><?= $titulo_do_cartao_2 ?></h3>
			<p><?= $texto_do_cartao_2 ?></p>
		</article>
		<article class="vida__cartao">
			<h3><?= $titulo_do_cartao_3 ?></h3>
			<p><?= $texto_do_cartao_3 ?></p>
		</article>
		<article class="vida__cartao greenstar">
			<h3><?= $titulo_do_cartao_4 ?></h3>
			<p><?= $texto_do_cartao_4 ?></p>
		</article>
	</div>
	<div class="vida__row">
		<article class="vida__cartao">
			<h3><?= $titulo_do_cartao_5 ?></h3>
			<p><?= $texto_do_cartao_5 ?></p>
		</article>
		<article class="vida__cartao heart">
			<h3><?= $titulo_do_cartao_6 ?></h3>
			<p><?= $texto_do_cartao_6 ?></p>
		</article>
		<article class="vida__frase">
			<h2><?= $grande_texto ?></h2>
		</article>
	</div>
</section>

<section class="noticias">
	<div class="noticias__wrapper wrapper">
		<header>
			<h2><?= $titulo_noticias ?></h2>
			<a
				href="<?= $link["url"] ?>"
				target="<?= $link["target"] ?>"
				title="<?= $link["title"] ?>"
			>
				<?= $link["title"] ?>
			</a>
		</header>
		<div class="noticias__lista">
			<?php
			$noticias = get_recent_posts($quantas_noticias ?? 3);

			foreach ($noticias["posts"] as $index => $noticia) { ?>
				<a href="<?= $noticia["url"] ?>" class="noticias__cartao animated animated--grow animated--visible">
					<?php render_img($noticia["img"]) ?>
					<div>
						<h3><?= $noticia["title"] ?></h3>
						<p><?= $noticia["excerpt"] ?></p>
						<span><?= $noticia["date"] ?></span>
					</div>
				</a>
			<?php } ?>
		</div class="noticias__lista">
	</div>
</section>
