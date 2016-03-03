<?php
/* Template Name: Blog Page */

global $post;

get_header();

// pages loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="numa-blog-container">
	<h1 class="numa-post-title"><?php the_title(); ?></h1>

	<article class="numa-blog-content">
		<?php the_content(); ?>
	</article>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<?php wp_reset_query(); ?>

	<?php

	// blog posts - args
	$blog_args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	// make the query
	$blog_query = new WP_Query( $blog_args );

	// get the posts!
	if ( $blog_query->have_posts() ) : ?>

	<div class="numa-blog-posts">
		<h2>Recent Posts</h2>

		<?php while ( $blog_query->have_posts() ) : ?>
			<?php
			$blog_query->the_post();
			$post_class = '';

			// featured image
			if ( has_post_thumbnail() ) {
				$post_class = 'has-img';
			}
			?>

			<div class="numa-blog-single-post <?php echo $post_class; ?> floatleft">
				<?php the_post_thumbnail(); ?>
				<a href="<?php echo the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<p><?php the_excerpt(); ?></p>
			</div>
		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>