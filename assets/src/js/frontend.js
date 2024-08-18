/**
 * Do some magic
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 * @uses    anime.js
 */



// --------------------- SLIDEOUT



/**
 * doSlideout()
 *
 * @param open_or_close true: open; false: close
 */

function doSlideout( open_or_close ) {
    const body = document.querySelector( 'body' );

    if ( open_or_close == false ) {
        anime( {
            easing: 'easeInOutExpo',
            duration: 400,
            targets: '.site-component-slideout',
            right: '-100%'
        } );

        body.classList.remove( 'slideout-visible' );
    } else if ( open_or_close == true ) {

        anime( {
            easing: 'easeInOutExpo',
            duration: 400,
            targets: '.site-component-slideout',
            right: '0%'
        } );

        body.classList.add( 'slideout-visible' );
    }

    const hamburger_icon = document.querySelector( '.is-navbar-hamburger span' );
    hamburger_icon.classList.toggle( 'svg-symbol-hamburger' );
    hamburger_icon.classList.toggle( 'svg-symbol-hamburger-cross' );
}


/**
 * Event handler:
 * - on resize: close the slideout
 * - on click on trigger: open/close the slideout (depends on current state)
 */

// on resize
window.addEventListener( 'resize', (event) => {
    const body = document.querySelector( 'body' );

    if ( body.classList.contains( 'slideout-visible' ) ) {
        doSlideout( false );
    }
} );


// on click on trigger
document.querySelector( '.slideout-trigger' ).addEventListener( 'click', (event) => {
    const body = document.querySelector( 'body' );

    doSlideout( ! body.classList.contains( 'slideout-visible' ) );
} );



// --------------------- PAGENAVIGATION



/**
 * Event handler:
 * - by clicking on the link => do smooth scroll to anchor
 */

const pagenav_links = document.querySelectorAll( '.is-style-pagenavigation a.wp-block-navigation-item__content' );

pagenav_links.forEach( link => {
    link.addEventListener( 'click', function( e ) {

        // Isolate the target ID
        let full_url = this.href;
        let parts    = full_url.split( '#' );

        if ( parts.length == 2 ) {
            e.preventDefault();

            const anchor = document.getElementById( parts[1] ); // parts[1] => that's the ID
            let   offset = anchor.offsetTop;

            anime( {
                targets: '.wp-site-blocks',
                easing: 'easeInOutExpo',
                scrollTop: offset,
                duration: 1500
            } );
        }
    } );
} );
