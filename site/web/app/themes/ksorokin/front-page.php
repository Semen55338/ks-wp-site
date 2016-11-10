<?php while (have_posts()) : the_post(); ?>
    <div class="row flex-items-xs-center" >
	<?php
    while( have_rows('front-page-works')): the_row();
    $photo = get_sub_field('front-page-photo');
    ?>
		<div class="col-xs-6">
				<img class="img-fluid" src="<?php echo $photo['sizes']['medium']; ?>" alt="<?php echo $photo['alt']; ?>">
		</div>
    <?php
    endwhile; ?>
    </div>
<?php endwhile; ?>
