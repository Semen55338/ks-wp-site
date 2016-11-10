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
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
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
