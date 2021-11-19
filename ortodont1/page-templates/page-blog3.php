<?php
/**
 * Template Name: Blog
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ortodont1
 */

get_header();
?>
<div class="blog">
<div class="container">

	<div class="blog-page-title">
		<h2>Блог</h2>
	</div>

<div class="row" id="row_append">
<?php 

	$args = array(
		'post_type' => 'post',
		'cat' => 3,
		'posts_per_page' => 4,
		'post_status' => 'published',
		'order' => 'date',	
		'paged' => $paged
	);
	// the query
	$projects_query = new WP_Query( $args ); ?>


			<?php if ( $projects_query->have_posts() ) : ?>
			
					<!-- pagination here -->
			
					<!-- the loop -->
					<?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
						<div class="col-sm-6">
							<div class="blog-post">
							<a href="<?php the_permalink(); ?>">
							<div class="blog-thumbnail" ><?php echo the_post_thumbnail( 'full' ); ?></div>
							<h2 class="blog-post-title"><?php the_title(); ?></h2>
							</a>

							</div>		
					</div><!-- col-sm-6 -->	
					<?php endwhile; ?>
					<!-- end of the loop -->
						
					<!-- pagination here -->

					<?php wp_reset_query(); ?>
					<?php wp_reset_postdata(); ?>
					
			<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif;	?>
			
	</div> <!-- "row" id="row_append" -->

	<div class="button-wrap text-center">
	<button id="more_posts" class="blue-btn" data-template="blog" style="margin-bottom:20px;">Load more...</button>	</div>



</div><!-- container -->
</div><!-- blog -->
</div><!-- #page .site .container -->
<?php
get_footer();
