<?php

get_header();

loadCSS("i-banner");
loadCSS("s-content");

?>

<section class="i-banner">
	<img
		src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
		width="1380"
		height="604"
		alt="<?= get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true) ?>"
	/>
	<h3><?= get_the_category()[0]->name ?></h3>
	<div class="i-banner__section">
		<h2><?= the_title(); ?></h2>
		<p>Publicado em <?= get_the_date('j \d\e F \d\e Y'); ?></p>
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
	</article>
</section>

<?php
get_footer();