<?php
/**
 * Template Name: AboutMe
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/boldermountain.jpg" width="100%" height="900em"  style="position: relative; z-index: -1;" >

<div class="container">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		  

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

</div>	

<?php get_footer(); ?>