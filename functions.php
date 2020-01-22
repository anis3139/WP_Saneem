<?php

if ( class_exists( 'Attachments' ) ) {
    require_once get_theme_file_path( "/lib/attachments.php" );
}

require_once( get_theme_file_path( "/inc/metaboxes/companion/companion-plugin.php" ) );
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
require_once( get_theme_file_path( "/inc/metaboxes/section-faq.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section-thinking.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/section-contact.php" ) );


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
    $saneem_custom_header_details = array(
        'header-text'        => true,
        'default-text-color' => '#222',
        'width'              => 1200,
        'height'             => 600,
        'flex-height'        => true,
        'flex-width'         => true,
    );
    add_theme_support( "custom-header", $saneem_custom_header_details );

	
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
    $saneem_custom_logo_defaults = array(
        "width"  => '100px',
        "height" => '60px'
    );
    add_theme_support( "custom-logo", $saneem_custom_logo_defaults );

    
	add_theme_support( 'custom-background', apply_filters( 'saneem_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    
    add_image_size( "saneem-team-image", 500, 500,array("center","center"), true); 
    
  
    
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
   /* fuuny text*/ wp_enqueue_style('funnytext',get_theme_file_uri('/assets/funnytext/jquery.funnyText.css', null, VERSION));
    /*funny text*/
    
	wp_enqueue_style('saneem-css',get_stylesheet_uri(),null,VERSION);

    
    
    
	wp_enqueue_script('bootstrap-js',get_theme_file_uri('/assets/js/bootstrap.min.js'),['jquery'],'default',true);
   
	wp_enqueue_script('popper-js',get_theme_file_uri('/assets/js/popper.min.js'),['jquery'],'default',true);
	wp_enqueue_script('carousel-js',get_theme_file_uri('/assets/js/owl.carousel.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('countdown-js',get_theme_file_uri('/assets/js/jquery.countdown.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('easing-js',get_theme_file_uri('/assets/js/jquery.easing.1.3.js'),['jquery'],VERSION,true);
    wp_enqueue_script('aos-js',get_theme_file_uri('/assets/js/aos.js'),['jquery'],VERSION,true);
    wp_enqueue_script('fancybox-js',get_theme_file_uri('/assets/js/jquery.fancybox.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('sticky-js',get_theme_file_uri('/assets/js/jquery.sticky.js'),['jquery'],VERSION,true);
    wp_enqueue_script('pkgd-js',get_theme_file_uri('/assets/js/isotope.pkgd.min.js'),['jquery'],VERSION,true);
    
    /*funny test & water ripple*/
    
    wp_enqueue_script('funny-text',get_theme_file_uri('/assets/funnytext/jquery.funnyText.min.js'),['jquery'],VERSION,true);   
    wp_enqueue_script('funny-text-js',get_theme_file_uri('/assets/funnytext/funnyText.js'),['jquery'],VERSION,true);
    wp_enqueue_script('particles-js',get_theme_file_uri('/assets/funnytext/particles.js'));
    wp_enqueue_script('particles-js-app-js',get_theme_file_uri('/assets/funnytext/app.js')); 
    
     /*funny test & water ripple*/
    
    
    
    wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),['jquery'],time(),true);
    
    if(is_page_template('page-templates/landing.php')){
    wp_enqueue_script('contact-js',get_theme_file_uri('/assets/js/contact.js'),['jquery'],VERSION,true); 
    $ajaxurl = admin_url( 'admin-ajax.php' );
        wp_localize_script( 'contact-js', 'saneem_url', array( 'ajaxurl' => $ajaxurl ) );
    
    }
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts','saneem_assets');

function saneem_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Single page Sidebar', 'saneem' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="p-2 widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'saneem' ),
		'id'            => 'sidebar-blog',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="p-2 widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
        
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar one', 'saneem' ),
		'id'            => 'footer-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="pl-2 widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title">',
		'after_title'   => '</h3>',
	) );
    
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Two', 'saneem' ),
		'id'            => 'footer-sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="list-unstyled pl-2 widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title">',
		'after_title'   => '</h3>',
	) );
        
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar three', 'saneem' ),
		'id'            => 'footer-sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="pl-2 widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title">',
		'after_title'   => '</h3>',
	) );
        
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar four', 'saneem' ),
		'id'            => 'footer-sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'saneem' ),
		'before_widget' => '<section id="%1$s" class="pl-2 widget %2$s">',
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


