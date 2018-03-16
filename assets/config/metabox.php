<?php
/* Define a meta box */

add_action( 'add_meta_boxes', 'nik_add_custom_box' );

// Compatibilidade para  WP < 3.0
// add_action( 'admin_init', 'nik_add_custom_box', 1 );

/* Faça algo com os dados inseridos */
add_action( 'save_post', 'nik_save_postdata' );




/* Adiciona uma meta box na coluna principal das telas de edição de Post e Página */
function nik_add_custom_box() {
    $screens = array( 'post', 'page' );
    foreach ($screens as $screen) {
        add_meta_box(
            'myplugin_sectionid',
            __( 'Comentário do Autor', 'myplugin_textdomain' ),
            'nik_print_content_meta_box',
            $screen
        );
    }
}





/* Imprime o conteúdo da meta box */
function nik_print_content_meta_box( $post ) {

  // Faz a verificação através do nonce
  wp_nonce_field( plugin_basename( __FILE__ ), 'nonce_content' );

  // Os campos para inserção dos dados
  // Use get_post_meta para para recuperar um valor existente no banco de dados e usá-lo dentro do atributo HTML 'value' 
  $value = get_post_meta( $post->ID, '_author_comment', true );
  echo '<label for="author_comment_text">';
       _e("", 'myplugin_textdomain' );
  echo '</label> ';
  echo '<input type="text" id="author_comment_text" name="author_comment_text" value="'.esc_attr($value).'" size="50" />';
}





/* Quando o post for salvo, salvamos também nossos dados personalizados */
function nik_save_postdata( $post_id ) {

  // É necessário verificar se o usuário está autorizado a fazer isso
  if ( 'page' == $_POST['post_type'] ) {
    if ( ! current_user_can( 'edit_page', $post_id ) )
        return;
  } else {
    if ( ! current_user_can( 'edit_post', $post_id ) )
        return;
  }

  // Agora, precisamos verificar se o usuário realmente quer trocar esse valor
  if ( ! isset( $_POST['nonce_content'] ) || ! wp_verify_nonce( $_POST['nonce_content'], plugin_basename( __FILE__ ) ) )
      return;

  // Por fim, salvamos o valor no banco

  // Recebe o ID do post
  $post_ID = $_POST['post_ID'];

  // Remove caracteres indesejados
  $mydata = sanitize_text_field( $_POST['author_comment_text'] );

  // Adicionamos ou atualizados o $mydata 
    update_post_meta($post_ID, '_author_comment', $mydata);
}
?>