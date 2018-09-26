<?php
/**
*Plugin Name: Contact Form Plugin
*Description: This is a simple WordPress plugin
*Author: Murat Kilic
*Author URI: http://www.nodomain.com
*Version: 0.1
**/

    #Here we create a function
    function contact_form_function()
    {
        
        $content = "This is a very basic plugin!";
        return $content;
        
    }

    #Allow us to create a short-code in WordPress, that we can use to display the plugin on a specific page or blogpost
    add_shortcode('contactplugin','contact_form_function');

?>


