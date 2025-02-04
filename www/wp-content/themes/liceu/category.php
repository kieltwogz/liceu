<?php

get_header();

loadCSS("i-banner");
loadCSS("p-noticias");
loadJS("noticias");

$category = get_the_category()[0]->slug;

?>

<section class="i-banner">
	<?php render_img(get_field($category, "options")); ?>
	<div class="i-banner__section">
		<h2><?= single_term_title() ?></h2>
	</div>
</section>

<section class="p-noticias">
	<div class="p-noticias__wrapper wrapper">
		<header>
			<h2><?= single_term_title() ?></h2>
		</header>
		<div class="p-noticias__section">
			<div class="p-noticias__lista">
				<?php
				$posts = get_recent_posts(6, $category);

				foreach ($posts["posts"] as $post) { ?>
					<a href="<?= $post["url"] ?>" class="p-noticias__cartao">
						<?php render_img($post["img"]) ?>
						<!-- <h2><?= $post["category"]->name ?></h2> -->
						<div>
							<h3><?= $post["title"] ?></h3>
							<p><?= $post["excerpt"] ?></p>
							<span><?= $post["date"] ?></span>
						</div>
					</a>
				<?php } ?>
			</div>
			<button
				type="button"
				data-offset="6"
				data-category="<?= $category ?>"
				style="<?= $posts["total_posts"] <= 6 ? "display: none" : "" ?>"
			>
				Carregar mais
			</button>
		</div>
	</div>
</section>

<?php
get_footer();