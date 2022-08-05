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
            name: 'article-header',
            label: 'Seiten- oder Beitragsüberschrft',
            isDefault: false,
        }
    );


    /** core/heading **/

    wp.blocks.registerBlockStyle(
        'core/heading',
        [
            {
                name: 'article-header',
                label: 'Seiten- oder Beitragsüberschrft',
                isDefault: false,
            },
            {
                name: 'section-header',
                label: 'Bereichsüberschrift',
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
