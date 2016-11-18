<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <article <?php post_class('row'); ?>>
<div class="col-xs-8">
  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
</div>
<div class="col-xs-4">
  <img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>">
</div>
</article>
<?php endwhile; ?>
