<?php
/**
 * artr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package artr
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function artr_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on artr, use a find and replace
		* to change 'artr' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'artr', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'artr' ),
			'footer-menu-1' => esc_html__( 'Footer One', 'artr' ),
			'footer-menu-2' => esc_html__( 'Footer Two', 'artr' ),
			'footer-menu-3' => esc_html__( 'Footer Three', 'artr' ),
			'footer-menu-4' => esc_html__( 'Footer Four', 'artr' ),
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
			'artr_custom_background_args',
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
add_action( 'after_setup_theme', 'artr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function artr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'artr_content_width', 640 );
}
add_action( 'after_setup_theme', 'artr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function artr_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'artr' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'artr' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'artr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function artr_scripts() {
	wp_enqueue_style( 'artr-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'artr-style', 'rtl', 'replace' );
	wp_enqueue_script('jquery');
	// wp_enqueue_script( 'artr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artr-navigation', get_template_directory_uri() . '/js/menu.js', array('jquery'), _S_VERSION, true );

	// custom styles added below
	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/main.css', false, '1.0', 'all' );
	// end of custom styles here
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	
}
add_action( 'wp_enqueue_scripts', 'artr_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Adding custom rest api methods below
 */

//  // adding field to existing api of the author name, not the id to get the name directly
//  function custom_post_request() {
// 	register_rest_field('post', 'authorName', array(
// 		'get_callback' => function() {
// 			return get_the_author();
// 		},
// 	));
//  }

//  add_action('rest_api_init', 'custom_post_request');


// // custom route
// function adding_more() {
// 	// $slugSearch = ;

// 	// $args = [
//     //     'name' => $slug['slug'],
//     //     'post_type' => 'post'
//     // ];

//     // $post = get_posts($args);
// 	register_rest_route('site', 'posts', array(
// 		'methods' => 'GET',
// 		'callback' => 'bySlug'
// 	));
// }

// // step 1 get the slug from normal get req 
// // step 2 add slug to the variable
// // step 3 return post title and content based on slug.

// function bySlug() {
// 	$someData = new WP_Query(array(
// 		'post_tyoe' => 'post'
// 	));

// 	$someDataResults = array();


// 	while($someData->have_posts()) {
// 		$someData->the_post();
// 		array_push($someDataResults, array(
// 			'title' => get_the_title(),
// 			// 'content' => get_the_content(),
//             // 'authorName' => get_the_author(),
// 		));
// 	}

// 	return $someDataResults;
// }


//  add_action('rest_api_init', 'adding_more');




// function custom_get_post_slug() {
//     if ( isset( $_GET['post_slug'] ) ) {
//         return sanitize_text_field( $_GET['post_slug'] );
//     } else {
//         return null;
//     }
// }

// function custom_rest_api_init() {
//     $post_slug = 'hello-world';
//     if ( $post_slug ) {
//         register_rest_route( 'custom/v1', '/post-by-slug/' . $post_slug, array(
//             'methods' => 'GET',
//             'callback' => 'custom_get_post_by_slug',
//         ) );
//     }
// }
// add_action( 'rest_api_init', 'custom_rest_api_init' );

// function custom_get_post_by_slug( $request ) {
//     $slug = $request->get_param( 'slug' );
//     $posts = get_posts( array(
//         'name' => $slug,
//         'post_type' => 'post',
//         'post_status' => 'publish',
//         'posts_per_page' => 1,
//     ) );
//     if ( empty( $posts ) ) {
//         return new WP_Error( 'no_post_found', 'No post found with the specified slug', array( 'status' => 404 ) );
//     }
//     $post = $posts[0];
//     $response = array(
//         'title' => get_the_title( $post->ID ),
//         'content' => get_the_content( null, false, $post->ID ),
//     );
//     return rest_ensure_response( $response );
// }


function custom_rest_api_init() {
    register_rest_route( 'custom/v1', '/post-by-slug/(?P<slug>[a-zA-Z0-9-]+)', array(
        'methods' => 'GET',
        'callback' => 'custom_get_post_by_slug',
    ) );
}

add_action( 'rest_api_init', 'custom_rest_api_init' );

function custom_get_post_by_slug( $request ) {
    $slug = $request->get_param( 'slug' );
    $posts = get_posts( array(
        'name' => $slug,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
    ) );
    if ( empty( $posts ) ) {
        return new WP_Error( 'no_post_found', 'No post found with the specified slug', array( 'status' => 404 ) );
    }
    $post = $posts[0];
    $response = array(
        'title' => get_the_title( $post->ID ),
        'content' => get_the_content( null, false, $post->ID ),
    );
    return rest_ensure_response( $response );
}
