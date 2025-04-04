<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', 'Contact')
    ->where('post_template', '=', 'contact-template.php')
    ->add_tab('Hero', array(
      Field::make('text', 'contact_hero_title', 'Hero Title'),
      Field::make('textarea', 'contact_hero_text', 'Hero Text Near Network'),
      Field::make('image', 'contact_hero_image', 'Hero Image')
        ->set_value_type('url'),
      Field::make('text', 'contact_hero_form_title', 'Hero Form Title'),
    ))
    ->add_tab('FAQ', array(
      Field::make('text', 'faq_text_line', 'Text Line'),
      Field::make('text', 'faq_title', 'Title'),
      Field::make('textarea', 'faq_text', 'Text'),
      Field::make('complex', 'faq_items', 'FAQ Items')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('text', 'title', 'Question'),
          Field::make('textarea', 'text', 'Answer'),
        )),
      ))
    ->add_tab('Follow Us', array(
      Field::make('text', 'follow_us_text_line', 'Text Line'),
      Field::make('text', 'follow_us_title', 'Title'),
      Field::make('textarea', 'follow_us_text', 'Text'),
      Field::make('image', 'follow_us_image', 'Follow Us Big Image')
        ->set_value_type('url'),
      Field::make('complex', 'follow_us_images', 'Images')
        ->set_layout('tabbed-horizontal')
        ->set_max(4)
        ->add_fields(array(
          Field::make('image', 'image', 'Image')
            ->set_value_type('url'),
        )),
      Field::make('text', 'follow_us_button_text', 'Button Text'),
      Field::make('text', 'follow_us_button_link', 'Button Link')
    ));
});