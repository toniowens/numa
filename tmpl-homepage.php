<?php
/* Template Name: Home Page */

global $post;

get_header();

// page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="numa-homepage-container">
	<div class="numa-homepage-content">
		<article><?php the_content(); ?></article>
	</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>