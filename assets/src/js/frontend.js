jQuery( document ).ready( function( $ ) {

    /**
     * Slideout Menu Animation
     */

    $( '.is-navbar-hamburger' ).on( 'click', function() {
        let duration = 1000;

        if( ! $( 'body' ).hasClass( 'slide-in-progress') ) {
            $( 'body' ).toggleClass( 'slide-in-progress' );

            if( ! $( 'body' ).hasClass( 'slideout-visible') ) {
                $( '.wp-block-site-title' ).fadeOut();
                $( '.site-component-slideout' ).animate( { width: '100%' }, duration, 'easeInOutExpo' );
                $( '.slideout-content' ).delay(800).fadeIn();
                $( '.is-navbar-hamburger span' ).toggleClass( 'svg-symbol-hamburger svg-symbol-hamburger-cross' );

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress slideout-visible' );
                }, duration );
            } else {
                $( '.slideout-content' ).delay(200).fadeOut( function() {
                    $( '.site-component-slideout' ).animate( { width: 0 }, duration, 'easeInOutExpo' );
                } );

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress slideout-visible' );
                    $( '.is-navbar-hamburger span' ).toggleClass( 'svg-symbol-hamburger svg-symbol-hamburger-cross' );
                    $( '.wp-block-site-title' ).fadeIn();
                }, duration );
            }
        }
    } );



    /**
     * Smooth Scroll to Anchor (pagenavigation)
     */

    // helper function

    function getNumber( x ) {
      const parsed = parseInt( x );

      if( isNaN( parsed ) ) {
          return 0;
      }
      return parsed;
    }


    // general scroll function

    function scrollToAnchor( id ) {
        let tag    = $( "#" + id );
        let offset = tag.offset().top - getNumber( tag.css( 'padding-top' ) )

        $( '.wp-site-blocks' ).animate( { scrollTop: offset }, 2500, 'easeInOutExpo' );
    }


    // event handler

    $( '.wp-block-navigation.is-style-pagenavigation a.wp-block-navigation-item__content' ).on( 'click', function( e ) {
        let full_url = this.href;
        let parts    = full_url.split( '#' );

        if( parts.length == 2 ) {
            e.preventDefault();
            scrollToAnchor( parts[1] );
        }
    } );



    /**
     * Smooth Scroll to top/bottom
     */

    // event handler for scrolling to the top

    $( '.is-navbar-scrollup' ).on( 'click', function( e ) {
        e.preventDefault();

        $( '.wp-site-blocks' ).animate( { scrollTop: 0 }, 1500, 'easeInOutExpo' );
    } );



    /**
     * Preloader
     */

    function doPreload() {
            setTimeout( function() {
            $( '.site-component-preloader' ).fadeOut();

            setTimeout( function() {
                $( '.site-component-header' ).fadeIn();
                $( '.site-component-main' ).fadeIn();
                $( '.site-component-footer' ).fadeIn();
            }, 500 );
        }, 1000 );
    }

    doPreload();
} );
