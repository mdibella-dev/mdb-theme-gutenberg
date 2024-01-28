jQuery( document ).ready( function( $ ) {

    /**
     * Action: show the preloader
     */

    function doPreload() {
        setTimeout( function() {
            $( '.site-component-preloader' ).fadeOut();

            setTimeout( function() {
                $( '.site-component-header' ).fadeIn();
                $( '.site-component-main' ).fadeIn();
                $( '.site-component-footer' ).fadeIn();
            }, 200 );
        }, 400 );
    }


    doPreload();
} );
