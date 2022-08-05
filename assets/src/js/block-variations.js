wp.domReady( () => {

    /** core/group **/

    wp.blocks.registerBlockVariation(
        'core/group',
        {
            name: 'mdb/download-box',
            title: 'Downloadkasten',
            description: 'Ein Kasten mit ein oder mehreren Downloads',
            attributes: {
                className: 'download-group'
            },
            icon: 'download',
            scope: ['inserter'],
            innerBlocks: [
                ['core/shortcode', { placeholder: '' }],
            ],
        }
    );

} );
