<?php
/**
*
*Plugin Name: Custom Contact Form Plugin
*Description: This is just a Custom Contact Form
*Author: Murat Kilic
*Author URI:
*Version: 0.1
*
**/
   
    // Part 3 of the WP Plugin Tutorial video 
    function ideapro_form() 
    {
        /*  content variable */
        
        $content = '';
        
        $content .= '<form method="post" action="https://sandboxwp.kilic.dk/thank-you/">';
        
        $content .= '<input type="text" name="full_name" placeholder="Your Full Name" id="full_name" />';
        
        $content .= '<br />';
        
        $content .= '<input type="email" name="email_address" placeholder="Email Address" id="email_address" />';
        
        $content .= '<br />';
        
        $content .= '<input type="text" name="phone_number" placeholder="Phone Number" id="phone_number" />';
        
        $content .= '<br />';
        
        $content .= '<textarea placeholder="Describe yourself here..." name="comments" id="comments" cols="20" rows="4"></textarea>';
        
        $content .= '<br />';
        
        $content .= '<input type="submit" name="ideapro_submit_form" value="SUBMIT YOUR INFORMATION">';
        
        $content .= '</form>';
        
        return $content;
        
    }
    add_shortcode('ideapro_contact_form','ideapro_form');

    function set_html_content_type() 
    {
        return 'text/html';
    }
    
    function ideapro_form_capture() 
    {
        global $post, $wpdb;
        
        if(array_key_exists('ideapro_submit_form', $_POST)) 
        {
            $to = "murat@kilic.dk";
            $subject = "Idea Pro Example Site Form Submission";
            $body = '';
            
            $name = strip_tags($_POST['full_name'], "");
            $mail = strip_tags($_POST['email_address'], "");
            $phone = strip_tags($_POST['phone_number'], "");
            $comments = strip_tags($_POST['comments'], "");
            
            $body .= '';
            $body .= 'Name: '.$name. ' <br />';
            $body .= 'Email: '.$mail. '<br />';
            $body .= 'Phone: '.$phone. '<br />';
            $body .= 'Comments: '.$comments. '<br />';
            
            $body .= 
            add_filter('wp_mail_content_type', 'set_html_content_type');
            
            wp_mail($to,$subject,$body);
            
            remove_filter('wp_mail_content_type', 'set_html_content_type');
            
            
          
            
            /* Add the form submissiob to the database using the table we created */
            echo $insertData = $wpdb->get_results(" INSERT INTO sandboxwp_form_submissions (name, email, phone, comments) VALUES('".$name."', '".$mail."', '".$phone."', '".$comments."') ");
            
        }
    }
    add_action('wp_head','ideapro_form_capture');
?>