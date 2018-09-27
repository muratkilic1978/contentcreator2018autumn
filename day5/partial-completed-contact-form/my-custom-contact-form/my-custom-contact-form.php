<<?php
/**  
*Plugin Name: My Custom Contact Form
*Description: This is a simple Contact Form
*Author: Murat Kilic
*Author URI: http://www.hellowordpress.kilic.dk/
*Version: 0.1
**/

#Display the contact form
function my_form()
{
    $content = '';
    
    $content .= '<form method="post" action="https://hellowordpress.kilic.dk/thanks/" > ';
    
    $content .= '<input type="text" name="full_name" placeholder="Your Full Name" id="full_name" /> ';
    
    $content .= '<br />';
    
    $content .= '<input type="email" name="email_address" placeholder="Email Address" id="email_address" /> ';
    
    $content .= '<br />';
    
    $content .= '<input type="text" name="phone_number" placeholder="Phone Number" id="phone_number" /> '; 
    
    $content .= '<br />';
    
    $content .= '<textarea placeholder="Put in your comments here..." name="comments" id="comments" cols="20" rows="5"></textarea> ';
    
    $content .= '<br />';
    
    $content .= '<input type="submit" name="my_submit_form" value="SUBMIT YOUR COMMENTS" /> ';
    
    $content .= '</form>';
    
    return $content;
} # End function

# This will create a WordPress shortcode for my contact form
add_shortcode('my_contact_form','my_form');

















?>