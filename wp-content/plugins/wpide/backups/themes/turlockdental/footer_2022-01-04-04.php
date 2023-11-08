<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd59419f495b22a7a"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/footer_2022-01-04-04.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
<footer class="footer_section">
    <div class="custom_container">
        <div class="row">
            <div class="col-md-4">
                <div class="left_content wow fadeInUp" data-wow-duration="1s">
                    <a target="_blank" href="<?php echo of_get_option('request_call_link'); ?>"><img src="<?php echo of_get_option('request_call_image'); ?>"/ class="img-fluid"></a>
                </div>
                <div class="divider-shape"></div>
                <div class="social-links wow fadeInUp" data-wow-duration="1s">             
                    <ul>
                        <?php if (!of_get_option('fb_txt') == '') { ?>
                            <li>
                                <a target="_blank"  href="<?php echo of_get_option('fb_txt'); ?>" class="social_logo" rel="nofollow">  
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" / class="img-fluid">
                                </a>
                            </li>
                        <?php } ?>                
                        <?php if (!of_get_option('insta_txt') == '') { ?>
                            <li>
                                <a target="_blank" href="<?php echo of_get_option('insta_txt'); ?>" class="social_logo" rel="nofollow"> 
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" / class="img-fluid">
                                </a>
                            </li>
                        <?php } ?>                  
                    </ul>
                </div>
                <div class="divider-shape"></div>
                <div class="additional_content wow fadeInUp" data-wow-duration="1s">
                    <h2><?php echo of_get_option('additional_text') ?></h2>
                    <p><?php echo of_get_option('additional_content') ?></p>
                </div>
                <div class="divider-shape"></div>
                <div class="copyright_text wow fadeInUp" data-wow-duration="1s">
                    <p><?php echo of_get_option('copyright_text') ?></p>
                </div>
            </div>
            <div class="col-md-5">
                <h3 class="wow fadeInUp" data-wow-duration="1s"><?php echo of_get_option('email_call_text'); ?><a href="tel:<?php echo of_get_option('phone_txt'); ?>"><?php echo of_get_option('phone_txt'); ?></a></h3>
                <div class="contact_section wow fadeInUp" data-wow-duration="1s">
                    <?php echo do_shortcode('[contact-form-7 id="74" title="Contact form"]'); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="direction_info wow fadeInUp" data-wow-duration="1s">
                    <h3><?php echo of_get_option('direction_text');?></h3>
                    <p><?php echo of_get_option('address_text'); ?></p>
                    <div class="map">
                       
                    </div>
                </div>
                <div class="divider-shape"></div>
                <div class="office_hours_info wow fadeInUp" data-wow-duration="1s">
                    <h2><?php echo of_get_option('hours_text') ?></h2>
                    <p><?php echo of_get_option('hours_time_text') ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>