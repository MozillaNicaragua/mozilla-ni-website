<?php

// Register Event Custom Post Type
function event_custom_posttype() {

    $labels = array(
        'name'                  => _x( 'Events', 'Post Type General Name', 'mozilla-ni' ),
        'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'mozilla-ni' ),
        'menu_name'             => __( 'Events', 'mozilla-ni' ),
        'name_admin_bar'        => __( 'Events', 'mozilla-ni' ),
        'archives'              => __( 'Item Archives', 'mozilla-ni' ),
        'attributes'            => __( 'Item Attributes', 'mozilla-ni' ),
        'parent_item_colon'     => __( 'Parent Item:', 'mozilla-ni' ),
        'all_items'             => __( 'All Events', 'mozilla-ni' ),
        'add_new_item'          => __( 'Add New Event', 'mozilla-ni' ),
        'add_new'               => __( 'Add Event', 'mozilla-ni' ),
        'new_item'              => __( 'New Event', 'mozilla-ni' ),
        'edit_item'             => __( 'Edit Event', 'mozilla-ni' ),
        'update_item'           => __( 'Update Event', 'mozilla-ni' ),
        'view_item'             => __( 'View Event', 'mozilla-ni' ),
        'view_items'            => __( 'View Events', 'mozilla-ni' ),
        'search_items'          => __( 'Search Event', 'mozilla-ni' ),
        'not_found'             => __( 'Not found', 'mozilla-ni' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'mozilla-ni' ),
        'featured_image'        => __( 'Featured Image', 'mozilla-ni' ),
        'set_featured_image'    => __( 'Set featured image', 'mozilla-ni' ),
        'remove_featured_image' => __( 'Remove featured image', 'mozilla-ni' ),
        'use_featured_image'    => __( 'Use as featured image', 'mozilla-ni' ),
        'insert_into_item'      => __( 'Insert into item', 'mozilla-ni' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'mozilla-ni' ),
        'items_list'            => __( 'Items list', 'mozilla-ni' ),
        'items_list_navigation' => __( 'Items list navigation', 'mozilla-ni' ),
        'filter_items_list'     => __( 'Filter items list', 'mozilla-ni' ),
    );
    $rewrite = array(
        'slug'                  => 'eventos',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Event', 'mozilla-ni' ),
        'description'           => __( 'Events of the community', 'mozilla-ni' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
        'show_in_rest'          => false,
    );
    register_post_type( 'events', $args );

}
add_action( 'init', 'event_custom_posttype', 0 );

// Register Members Custom Post Type
function member_custom_posttype() {

    $labels = array(
        'name'                  => _x( 'Members', 'Post Type General Name', 'mozilla-ni' ),
        'singular_name'         => _x( 'Member', 'Post Type Singular Name', 'mozilla-ni' ),
        'menu_name'             => __( 'Members', 'mozilla-ni' ),
        'name_admin_bar'        => __( 'Members', 'mozilla-ni' ),
        'archives'              => __( 'Item Archives', 'mozilla-ni' ),
        'attributes'            => __( 'Item Attributes', 'mozilla-ni' ),
        'parent_item_colon'     => __( 'Parent Item:', 'mozilla-ni' ),
        'all_items'             => __( 'All Members', 'mozilla-ni' ),
        'add_new_item'          => __( 'Add New Member', 'mozilla-ni' ),
        'add_new'               => __( 'Add Member', 'mozilla-ni' ),
        'new_item'              => __( 'New Member', 'mozilla-ni' ),
        'edit_item'             => __( 'Edit Member', 'mozilla-ni' ),
        'update_item'           => __( 'Update Member', 'mozilla-ni' ),
        'view_item'             => __( 'View Member', 'mozilla-ni' ),
        'view_items'            => __( 'View Members', 'mozilla-ni' ),
        'search_items'          => __( 'Search Member', 'mozilla-ni' ),
        'not_found'             => __( 'Not found', 'mozilla-ni' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'mozilla-ni' ),
        'featured_image'        => __( 'Featured Image', 'mozilla-ni' ),
        'set_featured_image'    => __( 'Set featured image', 'mozilla-ni' ),
        'remove_featured_image' => __( 'Remove featured image', 'mozilla-ni' ),
        'use_featured_image'    => __( 'Use as featured image', 'mozilla-ni' ),
        'insert_into_item'      => __( 'Insert into item', 'mozilla-ni' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'mozilla-ni' ),
        'items_list'            => __( 'Items list', 'mozilla-ni' ),
        'items_list_navigation' => __( 'Items list navigation', 'mozilla-ni' ),
        'filter_items_list'     => __( 'Filter items list', 'mozilla-ni' ),
    );
    $rewrite = array(
        'slug'                  => 'colaboradores',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Member', 'mozilla-ni' ),
        'description'           => __( 'Members of the community', 'mozilla-ni' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
        'show_in_rest'          => false,
    );
    register_post_type( 'members', $args );

}
add_action( 'init', 'member_custom_posttype', 0 );