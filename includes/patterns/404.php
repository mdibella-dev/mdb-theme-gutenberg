<?php
/**
 * Block pattern: 404
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Return the pattern */

return array(
    'title'    => __( '404', 'mdb' ),
    'inserter' => false,
    'content'  =>'<!-- wp:group {"tagName":"section","className":"content"} -->
<section class="wp-block-group content">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-transparent marco-404 no-margin-top"} -->
<figure class="wp-block-image size-full is-style-transparent marco-404 no-margin-top"><img src="' . get_stylesheet_directory_uri() . '/assets/img/marco-404.png"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->'
);
