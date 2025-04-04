<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', __('Sotial Media'))
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
    ->or_where('post_template', '=', 'team-member-template.php')
    ->add_fields([
      Field::make('complex', 'social_media_loop', __('Soziale Medien Loop'))
        ->set_layout('tabbed-horizontal')
        ->add_fields([
          Field::make('text', 'social_media_url', __('Soziale Medien URL')),
          Field::make('select', 'social_media_type', __('Soziale Medien Typ'))
            ->add_options([
              'facebook' => 'Facebook',
              'instagram' => 'Instagram',
              'x' => 'Twitter',
              'pinterest' => 'Pinterest',
            ]),
        ]),
    ]);
});