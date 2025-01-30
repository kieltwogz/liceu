<?php
/*
Template Name: Home Page
*/
get_header();
loadJS("ensino");

loadCSS("cta");

loadJS("h-hero");
loadCSS("h-hero");

loadCSS("desafios");
loadCSS("noticias");
loadCSS("vida");
loadCSS("ensino");
loadCSS("alunos");
loadCSS("projetos");

useSplide();
?>

<section class="cta">
	<a href="#">Agende uma Visita!</a>
</section>

<section class="h-hero">
	<div class="h-hero__wrapper wrapper">
		<div
			class="h-hero__slide splide"
			role="group"
			aria-label="Hero Banner"
		>

			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<div>
							<h2>TRANSFORMANDO VIDAS PELA EDUCAÇÃO</h2>
							<p>Aqui, o futuro começa hoje. Oferecemos uma formação completa para que cada aluno desenvolva todo o seu potencial.</p>
							<a href="#">SAIBA MAIS</a>
						</div>
						<div>
							<a href="#">Envie-nos uma mensagem!</a>
							<picture>
								<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/hero-1.png" alt="Hero1" />
							</picture>
							<picture>
								<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/hero-2.png" alt="Hero2" />
							</picture>
							<picture>
								<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/hero-3.png" alt="Hero3" />
							</picture>
						</div>
					</li>
					<li class="splide__slide">
						<div>
							<h2>TRANSFORMANDO VIDAS PELA EDUCAÇÃO</h2>
							<p>Aqui, o futuro começa hoje. Oferecemos uma formação completa para que cada aluno desenvolva todo o seu potencial.</p>
							<a href="#">SAIBA MAIS</a>
						</div>
						<div>
							<a href="#">Envie-nos uma mensagem!</a>
							<picture>
								<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/hero-4.png" alt="Hero4" />
							</picture>
							<picture>
								<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/hero-5.png" alt="Hero5" />
							</picture>
							<picture>
								<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/hero-6.png" alt="Hero6" />
							</picture>
						</div>
					</li>
				</ul>
			</div>
			<ul class="splide__pagination"></ul>
		</div>
		<div>
			<a class="h-hero__button h-hero__button--pessoinha" href="#">Portal Professor</a>
			<a class="h-hero__button h-hero__button--pessoinha" href="#">Portal Aluno</a>
			<a class="h-hero__button h-hero__button--caneta" href="#">Concurso de Bolsas</a>
			<a class="h-hero__button h-hero__button--calendario" href="#">Calendário Escolar</a>
		</div>
	</div>
</section>

<section class="projetos">
	<div class="projetos__wrapper wrapper">
		<header>
			<h2>NOSSOS PROJETOS</h2>
			<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam inventore
				doloribus aut omnis minus id consequatur reiciendis in </p>
		</header>
		<div class="projetos__lista">
			<article class="cartao">
				<div>
					<h3>GINCALICEU: Diversão e Integração.</h3>
					<p>GincaLiceu agita os meses de setembro e outubro para os alunos do Ensino Fundamental 2 Em
						setembro e outubro, os alunos do Ensino Fundamental 2 entraram...</p>
				</div>
				<div class="cartao__arrow">
					<a href=""></a>
				</div>
			</article>
			<article class="cartao">
				<div>
					<h3>GINCALICEU: Diversão e Integração.</h3>
					<p>GincaLiceu agita os meses de setembro e outubro para os alunos do Ensino Fundamental 2 Em
						setembro e outubro, os...</p>
				</div>
				<div class="cartao__arrow2">
					<a href=""></a>
				</div>
			</article>
			<article class="cartao">
				<div>
					<h3>GINCALICEU: Diversão e Integração.</h3>
					<p>GincaLiceu agita os meses de setembro e outubro para os alunos do Ensino Fundamental 2 Em
						setembro e outubro, os alunos do Ensino Fundamental 2 entraram...</p>
				</div>
			</article>
		</div class="projetos__lista">

		<div class="projetos__botao">
			<a href="#">
				TODOS OS PROJETOS
			</a>
		</div>
	</div>
</section>

