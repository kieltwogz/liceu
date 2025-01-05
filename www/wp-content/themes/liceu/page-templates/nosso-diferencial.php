<?php
    /**
     * Template Name: Nosso Diferencial
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
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_nssdiferencial.png"
		width="1380"
		height="604"
		alt="Nosso Diferencial"
	/>
	<h2>Nosso Diferencial</h2>
</section>

<section class="s-slide">
	<h2>Uma Abordagem Educacional Inovadora que Valoriza Cada Aluno e Prepara para o Futuro</h2>
	<div class="s-slide__slide splide" role="group" aria-label="Propostas">
		<ul class="splide__pagination"></ul>

		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
					Ambiente educacional acolhedor e dinâmico preocupado com o bem estar do aluno.
				</li>
				<li class="splide__slide">Amplia os limites da sala de aula trazendo atividades que facilitam a
					integração do aluno e o trabalho pedagógico.</li>
				<li class="splide__slide">Educação de excelência pelo compromisso de cada educador em alcançar
					as finalidades de um projeto educativo sério e exigente.</li>
				<li class="splide__slide"> Educação de qualidade que exige do educando compromisso diário com o
					estudo e as atividades escolares.
				</li>
				<li class="splide__slide">
					Ambiente educacional acolhedor e dinâmico preocupado com o bem estar do aluno.
				</li>
				<li class="splide__slide">Amplia os limites da sala de aula trazendo atividades que facilitam a
					integração do aluno e o trabalho pedagógico.</li>
			</ul>
		</div>
	</div>
</section>

<?php
get_footer();
