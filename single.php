<?php

global $post;

get_header();

// Pages loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="numa-single-post-container">
	<h1><?php the_title(); ?></h1>

	<?php
	// featured image
	if ( has_post_thumbnail() ) : ?>
		<?php echo the_post_thumbnail(); ?>
	<?php endif; ?>
	<article class="numa-single-post-content">
		<?php the_content(); ?>
	</article>

	<div class="numa-single-post-footer">
		<p class="numa-posted-on">
			Posted On: <?php the_date('F j, Y, g:i a'); ?>
		</p>

		<div class="numa-category-tags">
			<?php if ( get_the_category_list() ) : ?>
			<span class="numa-label">Category: </span>
			<span class="numa-category-list">
				<?php echo get_the_category_list(); ?>
			</span>
			<?php endif; ?>

			<?php if ( get_the_tag_list() ) : ?>
			<span class="numa-label">Tags: </span>
			<span class="numa-tag-list">
				<?php echo get_the_tag_list('<span>', ', ', '</span>'); ?>
			</span>
			<?php endif; ?>
		</div>

	</div>
</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>