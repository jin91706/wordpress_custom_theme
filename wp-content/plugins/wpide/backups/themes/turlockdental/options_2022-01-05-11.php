<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd5941985590c3d60"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/options.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/options_2022-01-05-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php

function optionsframework_option_name() {
    //take theme name or you can set by deafult
    $themename = wp_get_theme();
    $themename = preg_replace("/\W/", "_", strtolower($themename));
    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
   
    update_option('optionsframework', $optionsframework_settings);
}

function optionsframework_options() {
    $options = array();

    // ******** General Section ******** //

    $options[] = array(
        'name' => __('General Settings', 'options_framework'),
        'type' => 'heading'
    );

    $options[] = array("name" => __('Upload favicon', 'prothemeus'),
        "desc" => __('Upload favicon', 'prothemeus'),
        "id" => "Upload_favicon",
        "type" => "upload");

    $options[] = array("name" => __('Upload Logo', 'prothemeus'),
        "desc" => __('Upload logo', 'prothemeus'),
        "id" => "header_logo",
        "type" => "upload");
        
    $options[] = array("name" => __('Upload Mobile Logo', 'prothemeus'),
        "desc" => __('Upload Mobile logo', 'prothemeus'),
        "id" => "mobile_logo",
        "type" => "upload");
        
    $options[] = array("name" => __('Upload Logo', 'prothemeus'),
        "desc" => __('Fbicon', 'prothemeus'),
        "id" => "fbicon",
        "type" => "upload");
        
        $options[] = array("name" => __('Upload Logo', 'prothemeus'),
        "desc" => __('Instaicon', 'prothemeus'),
        "id" => "instaicon",
        "type" => "upload");
        
        $options[] = array("name" => __('Upload Logo', 'prothemeus'),
        "desc" => __('Youtubeicon', 'prothemeus'),
        "id" => "youtubeicon",
        "type" => "upload");
        
        $options[] = array("name" => __('Upload Logo', 'prothemeus'),
        "desc" => __('Googleicon', 'prothemeus'),
        "id" => "googleicon",
        "type" => "upload");
        
        $options[] = array("name" => __('Upload Logo', 'prothemeus'),
        "desc" => __('Twittericon', 'prothemeus'),
        "id" => "twittericon",
        "type" => "upload");
        
    $options[] = array(
        'name' => __('Enter Facebook Link ', 'options_framework'),
        'id' => 'fb_txt',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Enter Instagram Link ', 'options_framework'),
        'id' => 'insta_txt',
        'type' => 'text'
    );
     $options[] = array(
        'name' => __('Enter Youtube Link ', 'options_framework'),
        'id' => 'you_txt',
        'type' => 'text'
    );
     $options[] = array(
        'name' => __('Enter Google Link ', 'options_framework'),
        'id' => 'google_txt',
        'type' => 'text'
    );
     $options[] = array(
        'name' => __('Enter Twitter Link ', 'options_framework'),
        'id' => 'twitter_txt',
        'type' => 'text'
    );
     $options[] = array(
        'name' => __('Get Started Button Text ', 'options_framework'),
        'id' => 'get_started_btn_text',
        'type' => 'text'
    );
    
    $options[] = array(
        'name' => __('Get Started Button Link ', 'options_framework'),
        'id' => 'get_started_btn_link',
        'type' => 'text'
    );
    
    $options[] = array(
        'name' => __('Enter Phone Number ', 'options_framework'),
        'id' => 'phone_txt',
        'type' => 'text'
    );

    // ******** Footer Section ******** //


    $options[] = array(
        'name' => __('Footer Settings', 'options_framework'),
        'type' => 'heading'
    );
    
    $options[] = array("name" => __('Upload Footer Logo', 'prothemeus'),
        "desc" => __('upload footer logo', 'prothemeus'),
        "id" => "footer_logo",
        "type" => "upload");
    
    $options[] = array(
        'name' => __('Enter Address Text ', 'options_framework'),
        'id' => 'address_text',
        'type' => 'textarea'
    );
    
    $options[] = array(
        'name' => __('Enter Office Hours', 'options_framework'),
        'id' => 'office_hours',
        'type' => 'textarea'
    );
    
    $options[] = array(
        'name' => __('Enter Footer About Content', 'options_framework'),
        'id' => 'about_content',
        'type' => 'textarea'
    );
    
    $options[] = array(
        'name' => __('Enter Copyright Text', 'options_framework'),
        'id' => 'copyright_text',
        'type' => 'text'
    );
    
    $options[] = array(
        'name' => __('Enter Blog Button text', 'options_framework'),
        'id' => 'blog_btn_text',
        'type' => 'text'
    );
    
    $options[] = array(
        'name' => __('Enter Blog Button Link', 'options_framework'),
        'id' => 'blog_btn_link',
        'type' => 'text'
    );
    
     $options[] = array(
        'name' => __('Want to schedule apt text', 'options_framework'),
        'id' => 'schedule_text',
        'type' => 'textarea'
    );
    
    $options[] = array(
        'name' => __('Enter Schedule Button text', 'options_framework'),
        'id' => 'schedule_btn_text',
        'type' => 'text'
    );
    
    $options[] = array(
        'name' => __('Enter Schedule Button Link', 'options_framework'),
        'id' => 'schedule_btn_link',
        'type' => 'text'
    );
    
    $options[] = array(
        'name' => __('Enter Facebook Link ', 'options_framework'),
        'id' => 'fb_txt',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Enter Instagram Link ', 'options_framework'),
        'id' => 'insta_txt',
        'type' => 'text'
    );
     $options[] = array(
        'name' => __('Enter Youtube Link ', 'options_framework'),
        'id' => 'you_txt',
        'type' => 'text'
    );
     $options[] = array(
        'name' => __('Enter Google Link ', 'options_framework'),
        'id' => 'google_txt',
        'type' => 'text'
    );
     $options[] = array(
        'name' => __('Enter Twitter Link ', 'options_framework'),
        'id' => 'twitter_txt',
        'type' => 'text'
    );
    // ******** 404 page ******** //  

    $options[] = array(
        'name' => __('404 Settings', 'options_framework'),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __('Enter Error page Title ', 'options_framework'),
        // 'desc' => __('Enter audio link', 'options_framework'),
        'id' => 'error_title',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Enter Error page Title ', 'options_framework'),
        // 'desc' => __('Enter audio link', 'options_framework'),
        'id' => 'error_sub_title',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Enter Error page Button Text ', 'options_framework'),
        // 'desc' => __('Enter audio link', 'options_framework'),
        'id' => 'error_link_text',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Enter Error page Button Link ', 'options_framework'),
        // 'desc' => __('Enter audio link', 'options_framework'),
        'id' => 'error_link',
        'type' => 'text'
    );

    return $options;
}

?>