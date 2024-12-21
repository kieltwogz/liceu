<?php
    /**
     * Template Name: Proposta Pedagógica
     * Template Post Type: page
     */
get_header();

loadCSS("banner");
loadCSS("s-slide");

loadJS("s-slide");

useSplide();

?>

<section class="banner">
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/pedagogica-imagem-1.png"
		width="1380"
		height="604"
		alt="Proposta Pedagógica"
	/>
	<h2>Proposta Pedagógica</h2>
</section>

<section class="s-slide">
	<h2>Nossa proposta visa a desenvolver aspectos didáticos</h2>
	<p>
		pedagógicos e metodológicos estruturadores do processo de
		ensino e de aprendizagem, valorizando os aspectos:
	</p>
	<div
		class="s-slide__slide splide"
		role="group"
		aria-label="Propostas"
	>
		<ul class="splide__pagination"></ul>

		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
					Interdisciplinaridade. Contextualização.
				</li>
				<li class="splide__slide">Incentivo à pesquisa.</li>
				<li class="splide__slide">Avaliação processual.</li>
				<li class="splide__slide">Paradigma sistêmico.</li>
				<li class="splide__slide">
					Interdisciplinaridade. Contextualização.
				</li>
				<li class="splide__slide">Incentivo à pesquisa.</li>
			</ul>
		</div>
	</div>
</section>

<?php
get_footer();
