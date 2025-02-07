<?php

loadCSS("equipe");
loadCSS("s-slide");

loadJS("animation");

$titulo = get_sub_field("titulo", true, true);
$subtitulo = get_sub_field("subtitulo", true, true);
$pessoas = get_sub_field("pessoas", true, true);
?>

<section class="s-slide">
	<h2><?= $titulo ?></h2>
	<p><?= $subtitulo ?></p>
</section>

<?php if ($pessoas) { ?>
	<section class="equipe wrapper">
		<div class="equipe__section">
			<?php foreach ($pessoas as $pessoa) { ?>
				<article class="equipe__section__cards animated animated--down">
					<div class="imgs <?= $pessoa["cor"] == "roxo" ? "imgs--purple" : "" ?>">
						<?php render_img($pessoa["imagem"]) ?>
					</div>

					<div class="text">
						<h3><?= $pessoa["titulo_primario"] ?></h3>
						<span><?= $pessoa["titulo_secundario"] ?></span>
						<p><?= $pessoa["texto"] ?></p>
					</div>
				</article>
			<?php } ?>
		</div>
	</section>
<?php } ?>
