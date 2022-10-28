<!doctype html>
<html lang="ko">

<head>
	<?php include '../_inc/config.php'; ?>
	<script>
		//  1번째  대메뉴 인덱스
		dep1 = 1
		// dep1 = 01,
		dep2 = 01;
		// sub2_num 변수가 있을때 ( 3차메뉴 )
		dep3 = 01;
	</script>
</head>
<!-- code -->
<div id="wrap">
	<?php include '../_inc/header.php'; ?>
	<!-- container -->
	<div id="container">
		<?php include '../_inc/subMenu.php'; ?>
		<!-- content -->
		<section id="content" class="wide">
			<section id="appContent">
				<div class="app-tit-box area-box" data-scroll="fade-up">
					<h3 class="cm-content-tit">충전은 채비 앱으로!</h3>
					<p>간편한 사용 조작으로 보다 편리하게 <br class="m-br">주위 충전기를 찾아 충전하세요</p>
					<div class="app-downlod-btns">
						<a href="https://play.google.com/store/apps/details?id=com.dym.chaevi.main" class="app-download-btn" target="_blank"><em class="txt"><i class="xi-google-play"></i>
								Google Play</em> <i class="xi-download"></i></a>
						<a href="https://apps.apple.com/kr/app/chaevi/id1530664291" class="app-download-btn" target="_blank"><em class="txt"><i class="xi-apple"></i> App Store</em> <i class="xi-download"></i></a>
					</div>
				</div>
				<article class="center-active-list-con">
					<ul data-scroll="fade-up">
						<li class="slide-item">
							<div class="slide-inner-con">
								<div class="prd-thumb-box"><img src="../../images/content/app_capture_01f490.jpg?ver=220718" alt=""></div>
							</div>
						</li>
						<li class="slide-item">
							<div class="slide-inner-con">
								<div class="prd-thumb-box"><img src="../../images/content/app_capture_02f490.jpg?ver=220718" alt=""></div>
							</div>
						</li>
						<li class="slide-item">
							<div class="slide-inner-con">
								<div class="prd-thumb-box"><img src="../../images/content/app_capture_03f490.jpg?ver=220718" alt=""></div>
							</div>
						</li>
						<li class="slide-item">
							<div class="slide-inner-con">
								<div class="prd-thumb-box"><img src="../../images/content/app_capture_04f490.jpg?ver=220718" alt=""></div>
							</div>
						</li>
						<li class="slide-item">
							<div class="slide-inner-con">
								<div class="prd-thumb-box"><img src="../../images/content/app_capture_05f490.jpg?ver=220718" alt=""></div>
							</div>
						</li>
						<li class="slide-item">
							<div class="slide-inner-con">
								<div class="prd-thumb-box"><img src="../../images/content/app_capture_06f490.jpg?ver=220718" alt=""></div>
							</div>
						</li>
						<!-- <li class="slide-item">
						<div class="slide-inner-con">
							<div class="prd-thumb-box"><img src="https://chaevi.com/images/content/app_capture_07.jpg?ver=220718" alt=""></div>
						</div>
					</li> -->
						<li class="slide-item">
							<div class="slide-inner-con">
								<div class="prd-thumb-box"><img src="../../images/content/app_capture_08f490.jpg?ver=220718" alt=""></div>
							</div>
						</li>
						<li class="slide-item">
							<div class="slide-inner-con">
								<div class="prd-thumb-box"><img src="../../images/content/app_capture_09f490.jpg?ver=220718" alt=""></div>
							</div>
						</li>
					</ul>
				</article>
				<div class="chaevi-app-logo-con area-box" data-scroll="fade-up">
					<img src="../../images/content/chaevi_app_logo.png" alt="CHAEVI" />
				</div>
			</section>
			<script type="text/javascript">
				$(document).ready(function() {
					$('.center-active-list-con ul').slick({
						slidesToShow: 1,
						arrows: false,
						fade: false,
						dots: false,
						autoplay: true,
						speed: 800,
						infinite: true,
						swipe: false,
						touchMove: false,
						autoplaySpeed: 1500,
						easing: 'easeInOutQuint',
						centerMode: true,
						centerPadding: "0",
						pauseOnHover: false
					});
				});
			</script>
			<script type="text/javascript">
				/* 	$(document).ready(function  () {
					
					const mainSwiper = new Swiper(".chaevi-app-gallery-container", {
							slidesPerView:"1",
							spaceBetween: 100,
							centeredSlides: true,
							speed : 600,
							loop: true
						});
					}); */
			</script>
		</section>
		<!-- //content -->
	</div>
	<!-- //container -->
	<?php include '../_inc/footer.php'; ?>