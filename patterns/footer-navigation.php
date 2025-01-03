<?php
/**
 * Title: Footer Navigation
 * Slug: mdb-theme-fse/footer-navigation
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"padding":{"bottom":"var:preset|spacing|40"}}},"className":"site-component-footer has-global-padding is-layout-constrained"} -->
<div class="wp-block-group site-component-footer has-global-padding is-layout-constrained" style="margin-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","fontWeight":"600","textTransform":"uppercase"}}} -->
    <p class="has-text-align-center" style="font-size:14px;font-weight:600;text-transform:uppercase"><a href="/impressum"><?php echo __( 'Imprint', 'mdb-theme-fse' ); ?></a></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"0"},"blockGap":"2rem"}}} -->
    <div class="wp-block-buttons" style="margin-bottom:0">
        <!-- wp:button {"className":"is-style-navigation-faux-anchor"} -->
        <div class="wp-block-button is-style-navigation-faux-anchor"><a class="wp-block-button__link wp-element-button" href="mailto:kontakt@marcodibella.de"><span class="svg-symbol svg-symbol-mail"></span></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-navigation-faux-anchor"} -->
        <div class="wp-block-button is-style-navigation-faux-anchor"><a class="wp-block-button__link wp-element-button" href="https://github.com/mdibella-dev" target="_blank" rel="noreferrer noopener"><span class="svg-symbol svg-symbol-github"></span></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-navigation-faux-anchor"} -->
        <div class="wp-block-button is-style-navigation-faux-anchor"><a class="wp-block-button__link wp-element-button" href="https://profiles.wordpress.org/mdibella/" target="_blank" rel="noreferrer noopener"><span class="svg-symbol svg-symbol-wordpress"></span></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-navigation-faux-anchor"} -->
        <div class="wp-block-button is-style-navigation-faux-anchor"><a class="wp-block-button__link wp-element-button" href="https://www.xing.com/profile/Marco_DiBella4/cv" target="_blank" rel="noreferrer noopener"><span class="svg-symbol svg-symbol-xing"></span></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-navigation-faux-anchor"} -->
        <div class="wp-block-button is-style-navigation-faux-anchor"><a class="wp-block-button__link wp-element-button" href="https://www.linkedin.com/in/mdibella-dev/" target="_blank" rel="noreferrer noopener"><span class="svg-symbol svg-symbol-linkedin"></span></a></div>
        <!-- /wp:button -->

    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
