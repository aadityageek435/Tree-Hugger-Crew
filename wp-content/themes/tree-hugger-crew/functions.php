<?php
/**
 * tree-hugger-crew functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tree-hugger-crew
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
function tree_hugger_crew_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tree-hugger-crew, use a find and replace
		* to change 'tree-hugger-crew' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tree-hugger-crew', get_template_directory() . '/languages' );

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
			'header-menu' => esc_html__( 'Primary', 'tree-hugger-crew' ),
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
			'tree_hugger_crew_custom_background_args',
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
add_action( 'after_setup_theme', 'tree_hugger_crew_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tree_hugger_crew_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tree_hugger_crew_content_width', 640 );
}
add_action( 'after_setup_theme', 'tree_hugger_crew_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tree_hugger_crew_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tree-hugger-crew' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tree-hugger-crew' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tree_hugger_crew_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tree_hugger_crew_scripts() {

	wp_enqueue_style('tree-hugger-crew-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-crew-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-crew-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-crew-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-crew-datetimepicker-css', get_template_directory_uri() . '/assets/css/jquery.datetimepicker.min.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-crew-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '20151215');
	wp_enqueue_style('tree-hugger-crew-simplebar-css', get_template_directory_uri() . '/assets/css/simplebar.css', array(), '20151215');

	wp_enqueue_style( 'tree-hugger-crew-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'tree-hugger-crew-style', 'rtl', 'replace' );

	wp_enqueue_script('tree-hugger-crew-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-crew-simplebar-js', get_template_directory_uri() . '/assets/js/simplebar.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-crew-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-crew-datetimepicker', get_template_directory_uri() . '/assets/js/jquery.datetimepicker.full.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-crew-fancybox-min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-crew-wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-crew-font-awesome-min', get_template_directory_uri() . '/assets/js/font-awesome.min.js', array(), '20151215', true);
	wp_enqueue_script('tree-hugger-crew-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), rand(1000, 10000), true);
	wp_localize_script('tree-hugger-crew-custom', 'custom_call', ['ajaxurl' => admin_url('admin-ajax.php'), 'homeurl' => home_url()]);

	wp_enqueue_script( 'tree-hugger-crew-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tree_hugger_crew_scripts' );

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

// Filter the output of logo to fix Googles Error about itemprop logo
add_filter( 'get_custom_logo', 'change_html_custom_logo' );
function change_html_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
	$site_name = get_bloginfo( 'name' );
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" title="'.$site_name.'">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
				"data-no-lazy" => "1",
				'alt' => "$site_name"
            ) )
        );
    return $html;   
}

// Ajax response - service tabbing 

add_action('wp_ajax_service_tabbing','service_sec_tabbing');
add_action( 'wp_ajax_nopriv_service_tabbing', 'service_sec_tabbing' );

function service_sec_tabbing() {	

	$ajax_index = $_POST['index'];
	$front_page_id = get_option('page_on_front');

	if(have_rows("our_services", $front_page_id)){

		while(have_rows("our_services", $front_page_id)){ the_row(); 

			$home_our_services_title = get_sub_field("home_our_services_title");
			$home_our_services_page_url = get_sub_field("home_our_services_page_url");
			$home_our_services_image = get_sub_field("home_our_services_image");
			$home_our_services_icon = get_sub_field("home_our_services_icon");
			$home_our_services_content = get_sub_field("home_our_services_content");

			if( get_row_index() == $ajax_index ){?>
				<div class="service-content">
					<?php  
					if($home_our_services_icon){?>
						<div class="about-brand">
							<img src="<?php echo $home_our_services_icon['url']; ?>" alt="<?php echo $home_our_services_title." Image";  ?>" width="<?php echo $home_our_services_icon['width']; ?>" height="<?php echo $home_our_services_icon['height']; ?>">
						</div>
						<?php
					}
					if($home_our_services_image){?>
						<div class="service-img">
							<div class="back-img img-box img-left-box" style="background-image: url('<?php echo $home_our_services_image; ?>');"></div>
						</div>
						<?php
					}
					if($home_our_services_title){?>
						<h3 class="h3-title"><?php echo $home_our_services_title; ?></h3>
						<?php
					}
					
					//our service main content
					echo $home_our_services_content;

					if($home_our_services_page_url){?>
						<a href="<?php echo $home_our_services_page_url; ?>" title="<?php echo $home_our_services_title.", Learn More"; ?>" class="underline_link underline_link_white">Learn More</a>
						<?php
					}?>
				</div>
				<?php
			}
		}
	}else{
		echo "Something Went Wrong!, Please check Ajax Request";
	}

	wp_die();
}

