<?php
add_action( 'init', 'post_type_institucional' );
function post_type_institucional() {

  $labels = array(
      'name' => _x('Institucional'),
      'singular_name' => _x('Institucional'),
      'add_new' => _x('Adicionar página', 'institucional'),
      'add_new_item' => __('Adicionar item'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo item'),
      'all_items' => __('Informações'),
      'view_item' => __('Ver item'),
      'search_items' => __('Buscar item'),
      'not_found' =>  __('Nenhum item encontrado'),
      'not_found_in_trash' => __('Nenhum item encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Institucional'
  );
  
  register_post_type( 'institucional', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-admin-home',
      'rewrite' => array(
       'slug' => 'institucional',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => 5,
      'register_meta_box_cb' => 'institucional_meta_box',  
      'supports' => array('title', 'editor')
      )
  );
}

?>