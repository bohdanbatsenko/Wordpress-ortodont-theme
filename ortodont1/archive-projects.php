<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ortodont1
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->


			<div class="gallery">
				<div class="row">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				?>


					<!--?php get_template_part( 'template-parts/content', get_post_type() ); ?-->

					<div class="picture">
                    <a href="<?php the_permalink(); ?>" class="gallery-img">
                        <div class="background"  style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>">
                            <div class="full">
                                <span><?php the_title(); ?></span>
                            </div>
												</div>
                    </a>

						</div>

		<?php
			endwhile; ?>

</div> <!-- gallery -->
</div>  <!-- row -->

			<?php the_posts_navigation();
			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

</div><!-- #page .site .container -->
<?php
get_footer();
