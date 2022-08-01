<?php
/**
 * Additional setup for the block styles.
 *
 * @author  Marco Di Bella <mdb@marcodibella.de>
 * @package mdb-theme-fse
 */


defined( 'ABSPATH' ) or exit;



if( function_exists( 'register_block_style' ) ) :

    /**
     * Registers block styles.
     *
     * @since 1.0.0
     */

    function mdb_register_block_styles()
    {
        /** core/heading */

        register_block_style(
            'core/heading',
            [
                'name'  => 'big-bold-header',
                'label' => __( 'Big Bold Header', 'mdb' ),
            ]
        );

        register_block_style(
            'core/heading',
            [
                'name'  => 'paragraph-header',
                'label' => __( 'Paragraph Header', 'mdb' ),
            ]
        );


        /** core/post-title */

        register_block_style(
            'core/post-title',
            [
                'name'  => 'big-bold-header',
                'label' => __( 'Big Bold Header', 'mdb' ),
            ]
        );


        /** core/paragraph */

        register_block_style(
            'core/paragraph',
            [
                'name'  => 'smallnote',
                'label' => __( 'Small Notice Line', 'mdb' ),
            ]
        );

    }

    add_action( 'init', 'mdb_register_block_styles' );

endif;
