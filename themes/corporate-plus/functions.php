<?php
/**
 * Corporate Plus functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Corporate Plus
 */


/**
 *  Default Theme layout options
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return array $corporate_plus_theme_layout
 *
 */
if ( !function_exists('corporate_plus_get_default_theme_options') ) :
    function corporate_plus_get_default_theme_options() {

        $default_theme_options = array(
            /*feature section options*/
            'corporate-plus-slider-type'  => 'text-slider',
            'corporate-plus-feature-slider-image-only'  => '',
            'corporate-plus-fs-image-display-options'  => 'full-screen-bg',
            'corporate-plus-feature-page'  => 0,
            'corporate-plus-featured-slider-number'  => 2,
            'corporate-plus-go-down'  => '',
            'corporate-plus-enable-feature'  => 1,
            'corporate-plus-slider-know-more-text'  => __( "Know More", "corporate-plus" ),

            /*header options*/
            'corporate-plus-header-logo'  => '',
            'corporate-plus-header-id-display-opt' => 'title-and-tagline',
            'corporate-plus-enable-sticky-menu' => 1,
            'corporate-plus-enable-woo-menu' => 1,

            'corporate-plus-facebook-url'  => '',
            'corporate-plus-twitter-url'  => '',
            'corporate-plus-youtube-url'  => '',
            'corporate-plus-google-plus-url'  => '',
            'corporate-plus-enable-social'  => 0,

            /*footer options*/
            'corporate-plus-footer-copyright'  => __( '&copy; All right reserved 2016', 'corporate-plus' ),

            /*layout/design options*/
            'corporate-plus-hide-front-page-content'  => '',

            /*layout/design options*/
            'corporate-plus-sidebar-layout'  => 'right-sidebar',
            'corporate-plus-front-page-sidebar-layout'  => 'right-sidebar',
            'corporate-plus-archive-sidebar-layout'  => 'right-sidebar',

            'corporate-plus-blog-archive-layout'  => 'left-image',
            'corporate-plus-blog-archive-img-size'  => 'full',
            'corporate-plus-primary-color'  => '#F88C00',
            'corporate-plus-custom-css'  => '',

            'corporate-plus-enable-animation'  => '',

            'corporate-plus-blog-archive-more-text'  => __( 'Read More', 'corporate-plus' ),

            /*woocommerce*/
            'corporate-plus-wc-shop-archive-sidebar-layout'     => 'no-sidebar',
            'corporate-plus-wc-product-column-number'           => 4,
            'corporate-plus-wc-shop-archive-total-product'      => 16,
            'corporate-plus-wc-single-product-sidebar-layout'   => 'no-sidebar',

            /*theme options*/
            'corporate-plus-search-placholder'  => __( 'Search', 'corporate-plus' ),
            'corporate-plus-show-breadcrumb'  => 0,
        );

        return apply_filters( 'corporate_plus_default_theme_options', $default_theme_options );
    }
endif;

/**
 *  Get theme options
 *
 * @since Corporate Plus 1.0.0
 *
 * @param null
 * @return array corporate_plus_theme_options
 *
 */
if ( !function_exists('corporate_plus_get_theme_options') ) :
    function corporate_plus_get_theme_options() {

        $corporate_plus_default_theme_options = corporate_plus_get_default_theme_options();
        $corporate_plus_get_theme_options = get_theme_mod( 'corporate_plus_theme_options');
        if( is_array( $corporate_plus_get_theme_options )){
            return array_merge( $corporate_plus_default_theme_options ,$corporate_plus_get_theme_options );
        }
        else{
            return $corporate_plus_default_theme_options;
        }
    }
endif;

$corporate_plus_saved_theme_options = corporate_plus_get_theme_options();
$GLOBALS['corporate_plus_customizer_all_values'] = $corporate_plus_saved_theme_options;

/**
 * Require init.
 */
require_once trailingslashit( get_template_directory() ).'acmethemes/init.php';