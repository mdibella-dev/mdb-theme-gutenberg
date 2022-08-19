wp.domReady( () => {

    /** core/image */

    wp.blocks.unregisterBlockStyle(
        'core/image',
        [
            'rounded'
        ]
    );

    wp.blocks.registerBlockStyle(
        'core/image',
        [
            {
                name: 'shaded',
                label: 'Schattiert',
                isDefault: false,
            },
            {
                name: 'transparent',
                label: 'Transparent',
                isDefault: false,
            }
        ]
    );


    /** core/embed */

    wp.blocks.registerBlockStyle(
        'core/embed',
        [
            {
                name: 'shaded',
                label: 'Schattiert',
                isDefault: false,
            }
        ]
    );


    /** core/post-title */

    wp.blocks.registerBlockStyle(
        'core/post-title',
        {
            name: 'article',
            label: 'Seite oder Beitrag',
            isDefault: false,
        }
    );


    /** core/heading */

    wp.blocks.registerBlockStyle(
        'core/heading',
        [
            {
                name: 'article',
                label: 'Seite oder Beitrag',
                isDefault: false,
            },
            {
                name: 'section',
                label: 'Bereich',
                isDefault: false,
            },
            {
                name: 'paragraph',
                label: 'Absatz',
                isDefault: false,
            }
        ]
    );


    /** core/paragraph */

    wp.blocks.registerBlockStyle(
        'core/paragraph',
        {
            name: 'smallnote',
            label: 'Hinweiszeile',
            isDefault: false,
        }
    );



    /** core/navigation */

    wp.blocks.registerBlockStyle(
        'core/navigation',
        {
            name: 'pagenavigation',
            label: 'Beitragsnavigation',
            isDefault: false,
        }
    );



    /** core/button */

    wp.blocks.unregisterBlockStyle(
        'core/button',
        [
            'fill',
            'outline',
        ]
    );

    wp.blocks.registerBlockStyle(
        'core/button',
        [
            {
                name: 'default',
                label: 'Standard',
                isDefault: true,
            },
            {
                name: 'flat',
                label: 'Flat',
                isDefault: false,
            }
        ]
    );


} );
