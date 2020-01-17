<?php

require_once( get_theme_file_path( "/widgets/social-icons-widget.php" ) );
require_once( get_theme_file_path( "/assets/wp_bootstrap_navlist_walker/wp_bootstrap_navlist_walker.php" ) );
require_once( get_theme_file_path( "/lib/class-tgm-plugin-activation.php" ) );
require_once( get_theme_file_path( "/inc/tgm.php" ) );
require_once( get_theme_file_path( "/lib/csf/cs-framework.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section-banner.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section-about.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section-team.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section-portfolio.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section-services.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section-testimonials.php" ) );


define( 'CS_ACTIVE_FRAMEWORK', false ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', false ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true




if ( site_url() == "http://localhost" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}



function saneem_setup() {
	
	load_theme_textdomain( 'saneem', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	
	add_theme_support( 'title-tag' );

	
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'saneem' ),
	) );


	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list',
	) );
    add_theme_support( 'custom-logo' );
    
	add_theme_support( 'custom-background', apply_filters( 'saneem_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


}

add_action( 'after_setup_theme', 'saneem_setup' );

function saneem_add_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'saneem_add_editor_styles' );

function saneem_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'saneem_content_width', 1170 );
}
add_action( 'after_setup_theme', 'saneem_content_width', 0 );

function saneem_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'saneem' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) )
        
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar one', 'saneem' ),
		'id'            => 'footer-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title">',
		'after_title'   => '</h3>',
	) )
    
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Two', 'saneem' ),
		'id'            => 'footer-sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="list-unstyled widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title">',
		'after_title'   => '</h3>',
	) )
        
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar three', 'saneem' ),
		'id'            => 'footer-sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title">',
		'after_title'   => '</h3>',
	) )
        
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar four', 'saneem' ),
		'id'            => 'footer-sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title">',
		'after_title'   => '</h3>',
	) );   
    
    ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Five', 'saneem' ),
		'id'            => 'footer-sidebar-5',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'saneem_widgets_init' );

function saneem_assets(){

	wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap');
	wp_enqueue_style('bootstrap-css',get_theme_file_uri('/assets/css/bootstrap.min.css'));
	wp_enqueue_style('carousel-css',get_theme_file_uri('/assets/css/owl.carousel.min.css'));
	wp_enqueue_style('jqueery-css',get_theme_file_uri('/assets/css/jquery-ui.css'));
    wp_enqueue_style('fancybox-css',get_theme_file_uri('/assets/css/jquery.fancybox.min.css'));
	wp_enqueue_style('datepicker-css',get_theme_file_uri('/assets/css/bootstrap-datepicker.css'));
    wp_enqueue_style('fonts-css',get_theme_file_uri('/assets/fonts/flaticon/font/flaticon.css'));
    wp_enqueue_style('ifonts-css',get_theme_file_uri('/assets/fonts/icomoon/style.css'));
    wp_enqueue_style('aos-css',get_theme_file_uri('/assets/css/aos.css'));
    wp_enqueue_style('saneem-design-css',get_theme_file_uri('/assets/css/style.css'));
	wp_enqueue_style('saneem-css',get_stylesheet_uri(),null,VERSION);

    
    
    
	wp_enqueue_script('bootstrap-js',get_theme_file_uri('/assets/js/bootstrap.min.js'),['jquery'],'default',true);
	wp_enqueue_script('popper-js',get_theme_file_uri('/assets/js/popper.min.js'),['jquery'],'default',true);
	wp_enqueue_script('carousel-js',get_theme_file_uri('/assets/js/owl.carousel.min.js'),['jquery'],time(),true);
    wp_enqueue_script('countdown-js',get_theme_file_uri('/assets/js/jquery.countdown.min.js'),['jquery'],time(),true);
    wp_enqueue_script('easing-js',get_theme_file_uri('/assets/js/jquery.easing.1.3.js'),['jquery'],time(),true);
    wp_enqueue_script('aos-js',get_theme_file_uri('/assets/js/aos.js'),['jquery'],VERSION,true);
    wp_enqueue_script('fancybox-js',get_theme_file_uri('/assets/js/jquery.fancybox.min.js'),['jquery'],time(),true);
    wp_enqueue_script('sticky-js',get_theme_file_uri('/assets/js/jquery.sticky.js'),['jquery'],time(),true);
    wp_enqueue_script('pkgd-js',get_theme_file_uri('/assets/js/isotope.pkgd.min.js'),['jquery'],time(),true); wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),['jquery'],time(),true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts','saneem_assets');



function saneem_nav_class( $classes, $item) {
 
    $classes[]="list-inline text-decoration-none ";
 
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'saneem_nav_class' , 10, 2 );

function saneem_csf_init(){
    CSFramework_metabox::instance(array());
}
add_action('init', 'saneem_csf_init');

