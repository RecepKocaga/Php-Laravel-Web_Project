(function ($) {
"use strict";

//preloader activation
var win =  $(window);
win.on('load', function () {
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });
})
    
// meanmenu
$('#tp-mobile-menu').meanmenu({
	meanMenuContainer: '.tp-mobile-menu',
	meanScreenWidth: "1199"
});

//mobile side menu
$('.side-toggle').on('click', function () {
	$('.side-info').addClass('info-open');
	$('.offcanvas-overlay').addClass('overlay-open');
})

$('.side-info-close,.offcanvas-overlay').on('click', function () {
	$('.side-info').removeClass('info-open');
	$('.offcanvas-overlay').removeClass('overlay-open');
})

//sticky menu activation
win.on('scroll', function () {
	var scroll = win.scrollTop();
	if (scroll < 105) {
		$(".header-sticky").removeClass("sticky-menu");
	} else {
		$(".header-sticky").addClass("sticky-menu");
	}
});
    
// data - background
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })

    $("[data-bg-color]").each(function () {
        $(this).css("background-color", $(this).attr("data-bg-color"))
    })

//venobox activation
$('.venobox').venobox(); 

// magnificPopup img view
$(".popup-image").magnificPopup({
	type: "image",
	gallery: {
		enabled: true,
	},
});

/ magnificPopup video view /
$(".popup-video").magnificPopup({
	type: "iframe",
});
    
