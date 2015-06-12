<?php
/**
 * Template Name: Snowmobiling
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		  <div class="grid">
              <div class="grid-item grid-item--width5 grid-item--height5"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/DSC_0194.jpg" ></div>
              <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/DSC_0214.jpg"> </div>
              <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/DSC_0335.jpg"></div>
              <div class="grid-item grid-item--width2 grid-item--height5"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/DSC_0339-e1433536831736.jpg" ></div>
              <div class="grid-item grid-item--width6 grid-item--height5"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/boldermountain.jpg"></div>
              <div class="grid-item grid-item--width4 grid-item--height4"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/nisse.jpg"></div>
              <div class="grid-item grid-item--width4 grid-item--height4"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/DSC_0169.jpg"></div>
             
            </div>
      <a href="/wordpress-2/pictures/">
        <div class="back"> Back </div>
      </a>
		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

</div>	

<?php get_footer(); ?>