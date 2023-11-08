<?php
get_header();
?>



                <section class="page_contant errorpage">
             
                    <h1><?php echo of_get_option('error_title'); ?></h1>
                    </h1>
                    <p><?php echo of_get_option('error_sub_title'); ?></p>
                    <a class="main-btn hero w-inline-block" href="<?php echo of_get_option('error_link');?>">Go to WebSite</a>
                  
                </section>

 <?php
 get_footer(); ?>