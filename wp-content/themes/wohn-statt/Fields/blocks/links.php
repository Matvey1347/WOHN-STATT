<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', __('Links'))
    ->where( 'post_id', 'IN', function() {
      $settings_category = get_term_by('slug', 'settings', 'category');
      if ($settings_category) {
        return get_posts(array(
          'category' => $settings_category->term_id,
          'fields' => 'ids'
        ));
      }
      return [];
    })
    ->or_where('post_template', '=', 'history-template.php')
    ->add_fields([
      Field::make('complex', 'link_loop', __('Link Loop'))
        ->set_layout('tabbed-horizontal')
        ->add_fields([
          Field::make('text', 'link_text', __('Link Text')),
          Field::make('text', 'link_url', __('Link URL')),
        ]),
    ]);
});