<?php

loadCSS("desafios");

$titulo_principal = get_sub_field("titulo_principal", true, true);
$titulo_pagina_esquerda = get_sub_field("titulo_pagina_esquerda", true, true);
$texto_pagina_esquerda = get_sub_field("texto_pagina_esquerda", true, true);
$botao_esquerda = get_sub_field("botao_esquerda", true, true);
$texto_pagina_direita = get_sub_field("texto_pagina_direita", true, true);
$titulo_pagina_direita = get_sub_field("titulo_pagina_direita", true, true);
$pequeno_texto_pagina_direita = get_sub_field("pequeno_texto_pagina_direita", true, true);
$botao_direita = get_sub_field("botao_direita", true, true);
?>

<section class="desafios">
	<h2><?= $titulo_principal ?></h2>
	<div class="desafios__caderno">
		<article class="desafios__pagina">
			<h3><?= $titulo_pagina_esquerda ?></h3>
			<?= $texto_pagina_esquerda ?>
			<a
				href="<?= $botao_esquerda["url"] ?>"
				target="<?= $botao_esquerda["target"] ?>"
				title="<?= $botao_esquerda["title"] ?>"
			>
				<?= $botao_esquerda["title"] ?>
			</a>
		</article>
		<article class="desafios__pagina">
			<?= $texto_pagina_direita ?>
			<div class="desafios__isolado">
				<h3><?= $titulo_pagina_direita ?></h3>
				<p><?= $pequeno_texto_pagina_direita ?></p>
				<a
					href="<?= $botao_direita["url"] ?>"
					target="<?= $botao_direita["target"] ?>"
					title="<?= $botao_direita["title"] ?>"
				>
					<?= $botao_direita["title"] ?>
				</a>
			</div>
		</article>
	</div>
</section>
