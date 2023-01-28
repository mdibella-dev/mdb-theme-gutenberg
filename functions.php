<?php
/**
 * The theme's core file.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL ^ E_NOTICE );



/** Variables and definitions */

define( 'THEME_VERSION', '1.4.0' );                     // The theme's version
define( 'THEME_DOMAIN', 'mdb' );                        // The theme's text domain
define( 'THEME_DIR', get_template_directory() );        // The theme's directory



/** Include files */

require_once( THEME_DIR . '/includes/setup.php' );
require_once( THEME_DIR . '/includes/block-patterns.php' );
require_once( THEME_DIR . '/includes/block-styles.php' );
require_once( THEME_DIR . '/includes/block-editor.php' );
require_once( THEME_DIR . '/includes/performance.php' );
require_once( THEME_DIR . '/includes/backend.php' );
