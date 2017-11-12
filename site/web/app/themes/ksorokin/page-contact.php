<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="row">
 		<div class="contact-item col-lg-4">
			 <h3>Mail</h3>
			 <a href="mailto:<?php the_field('email-contact'); ?>?subject=Mail from Your Site"><?php the_field('email-contact'); ?></a>
		</div>
	  <div class="contact-item col-lg-4" itemscope itemtype="http://schema.org/LocalBusiness">
	  	 <h3 itemprop="name">Phone</h3>
			 <span itemprop="telephone"><a href="tel:+7<?php the_field('phone-number'); ?>">+7<?php the_field('phone-number'); ?></a></span>
		</div>
    <div class="contact-item col-lg-4">
			 <h3>Social</h3>
		   <?php	while( have_rows('url-contacts')): the_row(); ?>
		   <a href="<?php the_sub_field('web_url'); ?>"> <i class="fa fa-<?php the_sub_field('web-name'); ?> fa-lg" aria-hidden="true"></i></a>&nbsp;
       <?php endwhile; ?>
    </div>
</div>

<?php endwhile; ?>