// Scroll To Top Js
	function smoothSctollTop() {
		$('.smooth-scroll a').on('click', function (event) {
			var target = $(this.getAttribute('href'));
			if (target.length) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 0
				}, 1500);
			}
		});
	}
	smoothSctollTop();

	// Show or hide the sticky footer button
	win.on('scroll', function(event) {
		if($(this).scrollTop() > 600){
			$('#scroll').fadeIn(200)
		} else{
			$('#scroll').fadeOut(200)
		}
	});

	//Animate the scroll to yop
	$('#scroll').on('click', function(event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: 0,
		}, 1500);
	});
    
    
	// WOW active
	var wow = new WOW(
		{
			mobile: false,
		}
	);
	wow.init();

    
    
	/*------------------------------------
        Slider
	--------------------------------------*/
	if (jQuery(".tp-slider-active").length > 0) {
		let sliderActive1 = '.tp-slider-active';
		let sliderInit1 = new Swiper(sliderActive1, {
			// Optional parameters
			slidesPerView: 1,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: false,
			effect: 'fade',

			autoplay: {
				delay: 5000,
			},

			// If we need pagination
			pagination: {
				el: '.swiper-paginations',
				// dynamicBullets: true,
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			a11y: false
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + ' [data-animation]').each(function () {
					let anim = $(this).data('animation');
					let delay = $(this).data('delay');
					let duration = $(this).data('duration');

					$(this).removeClass('anim' + anim)
						.addClass(anim + ' animated')
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration
						})
						.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
							$(this).removeClass(anim + ' animated');
						});
				});
			};
			animated();
			// Make animated when slide change
			init.on('slideChange', function () {
				$(sliderActive1 + ' [data-animation]').removeClass('animated');
			});
			init.on('slideChange', animated);
		}
		animated_swiper(sliderActive1, sliderInit1);
	}
    
    // testimonial 1 activation
	if (jQuery(".tp-testimonial-active").length > 0) {
	let atestimonial1 = new Swiper('.tp-testimonial-active', {
		slidesPerView: 1,
		spaceBetween: 30,
		// direction: 'vertical',
		loop: false,
	  
		// If we need pagination
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		},
	  
		// Navigation arrows
		navigation: {
		  nextEl: '.testimonial-button-next',
		  prevEl: '.testimonial-button-prev',
		},
	  
		// And if we need scrollbar
		scrollbar: {
		  el: '.swiper-scrollbar',
		},

	  });
	}
    
	// testimonial two activation
	if (jQuery(".tp-testimonial-two-active").length > 0) {
		let testimonialTwo = new Swiper('.tp-testimonial-two-active', {
			slidesPerView: 1,
			spaceBetween: 30,
			// direction: 'vertical',
			loop: true,
			autoplay: {
					delay: 6000,
				},
		  
			// If we need pagination
			pagination: {
			  el: '.swiper-pagination-testimonial',
			  clickable: true,
			},
		  
			// Navigation arrows
			navigation: {
			  nextEl: '.brand-button-next',
			  prevEl: '.brand-button-prev',
			},
		  
			// And if we need scrollbar
			scrollbar: {
			  el: '.swiper-scrollbar',
			},
			breakpoints: {
				550: {
				  slidesPerView: 1,
				},
				768: {
				  slidesPerView: 2,
				},
				1200: {
				  slidesPerView: 2,
				},
				1400: {
					slidesPerView: 3,
				  }
			  }
		  });
		}

	// testimonial two activation
	if (jQuery(".tp-testimonial-three-active").length > 0) {
		let testimoniaTwo = new Swiper('.tp-testimonial-three-active', {
			slidesPerView: 1,
			spaceBetween: 30,
			// direction: 'vertical',
			loop: true,
			autoplay: {
					delay: 6000,
				},
		  
			// If we need pagination
			pagination: {
			  el: '.swiper-pagination-testimonial',
			  clickable: true,
			},
		  
			// Navigation arrows
			navigation: {
			  nextEl: '.brand-button-next',
			  prevEl: '.brand-button-prev',
			},
		  
			// And if we need scrollbar
			scrollbar: {
			  el: '.swiper-scrollbar',
			},
			breakpoints: {
				550: {
				  slidesPerView: 1,
				},
				768: {
				  slidesPerView: 2,
				},
				1200: {
				  slidesPerView: 3,
				},
				1400: {
					slidesPerView: 3,
				  }
			  }
		  });
		}

	// brand activation
	if (jQuery(".brand-active").length > 0) {
	let brand = new Swiper('.brand-active', {
		slidesPerView: 2,
		spaceBetween: 30,
		// direction: 'vertical',
		loop: true,
        autoplay: {
				delay: 5000,
			},
	  
		// If we need pagination
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		},
	  
		// Navigation arrows
		navigation: {
		  nextEl: '.brand-button-next',
		  prevEl: '.brand-button-prev',
		},
	  
		// And if we need scrollbar
		scrollbar: {
		  el: '.swiper-scrollbar',
		},
		breakpoints: {
			550: {
			  slidesPerView: 3,
			},
			768: {
			  slidesPerView: 4,
			},
			1200: {
			  slidesPerView: 5,
			},
		  }
	  });
	}

	// brand activation
	if (jQuery(".brand-active-two").length > 0) {
		let brandTwo = new Swiper('.brand-active-two', {
			slidesPerView: 2,
			spaceBetween: 30,
			// direction: 'vertical',
			loop: true,
			autoplay: {
					delay: 5000,
				},
		  
			// If we need pagination
			pagination: {
			  el: '.swiper-pagination',
			  clickable: true,
			},
		  
			// Navigation arrows
			navigation: {
			  nextEl: '.brand-button-next',
			  prevEl: '.brand-button-prev',
			},
		  
			// And if we need scrollbar
			scrollbar: {
			  el: '.swiper-scrollbar',
			},
			breakpoints: {
				550: {
				  slidesPerView: 3,
				},
				768: {
				  slidesPerView: 4,
				},
				1200: {
				  slidesPerView: 4,
				},
			  }
		  });
		}

	// project activation
	if (jQuery(".tp-project-active").length > 0) {
		let project = new Swiper('.tp-project-active', {
			slidesPerView: 1,
			spaceBetween: 30,
			// direction: 'vertical',
			loop: true,
			autoplay: {
					delay: 5000,
				},
		  
			// If we need pagination
			pagination: {
			  el: '.swiper-pagination',
			  clickable: true,
			},
		  
			// Navigation arrows
			navigation: {
			  nextEl: '.project-button-next',
			  prevEl: '.project-button-prev',
			},
		  
			// And if we need scrollbar
			scrollbar: {
			  el: '.swiper-scrollbar',
			},
			breakpoints: {
				550: {
				  slidesPerView: 2,
				},
				768: {
				  slidesPerView: 2,
				},
				1200: {
				  slidesPerView: 3,
				},
				1400: {
				  slidesPerView: 3,
				},
				1600: {
				  slidesPerView: 4,
				},
			  }
		  });
		}

	// service activation
	if (jQuery(".tp-service-active").length > 0) {
		let service = new Swiper('.tp-service-active', {
			slidesPerView: 1,
			spaceBetween: 30,
			// direction: 'vertical',
			loop: true,
			autoplay: {
					delay: 5000,
				},
		  
			// If we need pagination
			pagination: {
			  el: '.swiper-service-pagination',
			  clickable: true,
			},
		  
			// Navigation arrows
			navigation: {
			  nextEl: '.service-button-next',
			  prevEl: '.service-button-prev',
			},
		  
			// And if we need scrollbar
			scrollbar: {
			  el: '.swiper-scrollbar',
			},
			breakpoints: {
				550: {
				  slidesPerView: 1,
				},
				768: {
				  slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				  },
				1200: {
				  slidesPerView: 4,
				},
			  }
		  });
		}

// blog gallery activation
if (jQuery(".ablog__img--active").length > 0) {
	let ablogimgactive = new Swiper('.ablog__img--active', {
		slidesPerView: 1,
		spaceBetween: 30,
		// direction: 'vertical',
		loop: true,
	  
		// If we need pagination
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		},
	  
		// Navigation arrows
		navigation: {
		  nextEl: '.swiper-blog-button-next',
		  prevEl: '.swiper-blog-button-prev',
		},
	  
		// And if we need scrollbar
		scrollbar: {
		  el: '.swiper-scrollbar',
		  dynamicBullets: true,
		},
		breakpoints: {
			640: {
			  slidesPerView: 1,
			},
			768: {
			  slidesPerView: 1,
			},
			1024: {
			  slidesPerView: 1,
			},
		  }

	  });
	}

})(jQuery);