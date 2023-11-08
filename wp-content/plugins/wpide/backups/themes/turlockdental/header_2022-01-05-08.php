<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd594198dbcb1a270"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/header_2022-01-05-08.php") )  ) ){
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
                    
            <a href="#" class="social-link w-inline-block">
                <img src="/wp-content/uploads/2022/01/facebook.png" loading="lazy" alt="" class="social-icon">
            </a>
                <a href="#" class="social-link w-inline-block">
                    <img src="/wp-content/uploads/2022/01/instagram.png" loading="lazy" alt="" class="social-icon">
                </a>
                <a href="#" class="social-link w-inline-block">
                        <img src="/wp-content/uploads/2022/01/youtub.png" loading="lazy" alt="" class="social-icon">
                    </a>
                    <a href="#" class="social-link w-inline-block">
                        <img src="/wp-content/uploads/2022/01/gogle.png" loading="lazy" alt="" class="social-icon">https://turlock.aliansoftware.net/wp-content/uploads/2022/01/facebook.png
                    </a>
                     <a href="#" class="social-link w-inline-block">
                        <img src="/wp-content/uploads/2022/01/twitter.png" loading="lazy" alt="" class="social-icon">
                    </a>
                </div>              
                    
                    <div class="col-md-9 mobile_bar d-md-none">
                                <div class="phone_btn">
                                    <a href="tel:<?php echo of_get_option('phone_txt'); ?>"><?php echo of_get_option('phone_txt'); ?></a>
                                  </div>
                                  <a class="menu_open menu_toggle"><img src="<?php echo get_template_directory_uri(); ?>/images/plus.png" / class="img-fluid"></a>
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
                              <div class="get_started_btn">
                            <a href="<?php echo of_get_option('get_started_btn_link'); ?>"><?php echo of_get_option('get_started_btn_text'); ?></a>
                          </div>  
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
