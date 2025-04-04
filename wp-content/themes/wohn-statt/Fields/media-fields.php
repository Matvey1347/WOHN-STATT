<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', 'Media')
    ->where('post_template', '=', 'media-template.php')
    ->add_tab('Hero', array(
      Field::make('text', 'media_hero_title', 'Hero Title'),
    ))
    ->add_tab('Videothek', array(
      Field::make('text', 'media_videothek_title', 'Title'),
      Field::make('complex', 'media_videothek_items', 'Items')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('text', 'link', 'Link to Youtube'),
          Field::make('image', 'image', 'Image')
            ->set_value_type('url'),
        )),
    ))
    ->add_tab('Fotogalerie', array(
      Field::make('text', 'media_images_title', 'Title'),
      Field::make('complex', 'media_images_items', 'Items')
        ->set_layout('tabbed-horizontal')
        ->set_max(3)
        ->add_fields(array(
          Field::make('media_gallery', 'images', 'Images')
            ->set_type( array( 'image' ) ),
        )),
    ));
});