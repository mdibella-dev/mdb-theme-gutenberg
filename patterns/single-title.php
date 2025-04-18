<?php
/**
 * Title: Blog Post Date
 * Slug: mdb-theme-fse/single-title
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)">
    <!-- wp:paragraph {"style":"typography":{"textTransform":"uppercase"},"fontSize":"small"} -->
    <p class="has-small-font-size" style="text-transform:uppercase"><a href="/blog/" target="_self" style="font-weight:600"><?php echo __( 'Blog','mdb-theme-fse' );?></a><?php echo ' / ' . get_the_date(); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:post-title {"level":1} /-->
</div>
<!-- /wp:group -->
