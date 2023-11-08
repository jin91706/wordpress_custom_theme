
<?php
get_header();

?>	
<section class="service-detailpage">


    
    <div class="main-container_hero">
    <div class="grid patient-hero_grid">
        <div class="grid-item hero-left-about patient-info">
            <h1 class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="grid-item hero-right-aboutpage wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
             <?php $img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?> <img src="<?php echo $img_url; ?>" loading="lazy" alt="" loading="lazy" alt="" class="hero-img paitnet-banner">
        </div>
    </div>
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
                       <h4><?php echo $service_heading = get_sub_field('service_heading'); ?></h4>
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