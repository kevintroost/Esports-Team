<!-- add stylesheet -->
<?php 

add_action("wp_enqueue_scripts", "customCss");
function customCss(){ 
    wp_enqueue_style("custom_css", get_template_directory_uri()."/style.css"); 
}

// <!-- Showing the menu tab in the admin panel -->
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

