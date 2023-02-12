<?php
/**
 * WordPress patches.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Removes .php-error side effect.
 *
 * @since 1.4.0
 *
 * @see https://developer.wordpress.org/reference/hooks/admin_body_class/
 *
 * @param string $classes A space separated list of class names.
 *
 * @return string The modified classes list.
 */

function neutralize_php_error_class()
{
    echo "
    <style type='text/css'>
    .php-error #adminmenuback,
    .php-error #adminmenuwrap {
      margin-top: 0 !important;
    }
    </style>
    ";
}

add_action( 'admin_head', 'mdb_theme_fse\neutralize_php_error_class' );
