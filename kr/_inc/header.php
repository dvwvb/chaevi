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
                        <polygon class="logo-1" points="481.74 0 464.44 0.05 444.9 24.81 452.15 24.81 437.33 42.53 413.87 0.06 397.56 0.06 430.14 58.03 430.32 58.34 441.08 58.34 441.59 58.34 442.38 58.34 471.97 22.27 464.82 22.27 481.74 0" />
                        <polygon class="logo-1" points="179.8 22.68 118.02 22.68 121.18 0.52 106.88 0.52 98.29 58.01 112.55 58.01 116.09 34.92 178.11 34.92 174.56 58.01 189.02 58.01 197.7 0.52 183.19 0.52 179.8 22.68" />
                        <path class="logo-1" d="M247.93.52,197.7,58h14.11l13-15h41.92l8.57,15h14L256.27.52Zm-13.26,30.7L250.26,13l10.18,18.19Z" />
                        <polygon class="logo-1" points="489.95 0.52 481.56 58.01 497.78 58.01 505.64 0.52 489.95 0.52" />
                        <path class="logo-1" d="M87,46.22H18.42S13.8,45,14.3,41.11s4-23.27,4-23.27c.65-3,4.42-5.67,8.68-5.67l65.11.06L93.84.47H27C14.9.47,5.08,7.72,4.21,16.84h0L.06,44.72s-.8,4.42,3.41,8.63A15.64,15.64,0,0,0,13.9,57.86l71.37,0Z" />
                        <polygon class="logo-1" points="377.7 46.26 313.74 46.26 315.63 34.05 365.65 34.05 367.27 22.52 317.15 22.52 318.63 12.35 382.79 12.23 384.54 0.52 306.3 0.52 298 58.01 375.97 57.86 377.7 46.26" />
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