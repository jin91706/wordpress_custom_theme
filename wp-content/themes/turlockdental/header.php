  



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
                <a href="<?php echo of_get_option('insta_txt'); ?>" target="_blank" class="social-link w-inline-block">
                   <img src="<?php echo of_get_option('instaicon'); ?>" loading="lazy" alt="" class="social-icon">
              </a>
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
                                  <a class="menu_open menu_toggle">
                                        <div onclick="myFunction(this)">
                                          <div class="bar1"></div>
                                          <div class="bar2"></div>
                                          <div class="bar3"></div>
                                        </div>
                                    </a>
                    </div>
                    <div class="col-sm-12 header_mt_1 d-md-none">
                        <div class="main-nav-opne">
                                <a class="menu_open close_menu" href="#"></a>
                            
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
        <script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>
    </header><!-- #masthead -->
