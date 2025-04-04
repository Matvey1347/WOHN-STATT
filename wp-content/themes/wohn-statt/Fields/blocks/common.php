<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', __('Common'))
    ->where('post_template', '=', 'index.php')
    ->or_where('post_template', '=', 'about-template.php')
    ->or_where('post_template', '=', 'contact-template.php')
    ->add_fields([
      Field::make('complex', 'common_loop', __('Common Loop'))
        ->set_layout('tabbed-horizontal')
        ->add_fields([
          Field::make('image', 'common_img', __('Bild'))
            ->set_value_type('url'),
          Field::make('text', 'common_line_text', __('Linientext')),
          Field::make('text', 'common_title', __('Titel')),
          Field::make('textarea', 'common_text', __('Text')),

          // Content After text
          Field::make('complex', 'common_content_loop')
            ->set_layout('tabbed-horizontal')
            ->add_fields('buttons', array(
              Field::make('complex', 'btns__loop', __('Buttons Loop'))
                ->set_layout('tabbed-horizontal')
                ->add_fields('btn', array(
                  Field::make('select', 'type', __('Typ'))
                    ->add_options([
                      'primary' => 'Primär',
                      'outline' => 'Outline',
                      'outline-dark' => 'Outline Dark',
                      'white' => 'Weiß',
                    ])
                    ->set_default_value('primary')
                    ->set_width(100),
                  Field::make('text', 'text', __('Text'))
                    ->set_width(50),
                  Field::make('text', 'link', __('Link'))
                    ->set_width(50),
                ))
              ))
            ->add_fields('more_info', array(
              Field::make('complex', 'more_info__loop', __('Mehr Informationen Loop'))
                ->set_layout('tabbed-horizontal')
                ->add_fields('item', array(
                  Field::make('text', 'title', __('Titel')),
                  Field::make('text', 'text_one', __('Text Eins')),
                  Field::make('text', 'text_two', __('Text Zwei')),
                ))
            ))
          ]),
    ]);
});