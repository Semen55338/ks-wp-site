<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add current post type class
  if (is_archive() || is_singular()) {
      $classes[] = get_post_type();
  }

  // Add body class to call Savvior
  if (is_post_type_archive('work') || is_singular('work') || has_post_format('gallery')) {
      $classes[] = 'grid';
  }

  // Add body class to call Lightbox
  if (is_singular('work') || has_post_format('gallery')) {
      $classes[] = 'lightbox';
  }

  // Front page
  if (is_front_page()) {
      $classes[] = 'h-100';
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <p><a href="' . get_permalink() . '" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">' . __('Continued', 'sage') . '</a></p>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Post per page configuration
 */
function pre_get_posts($query){
if(is_archive()){
  $query->set('posts_per_page',15);
}
}
add_action('pre_get_posts', __NAMESPACE__ . '\\pre_get_posts');

/**
 * Attachment image Bootstrap output
 */
function wp_get_attachment_link($link) {
    return str_replace('<a href=', '<a class="card" data-toggle="lightbox" data-gallery="gallery" href=', $link);
}
add_filter( 'wp_get_attachment_link', __NAMESPACE__ . '\\wp_get_attachment_link' );


/**
 * Plugin Name: Support for the _shuffle_and_pick WP_Query argument.
 */
 add_filter( 'the_posts', function( $posts, \WP_Query $query )
 {
     if( $pick = $query->get( '_shuffle_and_pick' ) )
     {
         shuffle( $posts );
         $posts = array_slice( $posts, 0, (int) $pick );
     }
     return $posts;
 }, 10, 2 );

