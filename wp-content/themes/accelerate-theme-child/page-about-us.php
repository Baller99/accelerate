<?php
/**
Template Name: About Us
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content-narrow">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
			$banner_1 = get_field("banner_1");
			    $size = "full";
			?>
               <div class="about-us-images">
            <a href="<?php the_permalink(); ?>">
            <?php if($banner_1) { 
                echo wp_get_attachment_image( $banner_1,$size );
            } ?>
            </a>
        </div>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>