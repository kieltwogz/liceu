<?php
    /**
     * Template Name: Educação Infantil
     * Template Post Type: page
     */
get_header();
loadCSS("banner");
loadCSS("s-star");
loadCSS("c-description");
loadCSS("c-simple");
loadCSS("s-slide");

loadJS("s-slide");

useSplide();
?>

<section class="banner">
	<img
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/educacao_infantil.png"
		width="1380"
		height="604"
		alt="Educação Infantil"
	/>
	<h2>Educação Infantil</h2>
</section>

<section class="s-star">
	<h2>
		Nosso objetivo é levar a criança a explorar e descobrir
		todas as possibilidades
	</h2>
	<p>
		do seu corpo, das relações, do espaço e através disso,
		desenvolver a sua capacidade de observar, descobrir e
		pensar.
	</p>
	<div class="s-star__star"></div>
</section>

<section class="c-description c-description--purple">
	<div class="c-description__wrapper">
		<h2>A educação infantil</h2>
		<div class="c-description__text">
			<p>
				A educação infantil é a fase que mais encanta a
				criança. O Liceu Contemporâneo valoriza e estimula o
				aprendizado, respeitando os limites, as diferenças,
				as descobertas e a história de cada um. No Liceu a
				aprendizagem de conceitos é muito importante, assim
				como o processo de socialização. A aprendizagem e o
				processo de socialização ocorrem simultaneamente
				como duas faces de uma mesma moeda:
			</p>
			<ul>
				<li>Primeiros conflitos;</li>
				<li>Primeiras percepções das diferenças;</li>

				<li>
					Saída do egocentrismo e o amadurecer para
					perceber o outro. Esse movimento de percepção do
					outro traz sentimentos de alegria, tristeza,
					birra, raiva…
				</li>

				<li>
					Ações que se dão na convivência, no brincar, no
					encantar, e no gargalhar.
				</li>
			</ul>
		</div>
		<p>
			<strong
				>O diferencial do Liceu é o vínculo que
				estabelecemos com as famílias e toda atenção
				individual no desenvolvimento de cada criança. Uma
				rotina sistematizada, um ambiente escolar acolhedor
				e motivador, e o respeito à diversidade dos alunos,
				são partes integrantes da nossa proposta.</strong
			>
		</p>
	</div>
</section>

<section class="c-description">
	<div class="c-description__wrapper">
		<h2>Faixa Etária de Atendimento</h2>
		<table class="c-description__table">
			<tbody>
				<tr>
					<td>Mini Maternal</td>
					<td>Crianças de 1 ano e 10 meses a 3 anos</td>
				</tr>
				<tr>
					<td>Maternal</td>
					<td>Crianças de 3 a 4 anos</td>
				</tr>
				<tr>
					<td>Nível |</td>
					<td>Crianças de 4 a 5 anos</td>
				</tr>
				<tr>
					<td>Nível ||</td>
					<td>Crianças de 5 a 6 anos</td>
				</tr>
			</tbody>
		</table>
		<div class="c-description__block">
			<h3>Mini Maternal</h3>
			<p>
				Nessa fase, visamos explorar atividades que
				desenvolvam a criança fisicamente, socialmente e
				psicologicamente, estimulamos a linguagem oral
				através de histórias, dramatização e brincadeiras,
				respeitando, sempre, as diferenças individuais de
				cada um.
			</p>
		</div>
		<div class="c-description__block">
			<h3>Maternal</h3>
			<p>
				Nesta idade, trabalhamos no desenvolvimento integral
				da criança nos principais conceitos básicos do
				esquema corporal, da orientação espacial, da
				organização temporal, do ritmo, da coordenação
				viso-motora, além de, buscar o desenvolvimento da
				linguagem como forma de comunicação.
			</p>
		</div>
		<div class="c-description__block">
			<h3>Nível I</h3>
			<p>
				través de uma evolução harmoniosa, visamos o
				desenvolvimento integral da criança nos aspectos
				biológicos, físico-motor, cognitivo e
				afetivo-emocional, dando realce à coordenação motora
				e ao preparo para a escrita (período preparatório).
				Buscamos o desenvolvimento da linguagem como forma
				de comunicação e ampliação do pensamento. Temos a
				preocupação com a pronúncia correta dos fonemas
				(prontidão para a alfabetização).
			</p>
		</div>
		<div class="c-description__block">
			<h3>Nível II</h3>
			<p>
				Enfatizamos a coordenação motora escrita, a
				alfabetização da criança através da construção da
				língua escrita, relacionando letras e sons,
				discriminando e visualizando as famílias silábicas,
				o desenvolvimento do raciocínio lógico-matemático e
				o domínio das quantidades numéricas.
			</p>
		</div>
	</div>
</section>

<section class="c-description c-description--purple">
	<div class="c-description__wrapper">
		<h2>Horário de funcionamento dos períodos</h2>
		<table class="c-description__table">
			<tbody>
				<tr>
					<td>Manhã</td>
					<td>7h 30 às 11h 30 ou 7h às 12h</td>
				</tr>
				<tr>
					<td>Maternal</td>
					<td>13h às 17h ou 13h às 18h</td>
				</tr>
			</tbody>
		</table>
		<h2>Ofertas de turmas</h2>
		<table class="c-description__table">
			<tbody>
				<tr>
					<td>Mini Maternal</td>
					<td>2 anos</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>Maternal</td>
					<td>3 anos</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>Nível |</td>
					<td>4 anos</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>Nível ||</td>
					<td>5 anos</td>
					<td>Manhã e Tarde</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

<section class="c-simple">
	<div class="c-simple__left">
		<h2>Projetos</h2>
		<p>
			O planejamento dos conteúdos pedagógicos é organizado
			através de projetos criados pela equipe pedagógica do
			Liceu Contemporâneo. Todo o conteúdo trabalhado, gira em
			torno de um contexto e uma história norteadora de todos
			os eixos temáticos.
		</p>
		<p>
			Os projetos acontecem bimestralmente. São registrados
			através de portfólios produzidos pelas crianças e
			apostilas produzidas pela equipe pedagógica e adaptada
			ao projeto do bimestre vigente.
		</p>
	</div>
	<picture class="c-simple__right">
		<img
			src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/pedagogica.png"
			width="464"
			height="326"
			alt=""
		/>
	</picture>
</section>

<section class="s-slide">
	<h3>São integrados aos projetos, as oficinas:</h3>
	<div
		class="s-slide__slide splide"
		role="group"
		aria-label="Propostas"
	>
		<ul class="splide__pagination"></ul>

		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">Roda da novidade.</li>
				<li class="splide__slide">Clube da leitura.</li>
				<li class="splide__slide">Avaliação processual.</li>
				<li class="splide__slide">Culinária.</li>
				<li class="splide__slide">Lanche coletivo.</li>
				<li class="splide__slide">Roda da novidade.</li>
			</ul>
		</div>
	</div>
</section>

<section class="c-description">
	<div class="c-description__wrapper">
		<h2>Avaliação</h2>
		<p>
			A avaliação é um processo dinâmico que inclui o
			cotidiano escolar, a observação e o desenvolvimento de
			cada aluno. Analisamos em uma ficha individual o
			desenvolvimento cognitivo, emocional e de coordenação
			motora. Ao final de cada bimestre, entregamos um
			relatório para cada família, assim como uma pasta com os
			portfólios produzidos ao longo do bimestre. Temos como
			objetivo informar e orientar às famílias aspectos da
			construção do saber de cada criança.
		</p>
	</div>
</section>

<?php
get_footer();
