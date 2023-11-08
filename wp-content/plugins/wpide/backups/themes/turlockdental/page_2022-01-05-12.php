<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd5941985590c3d60"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/page.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/page_2022-01-05-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
get_header();
?>

<?php

if (have_posts()) :
    while (have_posts()) : the_post();    
            ?>
                <section class="page_contant">
                                <?php the_content(); ?>
                                </section>
<?php      
    endwhile;
endif;
 get_footer(); ?>