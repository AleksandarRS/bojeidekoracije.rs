<?php

function arteco_register_post_type() {
    $singular = 'Custom post type name'; // Book
	$plural = 'Custom post type names';  // Books
	
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
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => '',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'arteco_register_post_type' );