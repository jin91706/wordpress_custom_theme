jQuery(document).ready(function() {

    jQuery(".menu_open").click(function() {
        jQuery(".main-nav-opne").toggleClass('show');
         jQuery("body").toggleClass('menu_open');
     });
 new WOW().init();

jQuery('.testimonial_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  autoplay: false,
  autoplaySpeed: 5000
});
jQuery('.testimonial_slider_two').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  autoplay: false,
  autoplaySpeed: 5000
});
jQuery('.about_gal_slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  autoplay: false,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// jQuery('.doctor_slider').slick({
//   infinite: true,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   dots: false
// });

// jQuery('.services_slider').slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   dots: false,
//   adaptiveHeight: true,
//   responsive: [
//     {
//       breakpoint: 1200,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//       }
//     },
//     {
//       breakpoint: 768,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//       }
//     }
//   ]
// });
jQuery(document).ready(function() {
	var s = jQuery(".site-header ");
	var pos = s.position();					   
	jQuery(window).scroll(function() {
		var windowpos = jQuery(window).scrollTop();
		if (windowpos >= pos.top & windowpos >=100) {
			s.addClass("fixed");
		} else {
			s.removeClass("fixed");	
		}
	});
});
	
	jQuery(".service_menu ul.sub-menu").addClass("service_sub_menu_menu");
// 	jQuery(".service_menu ul.sub-menu").addClass("service_sub_menu_menu2");
// 		jQuery(".sub_more_menu ul.service_sub_menu_menu").addClass("service_sub_menu_second");
// 		jQuery(".sub_more_menu ul.service_sub_menu_menu").addClass("service_sub_menu_second");
	jQuery(".sub_more_menu ul.service_sub_menu_menu").removeClass("service_sub_menu_menu");
 	jQuery('.menu-item-has-children').append('<span class="menu_arrow" />');
 	
 	if (window.matchMedia('(max-width: 1920px)').matches)
{
	jQuery("ul.sub-menu").hide();
	jQuery(".menu_arrow").on("click", function () {
	     
            jQuery(this).siblings("ul").slideToggle();
            jQuery(this).toggleClass('open');
            jQuery(this).parent(".navbar-nav li ").siblings().children("ul").hide();
            jQuery(this).parents('.navbar-nav li').siblings().children('span').removeClass('open');
            jQuery(this).siblings('ul').children('li').children('ul').hide();
            jQuery(this).siblings('ul').children('li').children('span').removeClass('open');
        });
}

// jQuery(document).ready(function(){
//     jQuery(".sub_menu_warp ul.sub-menu").addClass("sub_menu_dropdown");
// });
	
// 	jQuery(document).ready(function () {
//     "use strict";
//     jQuery(".lightbox").click(function () {
//         var imgsrc = jQuery(this).attr('src');
//         jQuery("body").append("<div class='img-popup'><span class='close-lightbox'>&times;</span><img src='" + imgsrc + "'></div>");
//         jQuery(".close-lightbox, .img-popup").click(function () {
//             jQuery(".img-popup").fadeOut(500, function () {
//                 jQuery(this).remove();
//             }).addClass("lightboxfadeout");
//         });

//     });
//     jQuery(".grid-image").click(function () {
//         jQuery(".img-popup").fadeIn(500);
//     });

// });
	
// 	var btn = jQuery('#button');

// jQuery(window).scroll(function() {
//   if (jQuery(window).scrollTop() > 600) {
//     btn.addClass('show');
//   } else {
//     btn.removeClass('show');
//   }
// });
	
// 	btn.on('click', function(e) {
//   e.preventDefault();
//   jQuery('html, body').animate({scrollTop:0}, '600');
// });
	
// 	jQuery(document).ready(function(){
//     jQuery(".main_services ul.sub-menu").addClass("service_sub_menu");
// 		jQuery(".sub_menu_warp ul.service_sub_menu").removeClass("service_sub_menu");
// });
//     jQuery(document).ready(function(){
// 	jQuery('.abc').click(function(){
//   		jQuery('.modal-dialog').modal('show');
// 	});


});
// jQuery(document).ready(function(){
//     jQuery('.mc').click(function(){
// // 		jQuery(this).addClass('mymd');
//         jQuery('.newmo').show();
    
		
// });
// });
