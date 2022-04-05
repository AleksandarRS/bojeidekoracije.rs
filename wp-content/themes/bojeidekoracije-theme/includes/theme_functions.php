<?php 
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// active menu item for archive fix
function change_page_menu_classes($menu)
{
    global $post;
    if (is_post_type_archive('proizvod') || is_singular('proizvod')) :
        $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
        $menu = str_replace('menu-item-object-proizvod', 'menu-item-object-proizvod current-menu-item', $menu); // add the current_page_parent class to the page you want
    endif;
    // if (is_post_type_archive('job') || is_singular('job')) :
    //     $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
    //     $menu = str_replace('menu-item-object-job', 'menu-item-object-job current-menu-item', $menu); // add the current_page_parent class to the page you want
    // endif;
    // if (is_post_type_archive('product') || is_singular('product')) :
    //     $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
    //     $menu = str_replace('menu-item-object-product', 'menu-item-object-product current-menu-item', $menu); // add the current_page_parent class to the page you want
    // endif;
    return $menu;
}
add_filter('nav_menu_css_class', 'change_page_menu_classes', 10, 2);

?>