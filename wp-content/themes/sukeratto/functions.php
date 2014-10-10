<?php 
	// activate widget area
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=>'Sidebar Widgets',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
		));
}

show_admin_bar( true );


if (function_exists('add_theme_support')) { add_theme_support('post-thumbnails'); }

//Enable custom menus
add_theme_support( "menus" );



function theme_styles(){
	wp_enqueue_style("main", get_template_directory_uri() . '/style.css');
}

function theme_js(){
}

function simple_fecha() {
	global $post;
	$terms = get_the_terms($post->ID,'fecha','',' ','');
	$terms = array_map('_simple_cb', $terms);
	return implode(', ', $terms);
}   

function simple_revista() {
	global $post;
	$terms = get_the_terms($post->ID,'revista','',' ','');
	$terms = array_map('_simple_cb', $terms);
	return implode(', ', $terms);
}   

function _simple_cb($t) {
	return $t->name;
}

add_action('wp_enqueue_scripts',"theme_styles");
add_action('wp_enqueue_scripts',"theme_js");

?>