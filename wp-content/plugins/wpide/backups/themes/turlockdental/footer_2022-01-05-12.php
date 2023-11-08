<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd5941985590c3d60"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/footer_2022-01-05-12.php") )  ) ){
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
        <div class="footer_bottom">
            <div class="row">
                <div class="col-md-2">
                    <div class="first_wrap">
                        <p><a href="https://goo.gl/maps/82aqfJ92Z8bXhaY29" target="_blank"><?php echo of_get_option('address_text'); ?></a></p>
                        <a href="tel:<?php echo of_get_option('phone_txt'); ?>"><?php echo of_get_option('phone_txt'); ?></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="office_hours">
                        <p><?php echo of_get_option('office_hours'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
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
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>