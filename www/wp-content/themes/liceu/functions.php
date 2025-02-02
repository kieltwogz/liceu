<?php
define('ASSETS_VERSION','1');

/**
 * Remove a barra de administração no front-end
 */
add_filter("show_admin_bar", "__return_false");

/**
 * Desativa o editor de blocos "Gutenberg"
 */
function remove_gutenberg() {
    add_filter('use_block_editor_for_post', '__return_false', 10);
    add_filter('use_block_editor_for_post_type', '__return_false', 10);
}
add_action('init', 'remove_gutenberg');

/**
 * Adiciona suporte para imagens destacadas
 */
add_theme_support("post-thumbnails");

function remove_unwanted_meta_boxes() {
    // Campos personalizados
    remove_meta_box('postcustom', ['post', 'page'], 'normal');
    // Slug
    remove_meta_box('slugdiv', ['post', 'page'], 'normal');
    // Discussão
    remove_meta_box('commentstatusdiv', ['post', 'page'], 'normal');
    // Comentários
    remove_meta_box('commentsdiv', ['post', 'page'], 'normal');
    // Autor
    remove_meta_box('authordiv', ['post', 'page'], 'normal');
	// Trackbacks
    remove_meta_box('trackbacksdiv', ['post', 'page'], 'normal');
}
add_action('admin_menu', 'remove_unwanted_meta_boxes');

function remove_comments_menu() {
    remove_menu_page('edit-comments.php'); // Remove o menu de Comentários
}
add_action('admin_menu', 'remove_comments_menu');

function define_excerpt_length() {
	return 25;
}
add_filter( 'excerpt_length', 'define_excerpt_length' );

function accepted_text_formats($settings) {
    $settings['block_formats'] = 'Parágrafo=p; Título 1=h2; Título 2=h3; Título 3=h4';
    return $settings;
}
add_filter('tiny_mce_before_init', 'accepted_text_formats');

function remove_editor_buttons($buttons) {
    $remove = array('blockquote', 'wp_more');
    return array_diff($buttons, $remove);
}
add_filter('mce_buttons', 'remove_editor_buttons');

function remove_edition_sections($wp_customize) {
    // Remove a seção de CSS adicional
    $wp_customize->remove_section('custom_css');
	// Remove a seção de configurações da página inicial
    $wp_customize->remove_section('static_front_page');
}
add_action('customize_register', 'remove_edition_sections', 15);

function remove_patterns() {
	// Remove o botão "Padrões" da lista de temas
    remove_submenu_page('themes.php', 'site-editor.php?path=/patterns');
}
add_action('admin_menu', 'remove_patterns');

function remove_tags() {
    // Remove a taxonomia "post_tag" (tags)
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'remove_tags');

function remove_jquery() {
    // Desregistra o jQuery do WordPress
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'remove_jquery');

function loadCSS(string $file) {
    wp_register_style($file, get_stylesheet_directory_uri() . "/assets/css/page-modules/" . $file . ".css", array(), ASSETS_VERSION, "screen");
    wp_enqueue_style($file);
}

function loadJS(string $file) {
    wp_register_script($file, get_stylesheet_directory_uri() . "/assets/js/page-modules/" . $file . ".js", array(), ASSETS_VERSION, true);
    wp_enqueue_script($file);
}

function useSplide() {
	wp_register_style("splide", get_stylesheet_directory_uri() . "/assets/js/splide.min.css", array(), ASSETS_VERSION, "screen");
    wp_enqueue_style("splide");
	wp_register_script("splide", get_stylesheet_directory_uri() . "/assets/js/splide.min.js", array(), ASSETS_VERSION, true);
    wp_enqueue_script("splide");
}

function get_recent_posts(int $posts_per_page = 3) {
    $recent_posts = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => $posts_per_page,
        'orderby'        => 'date',
        'order'          => 'DESC'
	));

    $posts_data = array();

    if ($recent_posts->have_posts()) {
        while ($recent_posts->have_posts()) { $recent_posts->the_post();
            $post_data = array(
                'title'    => get_the_title(),
                'excerpt'  => get_the_excerpt(),
                'img'      => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'date'     => get_the_date('j \d\e F \d\e Y'),
                'url'      => get_permalink(),
				'alt'	   => get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true),
				'category' => get_the_category()[0]->name
            );

            array_push($posts_data, $post_data);
        }

        wp_reset_postdata();
	}

    return $posts_data;
}
?>
