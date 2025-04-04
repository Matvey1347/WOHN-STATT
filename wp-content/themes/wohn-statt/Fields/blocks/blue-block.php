<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', 'Blue Block')
    ->where('post_template', '=', 'index.php')
    ->or_where('post_template', '=', 'about-template.php')
    ->or_where('post_template', '=', 'contact-template.php')
    ->or_where('post_template', '=', 'team-member-template.php')
    ->or_where('post_template', '=', 'single-product-template.php')
    ->or_where('post_template', '=', 'single-post.php')
    ->or_where('post_template', '=', 'history-template.php')
    ->add_fields([
      Field::make('checkbox', 'is_silver', 'Is Silver Background'),
      Field::make('text', 'blue_block_line_text', 'Line Text'),
      Field::make('text', 'blue_block_title', 'Title'),
      Field::make('text', 'blue_block_btn_text', 'Button Text'),
      Field::make('text', 'blue_block_btn_link', 'Button Link'),
    ]);
});