<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

$theme = wp_get_theme();
define( 'ULTRALITE_THEME', $theme->get( 'Name' ) );

if ( !function_exists( 'ultra_lite_enqueue_scripts' ) ):
    function ultra_lite_enqueue_scripts() {
        $ultra_font_args = array('family' => 'Poppins:100,200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap');
        wp_enqueue_style('ultra-lite-fonts', add_query_arg($ultra_font_args, "//fonts.googleapis.com/css"));
        wp_enqueue_style( 'ultra_parent_style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
        wp_enqueue_script('ultra-lite-custom',trailingslashit( get_stylesheet_directory_uri() ) . 'assets/custom.js',array('jquery'),'1.0.0',true);
        
        /* Localize Function */
        $sticky_menu = get_theme_mod( 'ultra_seven_sticky_menu','show' );
	    $ultra_js_params = array(
	        'sticky_menu'   => $sticky_menu, 
	    );
	    wp_localize_script( 'ultra-lite-custom', 'ultra_params', $ultra_js_params );
    }
endif;
add_action( 'wp_enqueue_scripts', 'ultra_lite_enqueue_scripts', 10 );

/* Include Files */
require get_stylesheet_directory().'/inc/ultra-lite-functions.php';
require get_stylesheet_directory().'/inc/ultra-lite-customizer.php';

