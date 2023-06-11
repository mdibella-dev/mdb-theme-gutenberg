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

add_action( 'enqueue_block_editor_assets', 'mdb_theme_fse\register_block_styles' );



/**
 * Filters whether block styles should be loaded separately.
 *
 * Some custom blocks that consist of core blocks (for example paragraph) are not recognised as such during the rendering process.
 * This means that the corresponding inline styles are not loaded. The following filter seems to fix this.
 * Please remove it if a better solution is found or the rendering of the affected block has been redesigned.
 *
 * @since 1.7.0
 *
 * @param bool $load_separate_assets Whether separate assets will be loaded.
 *                                   Default false (all block assets are loaded, even when not used).
 *
 * @see https://github.com/WordPress/gutenberg/issues/38905
 * @see https://developer.wordpress.org/reference/functions/wp_should_load_separate_core_block_assets/
 */

add_filter( 'should_load_separate_core_block_assets', '__return_false' );
