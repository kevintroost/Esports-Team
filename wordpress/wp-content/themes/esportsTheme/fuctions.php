<?php 

add_action("wp_enqueue_scripts", "customCss");
function customCss(){ 
    wp_enqueue_style("custom_css", get_template_directory_uri()."/style.css"); 
}

?> 