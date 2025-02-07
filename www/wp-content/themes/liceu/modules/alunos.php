<?php

loadCSS("alunos");
loadJS("animation");

$titulo = get_sub_field("titulo", true, true);
$subtitulo = get_sub_field("subtitulo", true, true);
$alunos = get_sub_field("alunos", true, true);
?>

<section class="alunos">
	<div class="alunos__wrapper wrapper">
		<header>
			<h2><?= $titulo ?></h2>
			<p><?= $subtitulo ?></p>
		</header>

		<?php
		$counter = 0;

		foreach ($alunos as $indice => $aluno) {
			if ($counter % 3 == 0) {
				if ($counter > 0) {
					echo '</div>';
				}
				echo '<div class="alunos__cards">';
			} ?>

			<article class="alunos__card animated animated--visible animated--grow">
				<header>
					<h3><?= $aluno["nome"] ?></h3>
					<p><?= $aluno["comentario"] ?></p>
				</header>
			</article>

			<?php
			$counter++;
		}

		echo '</div>';
		?>
	</div>
</section>
