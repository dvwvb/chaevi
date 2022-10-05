<?php include '_inc/config.php'; ?>

<!-- code -->
<div id="wrap" class="index-wrapper">

    <aside id="rightSidebar" class="white-ver">
        <div class="nav-open-btn-box">
            <button class="sitemap-line-btn cm-sitemap-open-btn" title="Open the sitemap">
                <span class="line line1"></span><span class="line line2"></span><span class="line line3"></span>
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
    </aside> <!-- container -->
    <div id="fullpage">
        <!-- ****************** 메인비주얼 ********************** -->
        <section id="mainVisual" class="section white-ver">
            <?php include '_inc/header.php'; ?>
            <div class="video-wrapper">
                <video muted loop autoplay playsinline id="visualVideo" data-keepplaying>
                    <source src="https://chaevi.com/video/CHAVI_FULL_KOR_NOTEXT_1_60s.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div class="main-visual-txt-con">
                <div class="main-visual-txt-box area-wrap-box">
                    <aside class="visual-controls">
                        <div class="visual-line-box">
                            <span class="line" id="lineBar"></span>
                        </div>
                        <button class="play-controls-btn" id="playControlsButton">
                            <i class="xi-play-circle-o play-btn"></i>
                            <i class="xi-pause-circle-o pause-btn"></i>
                        </button>
                    </aside>
                    <div class="main-visual-txt-inner">
                        <p class="main-visual-txt hidden-box">
                            <strong class="hidden-item"><img src="../images/main/main_visual_tit.png" alt=""></strong>
                        </p>
                        <!-- <p class="main-visual-txt hidden-box">
							<strong class="hidden-item">beyond products</strong>
						</p> -->
                    </div>
                </div>
            </div>
            <div class="scroll-icon main-scroll-icon">
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
            <div class="main-cover"></div>
        </section>
        <!-- ****************** 메인 APP ********************** -->
        <section id="mainAppCon" class="section">
            <div class="main-app-bg"></div>
            <div class="area-box">
                <article class="main-app-container">
                    <div class="main-tit-box scroll-object" data-scroll="fade-up">
                        <span class="main-section-cate">CHAEVI APP</span>
                        <h3 class="main-sm-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0">충전은 채비 앱으로!</h3>
                        <p class="main-sub-txt">간편한 사용 조작으로 보다 편리하게 <br>주위 충전기를 찾아 충전하세요</p>
                        <a href="company/app.html" class="main-detail-btn">
                            <em class="txt">CHAEVI APP MORE</em>
                            <i class="icon"></i>
                        </a>
                    </div>
                    <article class="main-app-rolling-con">
                        <div class="swiper main-app-rolling-swiper" dir="rtl" data-scroll="fade-up">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide app-slide">
                                    <div class="app-item-thumb"><img src="../images/content/app_capture_01f490.jpg?ver=220718" alt="app capture image 1" /></div>
                                </div>
                                <div class="swiper-slide app-slide">
                                    <div class="app-item-thumb"><img src="../images/content/app_capture_02f490.jpg?ver=220718" alt="app capture image 2" /></div>
                                </div>
                                <div class="swiper-slide app-slide">
                                    <div class="app-item-thumb"><img src="../images/content/app_capture_03f490.jpg?ver=220718" alt="app capture image 3" /></div>
                                </div>
                                <div class="swiper-slide app-slide">
                                    <div class="app-item-thumb"><img src="../images/content/app_capture_04f490.jpg?ver=220718" alt="app capture image 4" /></div>
                                </div>
                                <div class="swiper-slide app-slide">
                                    <div class="app-item-thumb"><img src="../images/content/app_capture_05f490.jpg?ver=220718" alt="app capture image 5" /></div>
                                </div>
                                <div class="swiper-slide app-slide">
                                    <div class="app-item-thumb"><img src="../images/content/app_capture_06f490.jpg?ver=220718" alt="app capture image 6" /></div>
                                </div>
                                <!-- <div class="swiper-slide app-slide"><div class="app-item-thumb"><img src="https://chaevi.com/images/content/app_capture_07.jpg?ver=220718" alt="app capture image 7" /></div></div> -->
                                <div class="swiper-slide app-slide">
                                    <div class="app-item-thumb"><img src="../images/content/app_capture_08f490.jpg?ver=220718" alt="app capture image 8" /></div>
                                </div>
                                <div class="swiper-slide app-slide">
                                    <div class="app-item-thumb"><img src="../images/content/app_capture_09f490.jpg?ver=220718" alt="app capture image 9" /></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </article>
            </div>
        </section>
        <!-- ****************** 메인 요금  ********************** -->
        <section id="mainChargeCon" class="section">
            <div class="main-charge-bg"></div>
            <div class="area-box">
                <div class="main-charge-container">
                    <div class="main-tit-box scroll-object" data-scroll="fade-up">
                        <span class="main-section-cate">CHAEVI 충전요금</span>
                        <h3 class="main-sm-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0">국내 최저가 충전 <br class="m-br">요금으로 <br class="pc-br">채비하세요.</h3>
                        <p class="main-sub-txt">합리적인 비용 부담없는 선택</p>
                        <a href="company/price.html" class="main-detail-btn">
                            <em class="txt">CHARGING FEE MORE</em>
                            <i class="icon"></i>
                        </a>
                    </div>
                    <article class="charge-compare-con" data-scroll>
                        <div class="charge-compre-item cheavi-member-con">
                            <h4 class="charege-compare-tit"><em>CHAEVI MEMBER</em><b>채비 회원</b></h4>
                            <div class="charge-compare-detail">
                                <dl>
                                    <dt>100kW급 이상 초급속</dt>
                                    <dd><b>265</b>원</dd>
                                </dl>
                                <dl>
                                    <dt>50kW급 급속</dt>
                                    <dd><b>250</b>원</dd>
                                </dl>
                                <dl>
                                    <dt>완속 충전기</dt>
                                    <dd><b>200</b>원</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="charge-compre-item third-party-member-con">
                            <h4 class="charege-compare-tit"><em>THIRD-PARTY MEMBER</em><b>타사 회원</b></h4>
                            <div class="charge-compare-detail">
                                <dl>
                                    <dt>100kW급 이상 급속</dt>
                                    <dd><b>400</b>원</dd>
                                </dl>
                                <dl>
                                    <dt>50kW급 급속</dt>
                                    <dd><b>400</b>원</dd>
                                </dl>
                                <dl>
                                    <dt>완속 충전기</dt>
                                    <dd><b>400</b>원</dd>
                                </dl>
                            </div>
                        </div>
                        <p class="main-charge-plus-txt">* 위탁운영 충전기는 별도 요금이 적용될수 있습니다.</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- ****************** 메인 채비존  ********************** -->
        <section id="mainChaevizoneCon" class="section">
            <div class="cm-section-bg" data-scroll>
                <div class="cm-section-bg-inner"></div>
            </div>
            <div class="area-box main-chaevizone-container">
                <div class="main-tit-box white-ver" data-scroll="fade-up">
                    <h3 class="main-tit"><img src="../images/main/main_chaevizone_titfbf2.png?ver='555'" alt="CHAEVI zone" /></h3>
                    <p class="main-sub-txt2">채비스테이는 기존 충전을 위한 공간에서 다양한 <br class="m-br">서비스를 제공하며,<br class="pc-br">입지와 상권에 맞춘 다양한 <br class="m-br">복합문화 공간을 제공합니다.</p>
                    <a href="company/zone.html" class="main-detail-btn">
                        <em class="txt">CHAEVI STAY MORE</em>
                        <i class="icon"></i>
                    </a>
                </div>
                <div class="chaevizone-m-img-con">
                    <img src="../images/main/main_chaevizone_bg_m.jpg" alt="" />
                </div>
                <div class="chaevizone-spec-list-con">
                    <ul>
                        <li class="chaevizon-spec-item first-item active" data-scroll="fade-down">
                            <div class="chaevizone-spec-item-inner">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.92 48.63">
                                        <defs>
                                            <style></style>
                                        </defs>
                                        <path class="maas-icon-1" d="M23.52,41.29l-.06-.09-.06.09-.82-1.17c-.39-.56-9.53-13.7-11.29-16.51a15.38,15.38,0,0,1-2.62-8.86,14.79,14.79,0,0,1,29.58,0,15.53,15.53,0,0,1-2.62,8.86c-1.76,2.81-10.9,16-11.29,16.51ZM23.48,2A12.8,12.8,0,0,0,10.67,14.75,13.47,13.47,0,0,0,13,22.55c1.43,2.29,8.08,11.88,10.41,15.25l.06-.08.06.07c2.34-3.37,9-12.95,10.41-15.24a13.47,13.47,0,0,0,2.32-7.8A12.79,12.79,0,0,0,23.48,2Z" />
                                        <path class="maas-icon-1" d="M34.47,29.84l-1.11,1.81c6.92,1.4,11.56,4.21,11.56,7,0,3.83-8.63,7.94-21.46,8S2,42.49,2,38.66c0-2.8,4.63-5.6,11.53-7l-1.1-1.81C4.63,31.56,0,34.82,0,38.66c0,5.56,10.3,9.94,23.46,10s23.46-4.41,23.46-10C46.92,34.82,42.28,31.56,34.47,29.84Z" />
                                        <polygon class="maas-icon-2" points="25.79 16.03 26.79 6.03 16.79 19.03 21.79 19.03 20.79 29.03 30.79 16.03 25.79 16.03" />
                                    </svg>
                                </span>
                                <strong class="chaevizone-tit">MaaS</strong>
                            </div>
                        </li>
                        <li class="chaevizon-spec-item" data-scroll="fade-down" data-scroll-delay="200">
                            <div class="chaevizone-spec-item-inner">
                                <span class="num">01</span>
                                <strong class="chaevizone-tit">EV CHARGING</strong>
                            </div>
                        </li>
                        <li class="chaevizon-spec-item" data-scroll="fade-down" data-scroll-delay="300">
                            <div class="chaevizone-spec-item-inner">
                                <span class="num">02</span>
                                <strong class="chaevizone-tit">CAR CARING</strong>
                            </div>
                        </li>
                        <li class="chaevizon-spec-item" data-scroll="fade-down" data-scroll-delay="400">
                            <div class="chaevizone-spec-item-inner">
                                <span class="num">03</span>
                                <strong class="chaevizone-tit">LAST MOBILITY</strong>
                            </div>
                        </li>
                        <li class="chaevizon-spec-item" data-scroll="fade-down" data-scroll-delay="500">
                            <div class="chaevizone-spec-item-inner">
                                <span class="num">04</span>
                                <strong class="chaevizone-tit">MAINTENANCE</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- ****************** 메인 메가스테이션 ********************** -->
        <section id="mainMegaStationCon" class="section">
            <div class="cm-section-bg" data-scroll>
                <div class="cm-section-bg-inner"></div>
            </div>
            <div class="area-box">
                <div class="main-mega-container">
                    <div class="main-tit-box white-ver" data-scroll="fade-up">
                        <h3 class="main-big-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0"><b class="en">Mega Station</b></h3>
                        <p class="main-sub-txt2">고객과의 관계 지속형 Localization을 통하여 <br class="m-br">머무르는 공간으로 지속적 고객과
                            <br class="pc-br">Contact를 <br class="m-br">통한 사업의 연속성을 제공합니다.
                        </p>
                        <a href="company/station.html" class="main-detail-btn">
                            <em class="txt">MEGA STATION MORE</em>
                            <i class="icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****************** 메인 구독서비스 ********************** -->
        <!--<section id="mainSubscribeCon" class="section">
			<div class="cm-section-bg" data-scroll>
                <div class="cm-section-bg-inner"></div>
            </div>
			<div class="area-box">
				<div class="main-subscribe-container">
					<div class="main-tit-box white-ver" data-scroll="fade-up">
						<h3 class="main-big-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0">채비 패스 <br class="m-br">사전체험단 모집 종료</h3>
						<p class="main-sub-txt2">
						구독 서비스를 통해 채비의 서비스를 더쉽고 빠르게 합리적으로 이용 할 수있습니다.<Br><Br>
						9월 중 정식 서비스로 돌아오겠습니다.<Br>
						<!-- 체험기간 : 8월 1일 ~ 8월 31일
						</p>
						<a href="https://chaevi.com/kr/service/subscribe.php" class="main-detail-btn">
							<em class="txt">SUBSCRIBE MORE</em>
							<i class="icon"></i>
						</a>
					</div>
				</div>
			</div>
		</section>-->
        <!-- ****************** 메인 뉴스 ********************** -->
        <section id="mainNewsCon" class="section">
            <div class="area-box">
                <div class="main-news-container">
                    <div class="main-tit-box white-ver" data-scroll="fade-up">
                        <h3 class="main-big-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0"><b class="en">News</b></h3>
                        <a href="customer/news.html" class="main-detail-btn">
                            <em class="txt">NEWS MORE</em>
                            <i class="icon"></i>
                        </a>
                    </div>
                    <article class="main-news-list-container" data-scroll="fade-up">
                        <ul class="news-list-con clearfix">
                            <li class="news-item">
                                <a href="customer/news0dc9.html?bgu=view&amp;idx=52" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16641667559.jpg" alt="한국타이어, 전기차 전용 '아이온' 론칭 기념 프로모션" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">한국타이어, 전기차 전용 '아이온' 론칭 기념 프로모션</span>
                                    </h3>
                                    <span class="news-date">2022.09.26</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/newse7e9.html?bgu=view&amp;idx=50" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16635720719.jpg" alt="폭스바겐코리아 첫 전기차 ID.4 ‘완판’" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">폭스바겐코리아 첫 전기차 ID.4 ‘완판’</span>
                                    </h3>
                                    <span class="news-date">2022.09.15</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/newsf422.html?bgu=view&amp;idx=49" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16632264949.jpg" alt="전기차 충전 브랜드 ‘채비’, 홍보관 열고 청년들과 열린 소통 나선다" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">전기차 충전 브랜드 ‘채비’, 홍보관 열고 청년들과 열린 소통 나선다</span>
                                    </h3>
                                    <span class="news-date">2022.09.15</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/newseaf9.html?bgu=view&amp;idx=48" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16625102649.jpg" alt="채비, 추석 연휴 기간 ‘한가위에도 타임 투 채비’ 고객 감사 이벤트 진행" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">채비, 추석 연휴 기간 ‘한가위에도 타임 투 채비’ 고객 감사 이벤트
                                            진행</span>
                                    </h3>
                                    <span class="news-date">2022.09.06</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/news59d2.html?bgu=view&amp;idx=43" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16613947319.jpg" alt="올해 울산 학교 107곳에 전기차 완속충전시설 143기 구축한다" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">올해 울산 학교 107곳에 전기차 완속충전시설 143기 구축한다</span>
                                    </h3>
                                    <span class="news-date">2022.08.24</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/newsa703.html?bgu=view&amp;idx=42" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16613946519.jpg" alt="청년과미래, '새로운 미래' 위한 2022 대한민국 청년의 날 축제 개최" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">청년과미래, '새로운 미래' 위한 2022 대한민국 청년의 날 축제 개최</span>
                                    </h3>
                                    <span class="news-date">2022.08.18</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/news33e1.html?bgu=view&amp;idx=40" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16600203409.jpg" alt="진천군·대영채비(주), 전기차 충전인프라 투자 양해각서 체결" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">진천군·대영채비(주), 전기차 충전인프라 투자 양해각서 체결</span>
                                    </h3>
                                    <span class="news-date">2022.08.09</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/news83e5.html?bgu=view&amp;idx=36" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16589027339.jpg" alt="채비, ‘전기차 충전인프라 산업전’ 참가…초고속 충전기 등 소개" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">채비, ‘전기차 충전인프라 산업전’ 참가…초고속 충전기 등 소개</span>
                                    </h3>
                                    <span class="news-date">2022.07.27</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/newsdfcf.html?bgu=view&amp;idx=24" class="news-item-inner">
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">경주시-채비, 전기차 충전시설 보급 투자협약 체결</span>
                                    </h3>
                                    <p class="news-sub-txt line-clamp3">[헤럴드경제(경주)=김병진 기자]경북 경주시는 4일 시청에서 전기차 충전기
                                        보급관리업체인 채비와 전기차 충전 인프라 구축 민간투자사업 업무협약을 체결했다.이번 협약에 따라
                                        채비는&nbsp;2024년&nbsp;12월까지&nbsp;150억원을 들여 공영주차장 등에 전기차 급속 충전시설&nbsp;200기 이상을
                                        보급한다.이 회사는 충전요금 가운데 일부를 한국전력에 납부하고 나머지를 수익금으로 가져간다.시는 법령 허용 범위에서 행정 사항을 적극
                                        지원하며 양 기관은 충전료를&nbsp;2030년까지 환경부 고시 금액보다&nbsp;10% 이상 할인한 금액을 적용하기로 약정했다.이에
                                        따라 현재&nbsp;85개소&nbsp;139기에 머무는 경주지역 전기차 급속 충전시설이 개선될 전망이다.경주시는 정부의
                                        탄소중립&nbsp;2050프로젝트를 선도적으로 이행하기 위해 기초자치단체 최초로 민간투자사업을 추진하기로 했다.정민교 채비 대표는
                                        “경주시와의 파트너쉽을 확장해 나가겠다"며 "전기차를 기반으로 한 미래형자동차 선도도시 구축을 위해 대영채비는 신기술 개발에 더욱더
                                        박차를 가할 것”이라고 밝혔다.주낙영 경주시장은 “전기차 충전사업이 본격적인 민간 주도 사업으로 전환하는 계기를 마련하는 이번 협약으로
                                        경주를 중심으로 친환경차 관련 산업 생태계가 조성돼 지역 경제 활성화에 기여할 수 있을 것으로 기대한다”고 말했다.* 기사
                                        원본&nbsp;https://n.news.naver.com/mnews/article/016/0002011362?sid=102</p>
                                    <span class="news-date">2022.07.05</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/newsd21a.html?bgu=view&amp;idx=23" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16584535569.jpg" alt="국내 넘어 전세계 전기차 충전기 시장 제패 꿈꾼다… 채비" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">국내 넘어 전세계 전기차 충전기 시장 제패 꿈꾼다… 채비</span>
                                    </h3>
                                    <span class="news-date">2022.06.22</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/news9042.html?bgu=view&amp;idx=22" class="news-item-inner">
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">도로교통공단, 채비 손잡고 '전기차 충전기' 241대 구축</span>
                                    </h3>
                                    <p class="news-sub-txt line-clamp3">[미디어펜=김상준 기자]도로교통공단과 전기차 충전기 보급관리 업체
                                        대영채비(주)가 업무협약을 맺고 전기차 충전 인프라를 확대한다.&nbsp;17일 도로교통공단은 채비와 ‘전기차 충전 인프라 구축
                                        민간투자사업 업무협약’을 체결했다고 밝혔다.이번 협약은 정부의 탄소중립 2050프로젝트를 선도적으로 이행하기 위한 것으로, 공공기관
                                        최초로 민간투자사업을 추진하여 대규모(241대) 전기차 충전 인프라를 구축하는 내용을 담고 있다.협약에 따라 양 기관은 올해 하반기 내에
                                        도로교통공단 52개 조직에 전기차 충전소를 설치할 예정이다.공단은 이를 통해 전기차를 이용하는 공단 방문객 및 인근 지역주민의 전기차
                                        충전에 대한 불편 해소에 도움이 될 것으로 보고 있다.채비는 연간 1만 대 이상의 전기차 충전기를 보급하고 관리·운영하는 민간 충전솔루션
                                        업체로 이번 도로교통공단 사업을 시작으로 공공기관에 전기차 충전기를 선도적으로 보급할 계획을 갖고있다.도로교통공단 관계자는 “전기차 충전
                                        인프라 구축으로 친환경차 보급 확산의 기반을 조성하고 저탄소 녹색성장의 기반을 마련할 수 있을 것으로 기대한다”며 “공단은 다양한 ESG
                                        경영 활동으로 공공기관으로서 사회적 책무를 완수하는 데 최선을 다하겠다”라고 말했다.* 기사
                                        원본&nbsp;http://www.mediapen.com/news/view/731751</p>
                                    <span class="news-date">2022.06.17</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/news1729.html?bgu=view&amp;idx=8" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16584533939.jpg" alt="대구시-채비, 민간 주도 전기차 충전사업 맞손" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">대구시-채비, 민간 주도 전기차 충전사업 맞손</span>
                                    </h3>
                                    <span class="news-date">2022.05.15</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/news9f0a.html?bgu=view&amp;idx=7" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16584535149.jpg" alt="채비, 미쓰이 그룹과 일본시장 진출 위한 업무협약 맺어" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">채비, 미쓰이 그룹과 일본시장 진출 위한 업무협약 맺어</span>
                                    </h3>
                                    <span class="news-date">2022.05.02</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/newsf27b.html?bgu=view&amp;idx=6" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16584533739.jpg" alt="대구시, 채비‧E3모밀리티… 무공해차 전환 브랜드사업 선정" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">대구시, 채비‧E3모밀리티… 무공해차 전환 브랜드사업 선정</span>
                                    </h3>
                                    <span class="news-date">2022.04.24</span>
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="customer/newsf470.html?bgu=view&amp;idx=5" class="news-item-inner">
                                    <div class="news-thumb over-img">
                                        <span><img src="../data/bbsData/16584532499.jpg" alt="채비, 비마이카와 '친환경 e모빌리티 서비스 활성화' 업무협약" class="img-cover"></span>
                                    </div>
                                    <h3 class="news-tit line-clamp2">
                                        <span class="news-tit-inner">채비, 비마이카와 '친환경 e모빌리티 서비스 활성화' 업무협약</span>
                                    </h3>
                                    <span class="news-date">2022.04.13</span>
                                </a>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>
        <section id="mainFooter" class="section fp-auto-height">
            <!-- footer -->

            <footer id="footer">
                <div id="footerInner" class="area-box">
                    <!-- 푸터 상단 -->
                    <article id="footerTop">
                        <div class="clearfix">
                            <!-- 푸터상단 왼쪽 -->
                            <div class="footer-left-con">
                                <p class="footer-slogan-txt">Let's start the <br class="m-br">future <br class="pc-br">of mobility <br class="m-br">together</p>
                                <div class="footer-address">
                                    <div class="footer-address-txt">
                                        <p>대구광역시 달성군 유가면 테크노순환로 7길 25</p>
                                        <p>대표 : 정민교</p>
                                        <p>사업자등록번호 : 670-88-00336</p>
                                    </div>
                                    <div class="footer-address-txt">
                                        <p>대표전화 : 1522-2573</p>
                                        <p>팩스 : 053-584-1512</p>
                                        <p><a href="mailto:dy@chaevi.co.kr">이메일 : dy@chaevi.co.kr</a></p>
                                    </div>
                                </div>
                                <dl class="footer-cs-con">
                                    <dt>고객센터</dt>
                                    <dd>1522-2573 / 24시간(연중무휴)</dd>
                                </dl>
                                <div class="footer-menu-sns-con">
                                    <ul class="foot-menu clearfix">
                                        <li><a href="etc/privacy.html" class="cm-modal-open-btn">개인정보처리방침</a></li>
                                    </ul>
                                    <div class="foot-sns-menu">
                                        <ul class="clearfix">
                                            <li><a href="https://www.instagram.com/chaevi_official" target="_blank" title="새창으로열기"><i class="xi-instagram"></i></a></li>
                                            <li><a href="https://blog.naver.com/chaevibrand" target="_blank" title="새창으로열기"><i class="xi-naver"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCF6cyJkPc2FykdqYNQDEr1A/featured" target="_blank" title="새창으로열기"><i class="xi-youtube-play"></i></a></li>
                                            <!-- <li><a href="" target="_blank" title="새창으로열기"><i class="xi-blogger"></i></a></li>
									<li><a href="" target="_blank" title="새창으로열기"><i class="xi-twitter"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- 푸터상단 오른쪽 -->
                            <div class="footer-right-con">
                                <div class="footer-contact-con">
                                    <h3 class="footer-contact-tit">Contact us</h3>
                                    <ul class="footer-contact-list">
                                        <li>
                                            <dl>
                                                <dt>강남 서초 센터</dt>
                                                <dd>서울시 서초구 남부순환로 2463</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>판교 SW 센터</dt>
                                                <dd>경기도 성남시 분당구 대왕판교로 256</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>대구 HW 센터</dt>
                                                <dd>대구시 달성군 유가읍 테크노 순환로 7길 25</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>수성 R&D 센터</dt>
                                                <dd>대구시 수성구 시지동</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>미국 법인</dt>
                                                <dd>3003 North First Street #233, San Jose, California 95134</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>지사</dt>
                                                <dd>제주, 광주, 경기서부, 경기동부, 대전, 경남, 강원, 천안</dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- 푸터 하단 -->
                    <article id="footerBottom">
                        <span class="foot-logo"><img src="https://chaevi.com/images/common/logo.svg" alt="채비 l 전기차 충전 원스탑 솔루션" /></span>
                        <div class="footer-copyright">Copyright &copy; 2022 All rights reserved | Daeyoung Chaevi
                        </div>
                    </article>
                </div>
            </footer> <!-- //footer -->
        </section>
    </div>
    <!-- //container -->
    <section id="siteMapCon03" class="cm-sitemap-wrapper">
        <div class="cm-sitemap-container cm-sitemap-container-03">
            <div class="sitemap-bg cm-sitemap-bg">
                <!-- logo 배경 있을경우 -->
                <!-- <div class="logo-bg"><span>LOGO</span></div> -->
            </div>
            <div class="cm-sitemap-inner-con">
                <section class="cm-sitemap-area-con area">
                    <div class="sitemap-modal-tit-con-03 cm-modal-tit-con">
                        <h1 class="cm-modal-tit" data-splitting>SITEMAP</h1>
                        <button title="Close Sitemap" class="sitemap-close-btn cm-sitemap-close-btn"><i class="xi-close-thin"></i></button>
                    </div>
                    <article class="sitemap-wrapper-style sitemap-wrapper-style03"></article>
                </section>
            </div>
        </div>
    </section> <button class="to-top-btn"><em class="blind">TOP</em><i class="xi-arrow-up"></i></button>
