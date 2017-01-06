AOS.init();

// PARALLAX

$('.intro-container').parallax({
	imageSrc: './img/intro_image.png',
	speed: .4,
	position: top,
});
$('.intro-portfolio-container').parallax({imageSrc: '/img/header-03.jpg', speed: .4});
$('.intro-about-container').parallax({imageSrc: '/img/header-03.jpg', speed: .4});
$('.intro-resume-container').parallax({imageSrc: '/img/header-03.jpg', speed: .2});


$('.intro-portfolio-single-container').parallax({imageSrc: '/img/background-01.png', speed: .4});


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


var menuwidth;
var list1;
var list2;
var list3;

$(document).ready(function(){
	menuwidth = $('.nav-bar-relative').width()+$('.nav-bar-relative').offset().left+30;
	list1 = menuwidth - ($('#menuList li:nth-child(1)').width() + $('#menuList li:nth-child(1)').offset().left) + 15;
	list2 = menuwidth - ($('#menuList li:nth-child(2)').width() + $('#menuList li:nth-child(2)').offset().left) + 15;
	list3 = menuwidth - ($('#menuList li:nth-child(3)').width() + $('#menuList li:nth-child(3)').offset().left) + 15;
	console.log(list1);
});

// $(window).resize(function(){
// 	menuwidth = $('.nav-bar-relative').width()+$('.nav-bar-relative').offset().left+30;
// 	list1 = menuwidth - ($('#menuList li:nth-child(1)').width() + $('#menuList li:nth-child(1)').offset().left) + 15;
// 	list2 = menuwidth - ($('#menuList li:nth-child(2)').width() + $('#menuList li:nth-child(2)').offset().left) + 15;
// 	list3 = menuwidth - ($('#menuList li:nth-child(3)').width() + $('#menuList li:nth-child(3)').offset().left) + 15;
// 	console.log(list1);
// });


$(document).ready(function(){
	if($(document).scrollTop()>50){
		$('#menuList').addClass('listHidden');
		$('#menuList li:nth-child(1)').css({"transform": "translate(" + list1 + "px, 0px)"});
		$('#menuList li:nth-child(2)').css({"transform": "translate(" + list2 + "px, 0px)"});
		$('#menuList li:nth-child(3)').css({"transform": "translate(" + list3 + "px, 0px)"});
    $('#menuIcon').addClass('show');
		$('.navbar.main-nav.main-nav').css("background-color","rgba(255,255,255,1)");
		$(".navbar-brand.main-nav").html( "<img alt='LRW Logo' src='img/logo-pink.png'>" );
		$('.navbar.main-nav.main-nav').css("transition","background-color 1s ease-in");
		$('#nav-icon1.main-nav span').removeClass("removepinkcolor");


  } else {
    $('#menuIcon').removeClass('show');
    $('#menuList').removeClass('listHidden');
		$('#menuList li:nth-child(1),#menuList li:nth-child(2),#menuList li:nth-child(3)').css({"transform": "translate(0px, 0px)"});
		$('.navbar.main-nav.main-nav').css("background-color","transparent");
		$(".navbar-brand.main-nav").html( "<img alt='LRW Logo' src='img/logo-white.png'>" );
		$('.navbar.main-nav.main-nav').css("transition","background-color 1s ease-in");
		$('#nav-icon1.main-nav span').addClass("removepinkcolor");

  }
});


$(document).scroll(function(){
  if($(document).scrollTop()>50){
		$('#menuList').addClass('listHidden');
		$('#menuList li:nth-child(1)').css({"transform": "translate(" + list1 + "px, 0px)"});
		$('#menuList li:nth-child(2)').css({"transform": "translate(" + list2 + "px, 0px)"});
		$('#menuList li:nth-child(3)').css({"transform": "translate(" + list3 + "px, 0px)"});
    $('#menuIcon').addClass('show');
		$('.navbar.main-nav').css("background-color","rgba(255,255,255,1)");
		$(".navbar-brand.main-nav").html( "<img alt='LRW Logo' src='/img/logo-pink.png'>" );
		$('.navbar.main-nav').css("transition","background-color 1s ease-in");
		$('#nav-icon1.main-nav span').removeClass("removepinkcolor");


  } else {
    $('#menuIcon').removeClass('show');
    $('#menuList').removeClass('listHidden');
		$('#menuList li:nth-child(1),#menuList li:nth-child(2),#menuList li:nth-child(3)').css({"transform": "translate(0px, 0px)"});
		$('.navbar.main-nav').css("background-color","transparent");
		$(".navbar-brand.main-nav").html( "<img alt='LRW Logo' src='/img/logo-white.png'>" );
		$('.navbar.main-nav').css("transition","background-color 1s ease-in");
		$('#nav-icon1.main-nav span').addClass("removepinkcolor");

  }
});
// MAIN NAV
