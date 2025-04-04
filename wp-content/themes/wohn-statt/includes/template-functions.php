<?php
  // Constants
  define('IMAGE_URI', get_template_directory_uri() . '/verstka/image');
  define('ICONS_URI', get_template_directory_uri() . '/verstka/image/icons');
  define('THEME_URI', get_template_directory_uri());

  // Helpers
  require_once __DIR__ . '/helpers/enable-svg.php';
  require_once __DIR__ . '/helpers/menu-functions.php';
  require_once __DIR__ . '/helpers/get-settings-field-value.php';
  require_once __DIR__ . '/func/show-global-networks.php';
  // Carbon Fields
  foreach (glob(__DIR__ . '/../Fields/*.php') as $filename) {
    require_once $filename;
  }

  foreach (glob(__DIR__ . '/../Fields/blocks/*.php') as $filename) {
    require_once $filename;
  }

  // // Подключаем обработчик AJAX-запроса
  // add_action('wp_ajax_send_form', 'send_form_callback');
  // add_action('wp_ajax_nopriv_send_form', 'send_form_callback');

  // function send_form_callback() {
  //   require_once get_template_directory() . '/includes/form-ajax.php';
  //   wp_die();
  // }


  

  

  
  
  # Custom post type
  // function custom_post_type() {
  //   $labels_comments = array(
  //     'name'               => 'Коментарии new',
  //     'singular_name'      => 'Коментарий',
  //     'add_new'            => 'Добавить коментарий',
  //     'add_new_item'       => 'Добавить новый',
  //     'edit_item'          => 'Редактировать',
  //     'new_item'           => 'Новый коментарий',
  //     'all_items'          => 'Все коментарии',
  //     'view_item'          => 'Посмотреть коментарий',
  //     'search_items'       => 'Найти коментарий',
  //     'not_found'          => 'коментариев не найдено',
  //     'not_found_in_trash' => 'В корзине не найдено коментариев',
  //     'parent_item_colon'  => '',
  //     'menu_name'          => 'Коментарии new',
  //   );

  //   $args_comments = array(
  //     'labels'             => $labels_comments,
  //     'public'             => true,
  //     'publicly_queryable' => true,
  //     'show_ui'            => true,
  //     'show_in_menu'       => true,
  //     'query_var'          => true,
  //     'rewrite'            => array( 'slug' => 'custom_comments' ),
  //     'capability_type'    => 'post',
  //     'has_archive'        => true,
  //     'hierarchical'       => false, 
  //     'menu_position'      => 6,
  //     'supports' => array( 'title', 'editor', 'thumbnail' ),
  //     'taxonomies'         => array( 'custom_comments' ),
  //     'menu_icon'          => 'dashicons-admin-comments',
  //   );

  //   register_post_type( 'custom_comments', $args_comments );
  // }

  // add_action( 'init', 'custom_post_type' );
?>