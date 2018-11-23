<?php
/**
*
*Plugin Name: Idea Pro Example Plugin
*Description: This is just an example plugin
*Version: 0.1
*
**/
   
    // Display contact form  
    function ideapro_form() 
    {
        /*  content variable */
        
        $content = '';
        
        $content .= '<form method="post" action="http://localhost/contentcreatorwordpress2018/thank-you/">';
        
        $content .= '<input type="text" name="full_name" placeholder="Your Full Name" id="full_name" required />';
        
        $content .= '<br />';
        
        $content .= '<input type="email" name="email_address" placeholder="Email Address" id="email_address" required />';
        
        $content .= '<br />';
        
        $content .= '<input type="text" name="phone_number" placeholder="Phone Number" id="phone_number" />';
        
        $content .= '<br />';
        
        $content .= '<textarea placeholder="Describe yourself here..." name="comments" id="comments" cols="20" rows="4"></textarea>';
        
        $content .= '<br />';
        
        $content .= '<input type="submit" name="ideapro_submit_form" value="SUBMIT YOUR INFORMATION">';
        
        $content .= '</form>';
        
        return $content;
        
    }
    
    add_shortcode('my_contact_form','ideapro_form');


    # Send the form-submission as a HTML email
    function set_html_content_type() 
    {
        return 'text/html';
    }
    
    #if an array exists we capture the form-submission on the "thank-you page"
    function my_form_capture() 
    {
        global $post, $wpdb;
        
        if(array_key_exists('ideapro_submit_form', $_POST)) 
        {
            $to = "murat@kilic.dk";
            $subject = "Idea Pro Example Site Form Submission";
            $body = '';
            
            #Removing HTML and PHP tags from a string
            $name = strip_tags($_POST['full_name'], "");
            $mail = strip_tags($_POST['email_address'], "");
            $phone = strip_tags($_POST['phone_number'], "");
            $comments = strip_tags($_POST['comments'], "");
            
            #Setting up the layout for the email
            $body .= '';
            $body .= 'Name: '.$name. ' <br />';
            $body .= 'Email: '.$mail. '<br />';
            $body .= 'Phone: '.$phone. '<br />';
            $body .= 'Comments: '.$comments. '<br />';
            
            # This filter takes the function - set_html_content_type as input at converts the email to a HTML email
            add_filter('wp_mail_content_type', 'set_html_content_type');
            
        
            #Sending the email
            wp_mail($to,$subject,$body);
            
            #Removing the filter we added before
            remove_filter('wp_mail_content_type', 'set_html_content_type');
            
        
        }
    }
    add_action('wp_head','my_form_capture');
?>