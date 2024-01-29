

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

            let tl = anime.timeline( {
                easing: 'easeInOutQuad',
                duration: 400
            } );

            tl
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

            let tl = anime.timeline( {
                easing: 'easeInOutQuad',
                duration: 400
            } );

            tl
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
