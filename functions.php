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

const THEME_VERSION = '1.4.0';     // The theme's version
const THEME_DOMAIN  = 'mdb';       // The theme's text domain



/** Include files */

require_once( get_template_directory() . '/includes/setup.php' );
require_once( get_template_directory() . '/includes/block-patterns.php' );
require_once( get_template_directory() . '/includes/block-styles.php' );
require_once( get_template_directory() . '/includes/block-editor.php' );
require_once( get_template_directory() . '/includes/performance.php' );
require_once( get_template_directory() . '/includes/backend.php' );
