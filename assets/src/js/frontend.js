jQuery( document ).ready( function( $ ) {




    /**
     * Action: smooth scroll to anchor
     */

    // helper function
    function getNumber( x ) {
      const parsed = parseInt( x );

      if ( isNaN( parsed ) ) {
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




    /**
     * Event handler: click on scroll up button (smooth scroll to top)
     *
     * @todo need a re-implementation of the button
     */

    $( '.is-navbar-scrollup' ).on( 'click', function( e ) {
        e.preventDefault();

        $( '.wp-site-blocks' ).animate( { scrollTop: 0 }, 1500, 'easeInOutExpo' );
    } );



    /**
     * Event handler: click on pagenavigation link (smooth scroll to anchor)
     */

    $( '.wp-block-navigation.is-style-pagenavigation a.wp-block-navigation-item__content' ).on( 'click', function( e ) {
        let full_url = this.href;
        let parts    = full_url.split( '#' );

        if ( parts.length == 2 ) {
            e.preventDefault();
            scrollToAnchor( parts[1] );
        }
    } );

} );
