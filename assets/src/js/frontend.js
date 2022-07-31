jQuery( document ).ready( function( $ ) {

    // General scrollToAnchor

    function scrollToID( id ) {
        var tag = $( "#"+ id );
        $( '#main' ).animate( { scrollTop: tag.offset().top }, 2500, 'easeInOutExpo' );
    }


    // Do the slideout

    $( '#logo' ).on( 'click', function() {
        var duration = 1000;

        if( ! $( 'body' ).hasClass( 'slide-in-progress') ) {
            $( 'body' ).toggleClass( 'slide-in-progress' );

            if( ! $( 'body' ).hasClass( 'slideout-visible') ) {
                var w = 100;

                $( '#slideout' ).animate( { width: w+'%' }, 1000, 'easeInOutExpo' );
                $( '#primary, #secondary' ).delay(800).fadeIn();

                setTimeout( function() {
                    $( 'body' ).addClass( 'slideout-visible' );
                    $( 'body' ).toggleClass( 'slide-in-progress' );
                }, duration );
            } else {
                $( '#primary, #secondary' ).fadeOut();
                $( '#slideout' ).delay(200).animate( { width: 0 }, 1000, 'easeInOutExpo' );

                setTimeout( function() {
                    $( 'body' ).toggleClass( 'slide-in-progress' );
                    $( 'body' ).removeClass( 'slideout-visible' );
                }, duration );
            }
        }
    } );


    // Click on #navbar-icons

    $( '#linkedin, #xing, #github' ).on( 'click', function() {
         window.open( $( this ).data( 'link' ) );
        return false;
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


    // Handle GDPR checkbox on the contact form

    $( '#gdpr-cbox' ).on( 'click', function() {
        if( $( this ).is( ':checked' ) ) {
            $( 'button[type=submit]' ).removeAttr( 'disabled' );
        } else {
            $( 'button[type=submit]' ).attr( 'disabled', 'disabled' );
        }
    } );


    // Handle .form-control

    $( '.form-control' ).on( 'click', function() {
        if( ! $( this ).hasClass( 'is-active') ) {
            $( '.form-control' ).removeClass( 'is-active' );
            $( this ).addClass( 'is-active' );

            if( $( this ).children( 'input' ).length > 0 ) {
                $( this ).children( 'input' ).focus();
            } else if( $( this ).children( 'textarea' ).length > 0 ) {
                $( this ).children( 'textarea' ).focus();
            }
        }
    } );

    $( '.form-control input, .form-control textarea' ).on( 'focusout', function() {
        if( $( this ).parent().hasClass( 'is-active') ) {
            $( this ).parent().removeClass( 'is-active' );
        }
    } );


    // Add a SVG icon to _blank anchors to mark them as external

    $( '#main a[target="_blank"]' ).each( function() {
        if( ! $( this ).hasClass( 'a-tag-download' ) ) {
            var arrow = '<svg aria-hidden="true" class="a-tag-icon" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/></svg>';

            $( this ).addClass( 'a-tag-with-icon a-tag-external' );
            $( this ).wrapInner( '<span class="a-tag-text"></span>').append( arrow );
        }
    } );


    // Add a 'to Top'-Button
    // The button only appears if at least half of the visible area (viewport) has been scrolled (threshold value).

    $( '#main' ).on( 'scroll', function() {
        var currentScroll = $( this ).scrollTop();
        var threshold     = $( window ).scrollTop() + $( window ).height() / 2;

        if( 1 != $( '#main' ).data( 'isAutoScrollInProgress' ) ) {
            if( currentScroll > threshold ) {
                $( '#scrollup' ).fadeIn();

                clearTimeout( $( '#main' ).data( 'checkAutoScroll' ) );

                $( '#main' ).data( 'checkAutoScroll', setTimeout( function() {
                    $( '#scrollup' ).fadeOut();
                    $( '#main' ).data( 'isAutoScrollInProgress', 0 );
                }, 2500 ) );
            }
        } else {
            if( currentScroll <= threshold ) {
                $( '#scrollup' ).fadeOut();
            } else if( 0 == currentScroll ) {
                $( '#main' ).data( 'isAutoScrollInProgress', 0 );
            }
        }
    } );

    $( '#scrollup button' ).on( 'click', function() {
        $( '#main' ).data( 'isAutoScrollInProgress', 1 );
        $( '#main' ).animate( { scrollTop: 0 }, 1500, 'easeInOutQuint' );
        return false;
    } );
} );
