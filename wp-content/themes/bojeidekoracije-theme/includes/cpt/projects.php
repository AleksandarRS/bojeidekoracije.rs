<?php

function arteco_register_new_post_type() {
    $singular = 'Projekat'; // Book
	$plural = 'Projekti';  // Books
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'arteco' ),
        'singular_name' 	  => __( $singular, 'arteco' ),
        'add_new' 		      => _x( 'Add New', 'arteco', 'arteco' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'arteco' ),
        'edit'		          => __( 'Edit', 'arteco' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'arteco' ),
        'new_item'	          => __( 'New ' . $singular, 'arteco' ),
        'view' 			      => __( 'View ' . $singular, 'arteco' ),
        'view_item' 		  => __( 'View ' . $singular, 'arteco' ),
        'search_term'   	  => __( 'Search ' . $plural, 'arteco' ),
        'parent' 		      => __( 'Parent ' . $singular, 'arteco' ),
        'not_found'           => __( 'No ' . $plural .' found', 'arteco' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'arteco' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => true,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-database-add',
        // 'menu_icon'           => '',
        'supports'            => array( 'title', 'thumbnail', 'editor', 'excerpt' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'arteco_register_new_post_type' );

function arteco_register_new_custom_taxonomy() {
    $singular = 'Kategorija projekta'; // Book category
	$plural = 'Kategorije projekata'; // Book categories
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name'              => _x( $plural, 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search ' . $plural ),
        'all_items'         => __( 'All ' . $plural ),
        'parent_item'       => __( 'Parent ' . $singular ),
        'parent_item_colon' => __( 'Parent:' . $singular ),
        'edit_item'         => __( 'Edit ' . $singular ),
        'update_item'       => __( 'Update ' . $singular ),
        'add_new_item'      => __( 'Add New ' . $singular ),
        'new_item_name'     => __( 'New ' . $singular ),
        'menu_name'         => __( $plural ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical'  => true,
        'public'        => true,
        'show_admin_column' => true,
	);
	
    register_taxonomy( $slug, 'projekat', $args );
}
add_action( 'init', 'arteco_register_new_custom_taxonomy', 0 );