function stickyNav(){
		var window_top = $(window).scrollTop() + 15; // the "12" should equal the margin-top value for nav.stick
		var div_top = $('.current .nav_anchor').offset().top;
				if (window_top > div_top) {
						$('.current nav').addClass('stick');
				} else {
						$('.current nav').removeClass('stick');
				}

		var div_top = $('.current .nav_anchor1').offset().top;
				if (window_top > div_top) {
						$('.current .dropdown').addClass('stick');
				} else {
						$('.current .dropdown').removeClass('stick');
				}

}

$(window).on("resize", stickyNav);


$(document).ready(function(){
	var currentNavLinks;
	selectTabFromHash();

	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');
		window.location.hash = tab_id;
		selectTab(tab_id);
	});

	function selectTabFromHash() {
		var hash = window.location.hash;
		var tab_id = hash.replace('#', '');
		selectTab(tab_id);
	}

	function selectTab(tab_id){
		if (!$('#'+tab_id).length) {
			tab_id = 'learn';
		}
		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');
		$('.arrow-down').removeClass('visible');

		$('#'+tab_id).addClass('current');
		$('#'+tab_id+'_content').addClass('current');
		$('#'+tab_id+'_arrow').addClass('visible');
		stickyNav();
		updateNavLinks();
	}


	function updateNavLinks(){
		var aChildren = $(".current nav li a"); // find the a children of the list items
    currentNavLinks = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        currentNavLinks.push(ahref);
    } // this for loop fills the aArray with attribute href values


	}
    /**
     * This part does the "fixed navigation after scroll" functionality
     * We use the jQuery function scroll() to recalculate our variables as the
     * page is scrolled/
     */
    $(window).scroll(stickyNav);



    /**
     * This part causes smooth scrolling using scrollto.js
     * We target all a tags inside the nav, and apply the scrollto.js to it.
     */
    $("nav a").click(function(evn){
        evn.preventDefault();
        $('html,body').scrollTo(this.hash, this.hash);
    });

		$(".dropdown a").click(function(evn){
				evn.preventDefault();
				$('html,body').scrollTo(this.hash, this.hash);
		});






    $(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < currentNavLinks.length; i++) {
            var theID = currentNavLinks[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("nav-active");
            } else {
                $("a[href='" + theID + "']").removeClass("nav-active");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!$(".current nav li:last-child a").hasClass("nav-active")) {
                var navActiveCurrent = $(".nav-active").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                $(".current nav li:last-child a").addClass("nav-active");
            }
        }
    });
});
