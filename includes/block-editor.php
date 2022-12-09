<?php
/**
 * Settings and functions related to the block editor (aka Gutenberg).
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Removes all Gutenberg editor 'no-border-radius' style specifications.
 *
 * @since  1.0.0
 * @see    https://behind-the-scenes.net/using-wps-the_content-function-and-filter-hook/
 * @param  string $content    The content to be displayed.
 * @return string             The modified content.
 */

function mdb_modify_content( $content )
{
    $content = str_replace( 'no-border-radius', '', $content );

    return $content;
}

add_filter( 'the_content', 'mdb_modify_content', 10, 2 );



/**
 * Removes the (additional) post-title-wrapper.
 *
 * @since  1.1.0
 * @see    https://generatepress.com/forums/topic/when-editing-in-gutenberg-remove-the-title-from-the-editing-interface/ (thx David)
 * @param  array $editor_settings    The settings.
 * @return array                     The modified settings.
 */

function mdb_block_editor_settings_all( $editor_settings )
{
    $editor_settings['styles'][] = array(
        'css' => '.edit-post-visual-editor__post-title-wrapper { display: none; }'
    );

    return $editor_settings;
}

add_filter( 'block_editor_settings_all', 'mdb_block_editor_settings_all' );
