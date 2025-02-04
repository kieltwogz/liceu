<?php
    /**
     * Template Name: Notícias
     * Template Post Type: page
     */
get_header();
loadCSS("i-banner");
loadCSS("p-noticias");

loadJS("noticias");
?>

<section class="i-banner">
	<img
		src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
		width="1380"
		height="604"
		alt="<?= get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true) ?>"
	/>
	<div class="i-banner__section">
		<h2><?= the_title() ?></h2>
	</div>
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

				foreach ($noticias as $noticia) { ?>
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
			</div>
			<button type="button" data-offset="6">Carregar mais</button>
		</div>
	</div>
</section>

<?php
get_footer();
