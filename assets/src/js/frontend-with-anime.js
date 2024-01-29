function doSlide( direction ) {

    if ( ( direction !== 'in' ) && ( direction !== 'out' ) ) {
        return;
    }

    const body      = document.querySelector( 'body' );
    const hamburger = document.querySelector( '.is-navbar-hamburger span' );
    const slideout  = document.querySelector( '.site-component-slideout' );



        // Slide menu hineinfahren
        if( direction == 'in' ) {

            // Parameter setzen
            duration = 1000;

            anime( {
                targets: '.site-component-slideout',
                width: '100%',
                easing: 'easeInOutQuad'
            } );

        // Slide menu hinausfahren
        } else if ( direction == 'out' ) {

            // Parameter setzen
            duration  = 800;

            anime( {
                targets: '.site-component-slideout',
                width: '0%',
                easing: 'easeInOutQuad'
            } );
        }

        // Clean up:
        setTimeout( function() {

            hamburger.classList.toggle( 'svg-symbol-hamburger' );
            hamburger.classList.toggle( 'svg-symbol-hamburger-cross' );

        }, duration );

}



/**
 * Event handler: click on hamburger
 */

const hamburger = document.querySelector( '.is-navbar-hamburger' );

if ( hamburger != null ) {
    hamburger.addEventListener( 'click', function( e ) {
        if ( ! document.querySelector( 'body' ).classList.contains( 'slideout-visible' ) ) {
            doSlide( 'in' );
        } else {
            doSlide( 'out' );
        }
    } );
}
