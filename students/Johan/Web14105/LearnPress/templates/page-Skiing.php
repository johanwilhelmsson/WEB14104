<?php
/**
 * Template Name: skiing
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
              <div class="grid-item grid-item--width5 grid-item--height5"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/hampe1.jpg" width="100%" height="100%" ></div>
              <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/hampe4.jpg" width="100%" height="100%"> </div>
              <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/hampe7.jpg" width="100%" height="100%"></div>
              <div class="grid-item grid-item--width2 grid-item--height5"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/vismanpafjall.jpg" width="100%" ></div>
              <div class="grid-item grid-item--width6 grid-item--height5"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/hampe2.jpg" width="100%" height="100%"></div>
              
              <div class="grid-item grid-item--width4 grid-item--height4"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/mangee.jpg"></div>
                <div class="grid-item grid-item--width4 grid-item--height4"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/mange.jpg"></div>
                <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/hampe6.jpg"></div>
                <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/nilsbaby.jpg"></div>
                <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/hampe3.jpg"></div>
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