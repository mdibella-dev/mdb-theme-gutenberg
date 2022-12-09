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
<!-- wp:html -->
<div id="slideout" class="wp-block-group">
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
<!-- /wp:html -->
<?php

$content = ob_get_contents();
ob_end_clean();



/** Return the pattern */

return array(
    'title'    => __( 'Slideout navigation', THEME_DOMAIN ),
    'inserter' => false,
    'content'  => $content
);
