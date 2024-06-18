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
     * Registers and loads the theme's own scripts.
     */

    $scripts = [
        'anime' => [
            'path'    => 'assets/build/vendors/anime/anime.min.js',
            'deps'    => [],
            'version' => false,
            'args'    => [
                'in_footer' => true,
                'strategy'  => 'async'
            ]
        ],
        'mdb-frontend-script' => [
            'path'    => 'assets/build/js/frontend.min.js' /*'assets/src/js/frontend.js'*/,
            'deps'    => [
                'anime'
            ],
            'version' => '',
            'args'    => [
                'in_footer' => true,
                'strategy'  => 'async'
            ]
        ]
    ];

    // Register (and enqueue) all scripts in the given order
    foreach ( $scripts as $handle => $setup ) {

        if ( file_exists( THEME_DIR . $setup['path'] ) ) {

            $version = '';

            if ( is_string( $setup['version'] ) ) {
                $version = ( empty( $setup['version'] ) )? THEME_VERSION . '.' . filemtime( THEME_DIR . $setup['path'] ) : $setup['version'];
            }  else if ( is_bool( $setup['version'] ) && ( false === $setup['version'] ) ) {
                $version = false;
            } else {
                $version = null;
            }

            wp_register_script(
                $handle,
                THEME_URI . $setup['path'],
                $setup['deps'],
                $version,
                $setup['args'],
            );

            wp_enqueue_script( $handle );
        }

    }


    /**
     * Registers and loads the theme's own styles.
     *
     * Note: The style.css in the main directory is only used for theme identification and versioning.
     * Actually the (compressed) style information can be found in frontend(.min).css.
     */

    $styles = [
        'mdb-frontend-style' => [
            'path'    => 'assets/build/css/frontend.min.css',
            'deps'    => [],
            'version' => ''
        ]
    ];


    // Register (and enqueue) all styles in the given order
    foreach ( $styles as $handle => $setup ) {

        if ( file_exists( THEME_DIR . $setup['path'] ) ) {

            $version = '';

            if ( is_string( $setup['version'] ) ) {
                $version = ( empty( $setup['version'] ) )? THEME_VERSION . '.' . filemtime( THEME_DIR . $setup['path'] ) : $setup['version'];
            }  else if ( is_bool( $setup['version'] ) && ( false === $setup['version'] ) ) {
                $version = false;
            } else {
                $version = null;
            }

            wp_register_style(
                $handle,
                THEME_URI . $setup['path'],
                $setup['deps'],
                $version
            );

            wp_enqueue_style( $handle );
        }

    }

}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\theme_scripts', 9999 );
