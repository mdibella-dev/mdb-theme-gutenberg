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
 * @since  1.1.0
 * @param  string $content    The content to be displayed.
 * @return string             The modified content.
 *
 * @see    https://behind-the-scenes.net/using-wps-the_content-function-and-filter-hook/
 */

function mdb_modify_content( $content )
{
    $content = str_replace(
        'no-border-radius',
        '',
        $content
    );

    return $content;
}

add_filter( 'the_content', 'mdb_modify_content', 10, 2 );
