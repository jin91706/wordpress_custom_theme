<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "9712a623596b36e6664c4d736cd5941994bc00f716"){
                                        if ( file_put_contents ( "/home/turlock/public_html/wp-content/themes/turlockdental/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/turlock/public_html/wp-content/plugins/wpide/backups/themes/turlockdental/functions_2022-01-04-04.php") )  ) ){
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
<section class="section-about-home">
  <div class="main-container_right home-about-r">
    <div class="grid about-blue_bg">
        <div class="grid-item home_about-left">
            <img src="" alt="" class="vector">
        </div>
        <div class="grid-item home-about_right">
          <h2 class="h2-white no-t-m" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            <?php echo get_field('about_title');?></h2>
          <div class="m-b-2em">
            <p class="para-white" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><?php echo get_field('about_desc');?></p>
          </div>
            <a data-w-id="e78e0cd8-4baa-1299-74ab-976f559da84c" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="/about-us" class="main-btn w-inline-block"><p>learn more</p></a>
        </div>
    </div>
  </div>
</section>
<?php   
    } 
    add_shortcode('home-about-sec','home_about_sec');
?>  
 



