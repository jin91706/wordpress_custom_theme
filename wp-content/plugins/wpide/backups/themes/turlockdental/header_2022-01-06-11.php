<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd59419cd99b9bb46"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/header_2022-01-06-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>  



<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="menu_overlay"></div>
    <header  class="site-header ">
        <div class="main-header">
            <div class="custom-container">
                <div class="row headermainrow">
                    <div class="col-md-3">
                        <div class="logo">
                           <a href="/"><img src="<?php echo of_get_option('header_logo'); ?>" alt="Header Logo" class="img-fluid" /></a>
                        </div>
                        <div class="logo mobile-logo">
                           <a href="/"><img src="<?php echo of_get_option('mobile_logo'); ?>" alt="Mobile Logo" class="img-fluid" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 mobile_none">
                        <div class="main-nav">
                            <nav id="site-navigation" class="main-navigation">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary-menu',
                                        'menu_id'        => 'primary-menu',
                                    ) );
            			        ?>
                            </nav>
                        </div>
                        </div>
                        <div class="social-menu" >
                    
            <a href="<?php echo of_get_option('fb_txt'); ?>" target="_blank" class="social-link w-inline-block">
                <img src="<?php echo of_get_option('fbicon'); ?>" loading="lazy" alt="" class="social-icon">
            </a>
                <!--<a href="<?php echo of_get_option('insta_txt'); ?>" target="_blank" class="social-link w-inline-block">-->
                <!--    <img src="<?php echo of_get_option('instaicon'); ?>" loading="lazy" alt="" class="social-icon">-->
                <!--</a>-->
                <a href="<?php echo of_get_option('you_txt'); ?>" target="_blank" class="social-link w-inline-block">
                       <img src="<?php echo of_get_option('youtubeicon'); ?>" loading="lazy" alt="" class="social-icon">
                    </a>
                    <a href="<?php echo of_get_option('google_txt'); ?>" target="_blank" class="social-link w-inline-block">
                        <img src="<?php echo of_get_option('googleicon'); ?>" loading="lazy" alt="" class="social-icon">
                    </a>
                     <a href="<?php echo of_get_option('twitter_txt'); ?>" target="_blank" class="social-link w-inline-block">
                        <img src="<?php echo of_get_option('twittericon'); ?>" loading="lazy" alt="" class="social-icon">
                    </a>
                </div>              
                    
                    <div class="col-md-9 mobile_bar d-md-none">
                                
                                  <a class="menu_open menu_toggle"><svg height="23px" version="1.1" viewBox="0 0 18 12" width="25px"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title></title>
                                <desc></desc>
                                <defs></defs>
                                <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                                    <g fill="#ffebc0" id="Core" transform="translate(-87.000000, -342.000000)">
                                        <g id="menu" transform="translate(87.000000, 342.000000)">
                                            <path
                                                d="M0,12 L18,12 L18,10 L0,10 L0,12 L0,12 Z M0,7 L18,7 L18,5 L0,5 L0,7 L0,7 Z M0,0 L0,2 L18,2 L18,0 L0,0 L0,0 Z"
                                                id="Shape"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg></a>
                    </div>
                    <div class="col-sm-12 header_mt_1 d-md-none">
                        <div class="main-nav-opne">
                                <a class="menu_open close_menu" href="#">x</a>
                            
                            <nav id="site-navigation" class="main-navigation">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary-menu',
                                        'menu_id'        => 'primary-menu',
                                    ) );
            			        ?>
                            </nav><!-- #site-navigation -->
                         
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
