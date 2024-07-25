<?php
/**
 * A WordPress patch.
 *
 * @author  Marco Di Bella
 * @package Patches
 *
 * @todo Remove 'no-border-radius' also inside the editor
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Removes Gutenberg's 'no-border-radius' style specification from all blocks in the frontend.
 *
 * @since 1.0.0
 *
 * @see https://behind-the-scenes.net/using-wps-the_content-function-and-filter-hook/
 *
 * @param string $content The content to be displayed.
 *
 * @return string The modified content.
 */

function remove_no_border_radius( $content ) {

    $content = str_replace( 'no-border-radius', '', $content );

    return $content;
}

add_filter( 'the_content', __NAMESPACE__ . '\remove_no_border_radius', 10, 2 );
