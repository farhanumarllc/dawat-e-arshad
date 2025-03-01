

/**
 * Sticky Header
 * Adds a class to header on scroll
 */

jQuery( document ).on( 'scroll', function() {
	if ( jQuery( document ).scrollTop() > 0 ) {
		jQuery( 'header, body' ).addClass( 'shrink' );
	} else {
		jQuery( 'header, body' ).removeClass( 'shrink' );
	// var $header_height = jQuery("header").outerHeight();
		// 	jQuery("body").css('padding-top', $header_height+'px');
	}
} );
// var offsetheight = ;

/**
 * Document Ready Function
 * Triggered when document get's ready
 */
//  document.all.body.style.paddingBottom="189px";
jQuery( document ).ready( function( jQuery ) {

	if (navigator.userAgent.indexOf('Mac OS X') != -1) {
		jQuery("body").addClass("style-for-apple");
	} else {
		jQuery("body").addClass("style-for-window");
	}
	/**
	 * Toggle menu for mobile
	 */
	// accessible sub menu
	jQuery( '.menu-item-has-children > a' ).focus( function() {
		jQuery( this ).siblings( '.sub-menu' ).addClass( 'focused' );
	  } ).blur( function() {
		jQuery( this ).siblings( '.sub-menu' ).removeClass( 'focused' );
	  } );

	jQuery( '.menu-btn' ).click( function() {
		jQuery( this ).toggleClass( 'active' );
		jQuery( '.nav-overlay' ).toggleClass( 'open' );
		jQuery( 'html, body' ).toggleClass( 'no-overflow' );
		jQuery( '.header-nav ul li.active' ).removeClass( 'active' );
		jQuery( '.header-nav ul.sub-menu' ).slideUp();
	} );
	jQuery.noConflict();

	/**
	 * Add span tag to multi-level accordion menu for mobile menus
	 */
	jQuery( 'li' ).each( function() {
		if ( jQuery( this ).hasClass( 'menu-item-has-children' ) ) {
			jQuery( this )
				.find( 'a:first' )
				.after( '<span class="submenu-icon"></span>' );
		}
	} );
	/**
	 * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	 */
	jQuery( '.header-nav .submenu-icon' ).click( function() {
		const link = jQuery( this );
		const closestUl = link.closest( 'ul' );
		const parallelActiveLinks = closestUl.find( '.active' );
		const closestLi = link.closest( 'li' );
		const linkStatus = closestLi.hasClass( 'active' );
		let count = 0;

		closestUl.find( 'ul' ).slideUp( function() {
			if ( ++count === closestUl.find( 'ul' ).length ) {
				parallelActiveLinks.removeClass( 'active' );
			}
		} );

		if ( ! linkStatus ) {
			closestLi.children( 'ul' ).slideDown();
			closestLi.addClass( 'active' );
		}
	} );

	// jQuery(".banner-slider").owlCarousel({
	// 	items: 1,
	// 	animateOut: 'fadeOut',
	// 	animateIn: 'fadeIn',  // Specify the animation for when the item comes into view
	// 	nav: true,
	// 	dots: false,
	// 	slideSpeed: 300,  // Speed of the slide animation
	// 	singleItem: true, // Adjusts the carousel height to the height of the current slide
	// 	smartSpeed: 300,  // Smooth speed for all other animations
	// 	fluidSpeed: 300,
	//   });
	
	  /* Stat */
	
	  if (jQuery(".stat-item").length > 0) {
		let a = 0;
		jQuery(window).scroll(function () {
		  const oTop = jQuery(".stat-item").offset().top - 500;
		  if (a == 0 && jQuery(window).scrollTop() > oTop) {
			jQuery(".stat-value").each(function () {
			  const $this = jQuery(this),
				countTo = $this.attr("data-number");
			  jQuery({
				countNum: $this.text(),
			  }).animate(
				{
				  countNum: countTo,
				},
				{
				  duration: 1600,
				  easing: "swing",
				  step() {
					//$this.text(Math.ceil(this.countNum));
					$this.text(Math.ceil(this.countNum).toLocaleString("en"));
				  },
				  complete() {
					$this.text(Math.ceil(this.countNum).toLocaleString("en"));
				  },
				}
			  );
			});
			a = 1;
		  }
		});
	  }
	
	 
	  /* Video Popup */
	
	  jQuery(".video-popup-link").magnificPopup({
		type: "iframe",
	  });
	
	  /* Book Slider */

	  /* Faqs */
	
	  jQuery(".faq-head").on("click", function () {
		const $clickedItem = jQuery(this);
		const $faq = $clickedItem.closest(".faq");
		const $otherFaqs = jQuery(".faq").not($faq);
		if ($clickedItem.hasClass("active")) {
		  $clickedItem.removeClass("active");
		  $clickedItem.siblings(" .faq-content").slideUp(300);
		  $faq.removeClass("active");
		} else {
		  jQuery(".faq").find(".faq-head").removeClass("active");
		  jQuery(".faq-content").slideUp();
		  $clickedItem.addClass("active");
		  $clickedItem.siblings(".faq-content").slideDown(300);
		  $faq.addClass("active");
		  $otherFaqs.removeClass("active");
		}
	  });
	
	  /* Books Filter*/
	
	  // Check active classes
	  var checkClass = function () {
		if (jQuery('.book-link').hasClass('hide')) {
		  jQuery('.book-link').removeClass('hide');
		}
	  };
	
	  // Category filters
	
	
	  jQuery('.show-all').click(function () {
		checkClass();
	  });
	  jQuery('.Faith').click(function () {
		checkClass();
		jQuery('.book-link:not(.Faith)').toggleClass('hide');
	  });
	  jQuery('.Holy-quran').click(function () {
		checkClass();
		jQuery('.book-link:not(.Holy-quran)').toggleClass('hide');
	  });
	  jQuery('.Hadith').click(function () {
		checkClass();
		jQuery('.book-link:not(.Hadith)').toggleClass('hide');
	  });
	  jQuery('.Jurisprudence').click(function () {
		checkClass();
		jQuery('.book-link:not(.Jurisprudence)').toggleClass('hide');
	  });
	  jQuery('.Khatme-Nabuwat').click(function () {
		checkClass();
		jQuery('.book-link:not(.Khatme-Nabuwat)').toggleClass('hide');
	  });
	
	
	  // Active tag
	  jQuery('.book-category').click(function () {
		jQuery('.book-category').removeClass('active');
		jQuery(this).addClass('active');
	  })
	
	  /* Book Synce Slider */
	
	//   var sync1 = jQuery("#book-slider-top");
	//   var sync2 = jQuery("#book-slider-bottom");
	//   var slidesPerPage = 4; //globaly define number of elements per page
	//   var syncedSecondary = true;
	
	//   sync1.owlCarousel({
	// 	items: 1,
	// 	slideSpeed: 2000,
	// 	nav: false,
	// 	autoplay: false,
	// 	dots: true,
	// 	loop: true,
	// 	responsiveRefreshRate: 200,
	
	//   }).on('changed.owl.carousel', syncPosition);
	
	//   sync2
	// 	.on('initialized.owl.carousel', function () {
	// 	  sync2.find(".owl-item").eq(0).addClass("current");
	// 	})
	// 	.owlCarousel({
	// 	  items: slidesPerPage,
	// 	  dots: false,
	// 	  nav: false,
	// 	  margin: 24,
	// 	  smartSpeed: 200,
	// 	  slideSpeed: 500,
	// 	  slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
	// 	  responsiveRefreshRate: 100
	// 	}).on('changed.owl.carousel', syncPosition2);
	
	//   function syncPosition(el) {
	// 	//if you set loop to false, you have to restore this next line
	// 	//var current = el.item.index;
	
	// 	//if you disable loop you have to comment this block
	// 	var count = el.item.count - 1;
	// 	var current = Math.round(el.item.index - (el.item.count / 2) - .5);
	
	// 	if (current < 0) {
	// 	  current = count;
	// 	}
	// 	if (current > count) {
	// 	  current = 0;
	// 	}
	
	// 	//end block
	
	// 	sync2
	// 	  .find(".owl-item")
	// 	  .removeClass("current")
	// 	  .eq(current)
	// 	  .addClass("current");
	// 	var onscreen = sync2.find('.owl-item.active').length - 1;
	// 	var start = sync2.find('.owl-item.active').first().index();
	// 	var end = sync2.find('.owl-item.active').last().index();
	
	// 	if (current > end) {
	// 	  sync2.data('owl.carousel').to(current, 100, true);
	// 	}
	// 	if (current < start) {
	// 	  sync2.data('owl.carousel').to(current - onscreen, 100, true);
	// 	}
	//   }
	
	//   function syncPosition2(el) {
	// 	if (syncedSecondary) {
	// 	  var number = el.item.index;
	// 	  sync1.data('owl.carousel').to(number, 100, true);
	// 	}
	//   }
	
	//   sync2.on("click", ".owl-item", function (e) {
	// 	e.preventDefault();
	// 	var number = jQuery(this).index();
	// 	sync1.data('owl.carousel').to(number, 300, true);
	//   });
	
	  /* Islamic date */
	
	  function getIslamicDate() {
		// Get current date
		const currentDate = new Date();
	
		// Convert Gregorian date to Islamic (Hijri) date
		const islamicDate = new Intl.DateTimeFormat('ar-SA-u-ca-islamic', {
		  day: 'numeric',
		  month: 'long',
		  year: 'numeric'
		}).format(currentDate);
	
		// Convert the numeric Hijri year to Arabic-Indic digits
		const arabicIndicHijriYear = currentDate.toLocaleDateString('ar-SA-u-nu-latn', {
		  year: 'numeric'
		});
	
		// Format the Islamic date string
		const formattedIslamicDate = `${islamicDate} ${arabicIndicHijriYear}ه`;
	
		return formattedIslamicDate;
	  }
	
	  // Update the <p> tag with the Islamic date
	  const islamicDate = getIslamicDate();
	  jQuery('#islamicDate p').text(islamicDate);
	
	
	  /* Language Dropdown */
	
	  jQuery('.language-options ul').hide();
	
	  jQuery('.language-options span').click(function () {
		jQuery(this).next('ul').slideToggle();
	  });
	
	  jQuery('.language-options ul li').click(function () {
		var selectedLanguage = jQuery(this).text();
		jQuery('.language-options span').text(selectedLanguage);
		jQuery(this).closest('ul').slideUp();
	  });
	
	/* Form Recapcha */
	
	setTimeout(function() {
	  
	  jQuery('.recaptcha').each(function() {
		grecaptcha.render(this.id, {
		  'sitekey': '6LdVkwkUAAAAACeeETRX--v9Js0vWyjQOTIZxxeB',
		  "theme":"light"
		});
	  });
	  
	}, 2000);
	
	/* Magnific Popup */
	
	jQuery( '.popup-link,.book-btn .read-more-btn' ).magnificPopup( {
	  removalDelay: 160,
	  preloader: false,
	  fixedContentPos: true,
	  type: 'inline',
	  midClick: true,
	  overflowY: 'hidden',
	} );
} );
