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
    if ( document.querySelector( '.publication-list' ).dataset.filter == filter ) {
        doDropdown( 'close' );
        return;
    }

    // prepare animation
    let timeline = anime.timeline ( {
        easing: 'easeInOutExpo',
        duration: 600,
        targets: '.publication-list'
    } );

    timeline
    .add( {
        opacity: 0,
        complete: function(anim) {

            // hide all list elements first
            let list_elements = document.querySelectorAll( '.publication-list li' );

            list_elements.forEach( list_element => {
                list_element.style.display = "none";
            } );

            // show the list elements selected by the filter
            const selector = ( filter === '' )? '.publication-list li' : '.filter-' + filter;

            list_elements = document.querySelectorAll( selector );

            list_elements.forEach( list_element => {
                list_element.style.display = "list-item";
            } );
        }
    } )
    .add( {
        opacity: 1
    } );

    // save the current filter
    document.querySelector( '.publication-list' ).dataset.filter = filter;

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
<style>


.publications-filters {
    width: auto;
    display: block;
    position: relative;
}


.publications-filters-button a {
    height: 48px;
    display: inline-flex;
    align-items: center;
    position: relative;
    z-index: 90;
    padding: 0 1rem;
    transition: none;
    gap: 1rem;
    border-width: 1px;
    border-style: solid;

    span {
        display: inline-block;
    }
}


:not(.is-open) .publications-filters-button a {
    color: var(--wp--preset--color--denim-0);
    border-color: var(--wp--preset--color--denim-0);

    .svg-symbol {
        background-color: var(--wp--preset--color--denim-0);
    }

    &:hover,
    &:focus {
        color: var(--wp--preset--color--white);
        border-color: var(--wp--preset--color--white);

        .svg-symbol {
            background-color: var(--wp--preset--color--white);
        }
    }
}


.is-open .publications-filters-button a {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-color: transparent !important;
    color: var(--wp--preset--color--white) !important;

    .svg-symbol {
        transform: rotate(-180deg);
        background-color: var(--wp--preset--color--white) !important;
    }
}



.publications-filters-dropdown {
    display: none;
    position: absolute;
    z-index: 100;
    padding: 0 1rem;
    border-radius: 4px;
    border-top-left-radius: 0;
    background: hsl(202.1, 81.7%, 30%);
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
}

.publications-filters-dropdown ul {
    list-style: none;
    flex-direction: column;
    display: flex;
    padding: .5rem;
    margin: 0;
}

.publications-filters-dropdown li {
    padding-left: 0;
    display: flex;
    flex-direction: row;
    gap: 2rem;
}



.publications-filters-select {
    --color:  var(--wp--preset--color--denim-0);
    display: inline-flex;
    flex-wrap: nowrap;
    align-items: center;
    gap: 3rem;
    padding: .75rem 0;
    width: 100%;
    border-radius: 0;
    border: unset;
    background: transparent;
    color: var(--color);
    font-family: var(--wp--preset--font-family--primary);
    font-size: var(--wp--preset--font-size--medium);

    & > span {
        display: inline-block;
    }

    & > span:first-of-type {
        flex-grow: 1;
        flex-shrink: 0;
    }

    & > span:last-of-type {
        flex-grow: 0;
        flex-shrink: 0;
    }

    .svg-symbol-check {
        visibility: hidden;
        transition: background-color .3s;
        background-color: var(--color);
    }

    &:hover {
        --color: var(--wp--preset--color--white);
    }
}


.publications-filters-select.is-selected .svg-symbol-check {
    visibility: visible;
}


.publications-filters.is-open .publications-filters-button a {
    background: hsl(202.1, 81.7%, 30%);
    color: var(--wp--preset--color--white);
}

.publications-filters.is-open .publications-filters-dropdown {
    display: block;
}

.publications-current-filter-display {
    display: block;
    visibility: hidden;
}
</style>

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