<section class="ensino">
	<div class="ensino__wrapper wrapper">
		<header>
			<h2>TIPOS DE ENSINO</h2>
			<div class="ensino__indicators">
				<span class="indicator active" data-slide="0"></span>
				<span class="indicator" data-slide="1"></span>
				<span class="indicator" data-slide="2"></span>
				<span class="indicator" data-slide="3"></span>
			</div>
		</header>
		<div class="ensino__slider">
			<div class="ensino__cards">

				<div class="ensino__card">
					<article>
						<h3>ENSINO INFANTIL</h3>
						<p>
							Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae!
							Nam
							inventore doloribus aut omnis minus id consequatur reiciendis in </p>
					</article>
					<img class="img__1" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image1.png" alt="Ensino Infantil" />
				</div>

				<div class="ensino__card">
					<article>
						<h3>ENSINO FUNDAMENTAL</h3>
						<p>
							Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae!
							Nam
							inventore doloribus aut omnis minus id consequatur reiciendis in </p>
					</article>
					<img class="img__2" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image2.png" alt="Ensino Fundamental" />
				</div>

				<div class="ensino__card">
					<article>
						<h3>ENSINO MÉDIO</h3>
						<p>
							Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae!
							Nam
							inventore doloribus aut omnis minus id consequatur reiciendis in </p>
					</article>
					<img class="img__3" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image3.png" alt="Ensino Médio" />
				</div>

				<div class="ensino__card">
					<article>
						<h3>ATIVIDADES COMPLEMENTARES</h3>
						<p>
							Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae!
							Nam
							inventore doloribus aut omnis minus id consequatur reiciendis in </p>
					</article>
					<img class="img__4"
						src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/image4.png"
						alt="Atividades Complementares"
					/>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="alunos">
	<div class="alunos__wrapper wrapper">
		<header>
			<h2>NOSSOS ALUNOS</h2>
			<p>Saiba o que nossos alunos e nossos ex-alunos falam de nós</p>
		</header>

		<div class="alunos__cards">
			<article class="alunos__card">
				<header>
					<h3>GIULIA GOMES</h3>
					<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in
						ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in.</p>
				</header>
			</article>

			<article class="alunos__card">
				<header>
					<h3>GIULIA GOMES</h3>
					<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in
						ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in.</p>
				</header>
			</article>

			<article class="alunos__card">
				<header>
					<h3>GIULIA GOMES</h3>
					<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in
						ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in.</p>
				</header>
			</article>
		</div>

		<div class="alunos__cards">
			<article class="alunos__card">
				<header>
					<h3>GIULIA GOMES</h3>
					<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in
						ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in.</p>
				</header>
			</article>

			<article class="alunos__card">
				<header>
					<h3>GIULIA GOMES</h3>
					<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in
						ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in.</p>
				</header>
			</article>

			<article class="alunos__card">
				<header>
					<h3>GIULIA GOMES</h3>
					<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in
						ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in.</p>
				</header>
			</article>
		</div>
	</div>
</section>

<section class="vida">
	<div class="vida__row">
		<article class="vida__cartao whitestar">
			<h3>ESSA É A NOSSA HISTÓRIA</h3>
			<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in </p>
		</article>
		<article class="vida__cartao">
			<h3>APRENDER COM PROPÓSITO</h3>
			<p>Nossa metodologia vai além do ensino tradicional. Incentivamos a curiosidade, o pensamento crítico e o aprendizado ativo. Aqui, cada aluno é incentivado a explorar seus interesses e talentos, construindo uma base sólida para seu futuro acadêmico e pessoal.</p>
		</article>
		<article class="vida__cartao">
			<h3>UM ESPAÇO PENSADO PARA APRENDIZADO</h3>
			<p>Nossas instalações são modernas, seguras e preparadas para receber os alunos com o que há de melhor em termos de tecnologia e conforto. As salas de aula são equipadas para tornar o aprendizado uma experiência dinâmica e interativa.</p>
		</article>
		<article class="vida__cartao greenstar">
			<h3>APRENDER COM PROPÓSITO</h3>
			<p>Nossa metodologia vai além do ensino tradicional. Incentivamos a curiosidade, o pensamento crítico e o aprendizado ativo. Aqui, cada aluno é incentivado a explorar seus interesses e talentos, construindo uma base sólida para seu futuro acadêmico e pessoal.</p>
		</article>
	</div>
	<div class="vida__row">
		<article class="vida__cartao">
			<h3>APRENDER COM PROPÓSITO</h3>
			<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in </p>
		</article>
		<article class="vida__cartao heart">
			<h3>UM ESPAÇO PENSADO PARA APRENDIZADO</h3>
			<p>Lorem ipsum dolor sit amet. Aut quia sint et voluptatem similique in ratione molestiae! Nam inventore doloribus aut omnis minus id consequatur reiciendis in </p>
		</article>
		<article class="vida__frase">
			<h2>UMA ESCOLA PARA A VIDA TODA</h2>
		</article>
	</div>
