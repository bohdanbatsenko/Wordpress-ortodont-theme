<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ortodont1
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ortodont1' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ortodont1' ) . '</span> <span class="nav-title">%title</span>',
				
			// 	)
			// );
			?>

	<div class="post-navigation">
		<div class="nav-previous">
			<?php  previous_post_link('<span class="left"> %link</span>'); ?>
			</div>

		<div class="link-to-archive">
			<a href="<?php echo get_post_type_archive_link('projects'); ?> ">
			<i class="fa fa-th" aria-hidden="true"></i>
			</a>
		</div>
		
		<div class="nav-next">
			<?php next_post_link('<span class="right">%link</span>'); ?>  
		</div>
    	
	</div>

		
		
		<?php	endwhile; // End of the loop.
	?>
		
		

	</main><!-- #main -->
	</div><!-- #page .site .container -->

<?php get_footer(); ?>

