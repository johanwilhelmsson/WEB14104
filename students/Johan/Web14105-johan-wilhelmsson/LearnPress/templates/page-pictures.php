<?php
/**
 * Template Name: pictures
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>
<a href="wordpress/home">
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/Logga.png" id="Logga">
</a>
    <ul>
                <a href="wordpress/skiing">
                    <li style="border-color: rgba(255,0,0,0.5);">
                        Skiing
                    </li>
                </a>
        
                <a href="wordpress/snowmobiling">
                    <li style="border-color: rgba(255,0,0,0.5);">
                        Snowmobiling
                    </li>
                </a>
    
                <a href="wordpress/portrait">
                    <li style="border-color: rgba(255,0,0,0.5);">  
                        Portrait
                    </li>
                </a>
    
                <a href="wordpress/other">
                    <li style="border-color: rgba(255,0,0,0.5);">   
                        Other
                    </li>
                </a>
    
            </ul>

    <img src="http://localhost:8888/wordpress-2/wp-content/uploads/2015/06/background.jpg" width="100%" height="100%"           style="position: relative; 
z-index: -1"/>


<div class="container">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

           
          
		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

</div>	

<?php get_footer(); ?>