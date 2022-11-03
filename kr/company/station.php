<!doctype html>
<html lang="ko">

<head>
	<?php include '../_inc/config.php'; ?>
	<script>
		//  1번째  대메뉴 인덱스
		dep1 = 1
		// dep1 = 01,
		dep2 = 05;
		// sub2_num 변수가 있을때 ( 3차메뉴 )
		dep3 = "";
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
			<section id="brandConWrap">
				<article id="brandstationContent">
					<div class="area">
						<div class="cm-tit-box station-tit-box" data-scroll="fade-up">
							<p class="cm-content-txt">Mega Station</p>
							<h3 class="cm-content-tit">누구보다 앞선 충전인프라를 쉽고 <br />빠른 급속 충전으로 EV라이프를 채비하세요.</h3>
						</div>
					</div>
					<div class="station-top-banner" data-scroll="fade-up">
						<span><img src="../../images/content/station_top_banner_img.jpg" alt=""></span>
						<p class="cm-example-txt">※가상의 이미지입니다.</p>
					</div>

					<div class="station-bottom-con">
						<div class="area-box">
							<div class="station-slide-wrap">
								<div class="left-box" data-scroll="fade-up">
									<h4 class="tit">EV 유저를 위한 호환성과 접근성을 생각한 <span>초급속 충전 스테이션</span></h4>
									<p class="txt01">메가스테이션은 주로 고속도로 휴게소, 공공기관 등 <br />실내/외 장소에 설치됩니다.</p>
									<p class="txt02">채비의 급속 충전기는 AC 급속, 차데모, DC 콤보 총 3개의 인터페이스를 제공해, <br class="pc-br" />국내차량은 물론 해외 차량까지 폭넓게 호환 가능합니다.</p>
								</div>

								<div class="right-box" data-scroll="fade-left">
									<ul class="station-slick-box">
										<li class="station-product-img"><span><img src="../../images/content/station_product_img01.png" alt=""></span></li>
										<li class="station-product-img"><span><img src="../../images/content/station_product_img02.png" alt=""></span></li>
										<li class="station-product-img"><span><img src="../../images/content/station_product_img03.png" alt=""></span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</article>
			</section>
		</section>
		<!-- //content -->
	</div>
	<!-- //container -->

	<?php include '../_inc/footer.php'; ?>