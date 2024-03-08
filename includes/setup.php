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



/**
 * Performs basic settings for the theme.
 *
 * @since 1.0.0
 */

function theme_setup() {
    // Enables internationalization.
    load_theme_textdomain( 'mdb-theme-fse', THEME_DIR . 'languages' );


    // Adds 'wide' support for the block editor (Gutenberg).
    add_theme_support( 'align-wide' );


    // Enables responsive embedding of media embeds.
    add_theme_support( 'responsive-embeds' );


    // Adds editor styles.
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/build/css/style-frontend.min.css' );


    // Sets media sizes.
    if ( 320 !== get_option( 'thumbnail_size_w' ) ) {
        update_option( 'thumbnail_size_w', 320 );
        update_option( 'thumbnail_size_h', 9999 );
        update_option( 'thumbnail_crop', 0 );
    }

    if ( 640 !== get_option( 'medium_size_w' ) ) {
        update_option( 'medium_size_w', 640 );
        update_option( 'medium_size_h', 9999 );
    }

    if ( 1200 !== get_option( 'large_size_w' ) ) {
        update_option( 'large_size_w', 1200 );
        update_option( 'large_size_h', 9999 );
    }
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_setup' );



/**
 * Loads a set of necessary JS scripts and stylesheets.
 *
 * @since 1.0.0
 */

function theme_scripts() {

    /**
     * Registers and loads vendor styles and scripts.
     */

    wp_enqueue_script(
        'anime',
        THEME_URI . 'assets/build/js/vendors/anime/anime.min.js',
        [],
        false,
        [
            'in_footer' => true,
            'strategy'  => 'async'
        ]
    );



    /**
     * Registers and loads the theme's own scripts.
     */

    $filename = 'assets/build/js/frontend.min.js';

    if( file_exists( THEME_DIR . $filename ) ) {

        wp_enqueue_script(
            'mdb-frontend-script',
            THEME_URI . $filename,
            [],
            THEME_VERSION . '.' . filemtime( THEME_DIR . $filename ),
            [
                'in_footer' => true,
                'strategy'  => 'async'
            ]
        );
    }


    /**
    * Registers and loads the theme's own styles.
    *
    * Note: The style.css in the main directory is only used for theme identification and versioning.
    * Actually the (compressed) style information can be found in frontend(.min).css.
    */

    $filename = 'assets/build/css/style-frontend.min.css';

    if( file_exists( THEME_DIR . $filename ) ) {

        wp_enqueue_style(
            'mdb-frontend-style',
            THEME_URI . $filename,
            [],
            THEME_VERSION . '.' . filemtime( THEME_DIR . $filename ),
        );
    }

}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\theme_scripts', 9999 );
