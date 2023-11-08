<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd59419d933148942"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/single-services.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/single-services_2022-01-06-10.php") )  ) ){
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

  <div class="banner_section">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div class="banner-image" style="background-image: url('https://floor-dev.aliansoftware.net/wp-content/uploads/2021/12/banner_service.jpg')">
  
  <div class="heading-text-wrapper">
  <h1><?php the_title(); ?></h1>
  </div>
  
   </div>
  <?php endif; ?>
</div>


    
    
    <div class="service-section">
    <div class="service_info"><p><?php echo get_the_content() ?></p></div>
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
            
            <div class="col-sm-6  service-text-left">
		<div class="service-image">
                                     <img src="<?php echo get_sub_field('service_image') ?>" alt="<?php echo $image['alt'] ?>" />

                    </div>
                    </div>
                     <div class="col-sm-6 service-image-right">
                       <div class="service-text-wrapper">
                       <h4 class="service-title"><?php echo $service_heading = get_sub_field('service_heading'); ?></h4>
                       <p><?php echo  $service_text = get_sub_field('service_text'); ?></p>
		
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