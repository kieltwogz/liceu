<?php

get_header();

loadCSS("i-banner");
loadCSS("s-content");
loadCSS("p-noticias");

$category = get_the_category()[0]->name;
$tags = get_the_tags();

?>

<section class="i-banner">
	<img
		src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
		width="1380"
		height="604"
		alt="<?= get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true) ?>"
	/>
	<h3><?= $category ?></h3>
	<div class="i-banner__section">
		<h2><?= the_title(); ?></h2>
	</div>
</section>

<section class="s-content wrapper">
	<article class="s-content__left">
		<a href="https://wa.me/5516992211216?text=Ol%C3%A1%2C%20venho%20atrav%C3%A9s%20do%20site%20do%20Liceu%20Contempor%C3%A2neo!%0APreciso%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20a%20escola." id="whatsapp"></a>
		<a href="https://www.facebook.com/liceucontemporaneo/" id="facebook"></a>
		<a href="https://www.instagram.com/liceucontemporaneo/" id="instagram"></a>
	</article>
	<article class="s-content__right">
		<?= the_content() ?>
		<?php if ($tags) { ?>
			<hr class="s-content__long" />
			<div class="s-content__tags">
				<?php foreach ($tags as $tag) { ?>
					<a
						href="<?= get_tag_link($tag->term_id) ?>"
						title="<?= $tag->name ?>"
					>
						<?= $tag->name ?>
					</a>
				<?php } ?>
			</div>
		<?php } ?>
	</article>
</section>

<section class="p-noticias p-noticias--purple">
	<div class="p-noticias__wrapper wrapper">
		<header>
			<h2>RELACIONADAS</h2>
		</header>
		<div class="p-noticias__section">
			<div class="p-noticias__lista">
				<?php
				$posts = get_recent_posts(3, $category, "", get_the_ID());

				foreach ($posts["posts"] as $post) { ?>
					<a href="<?= $post["url"] ?>" class="p-noticias__cartao">
						<?php render_img($post["img"]) ?>
						<div>
							<h3><?= $post["title"] ?></h3>
							<p><?= $post["excerpt"] ?></p>
							<span><?= $post["date"] ?></span>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();