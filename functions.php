<?php
/**
 * The theme's core file.
 *
 * @author  Marco Di Bella <mdb@marcodibella.de>
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL ^ E_NOTICE );



/** Turn off development mode */

define( 'MDB_DEV', false );



/** Include files */

require_once( get_template_directory() . '/includes/setup.php' );
require_once( get_template_directory() . '/includes/block-patterns.php' );
require_once( get_template_directory() . '/includes/block-styles.php' );
require_once( get_template_directory() . '/includes/block-editor.php' );
require_once( get_template_directory() . '/includes/favicon.php' );
require_once( get_template_directory() . '/includes/performance.php' );
