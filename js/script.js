// --- swiper --- //
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: false,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        700: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

var swiper = new Swiper('.container2', {
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: false,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        delay: 3000,
        dynamicBullets: true,
    },
    breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        700: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

// --- filtering --- //
;(function($){
    "use strict"

   $(window).on("load", function() {


    $('.portfolio-filter ul li').on('click', function () {
        $('.portfolio-filter ul li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $workGrid.isotope({
            filter: data
        });
    });

    if (document.getElementById('portfolio')) {
        var $workGrid = $('.portfolio-grid').isotope({
            itemSelector: '.all',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer'
            }
        });
    }
});

})(jQuery)


// --- Menu Button --- //
jQuery(document).ready(function($) {

	
	var menu = function() {

		$('.nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'nav-wrap').appendTo('.menu__body');
		});

		$('body').on('click', '.menu__toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	menu();

	// navigation
  var OnePageNavigation = function() {
    var navToggler = $('.menu__toggle');
   	$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .menu .nav-wrap li a[href^='#']", function(e) {
      e.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        'scrollTop': $(hash).offset().top - 0
      }, 300, 'easeInOutCirc', function(){
        window.location.hash = hash;
        setTimeout(function() {
        	$('body').removeClass('offcanvas-menu');
        }, 20);
        
      });

    });
  };
  OnePageNavigation();

});

$(document).on('click', '.nav__list', function(){
    $(this).addClass('nav__link--active').siblings().removeClass('nav__link--active')
})

// --- fancybox --- //
$('.fancybox').on('click', function() {
    var visibleLinks = $('.fancybox');

    $.fancybox.open( visibleLinks, {}, visibleLinks.index( this ) );

    return false;
  });