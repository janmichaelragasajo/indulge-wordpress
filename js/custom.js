$(document).ready( function() {

	// Clone content in #navbar into #navbarbar
	( function () {
		var textContent = $(".nav.navbar-nav").clone();

		$( textContent ).appendTo("#navbarbar");	
		$("#navbar").removeClass("hidden-xs");
		$("#navbar-menu-wrapper").addClass("hidden-sm hidden-md hidden-lg");
		$("#navbarbar li.dropdown").remove();
	})();

	// Navbar Menu functionalities
	$(".navbar-toggle").click( function() {

		$('html, body').animate({
		    scrollTop: $("#top").offset().top
		}, 500);

        $("#navbar-menu-wrapper").toggleClass("navbar-green zindex-999");
	});

	// Footer section functionalities
	( function() {
		var $viewWidth = $( window ).width();
		var $box = $('.section-footer .box');
		var $footerMenu = $('.section-footer .box ul.menu');
		var $displayFooter = $('.section-footer .box .widget-title');	

		if ( $viewWidth < 767 ) {
			$('.section-footer .box .widget-title').click( function() {
				$(this).next().slideToggle('hidden');
			} );
		} else {
			$displayFooter.next().css("display", "block");
			$box.removeClass('a-style-sm')
		}		
	})();

});


