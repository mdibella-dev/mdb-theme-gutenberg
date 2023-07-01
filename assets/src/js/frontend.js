jQuery( document ).ready( function( $ ) {

    /**
     * Slideout Menu Animation
     */

    $( '.is-navbar-hamburger' ).on( 'click', function() {
        let duration = 1000;

        if( ! $( 'body' ).hasClass( 'slide-in-progress') ) {
            $( 'body' ).toggleClass( 'slide-in-progress' );


            if( ! $( 'body' ).hasClass( 'slideout-visible') ) {
                let w = 100;

                $( '.slideout' ).animate( { width: w+'%' }, 1000, 'easeInOutExpo' );
                $( '#primary' ).delay(800).fadeIn();
                $( '.is-navbar-hamburger span' ).toggleClass( 'svg-symbol-hamburger svg-symbol-hamburger-cross' );
                $( '.navbar-content-third' ).fadeOut();

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress slideout-visible' );
                }, duration );
            } else {
                $( '#primary' ).fadeOut();
                $( '.slideout' ).delay(200).animate( { width: 0 }, 1000, 'easeInOutExpo' );

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress slideout-visible' );
                    $( '.is-navbar-hamburger span' ).toggleClass( 'svg-symbol-hamburger svg-symbol-hamburger-cross' );
                    $( '.navbar-content-third' ).fadeIn();
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

        $( '#main' ).animate( { scrollTop: offset }, 2500, 'easeInOutExpo' );
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

    // general scroll function

    function scrollToEdge( selector ) {
        let offset = 0;

        if( '.is-navbar-scrolldown' == selector ) {
            $( '#main > *' ).each( function( index ) {
                offset +=  $( this ).outerHeight();
            });
        }

        $( '#main' ).animate( { scrollTop: offset }, 1500, 'easeInOutExpo' );
        $( selector ).blur();
    }


    // event handler for scrolling to the top

    $( '.is-navbar-scrollup' ).on( 'click', function( e ) {
        e.preventDefault();
        scrollToEdge( '.is-navbar-scrollup' );
    } );


    // event handler for scrolling to the bottom

    $( '.is-navbar-scrolldown' ).on( 'click', function( e ) {
        e.preventDefault();
        scrollToEdge( '.is-navbar-scrolldown' );
    } );
} );
