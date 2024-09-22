<?php
/**
 * Title: Publications Loop
 * Slug: mdb-theme-fse/publications-loop
 */

$args = [
    'posts_per_page'    => -1,
    'post_type'         => 'publication',
    'post_status'       => 'publish'
];

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    ?>
	<ol class="publication-list" data-filter="">
	<?php
    while ( $query->have_posts() ) {

        $query->the_post();

        $terms = get_the_terms( get_the_ID(), 'publication_group');

        if ( ! empty( $terms ) and ! is_wp_error( $terms ) ) {
            ?>
    		<li class='filter-<?php echo $terms[0]->slug; ?>'><?php the_title(); ?></li>
    		<?php
        }
    }
    ?>
	</ol>
	<?php

    wp_reset_postdata();
}
