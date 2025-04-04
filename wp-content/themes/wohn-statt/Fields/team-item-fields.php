<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
  Container::make('post_meta', 'Team member')
    ->where('post_template', '=', 'team-member-template.php')
    ->add_tab('Hero', array(
      Field::make('text', 'team_member_hero_title', 'Hero Title'),
      Field::make('textarea', 'team_member_hero_text', 'Hero Text'),
      Field::make('image', 'team_member_hero_image', 'Hero Image')
        ->set_value_type('url'),
      Field::make('text', 'team_member_email_text', 'Email Text'),
      Field::make('text', 'team_member_email', 'Email'),
    ))
    ->add_tab('Text Section', array(
      Field::make('complex', 'text_section', 'Text Block')
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
          Field::make('text', 'title', 'Title'),
          Field::make('select', 'title_type', 'Title Type')
            ->add_options([
              'title' => 'Title',
              'title-small' => 'Title Small',
            ]),
          Field::make('rich_text', 'text', 'Text'),
        )),
    ))
    ->add_tab('Blog', array(
      Field::make('text', 'blog_title', 'Blog Title'),
      Field::make('text', 'blog_button_text', 'Blog Button Text'),
      Field::make('text', 'blog_button_link', 'Blog Button Link'),
      Field::make('complex', 'blog_items', 'Blog Items')
        ->set_layout('tabbed-horizontal')
        ->set_max(3)
        ->add_fields(array(
          Field::make('image', 'blog_item_image', 'Blog Item Image')
            ->set_value_type('url'),
          Field::make('text', 'blog_item_title', 'Blog Item Title'),
          Field::make('text', 'blog_item_type', 'Blog Item Type'),
          Field::make('date', 'blog_item_date', 'Blog Item Date'),
          Field::make('text', 'blog_item_link', 'Blog Item Link'),
        )),
    ));
});