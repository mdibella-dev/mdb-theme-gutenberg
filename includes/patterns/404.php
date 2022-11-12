<?php
/**
 * Block pattern: 404
 *
 * @author   Marco Di Bella
 * @package  mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Do the rendering */

ob_start();

?>
<!-- wp:group {"tagName":"section","className":"content"} -->
<section class="wp-block-group content">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-transparent marco-404 no-margin-top"} -->
<figure class="wp-block-image size-full is-style-transparent marco-404 no-margin-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>'/assets/images/marco-404.png"></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->'
<?php

$content = ob_get_contents();
ob_end_clean();



/** Return the pattern */

return array(
    'title'    => __( '404', 'mdb' ),
    'inserter' => false,
    'content'  => $content
);
