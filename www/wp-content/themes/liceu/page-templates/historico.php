<?php
    /**
     * Template Name: Historico
     * Template Post Type: page
     */
get_header();
loadCSS("banner");
loadCSS("s-timeline");
loadCSS("l-description");
?>

<section class="banner">
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/historia-background.png"
		width="1380"
		height="604"
		alt="Histórico"
	/>
	<h2>Histórico</h2>
</section>

<section class="s-timeline">
	<div class="s-timeline__left">
		<h2>
			Liceu Contemporâneo comemora 30 anos de história pela
			educação.
		</h2>
		<p>
			Lorem ipsum dolor sit amet. Aut quia sint et voluptatem
			similique in ratione molestiae! Nam inventore doloribus
			aut omnis minus id consequatur reiciendis in
		</p>
	</div>
	<div class="s-timeline__right">
		<div class="s-timeline__block">
			<h3>1991</h3>
			<p>
				Lorem ipsum dolor sit amet. Aut quia sint et
				voluptatem similique
			</p>
		</div>
		<div class="s-timeline__block">
			<h3>2020</h3>
			<p>
				Lorem ipsum dolor sit amet. Aut quia sint et
				voluptatem similique
			</p>
		</div>
	</div>
</section>

<section class="l-description">
	<h2>A história de Liceu Contemporâneo</h2>
	<div class="l-description__text l-description__text--paragraph">
		<p>
			A história do Liceu Contemporâneo remete para o início
			de 1991 , com a fundação da pequena escola de educação
			infantil, o “Lápis de Cor”, com a proposta de oferecer,
			para crianças de 1 a 5 anos, ensino de qualidade e um
			atendimento carregado de afeto e atenção.
		</p>
		<p>
			A pequena escola produziu frutos e no ano de 2000
			ampliou o atendimento parao seguimento de 1ª a 4ª série.
			Contudo, o prédio já não comportava o crescimento no
			número de alunos, obrigando assim a escola a adquirir um
			novo espaço físico para a construção do Ensino
			Fundamental II, que iniciou suas atividades em janeiro
			2002, passando então a denominar-se Liceu Contemporâneo.
		</p>
	</div>
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/historia-imagem-2.png"
		width="1100"
		height="380"
		alt="Edificio Liceu"
	/>
	<div class="l-description__text">
		<p>
			Continuando sua história de crescimento, o Liceu
			Contemporâneo chega a 2007 com a abertura das turmas de
			ensino médio, completando desta forma, o ciclo da
			educação básica. O Liceu conta hoje com duas unidades,
			que atendem 49 turmas que vão da Educação Infantile
			Ensino Fundamental à preparação para o vestibular no
			Ensino Médio. Estabelecendo com os alunos e suas
			famílias uma relação de confiança, de escuta e
			responsabilidade no compromisso de oferecer um projeto
			educativo de valor.
		</p>
	</div>
	<h3>
		Liceu Contemporâneo - 30 anos de história e trabalho
		vigoroso, de entusiasmo pela educação e compromisso com
		nossos alunos e suas famílias.
	</h3>
</section>

<?php
get_footer();
