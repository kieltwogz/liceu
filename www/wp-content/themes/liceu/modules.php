<?php
    /**
     * Template Name: Página Modular
     * Template Post Type: page
     */
get_header();


if (!is_front_page()) {
	loadCSS("i-banner");
?>
	<section class="i-banner">
		<img
			src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
			width="1380"
			height="604"
			alt="<?= get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true) ?>"
		/>
		<div class="i-banner__section">
			<h2><?= the_title(); ?></h2>
		</div>
	</section>
<?php }

if (have_rows('modulos')) {
    while (have_rows('modulos')) { the_row();

        $layout = get_row_layout();
        $template_path = get_template_directory() . "/modules/{$layout}.php";

        if (file_exists($template_path)) {
            include $template_path;
        } else {
			trigger_error("Módulo '{$layout}.php' não encontrado em themes/liceu/modules/", E_USER_WARNING);
        }
	}
}

get_footer();
