<?php
/**
 * The theme's core file.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL ^ E_NOTICE );



/** Variables and definitions */

define( 'MDB_DEV', false );                 // Turn development mode on/off
define( 'MDB_THEME_VERSION', '1.1.0' );     // The theme's version



/** Include files */

require_once( get_template_directory() . '/includes/setup.php' );
require_once( get_template_directory() . '/includes/block-patterns.php' );
require_once( get_template_directory() . '/includes/block-styles.php' );
require_once( get_template_directory() . '/includes/block-editor.php' );
require_once( get_template_directory() . '/includes/performance.php' );
