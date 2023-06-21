<?php
/**
 * Additional setup for the block styles.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Script and style modifications for the block editor.
 *
 * @since 1.0.0
 *
 * @see https://die-netzialisten.de/wordpress/gutenberg-breite-des-editors-anpassen/
 * @see https://www.billerickson.net/block-styles-in-gutenberg/
 * @see https://fullsiteediting.com/lessons/custom-block-styles/
 */

function register_block_styles()
{
    wp_enqueue_script(
        'mdb-block-styles',
        THEME_URI . 'assets/src/js/block-styles.js',        // maybe add a minified 'build' version?
        array(
            'wp-blocks',
            'wp-dom-ready',
            'wp-edit-post'
        ),
        THEME_VERSION,
        true
    );
}

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\register_block_styles' );
