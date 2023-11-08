




<?php
get_header();

?>	
<section class="service-detailpage">

  
<div class="main-container_hero services-page">
    <div class="grid hero-grid_about">
        <div class="grid-item hero-left-about">
            <div class="m-b-1em">
                <h1 class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <?php the_title(); ?>
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
                       <h4 class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo $service_heading = get_sub_field('service_heading'); ?></h4>
                       <p class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo  $service_text = get_sub_field('service_text'); ?></p>
		 <?php if(get_sub_field('service_learn_more')  != ''){ ?>
		<a href="<?php echo get_sub_field('service_learn_more_link') ?>" class="main-btn transparent w-inline-block wow slideInLeft" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
   <?php echo get_sub_field('service_learn_more') ?>
   <img src="/wp-content/uploads/2022/01/arrowfinal.png" loading="lazy" alt="" class="arrow-icon">
   </a>
    
						   <?php } ?>
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