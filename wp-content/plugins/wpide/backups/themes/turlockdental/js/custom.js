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
  autoplay: true,
  autoplaySpeed: 2000
});

jQuery('.doctor_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false
});

jQuery('.services_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: false,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
  ]
});
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
	
	jQuery('.menu-item-has-children').append('<span class="menu_arrow" />');
	
	jQuery(".menu_arrow").on("click", function () {
            jQuery(this).siblings("ul").slideToggle();
            jQuery(this).toggleClass('open');
            jQuery(this).parent(".navbar-nav li ").siblings().children("ul").hide();
            jQuery(this).parents('.navbar-nav li').siblings().children('span').removeClass('open');
            jQuery(this).siblings('ul').children('li').children('ul').hide();
            jQuery(this).siblings('ul').children('li').children('span').removeClass('open');
        });
        
        jQuery(".wpcf7-tel").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
               return false;
    }
   });
});

jQuery(document).ready(function(){
    jQuery(".sub_menu_warp ul.sub-menu").addClass("sub_menu_dropdown");
});
	
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
	
	var btn = jQuery('#button');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 600) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
	
	btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '600');
});
	
	jQuery(document).ready(function(){
    jQuery(".main_services ul.sub-menu").addClass("service_sub_menu");
		jQuery(".sub_menu_warp ul.service_sub_menu").removeClass("service_sub_menu");
});

});