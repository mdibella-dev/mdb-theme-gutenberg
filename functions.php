<?php
/**
 * The theme's core file.
 *
 * @author  Marco Di Bella <mdb@marcodibella.de>
 * @package mdb-theme-fse
 */


defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL ^ E_NOTICE );


/** Turn off development mode */

define( 'MDB_DEV', true );


/** Include function library */

require_once( get_template_directory() . '/includes/setup.php' );
require_once( get_template_directory() . '/includes/block-patterns.php' );
require_once( get_template_directory() . '/includes/favicon.php' );
