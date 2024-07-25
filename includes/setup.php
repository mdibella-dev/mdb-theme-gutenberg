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


    // Load additional core block styles.
    $styled_blocks = [
        'button',
        'code',
        'columns',
        'cover',
        'embed',
        'heading',
        'image',
        'list',
        'media-text',
        'navigation',
        'paragraph',
        'post-title',
        'separator',
        'site-title'
    ];

    foreach ( $styled_blocks as $block_name ) {
        $args = [
            'handle' => "mdb-theme-$block_name",
            'src'    => get_theme_file_uri( "assets/build/css/blocks/$block_name.css" ),
        ];
        wp_enqueue_block_style( "core/$block_name", $args );
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
            'path'    => 'assets/src/js/frontend.js', //'assets/build/js/frontend.min.js'
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
            }  else if ( is_bool( $setup['version'] ) and ( false === $setup['version'] ) ) {
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
            'path'    => 'assets/build/css/frontend.css',
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
            }  else if ( is_bool( $setup['version'] ) and ( false === $setup['version'] ) ) {
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
