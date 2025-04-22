<?php
/**
 * Title: Single Publication Content
 * Slug: mdb-theme-fse/publication-content
 *
 * @author  Marco Di Bella
 */

use mdb_theme_core\api as publication;



if ( have_rows( 'dokumenttypspezifische_angaben' ) ) {
    the_row();

    $year = trim( get_sub_field( 'ref_pubyear' ) );


    if ( have_rows( 'ref_authors' ) ) {
        $authors = [];

        while ( have_rows( 'ref_authors' ) ) {
            the_row();

            $name = trim( get_sub_field( 'au_firstname' ) . ' ' .  get_sub_field( 'au_lastname' ) );

            if ( ! empty( $name ) ) {
                $authors[] = $name;
            }
        }
    }
}

/**
 * Checks whether a URL is external or internal
 *
 * @since 1.0.0
 *
 * @see https://stackoverflow.com/questions/22964579/how-to-check-whether-a-url-is-external-url-or-internal-url-with-php
 *
 * @param string $url The URL to check.
 *
 * @return bool The result.
 */

function is_external( $url ) {
    $components = parse_url( $url );
    $domain     = $_SERVER['HTTP_HOST'];

    //  We will treat URL like '/relative.php' as relative
    if ( empty( $components['host'] ) ) {
        return false;
    }

    // Check if the URL host looks exactly like the local host
    if ( strcasecmp( $components['host'], $domain ) === 0 ) {
        return false;
    }

    // Check if the URL host is a subdomain
    return strrpos( strtolower( $components['host'] ), '.' . $domain ) !== strlen( $components['host'] ) - strlen( '.' . $domain );
}

?>


<?php
/**
* Show image
*/

if ( has_post_thumbnail() ) {
?>
    <!-- wp:image {"width":"300px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-shaded"} -->
    <figure class="wp-block-image aligncenter size-full is-resized is-style-shaded"> <?php
    the_post_thumbnail(
        'size-full',
        [
            'class' => 'wp-image-' . get_post_thumbnail_id()
        ]
    );
    ?>
    </figure>
    <!-- /wp:image -->

    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
<?php
}


/**
* Show Title
*/
?>
<!-- wp:paragraph {"style":"typography":{"textTransform":"uppercase"},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><a href="/publikationen/" target="_self" style="font-weight:600"><?php echo __( 'Publication','mdb-theme-fse' );?></a></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70","top":"0.5rem"}},"typography":{"fontSize":"3rem"}}} /-->
<?php


/**
* Show Author(s)
*/

if ( isset( $authors ) and count( $authors ) ) {
?>
    <!-- wp:heading {"className":"is-style-alternate","fontSize":"large","style":{"spacing":{"top":"var:preset|spacing|50","bottom":"-0.2rem"}}} -->
    <h2 class="wp-block-heading has-large-font-size is-style-alternate" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:-0.2rem;"><?php echo _n( 'Author', 'Authors', count( $authors ) , 'mdb-theme-fse' ); ?></h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p><?php echo implode( ', ', $authors );?></p>
    <!-- /wp:paragraph -->
<?php
}


/**
* Show Publication Year
*/

if ( isset( $year ) ) {
?>
    <!-- wp:heading {"className":"is-style-alternate","fontSize":"large","style":{"spacing":{"top":"var:preset|spacing|50","bottom":"-0.2rem"}}} -->
    <h2 class="wp-block-heading has-large-font-size is-style-alternate" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:-0.2rem;"><?php echo __( 'Publication Year', 'mdb-theme-fse' ); ?></h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p><?php echo $year; ?></p>
    <!-- /wp:paragraph -->
<?php
}


/**
* Show Keywords
*
* @todo: Sort keywords alphabetically
*/

$terms = get_the_terms( 0, 'publication_keyword' );

if ( ! is_wp_error( $terms ) and ! empty( $terms ) ) {

    $keywords = [];

    foreach ( $terms as $term ) {
        $keywords[] = $term->name;
    }
    ?>
    <!-- wp:heading {"className":"is-style-alternate","fontSize":"large","style":{"spacing":{"top":"var:preset|spacing|50","bottom":"-0.2rem"}}} -->
    <h2 class="wp-block-heading has-large-font-size is-style-alternate" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:-0.2rem;"><?php echo __( 'Keywords', 'mdb-theme-fse' ); ?></h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p><?php echo implode( ', ', $keywords ); ?></p>
    <!-- /wp:paragraph -->
    <?php
}


/**
* Show suggested citation
*/

global $post;
       $part = publication\build_citation( $post->ID, MDB_BUILD_ARRAY );

?>
<!-- wp:heading {"className":"is-style-alternate","fontSize":"large","style":{"spacing":{"top":"var:preset|spacing|50","bottom":"-0.2rem"}}} -->
<h2 class="wp-block-heading has-large-font-size is-style-alternate" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:-0.2rem;"><?php echo __( 'Suggested Citation', 'mdb-theme-fse' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo $part[0] . ' ' . $part[1]; ?></p>
<!-- /wp:paragraph -->
<?php


/**
* Show sources
*/

if ( have_rows( 'ref_sources' ) ) {
    $source = [];

    while ( have_rows( 'ref_sources' ) ) {
        the_row();

        $title = trim( get_sub_field( 'src_title' ) );
        $link  = get_sub_field( 'src_link' );

        if ( ! empty( $title ) ) {
            $source[ $title ] = $link;
        }
    }

    if ( count( $source ) ) {
    ?>
        <!-- wp:heading {"className":"is-style-alternate","fontSize":"large","style":{"spacing":{"top":"var:preset|spacing|50","bottom":"-0.2rem"}}} -->
        <h2 class="wp-block-heading has-large-font-size is-style-alternate" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:-0.2rem;"><?php echo __( 'Sources', 'mdb-theme-fse' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:list {"ordered":true} -->
        <ol class="wp-block-list">
            <?php
            foreach( $source as $title => $link ) {
                if ( ! empty( $link ) ) {
                ?>
                <!-- wp:list-item -->
                <li><a
                    href="<?php echo sanitize_url( $link ); ?>"
                    target="<?php echo (is_external( $link ) == true ) ? '_blank' : '_self'; ?>"
                    ><?php echo $title; ?></a></li>
                <!-- /wp:list-item -->
                <?php
                } else {
                ?>
                <!-- wp:list-item -->
                <li><?php echo $title; ?></li>
                <!-- /wp:list-item -->
                <?php
                }
            }
            ?>
        </ol>
        <!-- /wp:list -->
<?php
    }
}


/**
* Show cites
*/

if ( have_rows( 'ref_cites') ) {
    $cites = [];

    while ( have_rows( 'ref_cites' ) ) {
    the_row();

    $title = trim( get_sub_field( 'cite_title' ) );

        if ( ! empty( $title ) ) {
            $cites[] = $title;
        }
    }

    if ( count( $cites ) ) {
    ?>
        <!-- wp:heading {"className":"is-style-alternate","fontSize":"large","style":{"spacing":{"top":"var:preset|spacing|50","bottom":"-0.2rem"}}} -->
        <h2 class="wp-block-heading has-large-font-size is-style-alternate" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:-0.2rem;"><?php echo __( 'Cited by', 'mdb-theme-fse' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:list {"ordered":true} -->
        <ol class="wp-block-list">
            <?php
            foreach( $cites as $cite ) {
            ?>
                <!-- wp:list-item -->
                <li><?php echo $cite; ?></li>
                <!-- /wp:list-item -->
            <?php
            }
            ?>
        </ol>
        <!-- /wp:list -->
    <?php
    }
}
