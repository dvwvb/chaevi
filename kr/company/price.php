<?php include '../_inc/header.php';?>
	<!-- code -->
	<div id="wrap">
		<!-- header -->

		<header id="header" class="top-fixed-object">
			<!-- .top-fixed가 붙는 object에 top-fixed-object 클래스 추가  -->
			<div class="gnb-overlay-bg"></div>
			<div id="headerInnerWrap">
				<!-- ****************** 헤더상단 ********************** -->
				<div id="headerInner" class="area-wrap-box">
					<h1 class="logo"><a href="../index-2.html" title="to home"><svg xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 505.64 58.34">
								<defs>
									<style>
										.logo-1 {
											fill: #6cc4d5;
										}
									</style>
								</defs>
								<polygon class="logo-1"
									points="481.74 0 464.44 0.05 444.9 24.81 452.15 24.81 437.33 42.53 413.87 0.06 397.56 0.06 430.14 58.03 430.32 58.34 441.08 58.34 441.59 58.34 442.38 58.34 471.97 22.27 464.82 22.27 481.74 0" />
								<polygon class="logo-1"
									points="179.8 22.68 118.02 22.68 121.18 0.52 106.88 0.52 98.29 58.01 112.55 58.01 116.09 34.92 178.11 34.92 174.56 58.01 189.02 58.01 197.7 0.52 183.19 0.52 179.8 22.68" />
								<path class="logo-1"
									d="M247.93.52,197.7,58h14.11l13-15h41.92l8.57,15h14L256.27.52Zm-13.26,30.7L250.26,13l10.18,18.19Z" />
								<polygon class="logo-1"
									points="489.95 0.52 481.56 58.01 497.78 58.01 505.64 0.52 489.95 0.52" />
								<path class="logo-1"
									d="M87,46.22H18.42S13.8,45,14.3,41.11s4-23.27,4-23.27c.65-3,4.42-5.67,8.68-5.67l65.11.06L93.84.47H27C14.9.47,5.08,7.72,4.21,16.84h0L.06,44.72s-.8,4.42,3.41,8.63A15.64,15.64,0,0,0,13.9,57.86l71.37,0Z" />
								<polygon class="logo-1"
									points="377.7 46.26 313.74 46.26 315.63 34.05 365.65 34.05 367.27 22.52 317.15 22.52 318.63 12.35 382.79 12.23 384.54 0.52 306.3 0.52 298 58.01 375.97 57.86 377.7 46.26" />
							</svg></a></h1>
					<div class="header-util-box">
						<div class="header-member-list cm-header-util-menu">
							<a href="../member/login.html">로그인</a><a href="../member/join_select.html"> 회원가입</a>
						</div>
						<!-- 외국어선택 -->
						<div class="header-lang-list">
							<ul class="clearfix cm-header-util-menu">
								<li class="cur"><a href="../index-2.html">KR</a></li>
								<li><a href="https://chaevi.com/en/">EN</a></li>
								<li><a href="javascript:;" onclick="alert('준비중입니다.')">JP</a></li>
							</ul>
						</div>
						<!-- 외국어선택 M -->
						<div class="header-lang cm-drop-menu-box-JS" data-drop-event="click">
							<button class="lang-open-btn cm-drop-open-btn-JS"><i class="xi-globus"></i></button>
							<ul id="headerLangList" class="cm-drop-list-JS" style="display: none;">
								<li><a href="../index-2.html">KR</a></li>
								<li><a href="https://chaevi.com/en/">EN</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- ****************** GNB ********************** -->
				<!-- GNB PC  -->
				<nav id="gnb" class="total-menu">
					<h2 class="blind">Menu</h2>
					<div id="gnbBg"></div>
					<ul class="clearfix">
						<li class="gnb1">
							<a href="brand_story.html"><em class="en">CHAEVI</em></a>
							<div class="gnb-2dep">
								<ul>
									<li><a href="brand_story.html"><span>채비 브랜드 소개</span></a></li>
									<li><a href="price.html"><span>채비 요금제</span></a></li>
									<li><a href="app.html"><span>채비 APP</span></a></li>
									<li><a href="zone.html"><span>채비스테이</span></a></li>
									<li><a href="station.html"><span>메가스테이션</span></a></li>
								</ul>
							</div>
						</li>
						<li class="gnb2">
							<a href="../infra/charging_station.html">채비 인프라</a>
							<div class="gnb-2dep">
								<ul>
									<li><a href="../infra/charging_station.html"><span>채비 충전소 찾기</span></a></li>
								</ul>
							</div>
						</li>
						<li class="gnb3">
							<a href="../service/charger_install_apply.html">채비 서비스</a>
							<div class="gnb-2dep">
								<ul>
									<!--<li><a href="https://chaevi.com/kr/service/subscribe.php"><span>채비 패스</span></a></li>-->
									<li><a href="../service/charger_install_apply.html"><span>채비 홈충전기</span></a></li>
									<li><a href="../service/member_card_apply.html"><span>회원 카드 신청</span></a></li>
								</ul>
							</div>
						</li>
						<li class="gnb4">
							<a href="../partnership/charging_station_install.html">랜드오너 파트너쉽</a>
							<div class="gnb-2dep">
								<ul>
									<li><a href="../partnership/charging_station_install.html"><span>충전소 설치
												신청</span></a></li>
									<li><a href="../partnership/charging_station_install_check.html"><span>충전소 설치 신청
												확인</span></a></li>
								</ul>
							</div>
						</li>
						<li class="gnb5">
							<a href="../mypage/modify_check.html">고객지원</a>
							<div class="gnb-2dep">
								<ul>
									<li><a href="../mypage/modify_check.html"><span>마이페이지</span></a></li>
									<li><a href="../customer/notice.html"><span>공지사항</span></a></li>
									<li><a href="../customer/faq.html"><span>FAQ</span></a></li>
									<li><a href="../customer/news.html"><span>뉴스</span></a></li>
									<li><a href="../customer/recruit.html"><span>채용</span></a></li>
									<li><a href="../customer/contact.html"><span>Contact</span></a></li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
			<button class="nav-open-btn" title="Menu Open">
				<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span>
			</button>
			<div class="gnb-overlay-bg-m"></div>
			<nav id="gnbM" class="gnb-style-basic">
				<h2 class="blind">Menu</h2>
				<div class="gnb-navigation-wrapper">
					<div class="gnb-navigation-inner">
						<ul id="navigation" data-menu-clone="true"></ul><!-- PC메뉴 같을때 true / 같지않으면 false 후 메뉴삽입 -->
					</div>
				</div>
			</nav>
		</header> <!-- //header -->
		<!-- container -->
		<div id="container">
			<article id="contentTopCon">
				<!-- ****************** 상단정보 ********************** -->
				<aside id="contentInfoCon" class="clearfix area-box" data-scroll="fade-up">
					<div class="location">
						<ul>
							<li class="home"><a href="../index.html" title="HOME"><i class="xi-home-o"></i></a></li>
							<li>CHAEVI</li>
							<li>채비 요금제</li>
						</ul>
					</div>
					<h3 class="content-tit">채비 요금제</h3>
				</aside>
				<!-- ****************** 서브메뉴 ********************** -->
				<!--  모든 서브메뉴 : fixed될때 fixed-sub-menu, top-fixed-object 클래스 추가  -->
				<!-- 서브메뉴1 -->
				<aside id="topMenuCon">
					<div class="side-menu-inner">
						<div class="area-box" data-scroll="fade-up">
							<ul class="snb sub-menu-company clearfix">
								<li><a href="brand_story.html"><span>채비 브랜드 소개</span></a></li>
								<li><a href="price.html"><span>채비 요금제</span></a></li>
								<li><a href="app.html"><span>채비 APP</span></a></li>
								<li><a href="zone.html"><span>채비스테이</span></a></li>
								<li><a href="station.html"><span>메가스테이션</span></a></li>
							</ul>
						</div>
					</div>
				</aside>
				<!-- // -->
				<!-- 모바일 서브메뉴 1 -->
				<aside id="topMenuM01" class="cm-top-menu clearfix" data-scroll="fade-up">
					<div class="side-menu-inner clearfix">
						<!-- 1차메뉴 -->
						<div class="menu-location location1 cm-drop-menu-box-JS" data-drop-event="click">
							<button class="cur-location cm-drop-open-btn-JS">
								<span>채비 요금제</span>
								<i class="xi-angle-down-min arrow"></i>
							</button>
							<ul class="location-menu-con cm-drop-list-JS">
								<li><a href="brand_story.html"><span>채비 브랜드 소개</span></a></li>
								<li><a href="price.html"><span>채비 요금제</span></a></li>
								<li><a href="app.html"><span>채비 APP</span></a></li>
								<li><a href="zone.html"><span>채비스테이</span></a></li>
								<li><a href="station.html"><span>메가스테이션</span></a></li>
							</ul>
						</div>
					</div>
				</aside>
				<!-- // -->

				<aside id="rightSidebar">
					<div class="nav-open-btn-box">
						<button class="sitemap-line-btn cm-sitemap-open-btn" title="Open the sitemap">
							<span class="line line1"></span><span class="line line2"></span><span
								class="line line3"></span>
						</button>
					</div>
					<div class="scroll-icon">
						<div class="mouse-icon"></div>
						<span class="txt">
							<em>S</em>
							<em>C</em>
							<em>R</em>
							<em>O</em>
							<em>L</em>
							<em>L</em>
							<em>&nbsp;</em>
							<em>D</em>
							<em>O</em>
							<em>W</em>
							<em>N</em>
						</span>
					</div>
				</aside>
			</article>
			<!-- content -->
			<section id="content" class="wide content-no-padding">
				<section id="brandConWrap">
					<article id="brandPriceContent">
						<div class="price-banner-wrap">
							<div class="area" data-scroll="fade-up">
								<strong class="price-sub-tit">채비 요금제</strong>
								<h3 class="cm-content-tit">국내 최저가 충전 요금으로 채비하세요.</h3>
								<p class="price-txt">합리적인 비용 부담없는 선택</p>
							</div>
						</div>

						<div class="area-1340">
							<div class="price-list-wrap">
								<div class="price-list-item item-01" data-scroll="fade-up">
									<h4 class="tit"><b>100kW급</b> 이상 급속</h4>
									<div class="inner-price">
										<dl class="chaevi-price">
											<dt>채비회원</dt>
											<dd><b>265</b><span>원</span></dd>
										</dl>
										<dl class="other-price">
											<dt>환경부</dt>
											<dd><b>347.2</b><span>원</span></dd>
										</dl>
										<dl class="other-price">
											<dt>한전</dt>
											<dd><b>320</b><span>원</span></dd>
										</dl>
										<dl class="other-price">
											<dt>비회원</dt>
											<dd><b>430</b><span>원</span></dd>
										</dl>
									</div>
									<div class="bottom-price">
										<h5 class="bottom-tit">로밍요금</h5>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>A</b>사 요금</strong>
											<p class="txt">360원</p>
										</div>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>B</b>사 요금</strong>
											<p class="txt">380원</p>
										</div>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>C</b>사 요금</strong>
											<p class="txt">400원</p>
										</div>
									</div>
								</div>

								<div class="price-list-item item-02" data-scroll="fade-up" data-scroll-delay="200">
									<h4 class="tit"><b>50kW급</b> 이상 급속</h4>
									<div class="inner-price">
										<dl class="chaevi-price">
											<dt>채비회원</dt>
											<dd><b>250</b><span>원</span></dd>
										</dl>
										<dl class="other-price">
											<dt>환경부</dt>
											<dd><b>324.4</b><span>원</span></dd>
										</dl>
										<dl class="other-price">
											<dt>한전</dt>
											<dd><b>320</b><span>원</span></dd>
										</dl>
										<dl class="other-price">
											<dt>비회원</dt>
											<dd><b>430</b><span>원</span></dd>
										</dl>
									</div>
									<div class="bottom-price">
										<h5 class="bottom-tit">로밍요금</h5>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>A</b>사 요금</strong>
											<p class="txt">360원</p>
										</div>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>B</b>사 요금</strong>
											<p class="txt">380원</p>
										</div>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>C</b>사 요금</strong>
											<p class="txt">400원</p>
										</div>
									</div>
								</div>

								<div class="price-list-item item-03" data-scroll="fade-up" data-scroll-delay="400">
									<h4 class="tit"><b>완속</b>충전기</h4>
									<div class="inner-price">
										<dl class="chaevi-price">
											<dt>채비회원</dt>
											<dd><b>200</b><span>원</span></dd>
										</dl>
										<dl class="other-price">
											<dt>한전</dt>
											<dd><b>320</b><span>원</span></dd>
										</dl>
										<dl class="other-price">
										</dl>
										<dl class="other-price">
											<dt>비회원</dt>
											<dd><b>430</b><span>원</span></dd>
										</dl>
									</div>
									<div class="bottom-price">
										<h5 class="bottom-tit">로밍요금</h5>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>A</b>사 요금</strong>
											<p class="txt">360원</p>
										</div>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>B</b>사 요금</strong>
											<p class="txt">380원</p>
										</div>
										<div class="bottom-price-item">
											<strong class="sub-tit"><i class="xi-check"></i><b>C</b>사 요금</strong>
											<p class="txt">400원</p>
										</div>
									</div>
								</div>
							</div>

							<div class="price-plus-txt-box" data-scroll="fade-up">
								<div class="txt-box">
									<p class="tit">A사 </p>
									<p>: 한국전기차충전서비스, 차지비, 에스트랙픽, 매니지온, 삼성이브이씨, 스타코프, 씨어스, 엘지헬로비전, 차지인, 클린일렉스, 타다테크놀로지,
										한국전기차인프라기술, 휴맥스이브이</p>
								</div>
								<div class="txt-box">
									<p class="tit">B사 </p>
									<p>: 에버온, 지커넥트, 파워큐브코리아</p>
								</div>
								<div class="txt-box">
									<p class="tit">C사 </p>
									<p>: 제주전기자동차서비스</p>
								</div>
							</div>

							<div class="price-caution-box" data-scroll="fade-up">
								<h4 class="caution-tit"><i class="xi-error-o"></i> <span>유의사항</span></h4>
								<div class="caution-list">
									<dl>
										<dt>01</dt>
										<dd>대영채비가 위탁운영 중인 충전기는 별도 요금이 적용됩니다.</dd>
									</dl>
									<dl>
										<dt>02</dt>
										<dd>타사 충전기 이용에 따른 로밍 요금은 협의에 따라 변경될 수 있습니다.</dd>
									</dl>
									<dl>
										<dt>03</dt>
										<dd>이용 전 각 사이트별로 충전요금에 대해 확인 후 이용바랍니다.</dd>
									</dl>
									<dl>
										<dt>04</dt>
										<dd>위탁운영 충전기는 별도 요금이 적용될수 있습니다.</dd>
									</dl>
								</div>
							</div>
						</div>
					</article>
				</section>
			</section>
			<!-- //content -->
		</div>
		<!-- //container -->
		<?php include '../_inc/footer.php';?>