<?php
/*
Plugin Name: Work Post Type
Description: Add Work Custom Post Type
Author:      Artem Semenov
*/

// Work Post Type
function ksorokin_work_post_type() {
  $labels = array(
    'name'               => 'Work',
    'singular_name'      => 'Работа',
    'add_new_item'       => 'Добавить новую работу',
    'edit_item'          => 'Редактировать работу',
    'new_item'           => 'Новая работа',
    'all_items'          => 'Все работы',
    'view_item'          => 'Смотреть работу',
    'search_items'       => 'Искать работы',
    'not_found'          => 'Работ не найдено',
    'not_found_in_trash' => 'В корзине работ не найдено',
    'parent_item_colon'  => '',
    'menu_name'          => 'Work'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'work' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 4,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'work', $args );
}
add_action( 'init', 'ksorokin_work_post_type' );
