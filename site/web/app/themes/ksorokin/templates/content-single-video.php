<article <?php post_class('col-xs-12'); ?>>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="embed-responsive embed-responsive-16by9">
<?php the_field('post-video-oembed'); ?>
</div>
</article>
