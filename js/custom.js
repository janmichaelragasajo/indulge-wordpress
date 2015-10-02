$(document).ready(function() {
	// play video
	function playVideo() {
		$('#bgvid2').trigger('pause');
		var $vidId = $('#bgvid2');

		$("#playIndulgenceVid").click( function() {
			if ( $($vidId).get(0).paused ) {
				$vidId.trigger('play');
			} else {
				$vidId.addClass("stopfade");			
				$vidId.trigger('pause');
			}
		});
	}

	// Clone content in #navbar into #navbarbar
	(function cloneNavBar() {
		var textContent = $(".nav.navbar-nav").clone();

		$( textContent ).appendTo("#navbarbar");	
		$("#navbar").removeClass("hidden-xs");
		$("#navbar-menu-wrapper").addClass("hidden-sm hidden-md hidden-lg");
		$("#navbarbar li.dropdown").remove();
	})();

	$(".navbar-toggle").click( function() {
        $("#navbar-menu-wrapper").toggleClass("navbar-green zindex-999");
	});
});

function scrollToTop() {
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	    if (scroll >= 40) {

	        $(".navbar").addClass("navbar-green");

	    } else {
	        $(".navbar").removeClass("navbar-green");
	    }
	});		
}

