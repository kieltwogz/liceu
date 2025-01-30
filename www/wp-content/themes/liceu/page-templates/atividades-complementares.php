<?php
    /**
     * Template Name: Atividades Complementares
     * Template Post Type: page
     */
get_header();
loadCSS("banner");
loadCSS("f-timeline");
loadCSS("i-description");

useSplide();
?>

<section class="banner">
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_noticias_banner.png"
		width="1380"
		height="604"
		alt="Atividades Complementares"
	/>
	<h2>Atividades Complementares</h2>
</section>

<section class="f-timeline">
	<div class="f-timeline__left f-timeline__left--big">
		<h2>
			Atividades Complementares para um Desenvolvimento Integral
		</h2>
		<p>
			O Liceu Contemporâneo organiza escolinhas de esporte além de oferecer diversas atividades extracurriculares nas áreas de Arte e Cultura a fim de complementar o projeto escolar. Realiza, igualmente, promoções recreativas e participações em competições escolares.
		</p>
	</div>
</section>

<section class="i-description">
	<section class="i-description__img">
		<img class="img5" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/brincadeira1.png" width="412" height="318" alt="Edificio Liceu" />
		<div class="img__section">
			<img class="img6" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/brincadeira2.png" width="324" height="149" alt="Edificio Liceu" />
			<img class="img6" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/brincadeira3.png" width="324" height="149" alt="Edificio Liceu" />
			<img class="img8" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/brincadeira4.png" width="668" height="149" alt="Edificio Liceu" />
		</div>
	</section>

	<div class="i-description__text">
		<p>
			As atividades acontecem de segunda à sexta-feira, sempre com o início às 18h e são desenvolvidas por profissionais de nossa equipe. São contempladas as modalidades de voleibol, futsal, tênis de mesa, handebol, ginástica artística, xadrez e teatro, para diferentes públicos/segmentos ( a oferta da modalidade está condicionada ao número de interessados).
		</p>
	</div>
	<div class="i-description__text">
		<p>
			As matrículas nas Escolinhas de Esporte e Modalidades Artísticas e culturais acontecem somente na secretaria escolar, onde também podem ser encontradas as informações específicas de cada atividade.
		</p>
	</div>
	<div class="i-description__text">
		<p>
			Os pais interessados poderão inscrever seus filhos em qualquer período do ano, se houver disponibilidade de vaga na modalidade de interesse.
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
