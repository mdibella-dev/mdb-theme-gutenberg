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
 * Checks whether a URL is external or internal
 *
 * @since 1.0.0
 *
 * @see https://stackoverflow.com/questions/22964579/how-to-check-whether-a-url-is-external-url-or-internal-url-with-php
 *
 * @param string $url The URL to check.
 *
 * @return bool The result.
 */

function is_external( $url ) {
    $components = parse_url( $url );
    $domain     = $_SERVER['HTTP_HOST'];

    //  We will treat URL like '/relative.php' as relative
    if ( empty( $components['host'] ) ) {
        return false;
    }

    // Check if the URL host looks exactly like the local host
    if ( strcasecmp( $components['host'], $domain ) === 0 ) {
        return false;
    }

    // Check if the URL host is a subdomain
    return strrpos( strtolower( $components['host'] ), '.' . $domain ) !== strlen( $components['host'] ) - strlen( '.' . $domain );
}
