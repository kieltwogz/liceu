<?php

loadCSS("s-timeline");

$titulo = get_sub_field("titulo", true, true);
$descricao = get_sub_field("descricao", true, true);
$linha_do_tempo = get_sub_field("linha_do_tempo", true, true);

?>

<section class="s-timeline">
	<div class="s-timeline__left">
		<h2><?= $titulo ?></h2>
		<p><?= $descricao ?></p>
	</div>
	<div class="s-timeline__right">
		<?php foreach ($linha_do_tempo as $ano) { ?>
			<div class="s-timeline__block">
				<h3><?= $ano["ano"] ?></h3>
				<p><?= $ano["texto"] ?></p>
			</div>
		<?php } ?>
	</div>
</section>
