<?php
/**
 * ortodont1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ortodont1
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ortodont1_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ortodont1_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ortodont1, use a find and replace
		 * to change 'ortodont1' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ortodont1', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'ortodont1' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ortodont1_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ortodont1_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ortodont1_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ortodont1_content_width', 1140 );
}
add_action( 'after_setup_theme', 'ortodont1_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ortodont1_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ortodont1' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ortodont1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ortodont1_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ortodont1_scripts() {
	wp_enqueue_style( 'ortodont1-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ortodont1-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'ortodont1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_style( 'ortodont1_styles-custom', get_stylesheet_directory_uri() . '/css/main.min.css' );	
	//wp_enqueue_style( 'turkiv-style', get_stylesheet_directory_uri() . './src/css/turkiv_styles.css' );	

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
	wp_register_script('bootsrtap-hover', get_stylesheet_directory_uri() . '/src/js/bootsrtap-hover.js', array('jquery'), '', true);
	wp_register_script('devwp-nav-scroll', get_stylesheet_directory_uri() . '/src/js/nav-scroll.js', array('jquery'), '', true);
	wp_register_script('skip-link-focus-fix', get_stylesheet_directory_uri() . '/src/js/skip-link-focus-fix.js', array('jquery'), '', true);
	wp_register_script('popper', get_stylesheet_directory_uri() . '/src/js/popper.min.js', array('jquery'), '',true);
	wp_register_script( 'bootstrap4-js', get_stylesheet_directory_uri() . '/src/libs/bootstrap4/js/bootstrap.min.js', false, true );


	wp_register_script( 'owl', get_stylesheet_directory_uri() . '/src/libs/owl/owl.carousel.min.js', array('jquery'), '', true );



	wp_register_script( 'main-js', get_stylesheet_directory_uri() . '/js/scripts.min.js', false, true );

	// wp_enqueue_script('jquery');
wp_enqueue_script('bootsrtap-hover');
wp_enqueue_script('devwp-nav-scroll');
wp_enqueue_script('skip-link-focus-fix');
wp_enqueue_script('owl');
wp_enqueue_script('popper');
wp_enqueue_script('bootstrap4-js');



wp_enqueue_script('main-js');
	}

add_action( 'wp_enqueue_scripts', 'ortodont1_scripts' );





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Load navwalker file.
 */
require get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}





// Register Projects Custom Post Type
function projects_setup_post_type() {
	$args = array(
			'supports' => ['excerpt', 'title', 'editor', 'thumbnail'],
			'public'    => true,
			'has_archive'    => true,
			'show_in_rest' => true,
			'label'     => __( 'Projects', 'textdomain' ),
			'menu_icon' => 'dashicons-welcome-learn-more',
			'show_ui'               => true,
	);
	register_post_type( 'projects', $args );
}
add_action( 'init', 'projects_setup_post_type' );


//show all projects on archive page
add_action( 'pre_get_posts', 'ortodont1_show_all_projects' );
function ortodont1_show_all_projects( $query ) {
    
    if ( ! is_admin() && $query->is_main_query() ) {
    
        if ( is_post_type_archive( 'projects' ) ) {
            
            $query->set('posts_per_page', -1 );
    
        }
    }
}




// register Sservices CPT
function services_setup_post_type() {
	$args = array(
			'supports' => ['excerpt', 'title', 'editor', 'thumbnail'],
			'public'    => true,
			'has_archive'    => true,
			'show_in_rest' => true,
			'label'     => __( 'Servies', 'textdomain' ),
			'menu_icon' => 'dashicons-welcome-learn-more',
			'show_ui'     => true,
	);
	register_post_type( 'services', $args );
}
add_action( 'init', 'services_setup_post_type' );

// add_action( 'init', 'add_myCustomPostType_endpoint');
// function add_myCustomPostType_endpoint(){

//     global $wp_post_types;
//     $wp_post_types['projects']->show_in_rest = true;
//     $wp_post_types['projects']->rest_base = 'projects';
//     $wp_post_types['projects']->rest_controller_class = 'WP_REST_Posts_Controller';
// }

add_image_size('preview', 100, 100, true );
add_image_size('full', 1280, null );


//https://www.youtube.com/watch?v=XySLI8YIRqQ&t=432s&ab_channel=WPCasts








// redgroup ajax load more

function blog_scripts() {
	// Register the script
	wp_register_script( 'custom-script', get_stylesheet_directory_uri(). '/src/js/ajax_loadmore.js', array('jquery'), false, true );

	// Localize the script with new data
	$script_data_array = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'security' => wp_create_nonce( 'load_more_posts' ),
	);
	wp_localize_script( 'custom-script', 'blog', $script_data_array );

	// Enqueued script with localized data.
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {
	//check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
	$template = $_POST['template'];

			// $args = array(
			// 	'post_type' => 'projects',
			// 	'post_status' => 'publish',
			// 	'posts_per_page' => '4',
			// 	'paged' => $paged,
			// );
			if($template === 'home-projects') :
		
				$args = array(
					'post_type' => 'projects',
					'post_status' => 'publish',
					'paged' => $paged,
					'posts_per_page' => 4
				);
				$projects = new WP_Query($args); ?>

				<?php	while ($projects->have_posts()) :
					$projects->the_post();								
					get_template_part( 'inc/template', 'projects-home' );
				?>
				<?php endwhile; ?>
			<?php else: ?>

		<?php			
			if($template == 'redgroup') :
				$args = array(
					'post_type' => 'projects',
					'post_status' => 'publish',
					//'cat' => 2,
					'posts_per_page' => '4',
					'paged' => $paged
				);
			endif;

			if($template == 'blog') :
				$args = array(
					'post_type' => 'post',
					'cat' => 3,
					'posts_per_page' => 4,
					'post_status' => 'published',
					'order' => 'date',	
					'paged' => $paged
				);
			endif;			

		$blog_posts = new WP_Query( $args );
		?>
		<?php if ( $blog_posts->have_posts() ) : ?>
			<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

			<div class="col-sm-6">
							<div class="blog-post">
							<a href="<?php the_permalink(); ?>">
							<div class="blog-thumbnail" ><?php echo the_post_thumbnail( 'full' ); ?></div>
							<h2 class="blog-post-title"><?php the_title(); ?></h2>
							</a>

							</div>		
					</div><!-- col-sm-6 -->	

			<?php endwhile; ?>
		<?php endif; 
		endif;
		die();
		?>

<?php 
 
}