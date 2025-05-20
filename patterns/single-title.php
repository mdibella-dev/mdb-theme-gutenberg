<?php
/**
 * Title: Blog Post Date
 * Slug: mdb-theme-fse/single-title
 */

use mdb_theme_fse as api;
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)">
    <!-- wp:paragraph {"style":"typography":{"textTransform":"uppercase"},"fontSize":"small"} -->
    <p class="has-small-font-size" style="text-transform:uppercase"><a href="/blog/" target="_self" style="font-weight:600"><?php echo __( 'Blog','mdb-theme-fse' );?></a><?php echo ' / ' . get_the_date(); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:post-title {"level":1} /-->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
    <div class="wp-block-group">
        <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:html -->
            <span style="text-align:center">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="18px" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                </svg>
            </span>
            <!-- /wp:html -->
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="text-transform:uppercase"><?php
            $reading_time = api\get_the_reading_time();

            printf (
                _n( '%s minute', '%s minutes', $reading_time, 'mdb-theme-fse' ),
                number_format_i18n( $reading_time )
            );?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:html -->
            <span style="text-align:center">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="18px" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z"/>
                    <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z"/>
                </svg>
            </span>
            <!-- /wp:html -->
            <!-- wp:post-terms {"tagName":"span","term":"post_tag","style":{"typography":{"textTransform":"uppercase"},"spacing":{"padding":"0","margin":"0"}},"fontSize":"small"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