</section>

<section class="noticias">
	<div class="noticias__wrapper wrapper">
		<header>
			<h2>NOTÍCIAS</h2>
			<a href="#">VER TUDO</a>
		</header>
		<div class="noticias__lista">
			<article class="noticias__cartao">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/noticias1.png" alt="#" />
				<div>
					<h3>Competição, diversão e integração: GincaLiceu agita os meses de setembro e outubro para os alunos do Ensino Fundamental 2</h3>
					<p>Em setembro e outubro, os alunos do Ensino Fundamental 2 entraram em clima de competição e muita animação com a Ginca...</p>
					<span>20 de Setembro de 2024</span>
				</div>
			</article>
			<article class="noticias__cartao">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/noticias2.png" alt="#" />
				<div>
					<h3>GincaLiceu movimenta os meses de setembro e outubro no Ensino Fundamental 1</h3>
					<p>Nos meses de setembro e outubro, os alunos do Ensino Fundamental 1 participaram de mais uma edição da tradic...</p>
					<span>20 de Setembro de 2024</span>
				</div>
			</article>
			<article class="noticias__cartao">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/noticias3.png" alt="#" />
				<div>
					<h3>Aniversariantes do mês de Outubro</h3>
					<p>Confira as fotos dos aniversariantes do mês de outubro.</p>
					<span>20 de Setembro de 2024</span>
				</div>
			</article>
		</div class="noticias__lista">
	</div>
</section>

<section class="desafios">
	<h2>DESAFIOS QUE ESTIMULAM O CONHECIMENTO</h2>
	<div class="desafios__caderno">
		<article class="desafios__pagina">
			<h3>CONCURSOS</h3>
			<p>
				No Liceu Contemporâneo, acreditamos que a educação vai
				além da sala de aula. Por isso, incentivamos nossos
				alunos a participar de concursos e competições
				acadêmicas que despertam o interesse pelo conhecimento e
				o espírito de superação. Através dessas oportunidades,
				nossos estudantes exploram suas habilidades, trabalham
				em equipe e se destacam em diversos campos do saber.
			</p>
			<p>
				Participar de concursos é uma excelente forma de
				desenvolver o pensamento crítico, a criatividade e o
				senso de inovação. Além disso, essas competições
				permitem que nossos alunos pratiquem valores como ética,
				responsabilidade e respeito ao próximo, aplicando o que
				aprendem no ambiente escolar em situações desafiadoras.
			</p>
			<p>
				Estamos sempre atualizando nossa agenda com novas
				competições regionais e nacionais, abrangendo áreas como
				matemática, ciências, redação, artes, e muito mais.
				Queremos ver nossos alunos conquistando o sucesso dentro
				e fora da escola!"
			</p>
			<button type="button">SAIBA MAIS</button>
		</article>
		<article class="desafios__pagina">
			<ul>
				Para garantir que pais e alunos estejam sempre
				informados sobre os eventos e atividades escolares,
				disponibilizamos o nosso Calendário Escolar de 2024.
				Aqui, você encontra todas as datas importantes do ano
				letivo, como:

				<li>Início e término das aulas</li>
				<li>Períodos de férias e recessos</li>
				<li>Datas de provas e avaliações</li>
				<li>Reuniões de pais e mestres</li>
				<li>Eventos e atividades extracurriculares</li>
				<li>Feriados nacionais e regionais</li>
			</ul>
			<div class="desafios__isolado">
				<h3>CALENDÁRIO ESCOLAR</h3>
				<p>
					Fique atento às atualizações e acompanhe todas as
					etapas do processo educativo de seu filho. Sabemos
					que uma boa organização é essencial para o sucesso
					escolar e para uma rotina equilibrada.
				</p>
				<button type="button">SAIBA MAIS</button>
			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>

