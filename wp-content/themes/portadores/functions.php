<?php

if(function_exists('add_theme_support')){

	add_theme_support('menus');
	add_theme_support( 'post-thumbnails');
	
	register_nav_menus(
	array(
	//'menu-principal' =>'Navegación Principal'
	)
);
}

add_theme_support( 'html5', array( 'search-form' ) );

add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );
function add_menu_parent_class( $items ) {
	
	$parents = array();
	foreach ( $items as $item ) {
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}
	
	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			$item->classes[] = 'menu-parent-item'; 
		}
	}
	
	return $items;    
}

function add_specific_menu_atts( $atts, $item, $args ) {
	
	//$menu_target = '07';
	
	//if ($item->ID == $menu_target) {
	  //$atts['data-toggle'] = 'dropdown';
	//}
	
	$atts['data-toggle'] = 'dropdown';
	
    return $atts;
}
//add_filter( 'nav_menu_link_attributes', 'add_specific_menu_atts', 10, 3 );

/**
 * Agregar estilos personalizados a la administración
 */
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
function my_admin_theme_style() {
    wp_enqueue_style('my-admin-style', get_template_directory_uri() . '/css/admin.css');
}

function the_breadcrumb() {
	if (!is_home()) {
		//echo '<a href="' . get_permalink() . '">';
		echo '<a href="">';
		bloginfo('name');
		echo "</a> / ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " / ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

//function wpt_register_js() {
//    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
//    wp_enqueue_script('jquery.bootstrap.min');
//}
//
//add_action( 'init', 'wpt_register_js' );
//function wpt_register_css() {
//    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
//    wp_enqueue_style( 'bootstrap.min' );
//}
//add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

?>