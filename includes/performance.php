<?php
/**
 * Functions to optimize the structure of the site.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Removes various ballast.
 *
 * @since 1.0.0
 */

function mdb_remove_styles_scripts()
{
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
}

add_action( 'wp_enqueue_scripts', 'mdb_remove_styles_scripts', 9998 );



/**
 * Removes unnecessary post classes like
 * - .has-post-thumbnail,
 * - .sticky,
 * - .category-,
 * - .tags-,
 * - .status
 *
 * @since  1.0.0
 * @see    https://developer.wordpress.org/reference/hooks/post_class/
 * @param  array $classes    An array of CSS classes applied to post types.
 * @param  array $class      An array of additional CSS classes.
 * @param  int   $post_id    The ID of the post.
 * @return array             Modified class array.
 */

function mdb_remove_post_classes( $classes, $class, $post_id )
{
    if( ! is_admin() ) :
        $post_type = get_post_type( $post_id );
        $classes   = array();
        $classes[] = sanitize_html_class( $post_type );
    endif;

    return $classes;
}

add_filter( 'post_class', 'mdb_remove_post_classes', 10, 3 );



/**
 * Removes unnecessary classes from a page's menus to reduce the DOM.
 *
 * @since  1.0.0
 * @see    https://developer.wordpress.org/reference/hooks/nav_menu_css_class/
 * @param  array    $classes    An array of CSS classes to be applied to the <li> tag of the menu item to be checked.
 * @param  WP_POST  $items      The menu item to check.
 * @param  stdClass $args       Arguments from the wp_nav_menu() call.
 * @param  int      $depth      The level depth of the menu item.
 * @return array                Modified class array.

 */

function mdb_remove_menu_classes( $classes, $item, $args, $depth )
{
    $checked_classes = array();


    if( ! is_admin() ) :
        foreach( $classes as $check ) :

            $matches = array();

            if( ( false !== strpos( $check, 'menu-item-type-' ) ) or
                ( false !== strpos( $check, 'menu-item-object-' ) ) or
                ( false !== strpos( $check, 'page_item' ) ) or
                ( false !== strpos( $check, 'page_item-' ) ) or
                ( false !== strpos( $check, 'current_page_item' ) ) or
                ( 0 !== preg_match( '/menu-item-[0-9]+/', $check, $matches ) ) ) :
                // Do nothing!
            else :
                $checked_classes[] = $check;
            endif;

        endforeach;
        $classes = $checked_classes;

    endif;

    return $classes;
}

add_filter( 'nav_menu_css_class' , 'mdb_remove_menu_classes' , 10, 4 );
