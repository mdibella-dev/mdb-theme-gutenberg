<?php
/**
 * Additional setup for the block styles.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Script and style modifications for the block editor.
 *
 * @since 1.0.0
 * @see   https://die-netzialisten.de/wordpress/gutenberg-breite-des-editors-anpassen/
 * @see   https://www.billerickson.net/block-styles-in-gutenberg/
 * @see   https://fullsiteediting.com/lessons/custom-block-styles/
 */

function mdb_register_block_styles()
{
    wp_enqueue_script(
        'mdb-block-styles',
        get_template_directory_uri() . '/assets/src/js/block-styles.js',        // maybe add a 'build' version?
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        MDB_THEME_VERSION,
        true
    );
}

add_action( 'enqueue_block_editor_assets', 'mdb_register_block_styles' );
