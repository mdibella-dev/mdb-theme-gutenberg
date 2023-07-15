jQuery( document ).ready( function( $ ) {

    /**
     * Slideout Menu Animation
     */

    $( '.is-navbar-hamburger' ).on( 'click', function() {
        let duration = 1000;

        if( ! $( 'body' ).hasClass( 'slide-in-progress') ) {
            $( 'body' ).toggleClass( 'slide-in-progress' );

            if( ! $( 'body' ).hasClass( 'slideout-visible') ) {
                $( '.is-navbar-home' ).fadeOut();
                $( '.is-navbar-mail' ).fadeOut();
                $( '.is-navbar-scrollup' ).fadeOut();

                $( '.slideout' ).animate( { width: '100%' }, duration, 'easeInOutExpo' );

                $( '.slideout-primary' ).delay(800).fadeIn( function() {
                    $( '.is-navbar-home' ).fadeIn();
                    $( '.is-navbar-mail' ).fadeIn();
                } );

                $( '.is-navbar-hamburger span' ).toggleClass( 'svg-symbol-hamburger svg-symbol-hamburger-cross' );

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress slideout-visible' );
                }, duration );
            } else {
                $( '.is-navbar-home' ).fadeOut();
                $( '.is-navbar-mail' ).fadeOut();

                $( '.slideout-primary' ).delay(200).fadeOut( function() {
                    $( '.slideout' ).animate( { width: 0 }, duration, 'easeInOutExpo' );
                } );

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress slideout-visible' );
                    $( '.is-navbar-hamburger span' ).toggleClass( 'svg-symbol-hamburger svg-symbol-hamburger-cross' );

                    $( '.is-navbar-home' ).fadeIn();
                    $( '.is-navbar-mail' ).fadeIn();
                    $( '.is-navbar-scrollup' ).fadeIn();
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

    // event handler for scrolling to the top

    $( '.is-navbar-scrollup' ).on( 'click', function( e ) {
        e.preventDefault();

        $( '#main' ).animate( { scrollTop: 0 }, 1500, 'easeInOutExpo' );
    } );



    /**
     * Fix header centering
     */

    function toggleHeaderFix() {
        let scrollVisible = $( '#main' ).get(0).scrollHeight > $( '#main' ).height();

        if( true == scrollVisible ) {
            let scrollWidth = $( '#main' ).get(0).offsetWidth - $( '#main' ).get(0).clientWidth;

            $( 'header' ).css( 'padding-right', scrollWidth );
        } else {
            $( 'header' ).css( 'padding-right', '' );
        }
    }

    // event handler for re-checking after resizing

    $( window ).on( 'resize', function(e) { toggleHeaderFix(); } );

    toggleHeaderFix();
} );
