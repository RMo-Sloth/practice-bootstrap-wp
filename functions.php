<?php 

function theme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'theme_setup');

function theme_sidebars() {
  register_sidebar( [
    'id' => 'sidebar',
    'name' => __('Sidebar')
  ] );
}
add_action('widgets_init', 'theme_sidebars');