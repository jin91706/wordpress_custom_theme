<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd59419afbc7727f1"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/404.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/404_2022-01-10-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
get_header();
?>



                <section class="page_contant errorpage">
                    <h1 class="hero-h1"><?php echo of_get_option('error_title'); ?></h1>
                    <p><?php echo of_get_option('error_sub_title'); ?></p>
                    <a class="main-btn hero w-inline-block" href="<?php echo of_get_option('error_link');?>">Go to Home</a>
                </section>

 <?php
 get_footer(); ?>