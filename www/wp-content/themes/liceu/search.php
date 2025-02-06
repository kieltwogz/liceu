<?php
/*
Template Name: Página de Pesquisa
*/

get_header();

loadCSS("i-banner");
loadCSS("p-noticias");
loadJS("noticias");
loadCSS("p-formulario");

$search = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';

?>

<section class="i-banner">
	<img
		src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
		width="1380"
		height="604"
		alt="<?= get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true) ?>"
	/>
	<div class="i-banner__section">
		<h2><?= the_title(); ?></h2>
	</div>
</section>

<section class="p-noticias">
    <div class="p-noticias__wrapper wrapper">
		<form class="p-form" method="GET">
            <h3>Pesquise</h3>
            <input name="search" type="text" value="<?= $search ?>" />
            <input type="submit" value="Buscar" />
        </form>

        <?php if ($search) { ?>
            <header>
                <h2>Resultados para "<?= $search ?>"</h2>
            </header>

			<div class="p-noticias__section">
				<div class="p-noticias__lista">
					<?php
					$posts = get_recent_posts(6, "", "", 0, $search);

					if (!empty($posts["posts"])) {
						foreach ($posts["posts"] as $post) { ?>
							<a href="<?= $post["url"] ?>" class="p-noticias__cartao">
								<?php render_img($post["img"]) ?>
								<h2><?= $post["category"] ?></h2>
								<div>
									<h3><?= $post["title"] ?></h3>
									<p><?= $post["excerpt"] ?></p>
									<span><?= $post["date"] ?></span>
								</div>
							</a>
						<?php }
					} else { ?>
						<span>Nenhum resultado encontrado.</span>
					<?php } ?>
				</div>

				<button
					type="button"
					data-offset="6"
					data-search="<?= $search ?>"
					style="<?= $posts["total_posts"] <= 6 ? "display: none" : "" ?>"
				>
					Carregar mais
				</button>
			</div>
		<?php } ?>
    </div>
</section>

<?php
get_footer();