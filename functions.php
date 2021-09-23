<?php 

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function theme_setup() {
  add_theme_support( 'post-thumbnails' );

  register_nav_menu( 'primary', __("Primary Menu") );
}
add_action('after_setup_theme', 'theme_setup');

function theme_sidebars() {
  register_sidebar( [
    'id' => 'sidebar',
    'name' => __('Sidebar')
  ] );
}
add_action('widgets_init', 'theme_sidebars');