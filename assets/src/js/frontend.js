jQuery( document ).ready( function( $ ) {

    // General scrollToAnchor

    function scrollToID( id ) {
        var tag = $( "#"+ id );
        $( '#main' ).animate( { scrollTop: tag.offset().top }, 2500, 'easeInOutExpo' );
    }


    // Do the slideout

    $( '.is-hamburger' ).on( 'click', function() {
        var duration = 1000;

        if( ! $( 'body' ).hasClass( 'slide-in-progress') ) {
            $( 'body' ).toggleClass( 'slide-in-progress' );


            if( ! $( 'body' ).hasClass( 'slideout-visible') ) {
                var w = 100;

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
        var full_url = this.href;
        var parts    = full_url.split( '#' );

        if( parts.length == 2 ) {
            e.preventDefault();
            scrollToID( parts[1] );
        }
    } );


    // Add a SVG icon to external anchors

    $( '#main a[target="_blank"]' ).each( function() {
        if( ! $( this ).hasClass( 'is-download' ) ) {
            var arrow = '<svg aria-hidden="true" class="anchor-icon" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/></svg>';

            $( this ).addClass( 'is-external' );
            $( this ).wrapInner( '<span class="anchor-text"></span>').append( arrow );
        }
    } );


    // Add a 'to Top'-Button
    // The button only appears if at least half of the visible area (viewport) has been scrolled (threshold value).

    $( '#main' ).on( 'scroll', function() {
        var position  = $( this ).scrollTop();
        var threshold = $( window ).scrollTop() + $( window ).height() / 2;

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
