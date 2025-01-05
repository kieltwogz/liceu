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
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_noticias_banner.png"
		width="1380"
		height="604"
		alt="Equipe"
	/>
	<h3>Diversão</h3>
	<div class="i-banner__section">
		<h2>Competição, diversão e integração: GincaLiceu agita os meses de setembro e outubro para os alunos do Ensino Fundamental 2</h2>
		<p>Publicado em 30 de Novembro de 2023</p>
	</div>
</section>

<section class="p-noticias">
	<div class="p-noticias__wrapper wrapper">
		<header>
			<h2>Últimas Notícias</h2>
		</header>
		<div class="p-noticias__section">
			<div class="p-noticias__lista">
				<article class="p-noticias__cartao">
					<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_noticias1.png" alt="#" />
					<h2>Diversão</h2>
					<div>
						<h3>Competição, diversão e integração: GincaLiceu agita os meses de setembro e outubro
							para os alunos do Ensino Fundamental 2</h3>
						<p>Em setembro e outubro, os alunos do Ensino Fundamental 2 entraram em clima de
							competição e muita animação com a Ginca...</p>
						<span>20 de Setembro de 2024</span>
					</div>
				</article>
				<article class="p-noticias__cartao">
					<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_noticias2.png" alt="#" />
					<h2>Diversão</h2>
					<div>
						<h3>GincaLiceu movimenta os meses de setembro e outubro no Ensino Fundamental 1</h3>
						<p>Nos meses de setembro e outubro, os alunos do Ensino Fundamental 1 participaram de
							mais uma edição da tradic...</p>
						<span>20 de Setembro de 2024</span>
					</div>
				</article>
				<article class="p-noticias__cartao">
					<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_noticias3.png" alt="#" />
					<h2>Aniversariantes</h2>
					<div>
						<h3>Aniversariantes do mês de Outubro</h3>
						<p>Confira as fotos dos aniversariantes do mês de outubro.</p>
						<span>20 de Setembro de 2024</span>
					</div>
				</article>
			</div class="p-noticias__lista">

			<div class="p-noticias__lista">
				<article class="p-noticias__cartao">
					<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_noticias1.png" alt="#" />
					<h2>Diversão</h2>
					<div>
						<h3>Competição, diversão e integração: GincaLiceu agita os meses de setembro e outubro
							para os alunos do Ensino Fundamental 2</h3>
						<p>Em setembro e outubro, os alunos do Ensino Fundamental 2 entraram em clima de
							competição e muita animação com a Ginca...</p>
						<span>20 de Setembro de 2024</span>
					</div>
				</article>
				<article class="p-noticias__cartao">
					<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_noticias2.png" alt="#" />
					<h2>Diversão</h2>
					<div>
						<h3>GincaLiceu movimenta os meses de setembro e outubro no Ensino Fundamental 1</h3>
						<p>Nos meses de setembro e outubro, os alunos do Ensino Fundamental 1 participaram de
							mais uma edição da tradic...</p>
						<span>20 de Setembro de 2024</span>
					</div>
				</article>
				<article class="p-noticias__cartao">
					<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_noticias3.png" alt="#" />
					<h2>Aniversariantes</h2>
					<div>
						<h3>Aniversariantes do mês de Outubro</h3>
						<p>Confira as fotos dos aniversariantes do mês de outubro.</p>
						<span>20 de Setembro de 2024</span>
					</div>
				</article>
			</div class="p-noticias__lista">
		</div>
	</div>
</section>

<?php
get_footer();
