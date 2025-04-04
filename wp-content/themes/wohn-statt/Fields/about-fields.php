<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', 'About')
    ->where('post_template', '=', 'about-template.php')
    ->add_tab('Hero', array(
      Field::make('text', 'about_hero_title', 'Hero Title'),
      Field::make('textarea', 'about_hero_text', 'Hero Text'),
      Field::make('text', 'about_hero_btn_text', 'Hero Button Text'),
      Field::make('text', 'about_hero_btn_link', 'Hero Button Link'),
      Field::make('image', 'about_hero_image_big', 'Hero Image Big')
        ->set_value_type('url'),
      Field::make('image', 'about_hero_image_small', 'Hero Image Small')
        ->set_value_type('url'),
      Field::make('image', 'about_hero_logo', 'Hero Logo')
      ->set_value_type('url'),
    ))
    ->add_tab('Where From', array(
      Field::make('complex', 'where_from', 'Where From')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('text', 'text__line', 'Text Line'),
          Field::make('text', 'title', 'Title'),
          Field::make('textarea', 'text', 'Text'),
          Field::make('image', 'image', 'Image')
            ->set_value_type('url'),
          Field::make('select', 'btn_type', 'Btn Type')
            ->add_options([
              'primary' => 'Primär',
              'outline' => 'Outline',
              'outline-dark' => 'Outline Dark',
              'white' => 'Weiß',
            ])
            ->set_default_value('primary'),
          Field::make('text', 'btn_text', 'Btn Text'),
          Field::make('text', 'btn_link', 'Btn Link'),
        )),
    ))
    ->add_tab('Our values', array(
      Field::make('text', 'about_values_text_line', 'Text Line'),
      Field::make('text', 'about_values_title', 'Title'),
      Field::make('complex', 'about_values_items', 'Items')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('text', 'title', 'Title'),
          Field::make('textarea', 'text', 'Text'),
        )),
    ))
    ->add_tab('Our team', array(
      Field::make('text', 'about_team_text_line', 'Text Line'),
      Field::make('text', 'about_team_title', 'Title small'),
      Field::make('text', 'about_team_title_big', 'Title big'),
      Field::make('text', 'about_team_btn_text', 'Button Text'),
      Field::make('text', 'about_team_btn_link', 'Button Link'),
      Field::make('complex', 'about_team_items', 'Items')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('image', 'image', 'Image')
            ->set_value_type('url'),
          Field::make('text', 'name', 'Name'),
          Field::make('text', 'position', 'Position'),
          Field::make('textarea', 'text', 'Text'),
          Field::make('text', 'link', 'Link'),
        )),
    ));
});