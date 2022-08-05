<?php
/**
 * Additional setup for the block variations.
 *
 * @author  Marco Di Bella <mdb@marcodibella.de>
 * @package mdb-theme-fse
 */


defined( 'ABSPATH' ) or exit;



/**
 * Script and style modifications for the block editor; adds block variations.
 *
 * @since 1.0.0
 *
 * @see https://fullsiteediting.com/lessons/block-variations/
 * @see https://die-netzialisten.de/block-variations-fur-gutenberg-blocke/
 */

function mdb_register_block_variations()
{
    wp_enqueue_script(
        'mdb-block-variations',
        get_template_directory_uri() . '/assets/src/js/block-variations.js',            // maybe add a 'build' version?
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ), 
        0,
        true
    );
}

add_action( 'enqueue_block_editor_assets', 'mdb_register_block_variations' );
