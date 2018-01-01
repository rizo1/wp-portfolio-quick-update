<?php


function adv_theme_support(){
	//featured image support
		add_theme_support('post-thumbnails');



}

add_action('after_setup_theme', 'adv_theme_support');

//excerpt length

function adv_set_excerpt_length(){
	return 25;
}

add_filter('excerpt_length', 'adv_set_excerpt_length');


//widgets

function init_widgets($id){
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id'   => 'sidebar',
			'before_widget' => '<div class="panel panel-default sidebar" style="padding:2em;">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'

			));
}

add_action('widgets_init', 'init_widgets');