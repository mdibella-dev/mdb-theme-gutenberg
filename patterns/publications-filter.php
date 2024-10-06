<?php
/**
 * Title: Publications Filter
 * Slug: mdb-theme-fse/publications-filter
 */
?>

<script>

/**
 * doFilter()
 *
 * @param string filter
 */

function doFilter( filter ) {

    // exit if the requested filter matches the current filter
    if ( document.querySelector( '.publications-list' ).dataset.filter == filter ) {
        doDropdown( 'close' );
        return;
    }

    // prepare animation
    let timeline = anime.timeline ( {
        easing: 'easeInOutExpo',
        duration: 600,
        targets: '.publications-list'
    } );

    timeline
    .add( {
        opacity: 0,
        complete: function( anim ) {

            // hide all list elements first
            let list_items = document.querySelectorAll( '.publications-list-item' );

            list_items.forEach( list_item => {
                list_item.style.display = "none";
            } );

            // show the list elements selected by the filter
            const selector = ( filter === '' )? '.publications-list-item' : '.filter-' + filter;

            list_items = document.querySelectorAll( selector );

            list_items.forEach( list_item => {
                list_item.style.display = "flex";
            } );
        }
    } )
    .add( {
        opacity: 1
    } );

    // save the current filter
    document.querySelector( '.publications-list' ).dataset.filter = filter;

    // change checkmark
    document.querySelector( '.publications-filters-select.is-selected' ).classList.toggle( 'is-selected' );
    document.querySelector( '.publications-filters-select[data-filter="' + filter + '"]' ).classList.toggle( 'is-selected' );

    // change display
    if ( filter != '' ) {
        document.querySelector( '.publications-current-filter' ).innerText = document.querySelector( '.publications-filters-select.is-selected' ).innerText;
        document.querySelector( '.publications-current-filter-display' ).style.visibility = 'visible';
    } else {
         document.querySelector( '.publications-current-filter-display' ).style.visibility = 'hidden';
    }

    doDropdown( 'close' );
}


/**
 * doDropdown()
 *
 * @param string mode
 */

function doDropdown( mode ) {

    // check mode param first
    const modes = [ 'open', 'close', 'toggle' ];

    if ( modes.includes( mode ) == false ) {
        return;
    }

    // do the action
    const filters = document.querySelector( '.publications-filters' );

    switch ( mode ) {
        case 'open':
            filters.classList.add( 'is-open' );
            break;

        case 'close':
            filters.classList.remove( 'is-open' );
            break;

        case 'toggle':
        default:
            filters.classList.toggle( 'is-open' );
    }
}



/**
 * Clicking outside of dropdown turns it off
 */

document.addEventListener( 'click', function( e ) {

    const filters = document.querySelector( '.publications-filters' );

    if ( ( filters != null ) && filters.classList.contains( 'is-open' ) && ! e.target.closest( '.publications-filters' ) ) {
        doDropdown( 'close' );
    }

} );

</script>

<div class="publications-filters">
    <div class="publications-filters-button">
        <a href="#" onclick="doDropdown( 'toggle' );"><span><?php echo __( 'Filter', 'mdb-theme-fse' ); ?></span><span class="svg-symbol svg-symbol-chevron-down"></span></a>
    </div>
    <div class="publications-filters-dropdown">
        <ul>
            <?php
            $items[] = [
                'filter'   => '',
                'text'     => __( 'No filter', 'mdb-theme-fse' ),
                'selected' => true
            ];

            $terms = get_terms( [
                'taxonomy'   => 'publication_group',
                'hide_empty' => true,
            ] );

            foreach ( $terms as $term ) {
                $items[] = [
                    'filter'   => $term->slug,
                    'text'     => sprintf( __( '%1$s only', 'mdb-theme-fse' ), $term->name ),
                    'selected' => false
                ];
            }
            ?>
            <?php
            foreach ( $items as $item ) {
            ?>
            <li>
                <a class="publications-filters-select <?php echo ($item['selected'] == true)? 'is-selected' : '';?>" data-filter="<?php echo $item['filter'];?>" href="#" onclick="doFilter('<?php echo $item['filter'];?>');"><span class="label"><?php echo $item['text'];?></span><span class="svg-symbol svg-symbol-check"></a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
