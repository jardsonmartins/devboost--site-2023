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
function remove_informacoes_extras_autor_meta_box() {
  remove_meta_box('informacoes_extras_autor', 'post', 'normal');
}
add_action('add_meta_boxes', 'remove_informacoes_extras_autor_meta_box');

function remove_informacoes_extras_autor_save_post($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
  }
  $autor_id = get_post_field('post_author', $post_id);
  foreach (['funcao', 'instagram', 'twitter', 'linkedin', 'youtube'] as $campo) {
      if (isset($_POST[$campo])) {
          update_user_meta($autor_id, $campo, sanitize_text_field($_POST[$campo]));
      }
  }
}
add_action('save_post', 'remove_informacoes_extras_autor_save_post');

function remove_exibir_campos_usuario($user) {
  echo '<h3>Informações Extras do Autor</h3><table class="form-table">';
  foreach (['funcao', 'instagram', 'twitter', 'linkedin', 'youtube'] as $campo) {
      echo "<tr><th><label for='$campo'>$campo</label></th><td><input type='text' name='$campo' id='$campo' value='" . esc_attr(get_the_author_meta($campo, $user->ID)) . "' class='regular-text'></td></tr>";
  }
  echo '</table>';
}
remove_action('show_user_profile', 'exibir_campos_usuario');
remove_action('edit_user_profile', 'exibir_campos_usuario');
remove_action('user_new_form', 'exibir_campos_usuario');
add_action('show_user_profile', 'remove_exibir_campos_usuario');
add_action('edit_user_profile', 'remove_exibir_campos_usuario');
add_action('user_new_form', 'remove_exibir_campos_usuario');

function remove_salvar_campos_usuario($user_id) {
  if (!current_user_can('edit_user', $user_id)) {
      return false;
  }
  foreach (['funcao', 'instagram', 'twitter', 'linkedin', 'youtube'] as $campo) {
      if (isset($_POST[$campo])) {
          update_user_meta($user_id, $campo, sanitize_text_field($_POST[$campo]));
      }
  }
}
remove_action('personal_options_update', 'salvar_campos_usuario');
remove_action('edit_user_profile_update', 'salvar_campos_usuario');
remove_action('user_register', 'salvar_campos_usuario');
add_action('personal_options_update', 'remove_salvar_campos_usuario');
add_action('edit_user_profile_update', 'remove_salvar_campos_usuario');
add_action('user_register', 'remove_salvar_campos_usuario');

// Campo de Fonte do Post
add_action('add_meta_boxes', function() {
  add_meta_box('fonte_post', 'Fonte do Post', function($post) {
      $nome_fonte = get_post_meta($post->ID, 'nome_fonte', true);
      $link_fonte = get_post_meta($post->ID, 'link_fonte', true);
      ?>
      <p><label for="nome_fonte">Nome da Fonte:</label><br />
      <input type="text" name="nome_fonte" id="nome_fonte" value="<?php echo esc_attr($nome_fonte); ?>" style="width: 100%;"></p>

      <p><label for="link_fonte">Link da Fonte:</label><br />
      <input type="text" name="link_fonte" id="link_fonte" value="<?php echo esc_attr($link_fonte); ?>" style="width: 100%;"></p>
      <?php
  }, 'post', 'normal', 'high');
});

add_action('save_post', function($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (isset($_POST['nome_fonte'])) {
      update_post_meta($post_id, 'nome_fonte', sanitize_text_field($_POST['nome_fonte']));
  }
  if (isset($_POST['link_fonte'])) {
      update_post_meta($post_id, 'link_fonte', sanitize_text_field($_POST['link_fonte']));
  }
});

?>