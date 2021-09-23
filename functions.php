<?php 

function theme_sidebars() {
  register_sidebar( [
    'id' => 'sidebar',
    'name' => __('Sidebar')
  ] );
}
add_action('widgets_init', 'theme_sidebars');