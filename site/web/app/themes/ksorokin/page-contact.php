<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="row">
<div class="col-xs-6">


		<?php
    	while( have_rows('url-contacts')): the_row();
    	?>
		<p><a href="<?php the_sub_field('web_url'); ?>"><?php the_sub_field('web-name'); ?></a></p>
    	<?php
    	endwhile; ?>


  		<p><a href="mailto:<?php the_field('email-contact'); ?>?subject=Mail from Your Site"><?php the_field('email-contact'); ?></a></p>
  		<p>+7<?php the_field('phone-number'); ?></p>

  </div>
</div>

<?php endwhile; ?>
