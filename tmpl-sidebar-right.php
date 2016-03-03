<?php
/* Template Name: Default Template - Right Sidebar */
global $post;

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="numa-post-container">
	<h1><?php the_title(); ?></h1>

	<?php if ( is_active_sidebar( 'right_1' ) ) : ?>
		<div class="numa-sidebar-right primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'right_1' ); ?>
		</div>
	<?php endif; ?>

	<div class="numa-post-content">
		<article><?php the_content() ?></article>
	</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>