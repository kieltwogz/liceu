<?php
    /**
     * Template Name: Ensino Médio
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
		src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/medio.png"
		width="1380"
		height="604"
		alt="Ensino Médio"
	/>
	<h2>Ensino Médio</h2>
</section>

<section class="s-star">
	<h2>
		Preparando Líderes para o Amanhã
	</h2>
	<p class="s-star__full">
		Proporcionamos ao aluno uma base sólida para a compreensão dos fundamentos científicos-tecnológicos, que lhe permita o prosseguimento de seus estudos acadêmicos e o acesso à vida produtiva, garantindo uma boa formação humana e intelectual.
		O jovem é bem preparado para obter sucesso não só no vestibular, mas também na profissão, na convivência social e no âmbito pessoal. A proposta pedagógica tem por finalidade o aprimoramento dos seguintes critérios:
		<br />
		<br />
		* Participação efetiva do aluno na construção do conhecimento: atividades em sala, tarefas de casa, elaboração e apresentação de trabalhos em grupo e horário de estudo diário.
		<br />
		<br />
		* Desenvolvimento pessoal: responsabilidade, respeito, comprometimento, organização, autonomia, capacidade de superação e persistência.
		<br />
		<br />
		* Formação social: cidadão consciente, crítico e ético, relações inter e intrapessoais, atitudes de colaboração, resolução de situações adversas com respeito, civilidade e solidariedade.
	</p>
	<div class="s-star__star s-star__star--small"></div>
</section>

<section class="c-description c-description--purple">
	<div class="c-description__wrapper">
		<h2>Disciplinas</h2>
		<div class="c-description__text c-description__text--center">
			<ul>
				<li>Arte</li>
				<li>Biologia</li>
				<li>Filosofia/Sociologia</li>
				<li>Física</li>
				<li>Geografia</li>
				<li>Gramática</li>
				<li>História</li>
			</ul>
			<ul>
				<li>Educação Física</li>
				<li>Espanhol</li>
				<li>Inglês</li>
				<li>Literatura</li>
				<li>Matemática</li>
				<li>Produção de texto</li>
				<li>Química</li>
			</ul>
		</div>
	</div>
</section>

<section class="c-simple">
	<picture class="c-simple__left">
		<img
			src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/didatico.png"
			width="375"
			height="301"
			alt="Didático"
		/>
	</picture>
	<div class="c-simple__left">
		<h3>Material didático</h3>
		<p>
			O material didático apostilado para o ensino médio permite que os assuntos sejam tratados de forma crítica e interdisciplinar, trazendo situações atuais e do cotidiano do aluno. A teoria e a prática apresentadas por múltiplas linguagens e a resolução de situações-problema são estímulos para o aprendizado. São apresentados textos complementares que permitem o desenvolvimento de temas transversais, abordagens interdisciplinares e a associação entre o saber científico, a tecnologia e o mundo da produção e do trabalho, complementando os conteúdos desenvolvidos pelas diferentes disciplinas. Produção de texto, Espanhol, Filosofia e Sociologia recebem cadernos específicos a parte.
		</p>
	</div>
</section>

<section class="c-simple">
	<div class="c-simple__left">
		<h3>Plantões e dúvidas</h3>
		<p>
			Os professores de Física, Química e Matemática trabalham no período vespertino com número reduzido de alunos para responder dúvidas, desenvolver técnicas de estudo e de resolução de situações-problemas, acompanhar o desenvolvimento dos alunos com dificuldades de aprendizagens e minimizar as possíveis defasagens.
		</p>
	</div>
	<picture class="c-simple__right">
		<img
			src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/plantoes.png"
			width="375"
			height="301"
			alt="Plantões"
		/>
	</picture>
</section>

<section class="c-simple">
	<div class="c-simple__left">
		<h3>Atualidades</h3>
		<p>
			O Projeto Atualidades pretende vincular a escola à realidade atual, levando os alunos a relacionarem o que aprendem em sala de aula aos acontecimentos do mundo. Esse projeto é realizado com os alunos do Ensino Médio. Os estudantes são divididos em grupos de debates, que são supervisionados. Os assuntos são desenvolvidos sobre temas de variadas áreas, como Política, Economia, Comunidade, Cidades, Cultura, Saúde, Qualidade de Vida, Meio Ambiente, Educação, Ciências, Profissões, entre outros. Despertando a vontade dos alunos para acompanhar os fatos do Brasil e do mundo, o projeto tem por objetivo a mudança de postura do estudante em sala de aula, levando-o ao interesse e à discussão das notícias. Informação a todo instante através dos vários meios de comunicação, esse é dia a dia que vivemos.
		</p>
	</div>
</section>

<section class="c-simple">
	<div class="c-simple__left">
		<h3>Oficina de Redação</h3>
		<p>
			O principal objetivo deste projeto consiste em desenvolver no aluno habilidades que o permitam ler e interpretar textos e informações do cotidiano; reconhecer forma e estruturas textuais variadas, tal como o modo como são construídas; organizar raciocínios e pensamentos dentro de um parágrafo; relacionar temas variados, para debates e argumentações e posicionar-se quanto a determinado tema.
		</p>
		<p>
			A oficina de redação pressupõe uma atualização semanal quanto aos debates e temas mais envolvidos com a realidade e com as provas de vestibulares. O aluno vai, ao longo do curso, ter contato com diversos tipos de textos que podem ser cobrados no momento dos exames, mas, principalmente, com o gênero dissertativo, por conta da mais recorrência desse tipo textual nas provas e vestibulares.
		</p>
	</div>
</section>

<section class="c-simple">
	<picture class="c-simple__left">
		<img
			src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/enem.png"
			width="375"
			height="301"
			alt="Enem"
		/>
	</picture>
	<div class="c-simple__left">
		<h3>Projeto Enem</h3>
		<p>
			O Exame Nacional do Ensino Médio (ENEM) ganhou destaque no cenário nacional por ser um processo unificado de seleção para alunos que pretender ingressar nas Universidades Federais e por isso precisa ser compreendido pelos alunos, diante de suas características particulares e de seus critérios diferenciados de avaliação. Por isso, este pretende esclarecer aos alunos os tipos de questão abordadas no Exame e suas características principais; discutir o processo de seleção e apresentar as faculdades envolvidas, bem os cursos oferecidos e as cidades; apresentar os critérios empregados na avaliação; debater a importância do Exame no cenário nacional e promover a auto-avaliação dos alunos frente à aplicação de simulados.
		</p>
	</div>
</section>

<section class="c-simple">
	<div class="c-simple__left">
		<h3>Feira de profissões</h3>
		<p>
			A escola pretende aproximar e facilitar o acesso dos alunos do ensino médio às instituições de ensino superior para informá-los e esclarecer dúvidas sobre carreiras e cursos, pois muitos deles desconhecem inclusive as formas de ingresso e os diferentes tipos de seleção.
			<br />
			O projeto promove a vinda de profissionais de diversas áreas e universidades que são convidados para divulgação de informações profissionais, além disso, acontecem visitadas monitoradas às Universidades para aproximar os alunos de Ensino Médio das Instituições de Ensino Superior Públicas e Particulares.
		</p>
	</div>
	<picture class="c-simple__right">
		<img
			src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/profissoes.png"
			width="375"
			height="301"
			alt="Profissões"
		/>
	</picture>
</section>

<section class="c-simple">
	<div class="c-simple__left">
		<h3>Olimpíadas</h3>
		<p>
			A participação nas Olimpíadas de Física, Química e Matemática, estimulam o raciocínio lógico, possibilitando assim uma melhor aprendizagem não só na área das exatas, mas também em outras disciplinas; contribuem para a formação do aluno em diversos aspectos, principalmente nos que dizem respeito à sociabilidade do mesmo, considerando valores como cooperação, trabalho em equipe, companheirismo; movimenta os alunos da escola em torno de um conjunto de problemas que se tornam objeto de discussão tanto na sala de aula como em outros espaços; possibilitam ao aluno experiências diferentes de avaliação e instigar o espírito desafiador do participante. Logo, pretende-se que o aluno consiga identificar suas defasagens conceituais a fim de saná-las em avaliações futuras (vestibulares, olimpíadas, concursos…).
		</p>
	</div>
</section>

<section class="c-simple">
	<div class="c-simple__left">
		<h3>Mostra de Talentos</h3>
		<p>
			Considerando-se as múltiplas inteligências e habilidades que os alunos desenvolvem, a escola abre seu espaço para que os alunos deem vazão aos seus talentos e possa compartilhá-los com sua comunidade escolar. Os talentos são pouco explorados no processo cotidiano de ensino-aprendizagem no período regular devido às inúmeras atividades voltadas ao desenvolvimento cognitivo desses estudantes.
		</p>
	</div>
</section>

<section class="c-simple">
	<div class="c-simple__left">
		<h3>Estágio em setor público</h3>
		<p>
		O Liceu contemporâneo em parceria com a Fundap (Fundação do Desenvolvimento Administrativo) oferece aos alunos estágio remunerado em órgãos da Administração Pública. Considerando a abrangência de suas atividades, o setor público é um importante campo de formação profissional. No cumprimento de suas funções, desenvolve ações e programas destinados ao atendimento das demandas sociais, em educação, saúde, segurança, profissionalização, cultura entre outras. Basicamente, as atividades realizadas pela administração pública compreendem serviços prestados à população, direta ou indiretamente, que demandam atividades de pesquisa e estudos, formação de recursos humanos e desenvolvimento de tecnologias, fiscalização e controle dos interesses públicos, etc. Dessa forma, os órgãos públicos estão em condições de oferecer estágio em diferentes áreas, seja pela atividade fim, seja pela característica do órgão.
		</p>
	</div>
	<picture class="c-simple__right">
		<img
			src="<?= get_stylesheet_directory_uri(); ?>/assets/img/placeholder/estagio.png"
			width="375"
			height="379"
			alt="Estágio"
		/>
	</picture>
</section>

<?php
get_footer();
