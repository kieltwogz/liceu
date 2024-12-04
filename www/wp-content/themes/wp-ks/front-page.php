<?php
	get_header();
?>

	<?php
		// Exemplo de implementação de módulo
		loadModulesCssForTemplate('news.css');
		loadLibsScriptsForTemplate('news.js');
		get_template_part('template-parts/news');
	?>

<?php
    get_footer();