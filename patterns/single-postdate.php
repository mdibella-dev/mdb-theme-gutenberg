<?php
/**
 * Title: Blog Post Date
 * Slug: mdb-theme-fse/single-postdate
 */
?>

<!-- wp:paragraph {"style":"typography":{"textTransform":"uppercase"},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><a href="/blog/" target="_self" style="font-weight:600"><?php echo __( 'Blog','mdb-theme-fse' );?></a><?php echo ' / ' . get_the_date(); ?></p>
<!-- /wp:paragraph -->
