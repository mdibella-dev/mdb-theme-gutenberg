<?php
/**
 * Additional setup for the block styles.
 *
 * @author  Marco Di Bella <mdb@marcodibella.de>
 * @package mdb-theme-fse
 */


defined( 'ABSPATH' ) or exit;



/**
 * Script and style modifications for the block editor.
 *
 * @since 1.0.0
 *
 * @see https://die-netzialisten.de/wordpress/gutenberg-breite-des-editors-anpassen/
 * @see https://www.billerickson.net/block-styles-in-gutenberg/
 */

function mdb_add_block_editor_assets()
{
    wp_enqueue_script(
        'block-editor',
        get_template_directory_uri() . '/assets/src/js/block-styles.js',            // maybe add a 'build' version?
        array( 'wp-blocks', 'wp-dom' ),
        0,
        true
    );
}

add_action( 'enqueue_block_editor_assets', 'mdb_add_block_editor_assets' );
