<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd59419c4bef87646"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/single-services.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/single-services_2022-01-07-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>




<?php
get_header();

?>	
<section class="service-detailpage">

  
<div class="main-container_hero services-page">
    <div class="grid hero-grid_about">
        <div class="grid-item hero-left-about">
            <div class="m-b-1em">
                <h1 class="hero-h1 is_about-h1 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <span class="hero-span wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php the_title(); ?></span>
            </h1>
        </div>
    </div>
    <div class="grid-item hero-right_about">
        <?php $img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?> <img src="<?php echo $img_url; ?>" loading="lazy" alt="" loading="lazy" alt="" class="hero-img services-banner">
    </div>
</div>
</div>

    
    
    <div class="service-section">
    <div class="service_info">
    <p class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo get_the_content() ?></p></div>
     <div class="row">
     <?php

// Check rows exists.
if( have_rows('services') ):
$count=1;
    // Loop through rows.
    while( have_rows('services') ) : 
           the_row();
        $count;
     

?>
 
<div class="service-col test_<?php echo $count; ?> container">
            
            <div class="col-sm-6  service-text-left wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
		<div class="service-image wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                                     <img src="<?php echo get_sub_field('service_image') ?>" alt="<?php echo $image['alt'] ?>" />

                    </div>
                    </div>
                     <div class="col-sm-6 service-image-right wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                       <div class="service-text-wrapper">
                       <h4 class="service-title wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo $service_heading = get_sub_field('service_heading'); ?></h4>
                       <p class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo  $service_text = get_sub_field('service_text'); ?></p>
		
</div>
                    </div>
                    </div>
                      
          <?php
  $count++;
        endwhile;

 endif;    
    ?>
                      </div>
</div>

     

                    
   </section>
 
    <?php get_footer(); ?>