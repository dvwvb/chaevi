/* *******************************************************
 * filename : main.js
 * description : 메인에만 사용되는 JS
 * date : 2022-03-14
******************************************************** */
	
/* ************************
* Func : Main Active
************************ */
gsap.fromTo('.main-cover', {opacity:1}, {opacity:0,  duration:0.5,onComplete : function  () {
	addClassName($(".index-wrapper"), "active");
	addClassName($("#fp-nav"), "active");
	gsap.set('.main-cover', {"visibility":"hidden"});
}});

/* ************************
* Func : fullpage 레이아웃 사용시
* fullpage.js , detectBrowser() 필요
************************ */
if ($.exists('#fullpage')) {
	var $fullPage = $("#fullpage");
	var $fullPageSection = $fullPage.children(".section");
	$fullPage.fullpage({
		css3: true,
		anchors: ['INTRO','APP','PRICE','CHAEVIZONE', 'Mega','Subscribe', 'News','BOTTOM'],
		fitToSection: false,
		navigation: true,
		scrollBar:false,
		scrollingSpeed:800,
		navigationPosition: 'right',
		navigationTooltips: ['Content01', 'Content02', 'Content03', 'Content04'],
		responsiveWidth: tabletWidth,
		responsiveHeight : 750,
		onLeave : function(origin, destination, direction){
			setTimeout(function  () {
				$(".section").eq(destination-1).find("[data-scroll]").addClass("animated");
			},500);


			if ( destination > 1 )  {
				$("#rightSidebar").addClass("bor0");
			}else {
				$("#rightSidebar").removeClass("bor0");
			}
			if ( destination == 2 || destination == 3) {
				$("#fp-nav").addClass("black");
				$("#rightSidebar").removeClass("white-ver");
			}else {
				$("#fp-nav").removeClass("black");
				$("#rightSidebar").addClass("white-ver");
			}
		
			if ( destination > 7 )  {
				$("body:not('.fp-responsive')").find("#header").hide();	// ie responsive모드에서 상단으로 이동시 destination 오류로 추가
				$(".index-wrapper .to-top-btn").show();
			}else {
				$("body:not('.fp-responsive')").find("#header").show();
				$(".index-wrapper .to-top-btn").hide();
			}
		}
	});
}

/* ************************
* Func : 동영상 재생
* slick.js , getWindowWidth(), getWindowHeight() 필요
************************ */
$(window).load(function  () {
	// 영상 자동재생
	if ( $("#visualVideo").length > 0 ) {
		$("#visualVideo").get(0).play();
	}
});
myMovie=document.getElementById('visualVideo');
playControlsButton=document.getElementById('playControlsButton');
circleProgressBar=document.getElementById('circleProgressBar');
lineProgressBar=document.getElementById('lineBar');

function doFirst(){	
	myMovie.play();
	updateBar=setInterval(update, 0);
	playControlsButton.addEventListener('click', playOrPause, false);
}

function playOrPause() {
	if (!myMovie.paused && !myMovie.ended){
		myMovie.pause();
		playControlsButton.classList.add('pause');
		window.clearInterval(updateBar);
	} else {
		myMovie.play();
		playControlsButton.classList.remove('pause');
		updateBar=setInterval(update, 0);
	}
}

function update() {
	if (!myMovie.ended) {
		lineProgressBar.style.width=((myMovie.currentTime / myMovie.duration) *100) +'%';
	} else {
		lineProgressBar.style.width='0px';
		playControlsButton.classList.remove('pause');
		window.clearInterval(updateBar);
	}
}

// Pause event
myMovie.addEventListener("pause", function() { 
	 playControlsButton.classList.add('pause');
});
// Playing event
myMovie.addEventListener("playing", function() {	
	playControlsButton.classList.remove('pause');
});

window.addEventListener('DOMContentLoaded',doFirst,false);

/* ************************
* Func : 메인 갤러리 슬라이드
* slick.js 필요
************************ */
$('.main-news-list-container .news-list-con').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	arrows: false,
	fade: false,
	dots:true,
	autoplay: false,
	speed:800,
	infinite:true,
	autoplaySpeed: 2000,
	easing: 'easeInOutQuint',
	pauseOnHover:true,
	touchThreshold: 50,
	responsive: [
				{
				  breakpoint: 1024,
				  settings: {
					slidesToShow: 3
				  }
				},
				{
				  breakpoint: 640,
				  settings: {
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					slidesToShow: 1
				  }
				}
			  ]
});

/* ************************
* Func : 메인 Swiper 갤러리
* swiper.js 필요
************************ */
var swiper = new Swiper(".main-app-rolling-swiper", {
	slidesPerView: "auto",
	spaceBetween: 20,
	centeredSlides: true,
	loop:true,
	simulateTouch : false,
	allowTouchMove: false,
	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	}, 
	breakpoints: {
		1025: {
			spaceBetween: 50,
			centeredSlides: false,
		},
		801: {
			spaceBetween: 30,
			centeredSlides: false,
		}
	}
});