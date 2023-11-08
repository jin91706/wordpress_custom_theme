<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd5941985590c3d60"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/footer_2022-01-05-10.php") )  ) ){
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
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>