function saneem_nav_class( $classes, $item) {
 
    $classes[]="list-inline text-decoration-none ";
 
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'saneem_nav_class' , 10, 2 );

function saneem_csf_init(){
    CSFramework_metabox::instance(array());
}
add_action('init', 'saneem_csf_init');

add_filter('wp_calculate_image_srcset','__return_null');

function saneem_contact_email() {
	if ( check_ajax_referer( 'contact', 'cn' ) ) {
		$name    = isset( $_POST['name'] ) ? $_POST['name'] : '';
		$email   = isset( $_POST['email'] ) ? $_POST['email'] : '';
		$phone   = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
		$message = isset( $_POST['message'] ) ? $_POST['message'] : '';

		$_message    = sprintf( "%s \nFrom: %s\nEmail: %s\nPhone: %s", $message, $name, $email, $phone );
		$admin_email = get_option( 'admin_email' );

		//postfix

		wp_mail(  $admin_email, __( 'Someone tried to contact you', 'saneem' ), $_message, "From: anis904692@gmail.com\r\n" );
		die( 'successful' );
	}
	die( 'error' );
}

add_action( 'wp_ajax_contact', 'saneem_contact_email' );
add_action( 'wp_ajax_nopriv_contact', 'saneem_contact_email' );


function saneem_change_nav_menu( $menus ) {
	$string_to_replace = home_url( "/" ) . "section/";
	if ( is_front_page() ) {
		foreach ( $menus as $menu ) {
			$new_url = str_replace( $string_to_replace, "#", $menu->url );

			if ( $new_url != $menu->url ) {
				$new_url = rtrim( $new_url, "/" );
			}

			$menu->url = $new_url;
		}
	}

	return $menus;
}

add_filter( 'wp_nav_menu_objects', 'saneem_change_nav_menu' );


if ( ! function_exists( "saneem_about_page_template_banner" ) ) {
    function saneem_about_page_template_banner() {
       

        if ( is_front_page() ) {
            if ( current_theme_supports( "custom-header" ) ) {
                ?>
<style>
    .header {
        background-image: url(<?php header_image();
        ?>);
        background-size: cover;
        margin-bottom: 50px;
    }

</style>
<?php
            }
        }
    }

    add_action( "wp_head", "saneem_about_page_template_banner", 11 );
}




function saneem_search_form( $form ) {
    $homedir      = home_url( "/" );
    $label        = __( "Search for:", "saneem" );
    $button_label = __( "Search", "saneem" );
    $newform = <<<FORM
<form role="search" method="get" class="header__search-form" action="{$homedir}">
    <label>
        <span class="hide-content">{$label}</span>
        <input type="search" class="form-control" placeholder="Type Keywords" value="" name="s"
               title="{$label}" autocomplete="off">
    </label>
    {$post_type}
    <input type="submit" class="btn btn-primary btn-sm" value="{$button_label}">
</form>
FORM;

    return $newform;
}


add_filter( "get_search_form", "saneem_search_form" );


function saneem_highlight_search_results( $text ) {
    if ( is_search() ) {
        $pattern = '/(' . join( '|', explode( ' ', get_search_query() ) ) . ')/i';
        $text    = preg_replace( $pattern, '<span class="search-highlight">\0</span>', $text );
    }

    return $text;
}

add_filter( 'the_content', 'saneem_highlight_search_results' );
add_filter( 'the_excerpt', 'saneem_highlight_search_results' );
add_filter( 'the_title', 'saneem_highlight_search_results' );