<?php


//load stylesheet
function load_css()
{


	wp_register_style('bootstrap',get_template_directory_url().'/css/bootstrap.min.css', array(),false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('main',get_template_directory_url().'/css/main.css', array(),false, 'all');
	wp_enqueue_style('main');

}
 /**hello**/

add_action('wp_enqueue_scripts','load_css');

//load javascript
function load_js()

{
	wp_enqueue_scripts('jquery');
	wp_register_script('bootstrap', get_template_directory_url(). '/js/bootstrap.min.js','jquery', false, true);
	wp_enqueue_scripts('bootstrap');
}

add_action('wp_enqueue_scripts','load_js');



//Theme Options

add_theme_support('menu')


//menus
register_nav_menus(

	 array(

	 		'top-menu' => 'Top Menu location',
	 		'mobile-menu' => 'Mobile Menu location',
	 	)

);





