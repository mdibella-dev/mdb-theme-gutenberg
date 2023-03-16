jQuery( document ).ready( function( $ ) {


    function getNumber( x ) {
      const parsed = parseInt( x );

      if( isNaN( parsed ) ) {
          return 0;
      }
      return parsed;
    }


    // General scrollToAnchor

    function scrollToID( id ) {
        let tag    = $( "#"+ id );
        let offset = tag.offset().top - getNumber( tag.css( 'padding-top' ) )

        $( '#main' ).animate( { scrollTop: offset }, 2500, 'easeInOutExpo' );
    }


    // Do the slideout

    $( '.is-hamburger' ).on( 'click', function() {
        let duration = 1000;

        if( ! $( 'body' ).hasClass( 'slide-in-progress') ) {
            $( 'body' ).toggleClass( 'slide-in-progress' );


            if( ! $( 'body' ).hasClass( 'slideout-visible') ) {
                let w = 100;

                $( '#slideout' ).animate( { width: w+'%' }, 1000, 'easeInOutExpo' );
                $( '#primary, #secondary' ).delay(800).fadeIn();
                $( '.is-hamburger span' ).toggleClass( 'svg-symbol-hamburger svg-symbol-hamburger-cross' );

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress slideout-visible' );
                }, duration );
            } else {
                $( '#primary, #secondary' ).fadeOut();
                $( '#slideout' ).delay(200).animate( { width: 0 }, 1000, 'easeInOutExpo' );

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress slideout-visible' );
                    $( '.is-hamburger span' ).toggleClass( 'svg-symbol-hamburger svg-symbol-hamburger-cross' );
                }, duration );
            }
        }
    } );


    // Click on pagenavigation, scroll to anchor

    $( '.wp-block-navigation.is-style-pagenavigation a.wp-block-navigation-item__content' ).on( 'click', function(e) {
        let full_url = this.href;
        let parts    = full_url.split( '#' );

        if( parts.length == 2 ) {
            e.preventDefault();
            scrollToID( parts[1] );
        }
    } );



    // Add a 'to Top'-Button
    // The button only appears if at least half of the visible area (viewport) has been scrolled (threshold value).

    $( '#main' ).on( 'scroll', function() {
        let position  = $( this ).scrollTop();
        let threshold = $( window ).scrollTop() + $( window ).height() / 2;

        if( 1 == $( '#main' ).data( 'isAutoScrollInProgress' ) ) {
            if( ( position <= threshold ) && ( 0 != position ) ) {
                $( '#scrollup' ).fadeOut();
            } else if( 0 == position ) {
                $( '#main' ).data( 'isAutoScrollInProgress', 0 );
            }
        } else {
            if( position > threshold ) {
                $( '#scrollup' ).fadeIn();
            } else {
                $( '#scrollup' ).fadeOut();
            }
        }
    } );

    $( '#scrollup a' ).on( 'click', function() {
        $( '#main' ).data( 'isAutoScrollInProgress', 1 );
        $( '#main' ).animate( { scrollTop: 0 }, 1500, 'easeInOutQuint' );
        return false;
    } );
} );
