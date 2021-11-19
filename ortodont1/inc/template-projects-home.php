<div class="picture"
				data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1; ?>"
				data-max="<?= $wp_query->max_num_pages; ?>"
				>
						<a href="<?php the_permalink(); ?>" class="gallery-img">
								<div class="background"  style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>">
										<div class="full">
												<span><?php the_title(); ?></span>
										</div>
								</div>
						</a>

					</div>