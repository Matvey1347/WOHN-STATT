<?php

  function getSettingsFieldValue($field_name) {
    $settings = get_posts([
      'numberposts' => 1,
      'category_name' => 'settings',
      'post_type' => 'post',
    ]);
    
    foreach($settings as $post) {
      setup_postdata($post);
      $value = carbon_get_post_meta($post->ID, $field_name);
      wp_reset_postdata();
      return $value;
    }
  }

?>
