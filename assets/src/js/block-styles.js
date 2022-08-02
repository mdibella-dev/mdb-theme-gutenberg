wp.domReady( () => {

    /** core/button **/

    /** core/image **/

    wp.blocks.unregisterBlockStyle(
        'core/image',
        'rounded',
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


    /** core/heading **/

    wp.blocks.registerBlockStyle(
        'core/post-title',
        {
            name: 'big-bold-header',
            label: 'Große Überschrift',
            isDefault: false,
        }
    );


    /** core/heading **/

    wp.blocks.registerBlockStyle(
        'core/heading',
        [
            {
                name: 'big-bold-header',
                label: 'Große Überschrift',
                isDefault: false,
            },
            {
                name: 'paragraph-header',
                label: 'Absatzüberschrift',
                isDefault: false,
            }
        ]
    );


    /** core/paragraph **/

    wp.blocks.registerBlockStyle(
        'core/paragraph',
        {
            name: 'smallnote',
            label: 'Hinweiszeile',
            isDefault: false,
        }
    );

} );
