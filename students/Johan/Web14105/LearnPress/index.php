<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
                
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/Logga.png" id="Logga">


		      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/06/background.jpg" width="100%" height="100%" style="position: relative; z-index: -1;"/>

            
            <ul>
                <a href="/wordpress-2/pictures/">
                    <li style="border-color: rgba(255,0,0,0.5);">
                        Pictures
                    </li>
                </a>
    
                <a href="wordpress/About">
                    <li id="blue" style="border-color: rgba(0,43,255,0.5);">
                        About me
                    </li>
                </a>
    
                <a href="Contact.html">
                    <li id="green" style="border-color: rgba(0,255,0,0.5);">  
                        Contact
                    </li>
                </a>
    
                <a href="LogIn.html">
                    <li id="teal" style="border-color: rgba(0,255,255,0.5);">   
                        Log in
                    </li>
                </a>
    
            </ul>
            

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>
