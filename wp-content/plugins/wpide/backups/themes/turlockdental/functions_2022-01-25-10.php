<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd59419d8e7f7e578"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/functions_2022-01-25-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php

define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/');
require_once dirname(__FILE__) . '/inc/options-framework.php';
$optionsfile = locate_template('options.php');
load_template($optionsfile);
add_action('optionsframework_options', 'optionsframework_options');
if ( ! function_exists( 'cpr_setup' ) ) :
/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	 function turlockdental_setup() {
	     add_theme_support( 'automatic-feed-links' );
	     add_theme_support( 'title-tag' );
	     add_theme_support( 'post-thumbnails' );
	     register_nav_menus( array(
			'primary-menu' => 'Primary',
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ));
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	 }
endif;
add_action( 'after_setup_theme', 'turlockdental_setup' );
add_post_type_support( 'page', 'excerpt' );
//Enqueue scripts and styles. START

 function seo_scripts() {    
    wp_enqueue_style('turlockdental-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/css/style_v.css');
    wp_enqueue_style('custom_style-a', get_template_directory_uri() . '/css/style_a.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');  
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js',array(),true);
    wp_enqueue_script('wow-jquery', get_template_directory_uri() . '/js/wow.min.js',array(),true);
    wp_enqueue_script('jquery-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(),true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js', array(), true );
    wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/js/slick.min.js', array(), true );
    wp_register_script('jquery_custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);
    
    
    wp_enqueue_style('fancyb-ox-style', get_template_directory_uri() . '/css/fancybox.css');
    wp_enqueue_script('fancybox-umd-js', get_template_directory_uri() . '/js/fancybox.umd.js', array(), true );
    
    
        $localize = array(
        'ajax_url' => admin_url('admin-ajax.php'),
        // Securing your WordPress plugin AJAX calls using nonces
        'ajax_nonce' => wp_create_nonce('_check__ajax_100')
    );
    wp_localize_script('jquery_custom', 'js_config', $localize);
    wp_enqueue_script('jquery_custom');   
 }
 add_action( 'wp_enqueue_scripts', 'seo_scripts' );
 
//Enqueue scripts and styles. END
 
 add_image_size( 'blog-image', 1390.14, 579.22, true );
 add_image_size( 'all-blog', 607.28, 566.41, true );
 add_image_size( 'service-list', 1245, 400, true );
 
//HOME-About Section
function home_about_sec(){
?>

<section class="section">
	<div class="main-test-container_right home-about-r wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
		<div class="grid-test about-green_bg">
			<div class="grid-test-item home_about-test-left">
				<img src="/wp-content/uploads/2022/01/about-bg.png" alt="" class="vector">
			</div>
			<div class="grid-test-item home-about-test_right">
				<h2 class="h2-white no-t-m" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('about_title');?></h2><div class="m-b-2em">
					<p class="para-white" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('about_desc');?></p>
				</div>
				<a href="<?php echo get_field('about_btn_link');?>" class="main-btn w-inline-block"><p><?php echo get_field('about_btn');?></p></a>
			</div>
		</div>
	</div>
</section>
<?php   
    } 
add_shortcode('home-about-sec','home_about_sec');
 
 //Home page Testimonial One start
function diwp_testimonials_custom_post_type(){

    // Set labels for the custom post type

    $labels = array(
                     'name' => 'Testimonials',
                     'singular_name' => 'Testimonial',
                     'add_new'    => 'Add Testimonial',
                     'add_new_item' => 'Enter Testimonial Details',
                     'all_items' => 'All Testimonials',
                      'featured_image' => 'Add Featured Image',
                     'set_featured_image' => 'Set Featured Image',
                     'remove_featured_image' => 'Remove Featured Image'

                   );


    // Set Options for this custom post type;

    $args = array(
                    'public' => true,
                    'label'       => 'Testimonials',
                    'videos' => 'videos/%category%',
                    'labels'      => $labels,
                    'description' => 'Testimonials is a collection of reviews',
                    'menu_icon'      => 'dashicons-testimonial',
                   'supports'   => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                    'capability_type' => 'page',

                 );

    register_post_type('testimonials', $args);

}

add_action( 'init', 'diwp_testimonials_custom_post_type' );


function testimonial_custom_post_type(){

$args = array(
                'post_type'      => 'testimonials',
                'publish_status' => 'published',
             );

             ?>
             
         
        <section class="testominal-section-home">
             <div class="main-test-container">
             <div class="container-test wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <h2 class="testimonial-title">Our Patients Says</h2>

                    <?php
                    $query = new WP_Query($args);

                    if($query->have_posts()) :?>
                        <div class="testimonial_slider">
                            <?php while($query->have_posts()) :
                                    $query->the_post() ;
                            ?>

                                    <div class="testimonial-col">
                                        <div class="testi-content"> <p><?php the_content(); ?></p> </div>
                                        <div class="image-title-wrapper">
                                        <?php $img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?> <img src="<?php echo $img_url; ?>">
                                        <h4 class="service-title"><?php the_title();?></h4>
                                        </div>
                                    </div>

                            <?php
                                endwhile;
                            ?>
                        </div>

                    <?php
                        wp_reset_postdata();
                    endif;
                    ?>

            </div>
            <!--<div class="container-test-clearfix"></div>-->
            </div>
            </section>
                      
         
<?php
}
//Home page Testimonial One End
//Home page Testimonial Two start
add_shortcode( 'testimonial_sliders', 'testimonial_custom_post_type' );

function diwp_testimonials_custom_post_type_two(){

    // Set labels for the custom post type

    $labels = array(
                     'name' => 'Testimonialstwo',
                     'singular_name' => 'Testimonial',
                     'add_new'    => 'Add Testimonial',
                     'add_new_item' => 'Enter Testimonial Details',
                     'all_items' => 'All Testimonials',
                      'featured_image' => 'Add Featured Image',
                     'set_featured_image' => 'Set Featured Image',
                     'remove_featured_image' => 'Remove Featured Image'

                   );


    // Set Options for this custom post type;

    $args = array(
                    'public' => true,
                    'label'       => 'Testimonialstwo',
                    'videos' => 'videos/%category%',
                    'labels'      => $labels,
                    'description' => 'Testimonials is a collection of reviews',
                    'menu_icon'      => 'dashicons-testimonial',
                   'supports'   => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                    'capability_type' => 'page',

                 );

    register_post_type('testimonialstwo', $args);

}

add_action( 'init', 'diwp_testimonials_custom_post_type_two' );


function testimonial_custom_post_type_two(){

$args = array(
                'post_type'      => 'testimonialstwo',
                'publish_status' => 'published',
             );
             ?>            
         
        <section class="testominal-section-home-two">
             <div class="main-test-container-two">
             <div class="container-test-two wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <h2 class="testimonial-title">Meet the Doctor</h2>

                    <?php
                    $query = new WP_Query($args);

                    if($query->have_posts()) :?>
                        <div class="testimonial_slider_two">
                            <?php while($query->have_posts()) :
                                    $query->the_post() ;
                            ?>

                                    <div class="testimonial-col-two"> 
                                        <h4 class="test-title-two"><?php the_title();?></h4>
                                        <p><?php the_content(); ?></p>
                                        <a href="<?php echo get_field('button_link');?>"><?php echo get_field('link_label');?></a>
                                    </div>

                            <?php
                                endwhile;
                            ?>
                        </div>

                    <?php
                        wp_reset_postdata();
                    endif;
                    ?>

            </div>
            <div class="container-test-clearfix"></div>
            </div>
            </section>
                      
         
<?php
}

add_shortcode( 'testimonial_sliders_two', 'testimonial_custom_post_type_two' );

//Home page Testimonial Two END

//Home page Testimonial Two copy END
function testimonial_custom_post_type_two_copy(){

$args = array(
                'post_type'      => 'testimonialstwo',
                'publish_status' => 'published',
             );
             ?>            
         
        <section class="testominal-section-home-two">
             <div class="main-test-container-two">
             <div class="container-test-two wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <h2 class="testimonial-title">Meet the Doctor</h2>

                    <?php
                    $query = new WP_Query($args);

                    if($query->have_posts()) :?>
                        <div class="testimonial_slider_two">
                            <?php while($query->have_posts()) :
                                    $query->the_post() ;
                            ?>

                                    <div class="testimonial-col-two"> 
                                        <h4 class="test-title-two"><?php the_title();?></h4>
                                       
                                        <p class="modal-dialog"><?php the_content(); ?></p>
                                        
                                        <p class="abc"><?php echo get_field('link_label');?></p>
                                    </div>

                            <?php
                                endwhile;
                            ?>
                        </div>

                    <?php
                        wp_reset_postdata();
                    endif;
                    ?>

            </div>
            <div class="container-test-clearfix"></div>
            </div>
            </section>
                      
         
<?php
}

add_shortcode( 'testimonial_sliders_two_copy', 'testimonial_custom_post_type_two_copy' );

//Home page Testimonial Two copy END

function home_banner_section(){
    ?>
<div class="main-container_hero">
    <div class="grid hero-grid">
    <div data-w-id="b443f3cd-0f10-de6a-b08b-4cb64752529c" class="grid-item hero-left wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        <div class="m-b-1em">
            <h1 class="hero-h1 wow slideLeft"><?php echo get_field('banner_tagline')?></h1>
            <h1 class="hero-span wow slideLeft"><?php echo get_field('banner_title')?></h1>
        </div>
        <a href="<?php echo get_field('banner_button_request_link') ?>" class="main-btn hero w-inline-block">
            <?php echo get_field('banner_button_request') ?> </a>
     </div>
    <div class="grid-item hero-right wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
        <img src=" <?php echo get_field('banner_image')?>" loading="lazy" class="hero-img banner">
    </div>
</div>
</div>
<?php   
    } 
    add_shortcode('home_banner_section','home_banner_section');


function diwp_service_custom_post_type(){
      
  
    $labels = array(
                     'name' => 'Services',
                     'singular_name' => 'Service',
                     'add_new'    => 'Add Service',
                     'add_new_item' => 'Enter Service Details',
                     'all_items' => 'All Services',
                     'featured_image' => 'Add Featured Image',
                     'set_featured_image' => 'Set Featured Image',
                     'remove_featured_image' => 'Remove Featured Image'
  
                   );
  
  
    $args = array(    
                    'public' => true,
                    'label'       => 'Services',
                    'labels'      => $labels,
                    'description' => 'Services is a collection of movies and their info',
                    'menu_icon'      => 'dashicons-editor-insertmore',    
                       'supports'   => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                    'capability_type' => 'page',
                    'orderby' => 'date',
                    'order' => 'DEC'
                      
                 );
  
    register_post_type('services', $args);
  
}
  
add_action( 'init', 'diwp_service_custom_post_type' );

  
function diwp_create_shortcode_service_post_type(){

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

   $query = new WP_Query( array
                      ( 'post_type' => 'services',
                       'posts_per_page' => 4,
                        'publish_status' => 'published',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'paged'          => $paged )
);

?>

<div class="main-container_right home-cms-section">
       <div class="grid home-cms-grid">
       <?php

    if($query->have_posts()) :
         $count=1;
        while($query->have_posts()) :
             $count;
               $query->the_post() ;  
                      
          ?>
        
        
         <div class="w-dyn-list">
        <div role="list" class="w-dyn-items">
<div role="listitem" class="collection-item w-dyn-item">
<div class="grid cms-grid">

    <div class="grid-item home-cms-left wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        <h3 class="h3-cms wow slideInLeft"><?php the_title(); ?></h3>
    <div class="m-b-2em wow slideInLeft">
    <p><?php the_excerpt(); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>" class="main-btn transparent w-inline-block wow slideInLeft" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
   Learn More
   <img src="/wp-content/uploads/2022/01/arrowfinal.png" loading="lazy" alt="" class="arrow-icon">
   </a>
</div>
<div class="grid-item home-cms-img wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
       <?php $img_url =  the_post_thumbnail( 'service-list' ); ?> <img src="<?php echo $img_url; ?>" loading="lazy" alt="" class="home-cms-img">
        <!--<?php $img_url = get_the_post_thumbnail_url(get_the_ID(),'service-list'); ?> <img src="<?php echo $img_url; ?>" loading="lazy" alt="" class="home-cms-img">-->
    </div>


    </div>
    </div>
    
    </div>


</div>
   
             
             
          <?php
  $count++;
        endwhile;
  
        wp_reset_postdata();
  
    endif;    
    ?>
                      </div>
</div>








<?php

}
add_shortcode( 'services-list', 'diwp_create_shortcode_service_post_type' ); 

// service for main page


function diwp_service_custom_post_typee(){
      
  
    $labels = array(
                     'name' => 'Services',
                     'singular_name' => 'Service',
                     'add_new'    => 'Add Service',
                     'add_new_item' => 'Enter Service Details',
                     'all_items' => 'All Services',
                     'featured_image' => 'Add Featured Image',
                     'set_featured_image' => 'Set Featured Image',
                     'remove_featured_image' => 'Remove Featured Image'
  
                   );
  
  
    $args = array(    
                    'public' => true,
                    'label'       => 'Services',
                    'labels'      => $labels,
                    'description' => 'Services is a collection of movies and their info',
                    'menu_icon'      => 'dashicons-editor-insertmore',    
                       'supports'   => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                    'capability_type' => 'page',
                    'orderby' => 'date',
                    'order' => 'DEC'
                      
                 );
  
    register_post_type('services', $args);
  
}
  
add_action( 'init', 'diwp_service_custom_post_typee' );

  
function diwp_service_post_type(){

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

   $query = new WP_Query( array
                      ( 'post_type' => 'services',
                       'posts_per_page' => -1,
                        'publish_status' => 'published',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'paged'          => $paged )
);

?>

<div class="main-container_right home-cms-section">
       <div class="grid home-cms-grid">
       <?php

    if($query->have_posts()) :
         $count=1;
        while($query->have_posts()) :
             $count;
               $query->the_post() ;  
                      
          ?>
        
        
         <div class="w-dyn-list">
        <div role="list" class="w-dyn-items">
<div role="listitem" class="collection-item w-dyn-item">
<div class="grid cms-grid">

    <div class="grid-item home-cms-left wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        <h3 class="h3-cms wow slideInLeft"><?php the_title(); ?></h3>
    <div class="m-b-2em wow slideInLeft">
    <p><?php the_excerpt(); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>" class="main-btn transparent w-inline-block wow slideInLeft">
   Learn More
   <img src="/wp-content/uploads/2022/01/arrowfinal.png" loading="lazy" alt="" class="arrow-icon">
    </a>
</div>
<div class="grid-item home-cms-img wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
       <?php $img_url = get_the_post_thumbnail_url(get_the_ID(),'service-list'); ?> <img src="<?php echo $img_url; ?>" loading="lazy" alt="" class="home-cms-img">
    </div>


    </div>
    </div>
    
    </div>


</div>
   
             
             
          <?php
  $count++;
        endwhile;
  
        wp_reset_postdata();
  
    endif;    
    ?>
                      </div>
</div>








<?php

}
add_shortcode( 'services-main', 'diwp_service_post_type' ); 


function why_choose_us_section(){
    ?>
    <div class="main-container_right home-service-section">
    <div class="grid home-service-grid wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        <div class="grid-item home-service_overview header wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
            <h2 class="h2-white service-overview wow  slideInLeft" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('why_choose_title')?></h2>
        </div>
        <div class="grid-item home-service_overview content wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
            <div class="m-b-2em top-m-0-7em">
                <p class="para-white wow slideInLeft" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('why_choose_desc')?>
        </p>
        </div>
        <a href="<?php echo get_field('why_choose_learn_more_link')?>" class="main-btn w-inline-block wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
<?php echo get_field('why_choose_learn_more')?>
</a>
</div>
</div>
</div>
    
    <?php
    }
add_shortcode( 'why_choose_us_section', 'why_choose_us_section' ); 


function service_banner_section(){
    ?>

<div class="main-container_hero services-page">
    <div class="grid hero-grid_about wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        <div class="grid-item hero-left-about wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
            <div class="m-b-1em">
                <h1 class="hero-h1 is_about-h1">
                <span class="hero-span"><?php echo get_field('service_banner_title')?></span>
            </h1>
        </div>
        <div class="m-b-2em">
            <p><?php echo get_field('service_banner_desc')?></p>
        </div>
    </div>
    <div class="grid-item hero-right_about wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
        <img src="<?php echo get_field('service_banner_image')?>" loading="lazy" alt="" class="hero-img services-banner">
    </div>
</div>
</div>

    <?php
    }
add_shortcode( 'service_banner_section', 'service_banner_section' ); 

// abt page start

function abt_banner_section(){
    ?>
<div class="main-container_hero">
        <div class="grid about-hero_grid">
            <div class="grid-item hero-left-about correction edit wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
            
                <h1 class="hero-h1 is_about-h1 wow slideInLeft"><?php echo get_field('about_tageline')?></h1>
            <h1 class="hero-span is-about wow wow slideInLeft"><?php echo get_field('about_title')?></h1>
                </h1>
            </div>
            <div class="grid-item hero-right-aboutpage wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
                <img src=" <?php echo get_field('about_banner_image')?>" loading="lazy" class="hero-img about-abnner">
            </div>
        </div>
    </div>
<?php   
    } 
    add_shortcode('abt_banner_section','abt_banner_section');
    
    function abt_hello_section(){
        ?>
                <div class="main-container_right about-hello">
                    <div class="grid aboutpage-blue_bg overflow-shown">
                        <div class="grid-item about-hello-l wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                            <div class="m-b-1em wow wow slideInLeft">
                                <h1 data-w-id="482e9c26-67ef-5de4-4f17-33171d4b4b6d" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="hero-h1 is_about-h1"><span class="hero-span is-about wow slideInLeft"><?php echo get_field('about_hello_title')?></span>
                                </h1>
                            </div>
                            <div class="m-b-2em wow slideLeft">
                                <p data-w-id="8d6c61f3-e98c-216b-0676-9f5121123384" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="para-hello"><?php echo get_field('about_hello_desc')?></p>
                            </div>
                        </div>
                        <div class="grid-item about-hello-r wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
                            <img src=" <?php echo get_field('about_image')?>" loading="lazy">
                                </div>
                            </div>
                        </div>
                   <?php   
    } 
    add_shortcode('abt_hello_section','abt_hello_section');
    function abt_main_section(){
?>
    <div class="main-container_right about-about-r">
        <div class="grid aboutpage-blue_bg no-pad">
            <div class="grid-item about_about-left wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
                <img src="<?php echo get_field('about_main_banner_image')?>" alt="" class="hero-img aboutpage-about">
            </div>
            <div class="grid-item about-about_right wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <h2 data-w-id="8ff87178-2c61-ef0f-0a19-07c67e1c9286" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="h2-white no-t-m"><?php echo get_field('about_main_title')?></h2>
                <div class="m-b-2em">
                <p data-w-id="8ff87178-2c61-ef0f-0a19-07c67e1c9289" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="para-white"><?php echo get_field('about_main_content')?></p>
            </div>
        </div>
    </div>
</div>
<?php   
    } 
 add_shortcode('abt_main_section','abt_main_section');
    
     function abt_meet_doc_section(){
?>
 <div class="main-container-home_meet">
    <div class="grid home-meet_dct">
        <div class="grid-item home-meet-content wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
            <h2 data-w-id="8c8eb52c-91bd-a6cb-3ba7-abde63929375" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="h2-white"><?php echo get_field('meet_doc_title')?></h2>
            <div class="m-b-2em"><p class="para-white"><?php echo get_field('meet_doc_desc')?> </p>
            </div>
        </div>
            <div class="grid-item home-meet-img wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
                <img src="<?php echo get_field('meet_doc_image')?>" loading="lazy" alt="" class="meet-img">
            </div>
        </div>
    </div>
   <?php   
    } 
    
add_shortcode('abt_meet_doc_section','abt_meet_doc_section');
    
    function abt_gallery_section(){
        ?>
        <?php if(have_rows('gallery_slider')): ?>
	         <div class="main-gal-container">
    		  <div class="gal-row">
    		   <div class="about_gal_slider">
        		<?php while(have_rows('gallery_slider')): the_row();			
        		?>
        		   
        		    <div class="gallery-img_card">
        		      <img src="<?php echo get_sub_field('pictures')?>" class="gal-img">
        		    </div>
        		    
        		<?php endwhile;?>
        		</div>
             </div>
    		</div>
        <?php endif; ?>
        <div class="gal-con-two">           
        </div>
   <?php  
}

add_shortcode('abt_gallery_sliders','abt_gallery_section');
    
    // abt page end

//Contact Page Start

function contact_address_section(){
  ?>
   <section class="address">
     <div class="custom-add-container wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
       <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 wow slideInLeft" data-wow-duration="1s">
            <div class="con-wrapper-one">
             <h2><?php echo get_field('call_now_label'); ?></h2>
             <a href="tel:<?php echo get_field('call_now_link')?>"><?php echo get_field('call_now_link')?></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
           <div class="con-wrapper-two">
            <h2><?php echo get_field('email_us_label'); ?></h2>
            <a href="mailto:<?php echo get_field('email_us_link')?>"><?php echo get_field('email_us_link')?></a>
           </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4">
           <div class="con-wrapper-three">
             <a href="<?php echo get_field('get_direction_link')?>" target="_blank"><?php echo get_field('get_direction_label')?></a>
           </div>
          </div>
       </div>
     </div>
   </section>
<?php  
}

add_shortcode('contact_address_section','contact_address_section');

function contact_form_section() {
    ?>
    <section class="section">
    <div class="main-container_center_con form">
        <div class="grid-con form">
            <div class="grid-item-con hero-left-about-con form" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <h2 data-w-id="35e19884-fb95-700b-a6b8-fcd18ac78637" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="form-h2"><?php echo get_field('contact_form_heading');?>
                </h2>
                <p data-w-id="c854c84b-a0f4-8d01-f648-a9f9e96de5c7" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="contact-text"><?php echo get_field('contact_form_subheading') ?></p>
                <div class="form-block w-form">
                 <?php echo do_shortcode('[contact-form-7 id="188" title="Contact form 1"]');?>
                 </div>     
            </div>
        </div>
        
    </div>

</section>

<?php  
}

add_shortcode('contact_form_sectionn','contact_form_section');

function contact_form_sections() {
    ?>
<section class="section">
    <div class="contactsform container">
       <div class="contact_top">
        <h2><?php echo get_field('contact_form_heading');?></h2>
        <p><?php echo get_field('contact_form_subheading') ?></p>
       </div>
        <div class="contact_bottom">
                 <?php echo do_shortcode('[contact-form-7 id="189" title="connect"]');?>
                 
        </div>
    </div>

</section>

<?php  
}

add_shortcode('contact_form_sections','contact_form_sections');

function contact_map_section() {
    ?>
    <section class="contact-map wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
       <div class="iframe-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3350.2234842476023!2d-117.194713!3d32.892259!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc074057c55555%3A0x379ca22f239b4fff!2s5703%20Oberlin%20Dr%20UNIT%20209%2C%20San%20Diego%2C%20CA%2092121!5e0!3m2!1sen!2sus!4v1641468596999!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       </div>
        <div class="client-address-sec">
          <h2><?php echo get_field('clinic_name');?></h2>
          <a href="<?php echo get_field('clinic_address');?>"><?php echo get_field('clinic_address');?></a>
          <p><?php echo get_field('clinic_time');?></p>
          <a href="tel:<?php echo get_field('clinic_phone');?>"><?php echo get_field('clinic_phone');?></a>
          <a href="mailto:<?php echo get_field('clinic_email');?>"><?php echo get_field('clinic_email');?></a>
       </div>
    </section>
    
    <?php
 }
 
 
add_shortcode('contact_map_section','contact_map_section');
function patientinfo_banner_section(){
    ?>

<div class="main-container_hero">
    <div class="grid patient-hero_grid">
        <div class="grid-item hero-left-about patient-info wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
            <h1 class="hero-h1 is_patientinfo-h1">
                <?php echo get_field('patient_banner_title');?><br>
                <span class="hero-span is-patientinfo"><?php echo get_field('patient_banner_title2');?></span>
            </h1>
        </div>
        <div class="grid-item hero-right-aboutpage wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
            <img src="<?php echo get_field('patient_banner_image');?>" alt="" class="hero-img paitnet-banner">
        </div>
    </div>
</div>

    <?php
    }
add_shortcode( 'patientinfo_banner_section', 'patientinfo_banner_section' );

function patientinfo_visit_section(){
    ?>

<div class="main-container_patientinfo">
    <div class="grid ssp-grid patientinfo">
        <div class="grid-item home-patientinfo-img patientinfo-l">
            <img src="<?php echo get_field('first_visit_image');?>" alt="" class="hero-img wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        </div>
        <div class="grid-item home-patientinfo-slider paitnetinfo-r wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
            <h2 class="h2-white" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('first_visit_title');?></h2>
            <div class="slider-testimonial m-b-2em">
                <p class="para-white" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('first_visit_desc');?>
                </p>
            </div>
        </div>
    </div>
</div>

    <?php
    }
add_shortcode( 'patientinfo_visit_section', 'patientinfo_visit_section' ); 

function patientinfo_finance_section(){
    ?>

<div class="main-container_right patientinfo2">
    <div class="grid ssp-grid">
        <div class="grid-item home-patientinfo-slider patientinfo--r2 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
            <h2 class="h2-financing" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('finance_title');?></h2>
            <div class="slider-testimonial">
                <p data-w-id="31c4386b-0b28-bf1e-3927-117eb09c177a" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="financing-text"><?php echo get_field('finance_title2');?></p>
            </div>
            <div class="m-t-0-5">
                    <p><?php echo get_field('finance_desc');?></p>
                </div>
            </div>
            <div class="grid-item home-patientinfo-img patientinfo-l2 wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
                <img src="<?php echo get_field('finance_image');?>" alt="" class="hero-img--financing">
            </div>
        </div>
    </div>

    <?php
    }
add_shortcode( 'patientinfo_finance_section', 'patientinfo_finance_section' ); 


function patientinfo_form_section(){
    ?>

<div class="main-container_center patienti-forms">
    <h2 class="forms-h2 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo get_field('form_title');?></h2>
    <div class="grid forms-grid wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        <div class="grid-item form-card">
            <h2 class="membership-h2 no-caps" ><?php echo get_field('form_name1');?></h2>
            <div class="slider-testimonial m-t-b-1em">
                <p class="para-center"><?php echo get_field('form_desc1');?></p>
            </div>
            <a href="<?php echo get_field('form_download1_link');?>" target="_blank" class="main-btn w-inline-block">
            <?php echo get_field('form_download1');?>
            </a>
        </div>
        <div class="grid-item form-card">
                <h2 class="membership-h2 no-caps" ><?php echo get_field('form_name1');?></h2>
                <div class="slider-testimonial m-t-b-1em">
                <p class="para-center"><?php echo get_field('form_desc2');?></p>
            </div>
            <a href="<?php echo get_field('form_download2_link');?>" target="_blank" class="main-btn w-inline-block">
                <?php echo get_field('form_download2');?>
            </a>
        </div>
        <div class="grid-item form-card-last">
            <h2 class="membership-h2 no-caps"><?php echo get_field('form_name1');?></h2>
            <div class="slider-testimonial m-t-b-1em">
                <p class="para-center"><?php echo get_field('form_desc3');?></p>
            </div>
            <a href="<?php echo get_field('form_download3_link');?>" target="_blank" class="main-btn w-inline-block" >
            <?php echo get_field('form_download3');?>
        </a>
    </div>
</div>
</div>

    <?php
    }
add_shortcode( 'patientinfo_form_section', 'patientinfo_form_section' ); 

function patientinfo_membership_section(){
    ?>

<div class="main-container_right membership">
    <h2 class="membership-h2 white" >
    <?php echo get_field('membership_title');?></h2>
    <div class="grid ssp-grid membership-1 wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
        <div class="grid-item home-patientinfo-img membership-r-reverse">
            <img src="<?php echo get_field('membership_image');?>" alt="" class="membership-img">
        </div>
        <div class="grid-item home-patientinfo-slider membership-l-reverse">
            <h2 class="membership-h2" ><?php echo get_field('membership_basic_title');?></h2>
            <div class="slider-testimonial m-t-b-1em">
                <p><?php echo get_field('membership_desc');?>
                </p>
            </div>
            <a href="#" class="main-btn w-inline-block" >
                <?php echo get_field('membership_learn_more');?>
            </a>
        </div>
    </div>
</div>

    <?php
    }
add_shortcode( 'patientinfo_membership_section', 'patientinfo_membership_section' ); 

function patientinfo_membership2_section(){
    ?>

<div class="main-container_right membership">
    <div class="grid ssp-grid membership-2">
        <div class="grid-item home-patientinfo-slider membership-l wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
            <h2 class="membership-h2"><?php echo get_field('membership_premium_title');?></h2>
            <div class="slider-testimonial m-t-b-1em">
                <p><?php echo get_field('membership_premium_desc');?></p>
            </div>
            <a href="#" class="main-btn w-inline-block" >
                    <?php echo get_field('membership_premium_learn_more');?>
                </a>
            </div>
            <div class="grid-item home-patientinfo-img membership-r wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <img src="<?php echo get_field('membership_premium_image');?>" alt="" class="membership-img _2nd">
            </div>
        </div>
    </div>
<?php
    }
    add_shortcode( 'patientinfo_membership2_section', 'patientinfo_membership2_section' ); 
    
    
    function diwp_create_shortcode_blog_post_type(){
 
  
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $loop = new WP_Query( array
                        ( 'post_type' => 'post',
                          'posts_per_page' =>3,
                          'publish_status' => 'published',
                          'orderby'        => 'date',
                          'order'          => 'DESC',
                          'paged'          => $paged )
  );
    ?>
    <div class="main-container_center blogs">
<div class="grid blogs-grid"> 
  <?php 
        if($loop->have_posts()) :
        $count=1;
              while($loop->have_posts()) :
         $count;
                     $loop->the_post() ; 
                     
                     if($count == 1){ 
      ?>
     <div class="grid-item blogs-l wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        <h2 class="membership-h2 no-p" >Blogs</h2>
    </div>
    <div class="grid-item blogs-r wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
        <div class="w-dyn-list">
            <div role="list" class="w-dyn-items">
                <div role="listitem" class="w-dyn-item">
               
                    <img src="<?php echo get_the_post_thumbnail_url($post,'blog-image') ;?>" alt="" class="blog-big_image">
                    <div class="blog-card-content">
                        <div class="_1st-blog">
                         <h2 class="blog-name-copy wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo get_the_title() ;?></h2>
                        <div class="blog-date wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo get_the_date() ;?></div>
                    </div>
                    <div class="_2nd-blog wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                        <p ><?php echo get_the_excerpt() ;?></p>
                    </div>
                    <div class="_3st-blog m-t-1em wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                        <a href="<?php the_permalink(); ?>" class="main-btn blog-r w-inline-block" >Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
     
      <?php
        } else {  ?>


               <div class="grid-item blogs-list wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
    <div class="blogs-collection w-dyn-list">
        <div role="list" class="w-dyn-items">
            <div role="listitem" class="collection-item-2 w-dyn-item">
                <div class="b-list-l">
                    <img src="<?php echo get_the_post_thumbnail_url() ;?>" loading="lazy" alt="" class="blog-big_image _2nd">
                </div>
                <div class="b-l-right2">
                    <div class="b-list-right">
                    <div class="_1st-blog-copy" >
                        <div class="blog-date"><?php echo get_the_date() ;?></div>
                        <h2 class="blog-name"><?php echo get_the_title() ;?></h2>
                    </div>
                    <div class="_2nd-blog-copy">
                        <p ><?php echo get_the_excerpt() ;?></p>
                    </div>
                </div>
                <div class="_3st-blog _2nd">
                <a href="<?php the_permalink(); ?>" class="main-btn blog-btn w-inline-block" >Read More
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
                <?php
  
                 } 

               
                $count++;
                
                endwhile;
                
                     wp_reset_postdata();
                
                endif;
            ?>
  </div>
</div>
     <?php 
    return $result;            
}
  
add_shortcode( 'blogs-list', 'diwp_create_shortcode_blog_post_type' );
    
    
function blog_banner_section(){
    ?>

<div class="main-container_hero">
    <div class="grid patient-hero_grid">
        <div class="grid-item hero-left-about patient-info">
            <h1 class="hero-h1 is_patientinfo-h1 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;">
                <span class="hero-span is-patientinfo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><?php echo get_field('blog_banner_title');?></span>
            </h1>
        </div>
        <div class="grid-item hero-right-aboutpage wow slideInRight" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInRight;">
            <img src="<?php echo get_field('blog_banner_image');?>" alt="" class="hero-img paitnet-banner">
        </div>
    </div>
</div>

    <?php
    }
add_shortcode( 'blog_banner_section', 'blog_banner_section' );
    
    
    
    
    
    