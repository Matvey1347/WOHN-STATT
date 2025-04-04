<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', 'Single Product')
    ->where('post_template', '=', 'single-product-template.php')
    ->add_tab('Hero', array(
      Field::make('text', 'product_hero_title', 'Hero Title'),
      Field::make('textarea', 'product_hero_text', 'Hero Text'),
      Field::make('text', 'product_hero_btn_text', 'Hero Button Text'),
      Field::make('text', 'product_hero_btn_link', 'Hero Button Link'),
      Field::make('image', 'product_hero_image', 'Hero Image')
        ->set_value_type('url'),
      Field::make('image', 'product_hero_logo', 'Hero Logo')
        ->set_value_type('url'),
    ))
    ->add_tab('Product Info', array(
      Field::make('text', 'product_info_title', 'Title'),
      Field::make('rich_text', 'product_info_text', 'Text'),
      Field::make('image', 'product_info_image', 'Image')
        ->set_value_type('url'),
      Field::make('text', 'product_info_form_title', 'Form Title'),
      Field::make('rich_text', 'product_info_form_text', 'Form Text'),
    ))
    ->add_tab('Other Products', array(
      Field::make('text', 'other_products_title', 'Title'),
      Field::make('text', 'other_products_btn_text', 'Button Text'),
      Field::make('text', 'other_products_btn_link', 'Button Link'),
      Field::make('complex', 'other_products', 'Other Products')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('image', 'other_products_image', 'Image')
            ->set_value_type('url'),
          Field::make('text', 'other_products_title', 'Title'),
          Field::make('textarea', 'other_products_text', 'Text'),
          Field::make('text', 'other_products_link', 'Link'),
        ))
    ));
});