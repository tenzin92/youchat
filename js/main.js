$(window).load(function(){
	"use strict";
	
	//preloader animation
    $('.wrap.go').fadeOut();
	$('.preloader').delay(300).fadeOut('slow');

	
	//top navigation smooth scroll settings
	$(".navbar .nav a, a.learn-more, .download-link").smoothScroll({speed: 800});
	$(window).bind('scroll', function() {
        if ($(window).scrollTop() > $(".navbar").height()+30) {
            $(".navbar").addClass("show-nav");
        } else {
            	$(".navbar").removeClass("show-nav");
				$(".navbar .navscroll").collapse({toggle: false});
				$(".navbar .navscroll").collapse("hide");
				$(".navbar .navbar-toggle").addClass("collapsed");
        }
    });
		
	//wow animations
	var wow = new WOW({
    	offset:100,
    	mobile:false
  	});
	wow.init();
	
	
	//tooltip settings
	$('.tool-tip').tooltip();
		
	
	//Nivo lightbox settings
	$('.lightbox').nivoLightbox();
	
	
	//responsive video with fitvids
	$(".video-wrap").fitVids();
	
	
	//client carousel
	$("#client-carousel").owlCarousel({
		items: 1,
		itemsDesktop: [1199,1],
		itemsDesktopSmall: [980,1],
		itemsTablet: [768,1],
		itemsTabletSmall: [590,1],
		itemsMobile: [479,1],
		autoPlay: true,
		stopOnHover: true,
		pagination: true
	});
	
	
	//app screenshots
	$("#app-screenshots").owlCarousel({
		items: 3,
		itemsDesktop: [1199,3],
		itemsDesktopSmall: [980,4],
		itemsTablet: [768,3],
		itemsTabletSmall: [590,2],
		itemsMobile: [479,1],
		autoPlay: true,
		stopOnHover: true,
		pagination: true
	});
	
	//accordion (added in v2.0)
	$('.panel .panel-heading').on('click', function(){
		if($(this).hasClass('active')){
			//do nothing
		}else{
			$(this).parent().parent().find('.panel-heading').removeClass('active');
			$(this).addClass('active');
		}
	});
});

$(document).ready(function() {
	  var $   = jQuery,
	  body    = $('body'),
	  primary = '.navbar';
	  
	  $(primary).find('.parent .open-sub').remove();
	  
	  if (body.width() <= 767 ) {
		  $(primary).find('.language a').after('<span class="open-sub"><span></span><span></span></span>');
	  } else {
		  $(primary).find('ul').removeAttr('style').find('li').removeClass('active');
	  }
	  
	  $(primary).find('.open-sub').click(function(event){
		event.preventDefault();
		
		var item = $(this).closest('li');
		
		if ($(item).hasClass('active')) {
		  $(item).children().last().slideUp(10);
		  $(item).removeClass('active');
		} else {
		  var li = $(this).closest('li').parent('ul, .sub-list').children('li');
		  
		  if ($(li).is('.active')) {
			$(li).removeClass('active').children('ul').slideUp(10);
		  }
		  
		  $(item).children().last().slideDown(10);
		  $(item).addClass('active');
		}
	  });

	  $(primary).find('.language > a').click(function(event){
  		if ((body.width() < 767) &&  (navigator.userAgent.match(/iPad|iPhone|Android/i))) {
  		  var $this = $(this);
  		  
  		  if ($this.parent().hasClass('open')) {
  			$this.parent().removeClass('open')

        $('.')

  		  } else {
  			event.preventDefault();
  			
  			$this.parent().addClass('open')
  		  }
  		}
	  });

	  body.on('click', function(event) {
  		if (!$(event.target).is(primary + ' *')) {
  		  if ($(primary + ' .collapse').hasClass('in')) {
  			$(primary + ' .navbar-toggle').addClass('collapsed');
  			$(primary + ' .navbar-collapse').collapse('hide');
  		  }
  		}
	  });
	  
	window.scrollTo(0,0);
});
