<?php
function university_post_types()
{
  register_post_type('event', array(
    'rewrite' => array(
      'slug' => 'events'
    ),
    'supports' => array('title', 'excerpt', 'editor', 'custom-fields'),
    'has_archive' => true,
    'show_in_rest' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'university_post_types');
