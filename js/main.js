AOS.init();

// PARALLAX

$('.intro-container').parallax({
	imageSrc: './img/backgrounds/intro_image.png',
	speed: .4,
	position: top,
});
$('.intro-portfolio-container').parallax({imageSrc: '/img/backgrounds/header.jpg', speed: .4});
$('.intro-about-container').parallax({imageSrc: '/img/backgrounds/header.jpg', speed: .4});
$('.intro-resume-container').parallax({imageSrc: '/img/backgrounds/header.jpg', speed: .2});
$('.intro-credit-container').parallax({imageSrc: '/img/backgrounds/header.jpg', speed: .2});


$('.intro-portfolio-single-container').parallax({imageSrc: '/img/backgrounds/pattern-01.png', speed: .4});


// MAIN NAV
$(document).ready(function(){
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
    $('#navOverlay').toggleClass('navOpen');
    $('body').toggleClass('overlayOpen');
	});
  $('#nav-icon2').click(function(){
    $(this).toggleClass('open');
    $('#navOverlay').toggleClass('navOpen');
    $('body').toggleClass('overlayOpen');
  });


});

$( window ).resize(function() {
	if($( window ).width() <= 786){
		$('.flex_box').removeClass('flex');
	}
	else{
		$('.flex_box').addClass('flex');
	}
});

$(document).ready(function(){
	if($( window ).width() <= 786){
		$('.flex_box').removeClass('flex');
	}
});

var list1;
var list2;
var list3;

$(document).ready(cacheMenuSize);
$(window).resize(cacheMenuSize);

function cacheMenuSize() {
	var menuwidth = $('.nav-bar-relative').width()+$('.nav-bar-relative').offset().left+30;
	var items = $('#menuList li');
	items.css({
		"transform": "translate(0px, 0px)",
		"transition-duration": "0s"
	});
	var item1 = $(items[0]);
	var item2 = $(items[1]);
	var item3 = $(items[2]);
	list1 = menuwidth - (item1.width() + item1.offset().left) + 15;
	list2 = menuwidth - (item2.width() + item2.offset().left) + 15;
	list3 = menuwidth - (item3.width() + item3.offset().left) + 15;
	console.log(list1);

	if (isNavScrolled()) {
		item1.css({"transform": "translate(" + list1 + "px, 0px)"});
		item2.css({"transform": "translate(" + list2 + "px, 0px)"});
		item3.css({"transform": "translate(" + list3 + "px, 0px)"});
	}
	items.css({
		"transition-duration": ""
	});
};


$(document).ready(handleScroll);
$(document).scroll(handleScroll);

function handleScroll() {
	if(isNavScrolled()){
		$('#menuList').addClass('listHidden');
		$('#menuList li:nth-child(1)').css({"transform": "translate(" + list1 + "px, 0px)"});
		$('#menuList li:nth-child(2)').css({"transform": "translate(" + list2 + "px, 0px)"});
		$('#menuList li:nth-child(3)').css({"transform": "translate(" + list3 + "px, 0px)"});
    $('#menuIcon').addClass('show');
		$('.navbar.main-nav').css("background-color","rgba(255,255,255,1)");
		$('.main-nav #logo-pink').show();
		$('.main-nav #logo-white').hide();
		$('#nav-icon1.main-nav span').removeClass("removepinkcolor");
  } else {
    $('#menuIcon').removeClass('show');
    $('#menuList').removeClass('listHidden');
		$('#menuList li:nth-child(1),#menuList li:nth-child(2),#menuList li:nth-child(3)').css({"transform": "translate(0px, 0px)"});
		$('.navbar.main-nav').css("background-color","transparent");
		$('.main-nav #logo-pink').hide();
		$('.main-nav #logo-white').show();
		$('#nav-icon1.main-nav span').addClass("removepinkcolor");
  }
}

function isNavScrolled() {
	return $(document).scrollTop() > 50;
}
// MAIN NAV
