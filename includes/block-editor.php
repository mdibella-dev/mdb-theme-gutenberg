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
 * @param  string $content    The content to be displayed.
 * @return string             The modified content.
 *
 * @see    https://behind-the-scenes.net/using-wps-the_content-function-and-filter-hook/
 */

add_filter( 'the_content', function( $content ) {
    $content = str_replace( 'no-border-radius', '', $content );

    return $content;
}, 10, 2 );





/**
 * Removes the (additional) post-title-wrapper.
 *
 * @since  1.1.0
 * @param  array $editor_settings    The settings.
 * @return array                     The modified settings.
 *
 * @see    https://generatepress.com/forums/topic/when-editing-in-gutenberg-remove-the-title-from-the-editing-interface/ (thx David)
 */

add_filter( 'block_editor_settings_all', function( $editor_settings ) {
    $css = '.edit-post-visual-editor__post-title-wrapper { display: none; }';

    $editor_settings['styles'][] = array( 'css' => $css );

    return $editor_settings;
} );
