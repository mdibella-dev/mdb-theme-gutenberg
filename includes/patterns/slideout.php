<?php
/**
 * Block pattern: Slideout
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
<!-- wp:group -->
<div id="slideout" class="wp-block-group">

    <!-- wp:group -->
    <div id="slideout-content-wrapper" class="wp-block-group">

        <!-- wp:group -->
        <div id="slideout-content" class="wp-block-group">

            <!-- wp:html -->
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => 'nav',
                'container_id'   => 'primary',
            ) );
            ?>
            <!-- /wp:html -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
<?php

$content = ob_get_contents();
ob_end_clean();



/** Return the pattern */

return array(
    'title'    => __( 'Slideout Navigation', 'mdb-theme-fse' ),
    'inserter' => false,
    'content'  => $content
);
