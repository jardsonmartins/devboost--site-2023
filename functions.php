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

// Função para habilitar o gerenciamento de menus
add_theme_support('menus');

function register_menu_principal() {
  register_nav_menu('header-principal',__( 'Header Principal' ));
}
add_action( 'init', 'register_menu_principal' );

// Contador de views do post
function setPotsViews($postID){
  $countKey = 'post_views_count';
  $count = get_post_meta($postID, $countKey, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $countKey);
      add_post_meta($postID, $countKey, '0');
  }else{
      $count++;
      update_post_meta($postID, $countKey, $count);
  }
}

// Limitar a quantidade de caracteres na descrição do post
function short_content($len = 80, $post_id=null){
  $content = get_the_content($post_id);
  if(strlen($content) > $len){
      $content = substr($content, 0, $len).'...';
  }
  echo $content;
}

// Inclua o arquivo de reset CSS
function wpse_enqueue_reset_css() {
  wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_reset_css' );

// Adicionar novas informações ao usuário
add_action('add_meta_boxes', function() {
  add_meta_box('informacoes_extras_autor', 'Informações Extras do Autor', function($post) {
      foreach (['funcao' => 'Função', 'instagram' => 'Instagram', 'twitter' => 'Twitter', 'linkedin' => 'LinkedIn', 'youtube' => 'YouTube'] as $campo => $label) {
          echo "<p><label for='$campo'>$label:</label><input type='text' name='$campo' id='$campo' value='" . esc_attr(get_the_author_meta($campo, $post->post_author)) . "'></p>";
      }
  }, 'post', 'normal', 'high');
});

add_action('save_post', function($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  $autor_id = get_post_field('post_author', $post_id);
  foreach (['funcao', 'instagram', 'twitter', 'linkedin', 'youtube'] as $campo) {
      if (isset($_POST[$campo])) {
          update_user_meta($autor_id, $campo, sanitize_text_field($_POST[$campo]));
      }
  }
});

add_action('show_user_profile', 'exibir_campos_usuario');
add_action('edit_user_profile', 'exibir_campos_usuario');
add_action('user_new_form', 'exibir_campos_usuario');
function exibir_campos_usuario($user) {
  echo '<h3>Informações Extras do Autor</h3><table class="form-table">';
  foreach (['funcao' => 'Função', 'instagram' => 'Instagram', 'twitter' => 'Twitter', 'linkedin' => 'LinkedIn', 'youtube' => 'YouTube'] as $campo => $label) {
      echo "<tr><th><label for='$campo'>$label</label></th><td><input type='text' name='$campo' id='$campo' value='" . esc_attr(get_the_author_meta($campo, $user->ID)) . "' class='regular-text'></td></tr>";
  }
  echo '</table>';
}

add_action('personal_options_update', 'salvar_campos_usuario');
add_action('edit_user_profile_update', 'salvar_campos_usuario');
add_action('user_register', 'salvar_campos_usuario');
function salvar_campos_usuario($user_id) {
  if (!current_user_can('edit_user', $user_id)) return false;
  foreach (['funcao', 'instagram', 'twitter', 'linkedin', 'youtube'] as $campo) {
      if (isset($_POST[$campo])) {
          update_user_meta($user_id, $campo, sanitize_text_field($_POST[$campo]));
      }
  }
}

?>