</div>
<!-- //wrap -->
<script>
    dep1 = 0,
        dep2 = 0;
    dep3 = 0;
</script>
<script type="text/javascript" src="../js/vendor/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/plugin/slick.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="../js/plugin/gsap.min.js"></script>
<script type="text/javascript" src="../js/plugin/ScrollToPlugin.min.js"></script>
<script type="text/javascript" src="../js/plugin/splitting.min.js"></script>
<script type="text/javascript" src="../js/plugin/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../js/plugin/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="../js/plugin/spotlight.min.js"></script>
<script type="text/javascript" src="../js/functions6c06.js?ver=220627"></script>
<script type="text/javascript" src="../js/nav2b23.js?ver=220628_2"></script>
<script type="text/javascript" src="../js/layer_popup97d2.js?ver=220624"></script>
<script type="text/javascript" src="../js/commonaac7.js?ver=220707"></script><!-- Fullpage JS  -->
<script type="text/javascript" src="../js/plugin/jquery.fullPage.js"></script>
<!-- // -->
<script type="text/javascript" src="../js/main997f.js?ver=220628"></script>

<!-- 1. 메인 접속정보 소스 -->
<!-- 1. 메인 접속정보 소스 종료-->



<!-- 2. 윈도우팝업 설정 -->
<!-- 2. 윈도우팝업 설정 종료 -->



