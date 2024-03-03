<?php
/**
 * Block pattern: Skills And Tools
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Do the rendering */

ob_start();

?>
<!-- wp:html -->
<?php

?>
<!-- /wp:html -->
<?php

$content = ob_get_contents();
ob_end_clean();



/** Return the pattern */

return [
    'title'    => __( 'Skills & Tools', 'mdb-theme-fse' ),
    'inserter' => false,
    'content'  => $content
];
