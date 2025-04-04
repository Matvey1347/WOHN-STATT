<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', 'Single Post')
    ->where('post_template', '=', 'single-post.php')
    ->add_tab('Hero', array(
      Field::make('text', 'post_hero_title', 'Hero Title'),
      Field::make('textarea', 'post_hero_text', 'Hero Text'),
      Field::make('image', 'post_hero_image', 'Hero Image')
        ->set_value_type('url'),
    ))
    ->add_tab('Info Loop', array(
      Field::make('complex', 'info_loop')
        ->set_layout('tabbed-horizontal')
        ->add_fields('text_block', array(
          Field::make('text', 'title'),
          Field::make('rich_text', 'text'),
        ))
        ->add_fields('image_block', array(
          Field::make('checkbox', 'is_right'),
          Field::make('image', 'image')
            ->set_value_type('url'),
          Field::make('text', 'text__line'),
          Field::make('text', 'title'),
          Field::make('rich_text', 'text'),
        )),
    ))
    ->add_tab('Mobilität', array(
      Field::make('text', 'mobility_title', 'Title'),
      Field::make('text', 'mobility_btn_text', 'Button Text'),
      Field::make('text', 'mobility_btn_link', 'Button Link'),
      Field::make('complex', 'mobility_images', 'Images')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('image', 'image')
            ->set_value_type('url'),
        )),
      Field::make('rich_text', 'mobility_text', 'Text'),
      Field::make('complex', 'mobility_info_loop')
        ->set_layout('tabbed-horizontal')
        ->add_fields('text_block', array(
          Field::make('text', 'title'),
          Field::make('rich_text', 'text'),
        ))
        ->add_fields('image_block', array(
          Field::make('checkbox', 'is_right'),
          Field::make('image', 'image')
            ->set_value_type('url'),
          Field::make('text', 'text__line'),
          Field::make('text', 'title'),
          Field::make('rich_text', 'text'),
        )),
    ));
});