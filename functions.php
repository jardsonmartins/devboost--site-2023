<?php 

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilita a funcionalidade de imagens destacadas
add_theme_support('post-thumbnails');


// Inclua o arquivo de reset CSS
function wpse_enqueue_reset_css() {
  wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_reset_css' );

// Função para habilitar o gerenciamento de menus
add_theme_support('menus');

function register_menu_principal() {
  register_nav_menu('header-principal',__( 'Header Principal' ));
}
add_action( 'init', 'register_menu_principal' );

?>


