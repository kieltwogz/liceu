<?php
    /**
     * Template Name: Notícias
     * Template Post Type: page
     */
get_header();
loadCSS("i-banner");
loadCSS("p-noticias");
?>

<section class="i-banner">
	<?php
	$noticias = get_recent_posts(1); ?>

	<img
		src="<?= $noticias[0]["img"] ?>" alt="<?= $noticias[0]['alt'] ?>" title="<?= $noticias[0]['alt'] ?>"
		width="1380"
		height="604"
	/>
	<h3><?= $noticias[0]["category"] ?></h3>
	<div class="i-banner__section">
		<h2><?= $noticias[0]["title"] ?></h2>
		<p>Publicado em <?= $noticias[0]["date"] ?></p>
	</div>


	?>
</section>

<section class="p-noticias">
	<div class="p-noticias__wrapper wrapper">
		<header>
			<h2>Últimas Notícias</h2>
		</header>
		<div class="p-noticias__section">
			<div class="p-noticias__lista">
				<?php
				$noticias = get_recent_posts(6);

				foreach ($noticias as $index => $noticia) { ?>
					<a href="<?= $noticia["url"] ?>" class="p-noticias__cartao">
						<img src="<?= $noticia["img"] ?>" alt="<?= $noticia['alt'] ?>" title="<?= $noticia['alt'] ?>" />
						<h2><?= $noticia["category"] ?></h2>
						<div>
							<h3><?= $noticia["title"] ?></h3>
							<p><?= $noticia["excerpt"] ?></p>
							<span><?= $noticia["date"] ?></span>
						</div>
					</a>
				<?php } ?>
			</div class="p-noticias__lista">
		</div>
	</div>
</section>

<?php
get_footer();
