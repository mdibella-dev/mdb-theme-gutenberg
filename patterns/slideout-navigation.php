<?php
/**
 * Title: Slideout Navigation
 * Slug: mdb-theme-fse/slideout-navigation
 * Inserter: no
 */
?>


<!-- wp:group {"className":"site-component-slideout"}} -->
<div class="wp-block-group site-component-slideout">

    <!-- wp:group {"className":"slideout-content-wrapper","layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group slideout-content-wrapper">

        <!-- wp:group {"className":"slideout-content"} -->
        <div class="wp-block-group slideout-content">

            <!-- wp:columns {"className":"slideout-primary","verticalAlignment":"top"} -->
            <div class="slideout-primary wp-block-columns are-vertically-aligned-top">

                <!-- wp:column {"verticalAlignment":"top"} -->
                <div class="wp-block-column is-vertically-aligned-top">
                    <!-- wp:list -->
                    <ul>
                        <!-- wp:list-item {"className":"label"} -->
                        <li class="label"><span><?php echo __( 'News', 'mdb-theme-fse' ); ?></span></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="/blog/"><?php echo __( 'Blog', 'mdb-theme-fse' ); ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top"} -->
                <div class="wp-block-column is-vertically-aligned-top">
                    <!-- wp:list -->
                    <ul>
                        <!-- wp:list-item {"className":"label"} -->
                        <li class="label"><span><?php echo __( 'Work', 'mdb-theme-fse' ); ?></span></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="/portfolio/"><?php echo __( 'Web &amp; Media', 'mdb-theme-fse' ); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="/publikationen/"><?php echo __( 'Publications', 'mdb-theme-fse' ); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="/vortraege/"><?php echo __( 'Lectures', 'mdb-theme-fse' ); ?></a></li>
                        <!-- /wp:list-item -->

                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top"} -->
                <div class="wp-block-column is-vertically-aligned-top">
                    <!-- wp:list -->
                    <ul>
                        <!-- wp:list-item {"className":"label"} -->
                        <li class="label"><span><?php echo __( 'Personal', 'mdb-theme-fse' ); ?></span></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="/about/"><?php echo __( 'About Me', 'mdb-theme-fse' ); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="mailto:kontakt@marcodibella.de"><?php echo __( 'Contact', 'mdb-theme-fse' ); ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
