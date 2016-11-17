<?php while (have_posts()) : the_post(); ?>

<?php

$post_object = get_field('front-page-post');

if( $post_object ):
	// override $post
	$post = $post_object;
	setup_postdata( $post );

?>

<a class="home-banner" href="<?php the_permalink(); ?>">
  <img src="<?php the_post_thumbnail_url(); ?>">
</a>

<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<?php endwhile; ?>
