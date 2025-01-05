<?php
    /**
     * Template Name: Infraestrutura
     * Template Post Type: page
     */
get_header();
loadCSS("banner");
loadCSS("s-slide");
loadCSS("i-description");
?>

<section class="banner">
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_infraestrutura.png"
		width="1380"
		height="604"
		alt="Infraestrutura"
	/>
	<h2>Infraestrutura</h2>
</section>

<section class="s-slide">
	<h2>
		Nosso espaço físico visa contribuir na qualidade dos serviços,
	</h2>
	<p>
		bem como no conforto e bem-estar de nossos alunos, pais e colaboradores. São exemplos de recursos
		disponibilizados pelo colégio:
	</p>
</section>

<section class="i-description">
	<section class="i-description__img">
		<img class="img5" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_infraestrutura5.png" width="412" height="318" alt="Edificio Liceu" />
		<div class="img__section">
			<img class="img6" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_infraestrutura6.png" width="324" height="149" alt="Edificio Liceu" />
			<img class="img6" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_infraestrutura7.png" width="324" height="149" alt="Edificio Liceu" />
			<img class="img8" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_infraestrutura8.png" width="668" height="149" alt="Edificio Liceu" />
		</div>
	</section>

	<div class="i-description__text">
		<ul>
			<li>Salas de aula com recursos tecnológicos (vídeo, multimídia, computadores, Internet).</li>
			<li>Banheiros e bebedouros presentes em todos os ambientes.</li>
			<li>Espaços internos, corredores e pátio com proteção de intempéries do clima.</li>
			<li>Elevador para acesso dos portadores de necessidades especiais.</li>
			<li>Ambiente climatizado nas salas de aula.</li>
			<li>Laboratório de ciências.</li>
			<li>Pátio com mesas de jogos.</li>
		</ul>
	</div>

	<section class="i-description__img">
		<img class="img1" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_infraestrutura2.png" width="355" height="318" alt="Edificio Liceu" />
		<img class="img1" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_infraestrutura3.png" width="356" height="318" alt="Edificio Liceu" />
		<img class="img1" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image_infraestrutura4.png" width="355" height="318" alt="Edificio Liceu" />
	</section>

	<div class="i-description__text">
		<ul>
			<li>Salas para aulas de apoio.</li>
			<li>Laboratório de informática.</li>
			<li>Recursos didáticos e metodológicos.</li>
			<li>Anfiteatro para apresentações e solenidades.</li>
			<li>Biblioteca com espaços para grupos de trabalho.</li>
			<li>Sala de atendimento para primeiros socorros</li>
			<li>Atendimento médico de urgência pré-hospitalar (Medicar)</li>
			<li>Sistema de monitorização por câmeras de segurança</li>
			<li>Cantina escolar;</li>
			<li>Diversas ferramentas virtuais acessíveis pela Internet, no portal educacional;</li>
			<li>Quadra de esporte;</li>
			<li>Espaço para atividades de arte.</li>
		</ul>
	</div>
</section>

<?php
get_footer();
