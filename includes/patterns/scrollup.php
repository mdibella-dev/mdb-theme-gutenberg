<?php
/**
 * Block pattern: Scroll up button
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;


return array(
    'title'    => __( 'Scroll up button', 'mdb' ),
    'inserter' => false,
    'content'  =>'
<!-- wp:button --><div id="scrollup" class="wp-block-button"><a class="wp-block-button__link">
<svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"></path>
</svg></a></div><!-- /wp:button -->'
);
