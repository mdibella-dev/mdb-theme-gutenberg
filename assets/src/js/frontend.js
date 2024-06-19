/**
 * Do some magic
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 * @uses    anime.js
 */



/**
 * Event handler: click on hamburger => show/hide slideout
 */

const hamburger = document.querySelector( '.is-navbar-hamburger' );

if ( hamburger != null ) {
    hamburger.addEventListener( 'click', function( e ) {

        const body           = document.querySelector( 'body' );
        const hamburger_icon = document.querySelector( '.is-navbar-hamburger span' );

        // Show slideout
        if ( ! body.classList.contains( 'slideout-visible' ) ) {

            let timeline = anime.timeline( {
                easing: 'easeInOutExpo',
                duration: 400
            } );

            timeline
            .add( {
                targets: '.wp-block-site-title',
                opacity: 0
            } )
            .add( {
                targets: '.site-component-slideout',
                left: '0'
            }, 100 );

        // Hide slideout
        } else {

            let timeline = anime.timeline( {
                easing: 'easeInOutExpo',
                duration: 400
            } );

            timeline
            .add( {
                targets: '.site-component-slideout',
                left: '-100%'
            } )
            .add( {
                targets: '.wp-block-site-title',
                opacity: 1
            }, 100 );

        }

        hamburger_icon.classList.toggle( 'svg-symbol-hamburger' );
        hamburger_icon.classList.toggle( 'svg-symbol-hamburger-cross' );
        body.classList.toggle( 'slideout-visible' );

    } );

}



/**
 * Event handler: click on pagenavigation link => smooth scroll to anchor
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
