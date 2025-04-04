<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', 'History')
    ->where('post_template', '=', 'history-template.php')
    ->add_tab('Hero', array(
      Field::make('text', 'history_hero_title', 'Hero Title'),
      Field::make('textarea', 'history_hero_text', 'Hero Text'),
      Field::make('image', 'history_hero_image', 'Hero Image')
        ->set_value_type('url'),
    ))
    ->add_tab('Text', array(
      Field::make('rich_text', 'history_text', 'Text'),
    ))
    ->add_tab('Items', array(
      Field::make('complex', 'history_items', 'Items')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('text', 'title', 'Title'),
          Field::make('textarea', 'text', 'Text'),
          Field::make('text', 'year', 'Year'),
          Field::make('image', 'image', 'Image')
            ->set_value_type('url'),
        )),
    ))
    ->add_tab('Text With Button', array(
      Field::make('text', 'history_text_btn_text', 'Text Button Text'),
      Field::make('text', 'history_text_btn_link', 'Text Button Link'),
      Field::make('rich_text', 'history_text_with_btn', 'Text'),
    ));
    
});