<?php

get_header();
global $post;

// standard loop for pages
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="numa-post">
	<h1><?php the_title(); ?></h1>
	<div class="numa-post-content">
		<?php the_content(); ?>
	</div>
</div>

<?php
// if page/post not found
endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts were found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>