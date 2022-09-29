<?php include '../_inc/header.php';?>

<!-- code -->
<div id="wrap">
    <!-- header -->

    <header id="header" class="top-fixed-object">
        <!-- .top-fixed가 붙는 object에 top-fixed-object 클래스 추가 -->
        <div class="gnb-overlay-bg"></div>
        <div id="headerInnerWrap">
            <!-- ****************** 헤더상단 ********************** -->
            <div id="headerInner" class="area-wrap-box">
                <h1 class="logo">
                    <a href="../index-2.html" title="to home">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 505.64 58.34">
                            <defs>
                                <style>
                                    .logo-1 {
                                        fill: #6cc4d5;
                                    }
                                </style>
                            </defs>
                            <polygon
                                class="logo-1"
                                points="481.74 0 464.44 0.05 444.9 24.81 452.15 24.81 437.33 42.53 413.87 0.06 397.56 0.06 430.14 58.03 430.32 58.34 441.08 58.34 441.59 58.34 442.38 58.34 471.97 22.27 464.82 22.27 481.74 0"/>
                            <polygon
                                class="logo-1"
                                points="179.8 22.68 118.02 22.68 121.18 0.52 106.88 0.52 98.29 58.01 112.55 58.01 116.09 34.92 178.11 34.92 174.56 58.01 189.02 58.01 197.7 0.52 183.19 0.52 179.8 22.68"/>
                            <path
                                class="logo-1"
                                d="M247.93.52,197.7,58h14.11l13-15h41.92l8.57,15h14L256.27.52Zm-13.26,30.7L250.26,13l10.18,18.19Z"/>
                            <polygon
                                class="logo-1"
                                points="489.95 0.52 481.56 58.01 497.78 58.01 505.64 0.52 489.95 0.52"/>
                            <path
                                class="logo-1"
                                d="M87,46.22H18.42S13.8,45,14.3,41.11s4-23.27,4-23.27c.65-3,4.42-5.67,8.68-5.67l65.11.06L93.84.47H27C14.9.47,5.08,7.72,4.21,16.84h0L.06,44.72s-.8,4.42,3.41,8.63A15.64,15.64,0,0,0,13.9,57.86l71.37,0Z"/>
                            <polygon
                                class="logo-1"
                                points="377.7 46.26 313.74 46.26 315.63 34.05 365.65 34.05 367.27 22.52 317.15 22.52 318.63 12.35 382.79 12.23 384.54 0.52 306.3 0.52 298 58.01 375.97 57.86 377.7 46.26"/>
                        </svg>
                    </a>
                </h1>
                <div class="header-util-box">
                    <div class="header-member-list cm-header-util-menu">
                        <a href="../member/login.html">로그인</a>
                        <a href="../member/join_select.html">
                            회원가입</a>
                    </div>
                    <!-- 외국어선택 -->
                    <div class="header-lang-list">
                        <ul class="clearfix cm-header-util-menu">
                            <li class="cur">
                                <a href="../index-2.html">KR</a>
                            </li>
                            <li>
                                <a href="https://chaevi.com/en/">EN</a>
                            </li>
                            <li>
                                <a href="javascript:;" onclick="alert('준비중입니다.')">JP</a>
                            </li>
                        </ul>
                    </div>
                    <!-- 외국어선택 M -->
                    <div class="header-lang cm-drop-menu-box-JS" data-drop-event="click">
                        <button class="lang-open-btn cm-drop-open-btn-JS">
                            <i class="xi-globus"></i>
                        </button>
                        <ul id="headerLangList" class="cm-drop-list-JS" style="display: none;">
                            <li>
                                <a href="../index-2.html">KR</a>
                            </li>
                            <li>
                                <a href="https://chaevi.com/en/">EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ****************** GNB ********************** -->
            <!-- GNB PC -->
            <nav id="gnb" class="total-menu">
                <h2 class="blind">Menu</h2>
                <div id="gnbBg"></div>
                <ul class="clearfix">
                    <li class="gnb1">
                        <a href="brand_story.html">
                            <em class="en">CHAEVI</em>
                        </a>
                        <div class="gnb-2dep">
                            <ul>
                                <li>
                                    <a href="brand_story.html">
                                        <span>채비 브랜드 소개</span></a>
                                </li>
                                <li>
                                    <a href="price.html">
                                        <span>채비 요금제</span></a>
                                </li>
                                <li>
                                    <a href="app.html">
                                        <span>채비 APP</span></a>
                                </li>
                                <li>
                                    <a href="zone.html">
                                        <span>채비스테이</span></a>
                                </li>
                                <li>
                                    <a href="station.html">
                                        <span>메가스테이션</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb2">
                        <a href="../infra/charging_station.html">채비 인프라</a>
                        <div class="gnb-2dep">
                            <ul>
                                <li>
                                    <a href="../infra/charging_station.html">
                                        <span>채비 충전소 찾기</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb3">
                        <a href="../service/charger_install_apply.html">채비 서비스</a>
                        <div class="gnb-2dep">
                            <ul>
                                <!--<li><a href="https://chaevi.com/kr/service/subscribe.php"><span>채비
                                패스</span></a></li>-->
                                <li>
                                    <a href="../service/charger_install_apply.html">
                                        <span>채비 홈충전기</span></a>
                                </li>
                                <li>
                                    <a href="../service/member_card_apply.html">
                                        <span>회원 카드 신청</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb4">
                        <a href="../partnership/charging_station_install.html">랜드오너 파트너쉽</a>
                        <div class="gnb-2dep">
                            <ul>
                                <li>
                                    <a href="../partnership/charging_station_install.html">
                                        <span>충전소 설치 신청</span></a>
                                </li>
                                <li>
                                    <a href="../partnership/charging_station_install_check.html">
                                        <span>충전소 설치 신청 확인</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb5">
                        <a href="../mypage/modify_check.html">고객지원</a>
                        <div class="gnb-2dep">
                            <ul>
                                <li>
                                    <a href="../mypage/modify_check.html">
                                        <span>마이페이지</span></a>
                                </li>
                                <li>
                                    <a href="../customer/notice.html">
                                        <span>공지사항</span></a>
                                </li>
                                <li>
                                    <a href="../customer/faq.html">
                                        <span>FAQ</span></a>
                                </li>
                                <li>
                                    <a href="../customer/news.html">
                                        <span>뉴스</span></a>
                                </li>
                                <li>
                                    <a href="../customer/recruit.html">
                                        <span>채용</span></a>
                                </li>
                                <li>
                                    <a href="../customer/contact.html">
                                        <span>Contact</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <button class="nav-open-btn" title="Menu Open">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </button>
        <div class="gnb-overlay-bg-m"></div>
        <nav id="gnbM" class="gnb-style-basic">
            <h2 class="blind">Menu</h2>
            <div class="gnb-navigation-wrapper">
                <div class="gnb-navigation-inner">
                    <ul id="navigation" data-menu-clone="true"></ul>
                    <!-- PC메뉴 같을때 true / 같지않으면 false 후 메뉴삽입 -->
                </div>
            </div>
        </nav>
    </header>
    <!-- //header -->
    <!-- container -->
    <div id="container">
        <article id="contentTopCon">
            <!-- ****************** 상단정보 ********************** -->
            <aside id="contentInfoCon" class="clearfix area-box" data-scroll="fade-up">
                <div class="location">
                    <ul>
                        <li class="home">
                            <a href="../index.html" title="HOME">
                                <i class="xi-home-o"></i>
                            </a>
                        </li>
                        <li>CHAEVI</li>
                        <li>채비 브랜드 소개</li>
                    </ul>
                </div>
                <h3 class="content-tit">채비 브랜드 소개</h3>
            </aside>
            <!-- ****************** 서브메뉴 ********************** -->
            <!-- 모든 서브메뉴 : fixed될때 fixed-sub-menu, top-fixed-object 클래스 추가 -->
            <!-- 서브메뉴1 -->
            <aside id="topMenuCon">
                <div class="side-menu-inner">
                    <div class="area-box" data-scroll="fade-up">
                        <ul class="snb sub-menu-company clearfix">
                            <li>
                                <a href="brand_story.html">
                                    <span>채비 브랜드 소개</span></a>
                            </li>
                            <li>
                                <a href="price.html">
                                    <span>채비 요금제</span></a>
                            </li>
                            <li>
                                <a href="app.html">
                                    <span>채비 APP</span></a>
                            </li>
                            <li>
                                <a href="zone.html">
                                    <span>채비스테이</span></a>
                            </li>
                            <li>
                                <a href="station.html">
                                    <span>메가스테이션</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <!-- // -->
            <aside id="topSubMenu">
                <div class="area-box" data-scroll="fade-up">
                    <ul>

                        <li>
                            <a href="brand_story.html">
                                <span>채비 스토리</span></a>
                        </li>
                        <li>
                            <a href="brand_ci.html">
                                <span>CI, BI</span></a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- 모바일 서브메뉴 1 -->
            <aside id="topMenuM01" class="cm-top-menu clearfix" data-scroll="fade-up">
                <div class="side-menu-inner clearfix side-menu-two">
                    <!-- 1차메뉴 -->
                    <div
                        class="menu-location location1 cm-drop-menu-box-JS"
                        data-drop-event="click">
                        <button class="cur-location cm-drop-open-btn-JS">
                            <span>채비 브랜드 소개</span>
                            <i class="xi-angle-down-min arrow"></i>
                        </button>
                        <ul class="location-menu-con cm-drop-list-JS">
                            <li>
                                <a href="brand_story.html">
                                    <span>채비 브랜드 소개</span></a>
                            </li>
                            <li>
                                <a href="price.html">
                                    <span>채비 요금제</span></a>
                            </li>
                            <li>
                                <a href="app.html">
                                    <span>채비 APP</span></a>
                            </li>
                            <li>
                                <a href="zone.html">
                                    <span>채비스테이</span></a>
                            </li>
                            <li>
                                <a href="station.html">
                                    <span>메가스테이션</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- 2차메뉴 -->
                    <div
                        class="menu-location  location2 cm-drop-menu-box-JS"
                        data-drop-event="click">
                        <button class="cur-location cm-drop-open-btn-JS">
                            <span>채비 스토리</span>
                            <i class="xi-angle-down-min arrow"></i>
                        </button>
                        <ul class="location-menu-con cm-drop-list-JS">

                            <li>
                                <a href="brand_story.html">
                                    <span>채비 스토리</span></a>
                            </li>
                            <li>
                                <a href="brand_ci.html">
                                    <span>CI, BI</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <!-- // -->

            <aside id="rightSidebar" class="is-3dep">
                <div class="nav-open-btn-box">
                    <button class="sitemap-line-btn cm-sitemap-open-btn" title="Open the sitemap">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
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
        <section id="content" class="wide">
            <section id="brandConWrap">
                <article class="brand-content con01" data-scroll="fade-up">
                    <div class="area-box">
                        <div class="cm-tit-box">
                            <h3 class="cm-content-tit">채비 원스탑 솔루션</h3>
                            <p class="cm-content-txt">채비는 고객을 생각하는 기업으로
                                <br class="m-br">One - Stop Solution 기반으로 미래산업을 선도하며
                                <br/>제조, 납품, 설치, 운영, 사후관리 등 모든 영역을
                                <br class="m-br">상호 연계하는 플랫폼 운영사 입니다.
                            </p>
                        </div>

                        <!-- 스크롤 영역 Start(이미지) -->
                        <div class="custom-scrollbar-wrapper">
                            <div class="cm-scroll-drag-guide">
                                <div class="cm-scroll-drag-inner">
                                    <span class="drag-tail">
                                        <em class="tail"></em>
                                        <i class="xi-touch hand-icon"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="scroll-object-box">
                                <img
                                    src="../images/content/brand_solution_img.png"
                                    alt=""
                                    class="scroll-object"/>
                                <!-- .scroll-object -->
                            </div>
                        </div>
                        <!-- // -->
                    </div>
                </article>

                <article class="brand-content con02">
                    <div class="area">
                        <div class="cm-tit-box" data-scroll="fade-up">
                            <h3 class="cm-content-tit">R&D 역량에 집중하는 채비</h3>
                            <p class="cm-content-txt">특허 36건 지적 재산권 등록 및
                                <br class="m-br">출원 및 다양한 품질 인증서 취득 및 R&D 역량에 집중</p>
                        </div>
                    </div>

                    <div class="brand-rnd-con">
                        <div class="brand-rnd-item-wrap">
                            <div class="brand-rnd-item" data-scroll="fade-up">
                                <div class="txt-box">
                                    <h4 class="tit">특허(등록, 출원)</h4>
                                    <strong class="sub-tit">※ 해외 특허 출원국
                                    </strong>
                                    <p class="txt">
                                        미국, 중국,일본 유럽 등 약 20개국
                                    </p>
                                </div>
                                <div class="con-box">
                                    <div class="circle-item">
                                        <dl>
                                            <dt>총 특허</dt>
                                            <dd>36</dd>
                                        </dl>
                                    </div>
                                    <div class="circle-item">
                                        <dl>
                                            <dt>해외 특허</dt>
                                            <dd>03</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-rnd-item" data-scroll="fade-up" data-scroll-delay="200">
                                <div class="txt-box">
                                    <h4 class="tit">국제표준 코어멤버</h4>
                                    <strong class="sub-tit">국내유일 2021 OCPP 1.6 모든 항목 인증 완료</strong>
                                    <p class="txt">2017 ~ 현재까지 CharIN 테스티벌, 심포지움, 전시회 7번 참가</p>
                                </div>
                                <div class="con-box">
                                    <div class="circle-item">
                                        <p class="txt">OCPP 1.6</p>
                                    </div>
                                    <div class="circle-item">
                                        <p class="txt">OCPP 2.0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-rnd-item" data-scroll="fade-up" data-scroll-delay="400">
                                <div class="txt-box">
                                    <h4 class="tit">연구 개발</h4>
                                    <strong class="sub-tit">
                                        - 국내 충전기 사업자 중 유일하게 조달청 우수제품 지정<br/>
                                        - 전기차 충전 인프라 시장에서는 및 속도, 안정성 중요
                                    </strong>
                                    <p class="txt co-main">→기술경쟁력 확보하기 위해 연구개발비 증대
                                        <br class="m-br">(기술 특허 19개 보유)
                                    </p>
                                </div>
                                <div class="con-box square-con-box">
                                    <div class="square-item">
                                        <h5 class="years">2019</h5>
                                        <dl>
                                            <dt>연구개발비</dt>
                                            <dd>23.0</dd>
                                        </dl>
                                        <dl>
                                            <dt>증가금액</dt>
                                            <dd>5.0</dd>
                                        </dl>
                                        <dl>
                                            <dt>증가율</dt>
                                            <dd>28%</dd>
                                        </dl>
                                    </div>
                                    <div class="square-item">
                                        <h5 class="years">2020</h5>
                                        <dl>
                                            <dt>연구개발비</dt>
                                            <dd>31.0</dd>
                                        </dl>
                                        <dl>
                                            <dt>증가금액</dt>
                                            <dd>7.0</dd>
                                        </dl>
                                        <dl>
                                            <dt>증가율</dt>
                                            <dd>30%</dd>
                                        </dl>
                                    </div>
                                    <div class="square-item">
                                        <h5 class="years">2021</h5>
                                        <dl>
                                            <dt>연구개발비</dt>
                                            <dd>42.0</dd>
                                        </dl>
                                        <dl>
                                            <dt>증가금액</dt>
                                            <dd>11.0</dd>
                                        </dl>
                                        <dl>
                                            <dt>증가율</dt>
                                            <dd>36%</dd>
                                        </dl>
                                    </div>
                                </div>
                                <p class="plus-txt">(단위 : 억원)</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="brand-content con03">
                    <div class="area" data-scroll="fade-up">
                        <h3 class="cm-content-tit">인증서 및 수상내역 현황</h3>

                        <ul class="award-logo-list">
                            <li class="list-item">
                                <span><img src="../../images/content/brand_award_logo01.png" alt=""></span>
                            </li>
                            <li class="list-item">
                                <span><img src="../../images/content/brand_award_logo02.png" alt=""></span>
                            </li>
                            <li class="list-item">
                                <span><img src="../../images/content/brand_award_logo03.png" alt=""></span>
                            </li>
                            <li class="list-item">
                                <span><img src="../../images/content/brand_award_logo04.png" alt=""></span>
                            </li>
                            <li class="list-item">
                                <span><img src="../../images/content/brand_award_logo05.png" alt=""></span>
                            </li>
                        </ul>
                    </div>

                    <div class="area-box">
                        <div class="brand-certifi-con con01" data-scroll="fade-up">
                            <!-- <div class="certifi-tit"> <h4 class="tit">품질인증서</h4> <span
                            class="num-box">3건</span> </div> <ul class="certifi-list-con"> <li
                            class="list-item"> <h5 class="tit">ISO 9001:2004</h5> <p class="txt">품질 및 환경 경영
                            <br/>시스템 인증서</p> <p class="date-txt">2017.02.24</p> </li> <li class="list-item">
                            <h5 class="tit">ISO 9001:2008</h5> <p class="txt">품질 및 환경 경영 <br/>시스템 인증서</p> <p
                            class="date-txt">2017.02.24</p> </li> <li class="list-item"> <h5 class="tit">ISO
                            9001:2015</h5> <p class="txt">품질 및 환경 경영 <br/>시스템 인증서</p> <p
                            class="date-txt">2018.02.02</p> </li> </ul> -->
                            <div class="certifi-table-box wide">
                                <div class="certifi-tit">
                                    <h4 class="tit">품질 인증서</h4>
                                    <span class="num-box">3건</span>
                                </div>
                                <table class="certifi-table">
                                    <colgroup>
                                        <col width="10%">
                                        <col width="10%">
                                        <col width="23%">
                                        <col width="16%">
                                        <col width="23%">
                                        <col width="*">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>인증서명</th>
                                            <th>용도</th>
                                            <th>최초취득일</th>
                                            <th>인증기관</th>
                                            <th>인증서 번호</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>ISO9001:2015</td>
                                            <td>품질경영시스템 인증서</td>
                                            <td>2017.02.24</td>
                                            <td>한국품질인증원(KSQ)</td>
                                            <td>QMS-0423</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ISO14001:2015</td>
                                            <td>환경경영시스템 인증서</td>
                                            <td>2017.02.24</td>
                                            <td>한국품질인증원(KSQ)</td>
                                            <td>EMS-0174</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>ISO27001:2013</td>
                                            <td>정보보안시스템 인증서</td>
                                            <td>2021.12.03</td>
                                            <td>CPG</td>
                                            <td>ISMS/R82/3281</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="brand-certifi-con con02" data-scroll="fade-up">
                            <div class="certifi-list-con">
                                <div class="certifi-table-box">
                                    <div class="certifi-tit">
                                        <h4 class="tit">기타 인증서</h4>
                                        <span class="num-box">18건</span>
                                    </div>
                                    <table class="certifi-table">
                                        <colgroup>
                                            <col width="12%">
                                            <col width="19%">
                                            <col width="29%">
                                            <col width="*">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>인증일</th>
                                                <th>인증기관</th>
                                                <th>인증내용</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2019.05.29</td>
                                                <td>대구광역시</td>
                                                <td>대구광역시 지역스타기업</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2018.10.01</td>
                                                <td>한국산업기술시험원</td>
                                                <td>K마크 인증 (DM-3SB7, DCV-3SB14C)</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2018.10.01</td>
                                                <td>산업통상자원부</td>
                                                <td>K마크 인증서 PC12018-175</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2018.08.23</td>
                                                <td>산업통상자원부</td>
                                                <td>소재.부품전문기업 확인서</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>2018.07.10</td>
                                                <td>대구광역시</td>
                                                <td>대구광역시 고용친화 대표기업 지정서</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>2018.07.10</td>
                                                <td>대구광역시</td>
                                                <td>대구광역시 고용친화 대표기업</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>2018.06.19</td>
                                                <td>산업통상자원부</td>
                                                <td>K마크 인증서 PC12018-070</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>2018.04.04</td>
                                                <td>산업통상자원부</td>
                                                <td>한국디자인 진흥원_디자인혁신유망기업 선정</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>2018.04.04</td>
                                                <td>한국산업기술시험원</td>
                                                <td>K마크 인증 (DM-3FT50)</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>2017.09.29</td>
                                                <td>조달청</td>
                                                <td>조달청 벤처나라 지정증서</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>2017.09.25</td>
                                                <td>한국정보통신기술협회장</td>
                                                <td>소프트웨어품질인증서(채비 v30.0)</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>2017.09.25</td>
                                                <td>한국정보통신기술협회</td>
                                                <td>소프트웨어품질 인증</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>2017.09.20</td>
                                                <td>CHARIN</td>
                                                <td>CHARIN 맴버스 인증서</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>2017.08.31</td>
                                                <td>대구광역시</td>
                                                <td>대구광역시 Pre-스타기업 지정서</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>2017.07.27</td>
                                                <td>한국에너지공단</td>
                                                <td>고효율에너지기자재 인증서</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>2017.07.17</td>
                                                <td>한국에너지공단</td>
                                                <td>고효율에너지기자재 인증 (DM-3FT50)</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>2017.04.10</td>
                                                <td>한국산업기술진흥협회장</td>
                                                <td>기업부설연구소 인정서</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>2017.02.27</td>
                                                <td>산업통상자원부</td>
                                                <td>지능형전력망 사업자등록증</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="certifi-table-box">
                                    <div class="certifi-tit">
                                        <h4 class="tit">수상내역</h4>
                                        <span class="num-box">14건</span>
                                    </div>
                                    <table class="certifi-table">
                                        <colgroup>
                                            <col width="12%">
                                            <col width="19%">
                                            <col width="29%">
                                            <col width="*">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>일자</th>
                                                <th>수여 기관</th>
                                                <th>수상 내역</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2022.02.01</td>
                                                <td>IF - DESIGN AWARD</td>
                                                <td>WINNER</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2022.02.01</td>
                                                <td>IF - DESIGN AWARD</td>
                                                <td>WINNER</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2021.12.31</td>
                                                <td>환경부</td>
                                                <td>표창장<br/>(대기환경개선 및 무공해자동차 보급에 기여)</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2020.04.01</td>
                                                <td>Red dot DESIGN AWARD</td>
                                                <td>WINNER</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>2020.02.01</td>
                                                <td>IF - DESIGN AWARD</td>
                                                <td>WINNER</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>2019.10.18</td>
                                                <td>한국디자인진흥원</td>
                                                <td>WINNER</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>2019.10.18</td>
                                                <td>한국디자인진흥원</td>
                                                <td>WINNER</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>2019.06.30</td>
                                                <td>K-DESIGN AWARD</td>
                                                <td>GOLD WINNER, WINNER</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>2019.05.02</td>
                                                <td>대구지방고용노동청</td>
                                                <td>표창장(일자리 창출을 통한 지역경제 발전)</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>2018.12.18</td>
                                                <td>인더스트리어워드코리아</td>
                                                <td>2018 인더스트리 어워드 코리아<br/>(전기차 충전부문 기술혁신 대상)</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>2018.12.18</td>
                                                <td>조달청</td>
                                                <td>우수제품 지정</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>2018.12.11</td>
                                                <td>중소벤처기업부</td>
                                                <td>표창장(국가산업 발전)</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>2018.11.06</td>
                                                <td>대구광역시</td>
                                                <td>표창장<br/>(장애인 복지 증진과 지역사회 발전에 이바지)</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>2018.10.10</td>
                                                <td>한국스마트그리드협회</td>
                                                <td>표창장<br/>(스마트그리드 산업의 발전과 국가기술 경쟁력 강화)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="brand-content con04" data-scroll="fade-up">
                    <div class="area-box">
                        <div class="cm-tit-box">
                            <h3 class="cm-content-tit">국·내외 주요 파트너</h3>
                            <p class="cm-content-txt">다양한 산업별 파트너들과 함께 EV 충전 인프라 확장</p>
                        </div>

                        <div class="brand-partner-wrap">
                            <dl class="brand-partner-item item01">
                                <dt>
                                    <h4 class="partner-tit">IT</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_it_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_it_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_it_logo03.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_it_logo04.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_it_logo05.png" alt=""></span>
                                </dd>
                            </dl>
                            <dl class="brand-partner-item item02">
                                <dt>
                                    <h4 class="partner-tit">완성차</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_car_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo03.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo04.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo05.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo06.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo07.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo08.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo09.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_car_logo10.png" alt=""></span>
                                </dd>
                            </dl>
                            <dl class="brand-partner-item item03">
                                <dt>
                                    <h4 class="partner-tit">정유사</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_oil_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_oil_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_oil_logo03.png" alt=""></span>
                                </dd>
                            </dl>
                            <dl class="brand-partner-item item04">
                                <dt>
                                    <h4 class="partner-tit">물류사</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_delivery_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_delivery_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_delivery_logo03.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_delivery_logo04.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_delivery_logo05.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_delivery_logo06.png" alt=""></span>
                                </dd>
                            </dl>
                            <dl class="brand-partner-item item05">
                                <dt>
                                    <h4 class="partner-tit">대형쇼핑몰</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_shopping_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_shopping_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_shopping_logo03.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_shopping_logo04.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_shopping_logo05.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_shopping_logo06.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_shopping_logo07.png" alt=""></span>
                                </dd>
                            </dl>
                            <dl class="brand-partner-item item06">
                                <dt>
                                    <h4 class="partner-tit">Fleet</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_fleet_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_fleet_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_fleet_logo03.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_fleet_logo04.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_fleet_logo05.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_fleet_logo06.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_fleet_logo07.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_fleet_logo08.png" alt=""></span>
                                </dd>
                            </dl>
                            <dl class="brand-partner-item item07">
                                <dt>
                                    <h4 class="partner-tit">공공·민간 부지</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_public_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo03.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo04.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo05.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo06.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo07.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo08.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo09.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo10.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo11.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo12.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_public_logo13.png" alt=""></span>
                                </dd>
                            </dl>
                            <dl class="brand-partner-item item08">
                                <dt>
                                    <h4 class="partner-tit">ev운영사</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_ev_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_ev_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_ev_logo03.png" alt=""></span>
                                </dd>
                            </dl>
                            <dl class="brand-partner-item item09">
                                <dt>
                                    <h4 class="partner-tit">상사</h4>
                                </dt>
                                <dd>
                                    <span><img src="../../images/content/brand_partner_trade_logo01.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_trade_logo02.png" alt=""></span>
                                    <span><img src="../../images/content/brand_partner_trade_logo03.png" alt=""></span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </article>
            </section>
        </section>
        <!-- //content -->
    </div>
    <!-- //container -->

    <?php include '../_inc/footer.php';?>