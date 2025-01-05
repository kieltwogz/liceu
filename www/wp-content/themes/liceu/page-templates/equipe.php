<?php
    /**
     * Template Name: Equipe
     * Template Post Type: page
     */
get_header();
loadCSS("banner");
loadCSS("s-slide");
loadCSS("equipe");
?>

<section class="banner">
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe.png"
		width="1380"
		height="604"
		alt="Equipe"
	/>
	<h2>Equipe</h2>
</section>

<section class="s-slide">
	<h2>
		Contamos com uma equipe de trabalho formada por profissionais
	</h2>
	<p>
		que atuam nos diversos setores e segmentos da escola:
	</p>
</section>

<section class="equipe wrapper">
	<div class="equipe__section">
		<article class="equipe__section__cards">
			<div class="imgs">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe1.png" alt="">
			</div>

			<div class="text">
				<h3>Diretora do Ensino Médio</h3>
				<span>Solange Resina</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>

		<article class="equipe__section__cards">
			<div class="imgs">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe2.png" alt="">
			</div>

			<div class="text">
				<h3>Diretora da Educação Infantil e Ensino Fundamental </h3>
				<span>Isabel Resina Marques Ferrarezi</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>

		<article class="equipe__section__cards">
			<div class="imgs">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe3.png" alt="">
			</div>

			<div class="text">
				<h3>Coordenadora da Educação Infantil</h3>
				<span>Susana Selistre</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>
	</div>

	<div class="equipe__section">
		<article class="equipe__section__cards">
			<div class="imgs imgs--purple">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe1.png" alt="">
			</div>

			<div class="text">
				<h3>Coordenadora do Ensino Fundamental I</h3>
				<span>Ana Maria Pereira</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>

		<article class="equipe__section__cards">
			<div class="imgs imgs--purple">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe2.png" alt="">
			</div>

			<div class="text">
				<h3>Coordenadora do Ensino Fundamental II</h3>
				<span>Márcia Cristina Gabriello Menegario</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>

		<article class="equipe__section__cards">
			<div class="imgs imgs--purple">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe3.png" alt="">
			</div>

			<div class="text">
				<h3>Coordenadora do Ensino Médio</h3>
				<span>Roberta Duarte Coteiro</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>
	</div>

	<div class="equipe__section">
		<article class="equipe__section__cards">
			<div class="imgs">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe4.png" alt="">
			</div>

			<div class="text">
				<h3>Auxiliar de Coordenação</h3>
				<span>Luiz Guilherme Resina Marques Ferrarezi</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>

		<article class="equipe__section__cards">
			<div class="imgs">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe2.png" alt="">
			</div>

			<div class="text">
				<h3>Secretária Escolar</h3>
				<span>Mariana Neves Bataglião</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>

		<article class="equipe__section__cards">
			<div class="imgs">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_equipe3.png" alt="">
			</div>

			<div class="text">
				<h3>Financeiro</h3>
				<span>Sonia Maria Malta Barbosa</span>
				<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam
					inventore doloribus aut omnis minus id consequatur reiciendis in </p>
			</div>
		</article>
	</div>
</section>

<?php
get_footer();
