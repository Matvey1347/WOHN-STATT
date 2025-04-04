<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', __('Settings'))
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
    ->add_fields(array(
      // Header
      Field::make('image', 'header_logo', 'Header Logo')
        ->set_value_type('url'),
      Field::make('text', 'header_contact_text', 'Header Kontakt Text')
        ->set_default_value('Kontaktieren'),
      Field::make('text', 'header_contact_link', 'Header Kontakt Link')
        ->set_default_value('#'),

      // Footer
      Field::make('image', 'footer_logo', 'Footer Logo')
        ->set_value_type('url'),

      Field::make('text', 'email_text', 'Email Text')
        ->set_default_value('Schreib uns ein mail'),
      Field::make('text', 'email_value', 'Email Wert')
        ->set_default_value('office@wohnwerkstatt.at'),
      Field::make('text', 'phone_text', 'Telefon Text')
        ->set_default_value('Ruf uns an'),
      Field::make('text', 'phone_value', 'Telefon Wert')
        ->set_default_value('(414) 047 - 9621'),

      // Footer bottom
      Field::make('text', 'link_text_before_arrow', 'Link Text Vor Pfeil')
        ->set_default_value('Stattwohnfrust'),
      Field::make('text', 'link_url_before_arrow', 'Link URL Vor Pfeil')
        ->set_default_value('#'),
      Field::make('text', 'link_text_after_arrow', 'Link Text Nach Pfeil')
        ->set_default_value('Wohnwerkstatt'),
      Field::make('text', 'link_url_after_arrow', 'Link URL Nach Pfeil')
        ->set_default_value('#'),
    ));
});