<!--3. 레이어팝업 설정 -->


<script language="JavaScript">
    function setcookie(name, value, expirehours) {
        var todayDate = new Date();
        todayDate.setHours(todayDate.getHours() + expirehours);
        document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
    }

    function closeWin() {
        if (document.notice_form.chkbox.checked) {
            setcookie("maindiv", "done", 24);
        }

        document.all['divpop'].style.display = "none";
        if ($(".fixed-popup-wrapper").length > 0) {
            $.fn.fullpage.setAllowScrolling(true);
            $.fn.fullpage.setKeyboardScrolling(true);
        }
    }
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $(".popup-rolling-con").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            dots: false,
            autoplay: true,
            speed: 500,
            infinite: true,
            adaptiveHeight: true,
            autoplaySpeed: 3000,
            pauseOnHover: true,
            touchMove: false,
            draggable: false,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left"></i></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right"></i></button>'
        });

        cookiedata = document.cookie;

        if (cookiedata.indexOf("maindiv=done") < 0) {
            document.all['divpop'].style.visibility = "visible";
            if ($(".fixed-popup-wrapper").length > 0) {
                $.fn.fullpage.setAllowScrolling(false);
                $.fn.fullpage.setKeyboardScrolling(false);
            }
        } else {
            document.all['divpop'].style.visibility = "hidden";

        }


    });
