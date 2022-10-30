<?php
/**
 * Main functions for setting up the theme.
 *
 * @author   Marco Di Bella
 * @package  mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



if( ! function_exists( 'mdb_after_setup_theme' ) ) :

    /**
     * Performs basic settings for the theme.
     *
     * @since  1.0.0
     */

     function mdb_after_setup_theme()
     {
        // Enables internationalization.
        load_theme_textdomain( 'mdb', get_template_directory() . '/languages' );


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
        register_nav_menu( 'primary', __( 'Primary navigation', 'mdb' ) );
        register_nav_menu( 'secondary', __( 'Secondary navigation', 'mdb' ) );
        register_nav_menu( 'page', __( 'Page navigation', 'mdb' ) );
    }

    add_action( 'after_setup_theme', 'mdb_after_setup_theme' );

endif;



/**
 * Loads a set of necessary JS scripts and stylesheets.
 *
 * @since  1.0.0
 */

function mdb_enqueue_scripts()
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
        MDB_THEME_VERSION
    );

    if( defined( 'MDB_DEV' ) and ( true === MDB_DEV ) ):
        wp_enqueue_script(
            'mdb-frontend-script',
            get_template_directory_uri() . '/assets/src/js/frontend.js',
            array( 'jquery' ),
            MDB_THEME_VERSION,
            true
        );
    else :
        wp_enqueue_script(
            'mdb-frontend-script',
            get_template_directory_uri() . '/assets/build/js/frontend.min.js',
            array( 'jquery' ),
            MDB_THEME_VERSION,
            true
        );
    endif;
}

add_action( 'wp_enqueue_scripts', 'mdb_enqueue_scripts', 9999 );
