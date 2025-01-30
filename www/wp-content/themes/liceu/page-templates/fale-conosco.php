<?php
    /**
     * Template Name: Fale Conosco
     * Template Post Type: page
     */
get_header();
loadCSS("banner");
loadCSS("f-timeline");
loadCSS("formulario");

$thisID = get_the_ID();
?>

<section class="banner">
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/contato.png"
		width="1380"
		height="604"
		alt="Nosso Diferencial"
	/>
	<h2>Entre em Contato</h2>
</section>

<section class="f-timeline">
	<div class="f-timeline__left">
		<h2>
			Envie uma mensagem ou entre em contato através dos outros portais
		</h2>
		<p>
			R. Paraíso, 369 - Vila Tiberio, Ribeirão Preto, 14050-440 - (16) 3633-0028
		</p>
	</div>
</section>

<?= do_shortcode(get_the_content($thisID)); ?>

<?php
get_footer();
