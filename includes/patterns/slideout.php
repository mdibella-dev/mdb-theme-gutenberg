<?php
/**
 * Block pattern: Slideout
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Do the rendering */

ob_start();

?>
<div id="slideout">
<div id="slideout-content-wrapper">
<div id="slideout-content">
<?php
wp_nav_menu( array(
    'theme_location' => 'primary',
    'container'      => 'nav',
    'container_id'   => 'primary',
) );
?>
<?php
wp_nav_menu( array(
    'theme_location' => 'secondary',
    'container'      => 'nav',
    'container_id'   => 'secondary',
) );
?>
</div>
</div>
</div>
<?php

$content = ob_get_contents();
ob_end_clean();



/** Return the pattern */

return array(
    'title'    => __( 'Slideout navigation', 'mdb' ),
    'inserter' => false,
    'content'  =>'<!-- wp:html -->' . $content . '<!-- /wp:html -->'
);
