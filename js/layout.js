(function($) {

	var topNavVisible = false;
	var mobileNav = false;
	var scrollTimer = null;

	function isMobile() {
		if ( $(".responsivecue").css("float") == "right" ) { 
			return false;
		} else {
			return true;
		}
	}

	function openNav() {
		if ( topNavVisible == false ) {

			$('.opennav').hide();
			$('.closenav').show();

			$( ".topnav" ).stop().slideDown(150, function() {
				topNavVisible = true;
			});

		}

	}

	function closeNav() {

		if ( topNavVisible == true ) {

		$('.closenav').hide();
		$('.opennav').show();

		$( ".topnav" ).stop().slideUp(150, function() {
			topNavVisible = false;
		});

		}

	}


	function handleScroll() {

	}

	function setupLayout() {

		$('body').addClass('js');

		handleResize();

	}

	function handleResize() {
		if ( isMobile() ) {
			if ( mobileNav == false ) {
				// Transition to mobile

				$('.topnav').hide();
				$('.closenav').hide();
				$('.opennav').show();

				topNavVisible = false;
				mobileNav = true;

			}

		} else {
			if ( mobileNav == true ) {
				$('.topnav').show();
				mobileNav = false;
			}

		}

		setupPadding();
	}

	function setupPadding() {

		var adminbarheight = 0;

		if ($('#wpadminbar').length != 0) {
			var adminbarheight = $('#wpadminbar').outerHeight();
		}

		$('.wpadminbarspacer').css({'height': adminbarheight + 'px'});

		var topTitle = $('.primarynavwraper').outerHeight();

		$('.layoutspacer').css({'height': topTitle + 'px'});

	}

	$(document).ready( function() {

		setupLayout();

		$('.opennav').on('click', function( event ) {
			openNav();
		});

		$('.closenav').on('click', function( event ) {
			closeNav();
		});

	});


	$(window).load(function() {

	});


	$(window).scroll(function() {

	    if (scrollTimer) {
	        clearTimeout(scrollTimer);   // clear any previous pending timer
	    }
	    scrollTimer = setTimeout(handleScroll, 1);   // set new timer

	});

	$(window).resize(function(){
		handleResize();
	});

})(jQuery);
