<?php
/**
 * Title: Header Navigation
 * Slug: mdb-theme-fse/header-navigation
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2em"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:paragraph {"align":"left","fontSize":"standard","style":{"typography":{"textTransform":"uppercase"}}} -->
        <p class="has-text-align-left has-standard-font-size" style="font-size:1rem;text-transform:uppercase"><a href="/" rel="home">Marco <strong>Di Bella</strong></a></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"wp-group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group wp-group">
            <!-- wp:navigation {"ref":8814,"overlayMenu":"never","className":"primary-desktop-navigation","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"}} /-->

            <!-- wp:buttons {"className":"primary-mobile-navigation"} -->
            <div class="wp-block-buttons primary-mobile-navigation">
                <!-- wp:button {"className":"is-style-navigation-faux-anchor is-navbar-hamburger slideout-trigger"} -->
                <div class="wp-block-button is-style-navigation-faux-anchor is-navbar-hamburger slideout-trigger"><a class="wp-block-button__link wp-element-button" href="#"><span class="svg-symbol svg-symbol-hamburger"></span></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
