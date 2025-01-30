<?php
    /**
     * Template Name: Educação Fundamental
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
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/fundamental.png"
		width="1380"
		height="604"
		alt="Educação Fundamental"
	/>
	<h2>Educação Fundamental</h2>
</section>

<section class="s-star">
	<h2>
		Formação Integral para
		o Futuro: O Ensino
		Fundamental que
		Prepara para a Vida
	</h2>
	<p class="s-star__full">
		O Ensino Fundamental do Liceu Contemporâneo adota uma proposta pedagógica em que privilegia o ensino enquanto construção significativa do conhecimento, valorizando o esporte, a cultura e a formação de valores. Com isso, visamos formar alunos autônomos, críticos, participativos, capazes de atuar na sociedade de forma responsável, produtiva, comprometidos com a cidadania e a democracia.
		<br />
		<br />
		É nessa fase da vida acadêmica que se consolidam as habilidades de leitura, escrita e lógico matemáticas, aprendizagens fundamentais para o desenvolvimento da expressão e do raciocínio lógico, daí a importância do “aprender a conhecer”, isto é como obter, processar e selecionar, construir e reconstruir o conhecimento.
	</p>
	<div class="s-star__star s-star__star--small"></div>
</section>

<section class="c-description c-description--purple">
	<div class="c-description__wrapper">
		<h2>Como acontece a alfabetização no Liceu?</h2>
		<div class="c-description__text">
			<p>
				A alfabetização acontece através do método fônico, que consiste no aprendizado pela associação entre fonemas e grafemas, ou seja, sons e letras. Esse método de ensino permite primeiro descobrir o princípio alfabético e, progressivamente, dominar o conhecimento ortográfico próprio de sua língua, através de textos produzidos especificamente para este fim.
			</p>
		</div>
	</div>
</section>

<section class="c-simple">
	<picture class="c-simple__left c-simple__left--star">
		<img
			src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/jovens.png"
			width="375"
			height="561"
			alt="Jovens"
		/>
	</picture>
	<div class="c-simple__left">
		<h3>Diferencial no trabalho com o Ensino Fundamental no Liceu</h3>
		<p>
			Uma rotina sistematizada, um ambiente escolar acolhedor e motivador, e o respeito à diversidade dos alunos, são partes integrantes da nossa proposta.
			O diferencial do Liceu é o vínculo que estabelecemos com as famílias e toda atenção individual no desenvolvimento de cada aluno.
		</p>
		<p>
			Salas climatizadas, recursos multimídia se painéis que exploram o conteúdo dos projetos trabalhados, são componentes presentes na rotina da sala de aula.
			A escola possui biblioteca, sala de informática, laboratório de ciências, pátio amplo para aulas ao ar livre, quadra de esportes, além de uma equipe de professores e funcionários preparados e dedicados para o trabalho escolar.
		</p>
		<p>Os recreios são interativos, com brincadeiras direcionadas por monitores, mesas de jogos e gibiteca.</p>
	</div>
</section>

<section class="s-slide">
	<h3>Componentes curriculares especiais</h3>
	<p>Além dos componentes curriculares que integram a base comum: Língua Portuguesa, Redação, Matemática, Geometria, Ciências, História, Geografia, Inglês e Educação Física, os alunos contam na grade curricular com aulas de:</p>
	<div
		class="s-slide__slide splide"
		role="group"
		aria-label="Propostas"
	>
		<ul class="splide__pagination"></ul>

		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
					<h4>ESTRATÉGIA / XADREZ</h4>
					<p>
						A disciplina de estratégia e xadrez traz diversos benefícios para os alunos, pois estimula o raciocínio lógico, ativa a concentração, aguça a memória e desenvolve a tomada de decisões, além de trabalhar a paciência.
					</p>
				</li>
				<li class="splide__slide">
					<h4>ESPANHOL</h4>
					<p>
						Por ser uma das línguas mais importantes da atualidade e a 2ª língua nativa mais falada no mundo, é que oferecemos o ESPANHOL aos nossos alunos com o objetivo de elevar o nível de conhecimento. ampliando as oportunidades culturais e no mercado de trabalho.
					</p>
				</li>
				<li class="splide__slide">
					<h4>MÚSICA</h4>
					<p>
						A música contribui para formação integral do indivíduo, aprimora o senso estético, desenvolve a sensibilidade, a sociabilidade e a habilidade motora entre outras Ao entrar em contato com a música, zonas importantes do corpo físico e psíquico são acionadas.
					</p>
				</li>
				<li class="splide__slide">
					<h4>TEATRO</h4>
					<p>
						Trabalhar o teatro na sala de aula traz uma série de vantagens: o aluno aprende a improvisar, desenvolve a oralidade, a impostação de voz, a expressão corporal e melhora seu entrosamento com as pessoas, além disso, trabalha seu lado emocional.
					</p>
				</li>
				<li class="splide__slide">
					<h4>ESTRATÉGIA / XADREZ</h4>
					<p>
						A disciplina de estratégia e xadrez traz diversos benefícios para os alunos, pois estimula o raciocínio lógico, ativa a concentração, aguça a memória e desenvolve a tomada de decisões, além de trabalhar a paciência.
					</p>
				</li>
				<li class="splide__slide">
					<h4>ESPANHOL</h4>
					<p>
						Por ser uma das línguas mais importantes da atualidade e a 2ª língua nativa mais falada no mundo, é que oferecemos o ESPANHOL aos nossos alunos com o objetivo de elevar o nível de conhecimento. ampliando as oportunidades culturais e no mercado de trabalho.
					</p>
				</li>
				<li class="splide__slide">
					<h4>MÚSICA</h4>
					<p>
						A música contribui para formação integral do indivíduo, aprimora o senso estético, desenvolve a sensibilidade, a sociabilidade e a habilidade motora entre outras Ao entrar em contato com a música, zonas importantes do corpo físico e psíquico são acionadas.
					</p>
				</li>
				<li class="splide__slide">
					<h4>TEATRO</h4>
					<p>
						Trabalhar o teatro na sala de aula traz uma série de vantagens: o aluno aprende a improvisar, desenvolve a oralidade, a impostação de voz, a expressão corporal e melhora seu entrosamento com as pessoas, além disso, trabalha seu lado emocional.
					</p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="c-description">
	<div class="c-description__wrapper">
		<h2>Ofertas de turmas</h2>
		<table class="c-description__table">
			<tbody>
				<tr>
					<td>1º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>2º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>3º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>4º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>5º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>6º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>7º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>8º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td>9º ano</td>
					<td>Ensino Fundamental</td>
					<td>Manhã e Tarde</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

<section class="c-description">
	<div class="c-description__wrapper">
		<h2>Horário de Funcionamento</h2>
		<table class="c-description__table">
			<tbody>
				<tr>
					<td>Períodos</td>
					<td>EFI - 7h 10 às 11h 40 | EFII - 7h às 11h 50</td>
					<td>Manhã</td>
				</tr>
				<tr>
					<td>Períodos</td>
					<td>EFI - 13h 10 às 17h 40 | EFII - 13h 10 às 18h</td>
					<td>Tarde</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

<section class="c-description">
	<div class="c-description__wrapper">
		<h2>Avaliação</h2>
		<p>
			A avaliação é um processo contínuo e dinâmico que permite verificar se os objetivos pedagógicos estão
			sendo atingidos. Fornece informações sobre como os alunos estão caminhando e do trabalho docente
			possibilitando assim, corrigir os desvios do caminho. <br />
			A nota do aluno constitui-se durante o decorrer de cada bimestre, incluindo o cotidiano escolar nas
			participações em sala de aula, trabalhos realizados e verificações orais e escritas.
			A média do colégio é 7,0. Os alunos que tiram nota inferior a 7,0 - fazem recuperação. A recuperação
			ocorre no final de cada bimestre.
		</p>
	</div>
</section>

<?php
get_footer();
