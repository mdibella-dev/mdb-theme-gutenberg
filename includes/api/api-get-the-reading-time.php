<?php
/**
 * A function
 *
 * @author  Marco Di Bella
 * @package Patches
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Return the estimated reading time
 *
 * @since 1.0.0
 *
 * @return string The result.
 */

function get_the_reading_time( $post = null ) {

    $word    = str_word_count( strip_tags( get_the_content( $post ) ) );
    $divider = 150;
    $min     = floor( $word/$divider );
    $sec     = floor( $word%$divider/($divider/60) );
    $time    = ( $sec < 30 )? $min : $min+1;

    return $time;

}
