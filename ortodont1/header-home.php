<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ortodont1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<div class="top-header-holder">
	
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ortodont1' ); ?></a>


	<header id="masthead" class="site-header is-home">

		
		<div class="top-line">
		
		<div class="container">

				<nav id="menu" class="navbar navbar-expand-md navbar-light" role="navigation">
					<div class="navbar-brand custom-logo">
						<?php the_custom_logo(); ?>
					</div>
					
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php wp_nav_menu([
						'menu' => 'primary',
						'theme_location' => 'primary',
						'container' => 'div',
						'container_id' => 'bs4navbar',
						'container_class' => 'collapse navbar-collapse',
						'menu_id' => 'main-menu',
						'menu_class' => 'navbar-nav ml-auto',
						'depth' => 2,
						'fallback_cb' => 'bs4navwalker::fallback',
						//'search' => get_search_form(),
						
						//'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
						'walker' => new WP_Bootstrap_Navwalker(),
					]);	?>
					
					<!-- <div class="site-header__util">
							<span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
						</div> -->
					</nav>

	</div><!-- #container -->
	</div> <!-- top-line-->





	</div><!-- top-header-holder -->



	</header><!-- #masthead -->
	