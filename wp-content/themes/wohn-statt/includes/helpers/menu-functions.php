<?php
  function register_menu() {
    register_nav_menus(array(
      'main-menu' => __('Main Menu'),
      'footer-menu' => __('Footer Menu'),
    ));
  }
  
  add_action('after_setup_theme', 'register_menu');
  
  function get_full_current_url() {
    $url  = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
    $url .= $_SERVER['HTTP_HOST'];
    $url .= $_SERVER['REQUEST_URI'];
    return trailingslashit($url);
  }

  function getCustomMenuItemsArr($menuName) {
    $menu_items = wp_get_nav_menu_items($menuName);
    $items_by_parent = array();
    $current_url = get_full_current_url();
    $result = [];

    foreach ($menu_items as $item) {
      $items_by_parent[$item->menu_item_parent][] = $item;
    }

    foreach ($items_by_parent[0] as $item) {
      $menu_item = [
        'name' => $item->title,
        'link' => $item->url,
        'isActive' => trailingslashit($item->url) == $current_url
      ];

      if (isset($items_by_parent[$item->ID])) {
        $menu_item['subItems'] = [];
        foreach ($items_by_parent[$item->ID] as $sub_item) {
          $menu_item['subItems'][] = [
            'name' => $sub_item->title,
            'link' => $sub_item->url,
            'isActive' => trailingslashit($sub_item->url) == $current_url
          ];
        }
      }

      $result[] = $menu_item;
    }

    return $result;
  } 
?>