</script>

<article class="fixed-popup-wrapper" id="divpop">
    <div class="fixed-popup-container">
        <div class="fixed-popup-inner-container">
            <div class="fixed-popup-inner-box">
                <div class="fixed-popup-inner">
                    <div class="popup-rolling-con">

                        <div class="popup-rolling-item">
                            <a href="https://www.tstation.com/promotion/event/detail/00000000010268" target="_BLANK">
                                <img src="../data/designImages/POPUP_1664152121.jpg" alt="" />
                            </a>
                        </div>

                        <div class="popup-rolling-item">
                            <a href="customer/notice5024.html?bgu=view&amp;idx=44" target="_BLANK">
                                <img src="../data/designImages/POPUP_1663914453.jpg" alt="" />
                            </a>
                        </div>


                    </div>
                </div>
                <form name="notice_form">
                    <div class="layer-popup-bottom-con">
                        <p class="left-close-option-txt">
                            <input type=checkbox name="chkbox" id="popupCloseCheck" onclick="closeWin();"><label for="popupCloseCheck">오늘 하루 이창을 열지 않음</label>
                        </p>
                        <a href="javascript:closeWin();" title="Close" class="right-close-popup-btn"><i class="xi-close-min"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>


<!--3. 레이어팝업 설정 종료-->

<script>
    cookiedata = document.cookie;

    if (cookiedata.indexOf("maindiv=done") < 0) {
        document.all['divpop'].style.visibility = "visible";
        if ($(".fixed-popup-wrapper").length > 0) {
            $.fn.fullpage.setAllowScrolling(false);
            $.fn.fullpage.setKeyboardScrolling(false);
        }
    } else {
        document.all['divpop'].style.visibility = "hidden";

    }
</script>
</body>

</html>