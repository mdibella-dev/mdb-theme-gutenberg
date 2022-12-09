<?php
/**
 * Main functions for setting up the theme.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



if( ! function_exists( 'theme_setup' ) ) :

    /**
     * Performs basic settings for the theme.
     *
     * @since 1.0.0
     */

     function theme_setup()
     {
        // Enables internationalization.
        load_theme_textdomain( THEME_DOMAIN, get_template_directory() . '/languages' );


        // Adds 'wide' support for the block editor (Gutenberg).
        add_theme_support( 'align-wide' );


        // Enables responsive embedding of media embeds.
        add_theme_support( 'responsive-embeds' );


        // Adds editor styles.
        add_theme_support( 'editor-styles' );
        add_editor_style( 'assets/build/css/style-editor.min.css' );


        // Sets media sizes.
        if( 320 !== get_option( 'thumbnail_size_w' ) ) :
            update_option( 'thumbnail_size_w', 320 );
            update_option( 'thumbnail_size_h', 9999 );
            update_option( 'thumbnail_crop', 0 );
        endif;

        if( 640 !== get_option( 'medium_size_w' ) ) :
            update_option( 'medium_size_w', 640 );
            update_option( 'medium_size_h', 9999 );
        endif;

        if( 1200 !== get_option( 'large_size_w' ) ) :
            update_option( 'large_size_w', 1200 );
            update_option( 'large_size_h', 9999 );
        endif;


        // Registers the navigation menus.
        register_nav_menu( 'primary', __( 'Primary navigation', THEME_DOMAIN ) );
        register_nav_menu( 'secondary', __( 'Secondary navigation', THEME_DOMAIN ) );
        register_nav_menu( 'page', __( 'Page navigation', THEME_DOMAIN ) );
    }

    add_action( 'after_setup_theme', 'mdb_theme_fse\theme_setup' );

endif;



/**
 * Loads a set of necessary JS scripts and stylesheets.
 *
 * @since 1.0.0
 */

function theme_scripts()
{
    /**
     * Registers and loads vendor styles and scripts.
     */

    wp_register_script(
        'jquery-easing',
        get_template_directory_uri() . '/assets/build/js/jquery.easing.min.js',
        array( 'jquery' ),
        false,
        true
    );
    wp_enqueue_script( 'jquery-easing' );


    /**
     * Registers and loads the theme's own styles and scripts.
     *
     * Note: The style.css in the main directory is only used for theme identification and versioning.
     * Actually the (compressed) style information can be found in frontend(.min).css.
     */

    wp_enqueue_style(
        'mdb-frontend-style',
        get_template_directory_uri() . '/assets/build/css/style-frontend.min.css',
        array(),
        THEME_VERSION
    );

    wp_enqueue_script(
        'mdb-frontend-script',
        get_template_directory_uri() . '/assets/build/js/frontend.min.js',
        array( 'jquery' ),
        THEME_VERSION,
        true
    );

}

add_action( 'wp_enqueue_scripts', 'mdb_theme_fse\theme_scripts', 9999 );
