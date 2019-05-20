$(document).ready(function () {
    "use strict";
    // Parallax // 
    $('.parallax').scrolly({bgParallax: true});
    // Container Gap // 
    var container_gap = $(".container").offset().left;
    $(".contact-head").css({
        'left': container_gap
    });
    // Hash Location // 
//    function scrollTo(hash) {
//        location.hash = "#" + hash;
//    }

    /*=================== Contact Form ===================*/
    $('#contactform').submit(function () {
       var action = $(this).attr('action');
       var msg = $('#message');
       $(msg).hide();
       var data = 'name=' + $('#name').val() + '&email=' + $('#email').val() + '&phone=' + $('#phone').val() + '&comments=' + $('#comments').val() + '&verify=' + $('#verify').val() + '&captcha=' + $(".g-recaptcha-response").val();
       $.ajax({
           type: 'POST',
           url: action,
           data: data,
           beforeSend: function () {
              $('#quote-btn').attr('disabled', true);
              $('img.loader').fadeIn('slow');
          },
          success: function (data) {
              $('#quote-btn').attr('disabled', false);
              $('img.loader').fadeOut('slow');
              $(msg).empty();
              $(msg).html(data);
              $('#message').slideDown('slow');
              if (data.indexOf('success') > 0) {
                  $('#contactform').slideUp('slow');
              }
          }
      });
       return false;
   });

    // Responsive Header //
    $(".responsive-btn").on("click", function () {
        $(".responsive-menu").addClass("slidein");
        return false;
    });
    $(".close-btn").on("click", function () {
        $(".responsive-menu").removeClass("slidein");
        return false;
    });
    $(".responsive-menu li.menu-item-has-children > a").on("click", function () {
        $(this).parent().siblings().children("ul").slideUp();
        $(this).parent().siblings().removeClass("active");
        $(this).parent().children("ul").slideToggle();
        $(this).parent().toggleClass("active");
        return false;
    });
    // Sticky Header// 
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            $(".stick").addClass("sticky");
        } else {
            $(".stick").removeClass("sticky");
        }
    });
    var menu_height = $("header").height();
    if ($("header").hasClass("stick")) {
        $(".theme-layout").css({"padding-top": menu_height});
    } else {
        $(".theme-layout").css({"margin-bottom": "0"});
    }

    // Input Radio Script
    $('.fragile > span > input').iCheck({
    checkboxClass: 'icheckbox_futurico',
    radioClass: 'iradio_futurico',
        increaseArea: '20%' // optional
    });
    // Input Radio Script
    $('.extra-services > span > input, .terms-services > span > input').iCheck({
        checkboxClass: 'icheckbox_futurico2',
        increaseArea: '20%' // optional
    });
    // Scroll Bar //
    $('.responsive-menu, .modal-dialog1, .modal-dialog2').perfectScrollbar();
    // Select Box 
    $(".select-service > select").select2({
        placeholder: "Select Service"
    });
    $(".select-from > select").select2({
        placeholder: "From"
    });
    $(".select-goods > select").select2({
        placeholder: "Type OF Goods"
    });
    $(".select-to > select").select2({
        placeholder: "To"
    });
    // Responsive Header Sec
    $(".top-sec-btn").on("click", function () {
        $(".responsive-top-sec").toggleClass("active");
        return false;
    });
    // Unload SignUp Popup
    $('.signup-form > button').on('click', function () {
        $('#signup-popup').removeClass('unload-singnup-popup');
        return false;
    });
    // Popup One // 
    $('.popup1').on('click', function () {
        $('#signup-popup').addClass('unload-singnup-popup');
        return false;
    });
    // Unload Calculate Form PopUp
    $('.modal-body2 > button').on('click', function () {
        $('#calculate-form-popup').removeClass('unload-calculate-form-popup');
        return false;
    });
    // Popup 2 // 
    $('.popup2').on('click', function () {
        $('#calculate-form-popup').addClass('unload-calculate-form-popup');
        return false;
    });
    //** Partners **//
    $("#partners").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: true,
        dots: false,
        nav: true,
        margin: 90,
        items: 5,
        singleItem: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            600: {
                items: 3
            },
            900: {
                items: 3
            },
            1200: {
                items: 5
            }
        }
    });
    
    
    $('.carousel').carousel({
    	  interval: 5000,
    	  pause: false
    });
    "use strict";

    //** Main Img Carousel  **//
    $("#main-img-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        smartSpeed: 1500,
        loop: true,
        dots: false,
        nav: false,
        margin: 10,
        items: 1,
        singleItem: true,
    });

    //** Counter Up **//
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    //** Blog Post Carousel **//	
    $("#blog-post-carousel").owlCarousel({
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 10,
        items: 1,
        singleItem: true,
    });
    
    $("#blog-post-carousel-second").owlCarousel({
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 10,
        items: 1,
        singleItem: true,
    });
	
	$("#blog-post-carousel1").owlCarousel({
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 10,
        items: 1,
        singleItem: true,
    });
	$("#blog-post-carousel-n1").owlCarousel({
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 10,
        items: 1,
        singleItem: true,
    });
	$("#blog-post-carousel-n2").owlCarousel({
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: false,
        dots: false,
        nav: true,
        margin: 10,
        items: 1,
        singleItem: true,
    });
	
    //** Cities Carousel **//	
    $("#cities-carousel").owlCarousel({
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        loop: true,
        dots: false,
        nav: true,
        margin: 20,
        items: 1,
        singleItem: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });

    $('#datepicker,#datepicker2').datepick();

    $('div.members-area').each(function () {
        $(this).children().eq(0).addClass('clicked');
        var testimo = $(this).find(".member");
        $(testimo).on("click", function () {
            $(testimo).removeClass("clicked");
            $(this).addClass("clicked");
        });
    });

    // Post // 
    $(".post-thumb > span").on("click", function () {
        $(this).parent("div").toggleClass("slide-down");
        return false;
    });
    
    $(".dropdown").hover(            
	    function() {
	        $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
	        $(this).toggleClass('open');
	        $('b', this).toggleClass("caret caret-up");                
	    },
	    function() {
	        $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
	        $(this).toggleClass('open');
	        $('b', this).toggleClass("caret caret-up");                
	});
    
    $('button').on('click', expand);
    
    $('.viewmore').on('click',function(){
		var linkRef = $(this).attr('id');
		window.location.href = Baseurl+'/site/content/'+linkRef;
    });
    
    $.validate();
    
});
function expand() {
	  $(".search").toggleClass("close");
	  $(".input").toggleClass("square");
	  if ($('.search').hasClass('close')) {
	    $('input').focus();
	  } else {
	    $('input').blur();
	  }
}