<?php

function load_scripts() {
    # First parameter is the id or name of the file you are adding -  must be unique, Second parameter is the path for the file
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style('jquery-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style('animate-min', get_template_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_style('font-awesome-cdn', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
    
}
# First parameter is hook - this is something WordPress recommend whenever you want add css or js will have to do it 
add_action('wp_enqueue_scripts','load_scripts');
?>


