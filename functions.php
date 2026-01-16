<?php 
/**
 * SKT Generic functions and definitions
 *
 * @package SKT Generic
 */

 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! function_exists( 'skt_generic_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function skt_generic_setup() {
	$GLOBALS['content_width'] = apply_filters( 'skt_generic_content_width', 640 );
	load_theme_textdomain( 'skt-generic', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );	
	add_theme_support( 'custom-logo', array(
		'height'      => 64,
		'width'       => 213,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'skt-generic' )			
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // skt_generic_setup
add_action( 'after_setup_theme', 'skt_generic_setup' );
function skt_generic_widgets_init() { 	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'skt-generic' ),
		'description'   => esc_html__( 'Appears on sidebar', 'skt-generic' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h3 class="widget-title titleborder"><span>',
		'after_title'   => '</span></h3>',
		'after_widget'  => '</aside>',
	) ); 
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'skt-generic' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-generic' ),
		'id'            => 'fc-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'skt-generic' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-generic' ),
		'id'            => 'fc-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'skt-generic' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-generic' ),
		'id'            => 'fc-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );		
		
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'skt-generic' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-generic' ),
		'id'            => 'fc-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );		
}
add_action( 'widgets_init', 'skt_generic_widgets_init' );
function skt_generic_font_url(){
		$font_url = '';		
		/* Translators: If there are any character that are not
		* supported by Poppins, trsnalate this to off, do not
		* translate into your own language.
		*/
		$poppins = _x('on','Poppins:on or off','skt-generic');
		
		if('off' !== $poppins ){
			$font_family = array();
			if('off' !== $poppins){
				$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
			}										
									
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
	return $font_url;
	}
function skt_generic_scripts() {
	if ( !is_rtl() ) {
		wp_enqueue_style( 'skt-generic-basic-style', get_stylesheet_uri() );
		wp_enqueue_style( 'skt-generic-main-style', get_template_directory_uri()."/css/responsive.css" );		
	}
	if ( is_rtl() ) {
		wp_enqueue_style( 'skt-generic-rtl', get_template_directory_uri() . "/rtl.css");
	}	
	wp_enqueue_style('skt-generic-font', skt_generic_font_url(), array());
	wp_enqueue_style( 'skt-generic-editor-style', get_template_directory_uri()."/editor-style.css" );
	wp_enqueue_style( 'skt-generic-base-style', get_template_directory_uri()."/css/style_base.css" );
	wp_enqueue_script( 'skt-generic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '01062020', true );
	wp_enqueue_script( 'skt-generic-customscripts', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery') );
	wp_localize_script( 'skt-generic-navigation', 'sktgenericScreenReaderText', array(
		'expandMain'   => __( 'Open main menu', 'skt-generic' ),
		'collapseMain' => __( 'Close main menu', 'skt-generic' ),
		'expandChild'   => __( 'Expand submenu', 'skt-generic' ),
		'collapseChild' => __( 'Collapse submenu', 'skt-generic' ),
	) );	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skt_generic_scripts' );

function skt_generic_admin_style() {
  wp_enqueue_style('skt-generic-admin-style', get_template_directory_uri()."/css/skt-generic-admin-style.css");
}
add_action('admin_enqueue_scripts', 'skt_generic_admin_style');

define('SKT_GENERIC_SKTTHEMES_URL','https://www.sktthemes.org');
define('SKT_GENERIC_SKTTHEMES_PRO_THEME_URL','https://www.sktthemes.org/shop/generic-wordpress-theme/');
define('SKT_GENERIC_SKTTHEMES_FREE_THEME_URL','https://www.sktthemes.org/shop/free-generic-wordpress-theme');
define('SKT_GENERIC_SKTTHEMES_THEME_DOC','https://www.sktthemesdemo.net/documentation/skt-generic-doc/');
define('SKT_GENERIC_SKTTHEMES_LIVE_DEMO','https://www.sktperfectdemo.com/demos/generic/');
define('SKT_GENERIC_SKTTHEMES_THEMES','https://www.sktthemes.org/themes');
define('SKT_GENERIC_SKTTHEMES_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Custom template for about theme.
 */
require get_template_directory() . '/inc/about-themes.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// get slug by id
function skt_generic_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}
if ( ! function_exists( 'skt_generic_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function skt_generic_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;
require_once get_template_directory() . '/customize-pro/example-1/class-customize.php';

add_filter( 'body_class','skt_generic_body_class' );
function skt_generic_body_class( $classes ) {
	if ( skt_generic_is_woocommerce_activated() ) {
		$classes[] = 'woocommerce';
	}
	
    return $classes;
}

/**
 * Filter the except length to 21 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function skt_generic_custom_excerpt_length( $length ) {
    if ( is_admin() ) return $length;
    return 25;
}
add_filter( 'excerpt_length', 'skt_generic_custom_excerpt_length', 999 );
 
/**
 *
 * Style For About Theme Page
 *
 */
function skt_generic_admin_about_page_css_enqueue($hook) {
   if ( 'appearance_page_skt_generic_guide' != $hook ) {
        return;
    }
    wp_enqueue_style( 'skt-generic-about-page-style', get_template_directory_uri() . '/css/skt-generic-about-page-style.css' );
}
add_action( 'admin_enqueue_scripts', 'skt_generic_admin_about_page_css_enqueue' );

/**
 * Check if WooCommerce is activated
 */
if ( ! function_exists( 'skt_generic_is_woocommerce_activated' ) ) {
	function skt_generic_is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}

function skt_generic_wp_admin_style($hook) {
	 	if ( 'themes.php' != $hook ) {
			return;
		}
		wp_enqueue_style( 'skt-generic-admin-style', get_template_directory_uri() . '/css/skt-generic-admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'skt_generic_wp_admin_style' );

// WordPress wp_body_open backward compatibility
if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function skt_generic_skip_link_focus_fix() {  
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php       
}
add_action( 'wp_print_footer_scripts', 'skt_generic_skip_link_focus_fix' );

function skt_generic_load_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'skt_generic_load_dashicons', 999);

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';