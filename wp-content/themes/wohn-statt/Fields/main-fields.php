<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', __('Main'))
    ->where('post_template', '=', 'index.php')
    ->add_tab('Hero', array(
      Field::make('text', 'hero_title', 'Heldentitel')
        ->set_default_value('DEINE TISCHLEREI IN SALZBURG'),
      Field::make('text', 'hero_text', 'Heldentext')
        ->set_default_value('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'),
      Field::make('text', 'hero_button_text', 'Helden Button Text')
        ->set_default_value('ANGEBOT ANFORDERN'),
      Field::make('text', 'hero_button_link', 'Helden Button Link')
        ->set_default_value('#'),
      Field::make('text', 'hero_button_text_outline', 'Helden Button Text')
        ->set_default_value('mehr infos'),
      Field::make('text', 'hero_button_link_outline', 'Helden Button Link')
        ->set_default_value('#'),
      Field::make('image', 'hero_image', 'Hero Image')
        ->set_value_type('url'),
      Field::make('image', 'hero_logo', 'Hero Logo')
        ->set_value_type('url'),
    ))
    ->add_tab('Numbers', array(
      Field::make('complex', 'main_numbers_loop', 'Main Numbers Loop')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('text', 'main_numbers_item_number', 'Main Numbers Item Number'),
          Field::make('text', 'main_numbers_item_text', 'Main Numbers Item Text'),
        )),
    ))
    ->add_tab('Portfolio', array(
      Field::make('checkbox', 'portfolio_is_show', 'Portfolio Show')
        ->set_default_value(true),
      Field::make('text', 'portfolio_line_text', 'Portfolio Line Text'),
      Field::make('text', 'portfolio_title', 'Portfolio Title'),
      Field::make('textarea', 'portfolio_text', 'Portfolio Text'),
      Field::make('text', 'portfolio_btn_text', 'Portfolio Button Text'),
      Field::make('text', 'portfolio_btn_link', 'Portfolio Button Link'),
      Field::make('complex', 'portfolio_items', 'Portfolio Items')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('image', 'portfolio_item_image', 'Item Image')
            ->set_value_type('url'),
          Field::make('text', 'portfolio_item_title', 'Item Title'),
          Field::make('textarea', 'portfolio_item_text', 'Item Text'),
          Field::make('text', 'portfolio_item_link', 'Item Link'),
        )),
    ))
    ->add_tab('Main Images', array(
      Field::make('text', 'main_images_line_text', 'Main Images Line Text'),
      Field::make('text', 'main_images_title', 'Main Images Title'),
      Field::make('textarea', 'main_images_text', 'Main Images Text'),
      Field::make('textarea', 'main_images_text_after', 'Main Images Text After Image'),
      Field::make('text', 'main_images_networks_text', 'Networks Text'),
      Field::make('complex', 'main_images', 'Main Images')
        ->set_layout('tabbed-horizontal')
        ->set_max(3)
        ->add_fields(array(
          Field::make('image', 'main_images_image', 'Main Images Image')
            ->set_value_type('url'),
        )),
      Field::make('complex', 'main_btns', 'Main Btns')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('select', 'type', 'Main Btns Typ')
            ->add_options([
              'primary' => 'Primär',
              'outline' => 'Outline',
              'outline-dark' => 'Outline Dark',
              'white' => 'Weiß',
            ])
            ->set_default_value('primary'),
          Field::make('text', 'main_btns_text', 'Main Btns Text'),
          Field::make('text', 'main_btns_link', 'Main Btns Link'),
        )),
        
    ))
    ->add_tab('Individual Solution', array(
      Field::make('text', 'individual_line_text', 'Individual Solution Line Text'),
      Field::make('text', 'individual_title', 'Individual Solution Title'),
      Field::make('textarea', 'individual_text', 'Individual Solution Text'),
      Field::make('text', 'individual_btn_text', 'Individual Solution Button Text'),
      Field::make('text', 'individual_btn_link', 'Individual Solution Button Link'),
    ))
    ->add_tab('Testimonials', array(
      Field::make('text', 'testimonials_line_text', 'Testimonials Line Text'),
      Field::make('text', 'testimonials_title', 'Testimonials Title'),
      Field::make('complex', 'testimonials', 'Testimonials')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('image', 'testimonials_image', 'image')
            ->set_value_type('url'),
          Field::make('text', 'testimonials_title', 'title'),
          Field::make('textarea', 'testimonials_text', 'text'),
          Field::make('text', 'testimonials_name', 'name'),
          Field::make('image', 'testimonials_person', 'person image')
            ->set_value_type('url'),
          
        )),
    ));
});