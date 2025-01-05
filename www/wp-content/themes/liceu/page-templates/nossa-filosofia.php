<?php
    /**
     * Template Name: Nossa Filosofia
     * Template Post Type: page
     */
get_header();
loadCSS("banner");
loadCSS("f-timeline");
loadCSS("l-description");
?>

<section class="banner">
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_nossafilosofia.png"
		width="1380"
		height="604"
		alt="Nossa Filosofia"
	/>
	<h2>Nossa Filosofia</h2>
</section>

<section class="f-timeline">
	<div class="f-timeline__left">
		<h2>
			Uma Filosofia Educacional Baseada no Respeito e na Excelência Acadêmica
		</h2>
		<p>
			Oferecer uma educação de qualidade, pautada no compromisso e preparação da criança e do jovem,
			ajudando-os a se tornarem ativos na construção do conhecimento e na transformação da sua própria
			realidade, despertando-os para o protagonismo juvenil. Acreditamos que educar só é possível quando
			desenvolvemos uma atitude de disponibilidade, estabelecendo com os alunos uma relação de confiança,
			de escuta e de afeto.
		</p>
	</div>
</section>

<section class="l-description">
	<h3>
		Construir o conhecimento por meio de um projeto educativo que leve o aluno a transformar a sua realidade
		e a responder os desafios e decisões
		da vida.
	</h3>
</section>

<?php
get_footer();
