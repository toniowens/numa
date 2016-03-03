<?php
/* Template Name: Blog Page */

global $wp_query;

get_header();

// Get count for query
$count = $wp_query->found_posts;

// Get queried object
$category = get_queried_object();

// Set page label for title
$page_label = "";
if ( is_category() ) {
	$page_label = "Category: ";
} elseif ( is_tag() ) {
	$page_label = "Tag: ";
}
?>

<?php if ( have_posts() ) : ?>
<div class="archive-container">
	<div>
		<span class="label"><?php echo $page_label; ?></span>
		<h2><?php echo $category->name; ?></h2>
		<small><?php echo $count; ?> post<?php echo ( $count > 1 ) ? 's' : ''; ?> found.</small>
		<hr>
	</div>

	<div class="archive">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="archive-post">
				<a href="#postlink">
					<h3><?php the_title(); ?></h3>
				</a>
				<p><?php the_excerpt(); ?></p>
			</div>
		<?php endwhile; ?>
	</div>

<?php echo paginate_links( array(
	'prev_text'=> __('Previous'),
	'next_text'=> __('Next'),
)); ?>

</div>

<div class="cats-tags">
	<?php wp_list_categories( array( 'exclude'=> '1')); ?>

	<h4>Tag Cloud</h4>
	<?php wp_tag_cloud(); ?>
</div>
<?php endif; ?>

<?php get_footer(); ?>