<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd59419fedcea8881"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/footer_2022-01-27-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
<footer>
    <div class="container">
        <div class="footer_top">
            <h2><?php echo of_get_option('schedule_text'); ?></h2>
            <div class="request_btn">
                <a href="<?php echo of_get_option('schedule_btn_link'); ?>"><?php echo of_get_option('schedule_btn_text'); ?></a>
            </div>
        </div>
        <div class="footer_bottom desktop_view">
            <div class="row">
                <div class="col-md-2">
                    <div class="first_wrap">
                        <p><a href="https://www.google.com/maps/place/Turlock+Dental+Care/@37.510191,-120.837062,15z/data=!4m5!3m4!1s0x0:0xdd31b1404dddb73a!8m2!3d37.510191!4d-120.837062?sa=X&ved=2ahUKEwigz-m7q5HpAhUJi6wKHZEhCkUQ_BIwCnoECBcQCA&shorturl=1" target="_blank"><?php echo of_get_option('address_text'); ?></a></p>
                        <a href="tel:<?php echo of_get_option('phone_txt'); ?>"><?php echo of_get_option('phone_txt'); ?></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="office_hours">
                        <p><?php echo of_get_option('office_hours'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 desktop">
                    <a href="/" class="footer-logo"><img src="<?php echo of_get_option('footer_logo') ?>" alt="Footer Logo" class="img-fluid"></a>
                </div>
                <div class="col-md-3">
                    <p class="about_content"><?php echo of_get_option('about_content') ?></p>
                </div>
                <div class="col-md-2">
                    <div class="footer_social_links">
                        <ul>
                            <li>
                                <a href="<?php echo of_get_option('fb_txt'); ?>" target="_blank" class="social-link w-inline-block">
                                <img src="<?php echo of_get_option('footer-fbicon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                            </li>
                            <li>
                               <a href="<?php echo of_get_option('insta_txt'); ?>" target="_blank" class="social-link w-inline-block">
                               <img src="<?php echo of_get_option('footer-instaicon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                         </li>
                         <li>
                             <a href="<?php echo of_get_option('you_txt'); ?>" target="_blank" class="social-link w-inline-block">
                            <img src="<?php echo of_get_option('footer-youtubeicon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                         </li>
                         <li>
                            <a href="<?php echo of_get_option('google_txt'); ?>" target="_blank" class="social-link w-inline-block">
                            <img src="<?php echo of_get_option('footer-googleicon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                        </li>
                           <li>
                               <a href="<?php echo of_get_option('twitter_txt'); ?>" target="_blank" class="social-link w-inline-block">
                               <img src="<?php echo of_get_option('footer-twittericon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                           </li>
                   </ul>
                </div>
                    <div class="blog_btn">
                        <a href="<?php echo of_get_option('blog_btn_link'); ?>"><?php echo of_get_option('blog_btn_text'); ?></a>
                    </div>
                    <div class="copyright_text">
                        <p><?php echo of_get_option('copyright_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom mobile_view">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="/" class="footer-logo"><img src="<?php echo of_get_option('footer_logo') ?>" alt="Footer Logo" class="img-fluid"></a>
                </div>
                <div class="col-md-2">
                    <div class="first_wrap">
                        <p><a href="https://www.google.com/maps/place/Turlock+Dental+Care/@37.510191,-120.837062,15z/data=!4m5!3m4!1s0x0:0xdd31b1404dddb73a!8m2!3d37.510191!4d-120.837062?sa=X&ved=2ahUKEwigz-m7q5HpAhUJi6wKHZEhCkUQ_BIwCnoECBcQCA&shorturl=1" target="_blank"><?php echo of_get_option('address_text'); ?></a></p>
                        <a href="tel:<?php echo of_get_option('phone_txt'); ?>"><?php echo of_get_option('phone_txt'); ?></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="office_hours">
                        <p><?php echo of_get_option('office_hours'); ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="about_content"><?php echo of_get_option('about_content') ?></p>
                </div>
                <div class="col-md-3">
                    <div class="footer_social_links">
                        <ul>
                            <li>
                                <a href="<?php echo of_get_option('fb_txt'); ?>" target="_blank" class="social-link w-inline-block">
                                <img src="<?php echo of_get_option('footer-fbicon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="<?php echo of_get_option('insta_txt'); ?>" target="_blank" class="social-link w-inline-block">-->
                            <!--    <img src="<?php echo of_get_option('footer-instaicon'); ?>" loading="lazy" alt="" class="social-icon"></a>-->
                            <!--</li>-->
                            <li>
                                <a href="<?php echo of_get_option('you_txt'); ?>" target="_blank" class="social-link w-inline-block">
                                <img src="<?php echo of_get_option('footer-youtubeicon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                            </li>
                            <li>
                                <a href="<?php echo of_get_option('google_txt'); ?>" target="_blank" class="social-link w-inline-block">
                                <img src="<?php echo of_get_option('footer-googleicon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                            </li>
                            <li>
                                <a href="<?php echo of_get_option('twitter_txt'); ?>" target="_blank" class="social-link w-inline-block">
                                <img src="<?php echo of_get_option('footer-twittericon'); ?>" loading="lazy" alt="" class="social-icon"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog_btn">
                        <a href="<?php echo of_get_option('blog_btn_link'); ?>"><?php echo of_get_option('blog_btn_text'); ?></a>
                    </div>
                    <div class="copyright_text">
                        <p><?php echo of_get_option('copyright_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade newmo" id="myModal" role="dialog">
                                                <div class="modal-dialog">
                                                
                                                  <!-- Modal content-->
                                                  <div class="modal-content ">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Modal Header</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                      
                                                      <p>ABC</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                  
                                                </div>
                                              </div>
<?php wp_footer(); ?>
</body>

</html>