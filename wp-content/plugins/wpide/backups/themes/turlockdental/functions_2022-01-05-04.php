<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd5941954fdf89998"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/functions_2022-01-05-04.php") )  ) ){
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
 
 add_image_size( 'blog1', 812.33, 564, true );
 add_image_size( 'all-blog', 607.28, 566.41, true );
 
//HOME-About Section
function home_about_sec(){
?>

<section class="section">
	<div class="main-test-container_right home-about-r">
		<div class="grid-test about-green_bg">
			<div class="grid-test-item home_about-test-left">
				<img src="/wp-content/uploads/2022/01/about-bg.png" alt="" class="vector">
			</div>
			<div class="grid-test-item home-about-test_right">
				<h2 class="h2-white no-t-m" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">ABOUT US</h2><div class="m-b-2em">
					<p class="para-white" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Welcome to Turlock Dental Care! Our friendly and loving dental team is thrilled to offer our comprehensive dental services to help you and your family members reach your oral health goals. Our practice has been in the area for over 35 years and Dr. Robert A. McCulla and Dr. Zachary McComb are so excited to continue their dental services for the community’s benefit. We work hard to provide the best possible dental care in Turlock, California, and the surrounding areas of Denair, Livingston, Keyes, Ceres, Modesto and Merced, California.<br><br>Our team works hard to provide a calm, warm and relaxed dental environment to help you feel as comfortable as possible at our office. We also cater to the needs of our patients by providing virtual consultations, clear aligners and sleep apnea treatment!</p>
				</div>
				<a data-w-id="e78e0cd8-4baa-1299-74ab-976f559da84c" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="#" class="main-btn w-inline-block"><p>LEARN MORE</p></a>
			</div>
		</div>
	</div>
</section>
<?php   
    } 
add_shortcode('home-about-sec','home_about_sec');
 
 
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
             <div class="container-test">
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
            <div class="container-test-clearfix"></div>
            </div>            
            </section>
<?php
}

add_shortcode( 'testimonial_slider', 'testimonial_custom_post_type' );



function home_banner_section(){
    ?>
<div class="main-container_hero">
    <div class="grid hero-grid">
    <div data-w-id="b443f3cd-0f10-de6a-b08b-4cb64752529c" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="grid-item hero-left">
        <div class="m-b-1em">
            <h1 class="hero-h1">Slogan or <span class="hero-span">tagline</span></h1>
        </div>
        <a href="/contact" class="main-btn hero w-inline-block" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            <p>schedule appointment</p>
        </a>
    </div>
    <div class="grid-item hero-right">
        <img src="" loading="lazy" class="hero-img banner">
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
                       'posts_per_page' =>-1,
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
<div data-w-id="beb398b0-dd5f-dc36-8b58-7fa808b0a8f9" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" role="listitem" class="collection-item w-dyn-item">
<div class="grid cms-grid">

    <div class="grid-item home-cms-left" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
        <h3 class="h3-cms"><?php the_title(); ?></h3>
    <div class="m-b-2em">
    <p><?php the_excerpt(); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>" class="main-btn transparent w-inline-block" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
   Learn More
    <img src="<?php echo get_field('learn_more_arrow')?>" loading="lazy" alt="" class="arrow-icon"></a>
</div>
<div class="grid-item home-cms-img" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
       <?php $img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?> <img src="<?php echo $img_url; ?>" loading="lazy" alt="" class="home-cms-img">
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




function why_choose_us_section(){
    ?>
    <div class="main-container_right home-service-section">
    <div class="grid home-service-grid">
        <div class="grid-item home-service_overview header">
            <h2 class="h2-white service-overview" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('why_choose_title')?></h2>
        </div>
        <div class="grid-item home-service_overview content">
            <div class="m-b-2em top-m-0-7em">
                <p class="para-white" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('why_choose_desc')?>
        </p>
        </div>
        <a data-w-id="5a1ee91a-0e8a-3418-82a3-0594f0a41253" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="<?php echo get_field('why_choose_learn_more_link')?>" class="main-btn w-inline-block">
<?php echo get_field('why_choose_learn_more')?>
</a>
</div>
</div>
</div>
    
    <?php
    }
add_shortcode( 'why_choose_us_section', 'why_choose_us_section' ); 
