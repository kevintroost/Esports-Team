<?php

// awdahfhaigh
add_action("wp_enqueue_scripts", "loadCss");
function loadCss()
{
  wp_enqueue_style("custom_css", get_template_directory_uri() . "/style.css");
}

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu')
    )
  );
}
add_action('init', 'register_my_menus');

?>