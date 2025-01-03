<?php
/**
 * Title: Publications Loop
 * Slug: mdb-theme-fse/publications-loop
 * Template Types: publications
 * Inserter: no
 */

use mdb_theme_core\api as publication;


$args = [
    'posts_per_page'    => -1,
    'post_type'         => 'publication',
    'post_status'       => 'publish'
];

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    ?>

    <!-- wp:list {"className":"publications-list"} -->
    <ol class="wp-block-list publications-list" data-filter="">

    <?php
    while ( $query->have_posts() ) {

        $query->the_post();

        $terms = get_the_terms( get_the_ID(), 'publication_group');
        $part  = publication\build_citation( get_the_ID(), MDB_BUILD_ARRAY );


        if ( ! empty( $terms ) and ! is_wp_error( $terms ) ) {
            ?>
            <!-- wp:list-item {"className":"publications-list-item filter-<?php echo $terms[0]->slug; ?>"} -->
            <li class='publications-list-item filter-<?php echo $terms[0]->slug; ?>'>

                <!-- wp:group {"className":"publications-list-item-arrow"} -->
                <div class="publications-list-item-arrow">
                    <a href="<?php echo the_permalink(); ?>" title="<?php echo __( 'Show publication details', 'mdb-theme-fse' ); ?>"><?php echo __( 'Details', 'mdb-theme-fse' ); ?></a>
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"publications-list-item-description"} -->
                <div class="publications-list-item-description">

                    <!-- wp:paragraph -->
                    <p><?php echo $part[0]; ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"publications-list-item-pubnote"} -->
                    <p class="publications-list-item-pubnote"><?php echo $part[1]; ?></p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"publications-list-item-image"} -->
                <div class="wp-block-group publications-list-item-image">
                <?php
                if ( has_post_thumbnail() ) {
                    $id   = get_post_thumbnail_id();
                    $url  = get_the_post_thumbnail_url();
                    $alt  = "";   // future purpose (SEO)
                    $size = "75px";
                ?>
                    <!-- wp:image {"id":<?php echo $id;?>,"width":"<?php echo $size;?>","sizeSlug":"thumbnail","linkDestination":"custom","className":"is-style-shaded"} -->
                    <figure class="wp-block-image size-thumbnail is-resized is-style-shaded" style="margin-top:0;margin-bottom:0">
                        <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $url;?>" alt="<?php echo $alt;?>" class="wp-image-<?php echo $id;?>" style="width:<?php echo $size;?>"/></a>
                    </figure>
                    <!-- /wp:image -->
                <?php
                }
                ?>
                </div>
                <!-- /wp:group -->

            </li>
            <!-- /wp:list-item -->
            <?php
        }
    }
    ?>
    </ol>
    <!-- /wp:list -->
    <?php

    wp_reset_postdata();
}
