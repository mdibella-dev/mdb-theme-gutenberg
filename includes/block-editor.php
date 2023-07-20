<?php
/**
 * Settings and functions related to the block editor (aka Gutenberg).
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Removes all Gutenberg editor 'no-border-radius' style specifications.
 *
 * @since 1.0.0
 *
 * @see https://behind-the-scenes.net/using-wps-the_content-function-and-filter-hook/
 *
 * @param string $content The content to be displayed.
 *
 * @return string The modified content.
 */

function remove_no_border_radius( $content )
{

    $content = str_replace( 'no-border-radius', '', $content );

    return $content;
}

add_filter( 'the_content', __NAMESPACE__ . '\remove_no_border_radius', 10, 2 );



/**
 * Removes the (additional) post-title-wrapper.
 *
 * @since 1.1.0
 *
 * @see https://generatepress.com/forums/topic/when-editing-in-gutenberg-remove-the-title-from-the-editing-interface/ (thx David)
 *
 * @param array $editor_settings The settings.
 *
 * @return array The modified settings.
 */

function block_editor_settings_all( $editor_settings )
{
    $editor_settings['styles'][] = [
        'css' => '.edit-post-visual-editor__post-title-wrapper { display: none; }'
    ];

    return $editor_settings;
}

add_filter( 'block_editor_settings_all', __NAMESPACE__ . '\block_editor_settings_all' );
