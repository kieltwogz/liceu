<?php

loadCSS("c-simple");

$titulo = get_sub_field("titulo", true, true);
$texto = get_sub_field("texto", true, true);
$imagem = get_sub_field("imagem", true, true);
$esquerda = get_sub_field("esquerda", true, true);
$star = get_sub_field("star", true, true);

if (!isset($imagem) || empty($imagem)) { ?>

<section class="c-simple">
	<div class="c-simple__left">
		<h2><?= $titulo ?></h2>
		<?= $texto ?>
	</div>
</section>

<?php } else {
	if ($esquerda) { ?>
		<section class="c-simple">
			<div class="c-simple__left <?= $star ? "c-simple__left--star" : "" ?>">
				<?php render_img($imagem); ?>
			</div>
			<div class="c-simple__right">
				<h2><?= $titulo ?></h2>
				<?= $texto ?>
			</div>
		</section>
	<?php } else { ?>
		<section class="c-simple">
			<div class="c-simple__left">
				<h2><?= $titulo ?></h2>
				<?= $texto ?>
			</div>
			<div class="c-simple__right">
				<?php render_img($imagem); ?>
			</div>
		</section>
<?php }
} ?>
