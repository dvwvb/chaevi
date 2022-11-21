<?php include "../_inc/varItem.php"; ?>

<article id="contentTopCon">
	<!-- ****************** 상단정보 ********************** -->
	<aside id="contentInfoCon" class="clearfix area-box" data-scroll="fade-up">
		<?php
		$dep1 = "<script>document.write(dep1);</script>";
		$dep2 = "<script>document.write(dep2);</script>";
		echo $dep1;
		echo $dep2;
		?>
		<div class="location">
			<ul>
				<li class="home"> <a href="../index.php" title="HOME"><i class="xi-home-o"></i></a> </li>
				<li><?php echo $dep1t[$dep1]; ?></li>
				<li><?php echo $dep2t[$dep1][$dep2]; ?></li>
			</ul>
		</div>
		<h3 class="content-tit"><?php echo $dep2t[$dep1][$dep2]; ?></h3>
	</aside>


	<!-- ****************** 서브메뉴 ********************** -->
	<!--  모든 서브메뉴 : fixed될때 fixed-sub-menu, top-fixed-object 클래스 추가  -->
	<!-- 서브메뉴1 -->
	<aside id="topMenuCon">
		<div class="side-menu-inner">
			<div class="area-box" data-scroll="fade-up">
				<ul class="snb sub-menu-company clearfix">
					<li><a href="brand_story.php"><span>채비 브랜드 소개</span></a></li>
					<li><a href="price.php"><span>채비 요금제</span></a></li>
					<li><a href="app.php"><span>채비 APP</span></a></li>
					<li><a href="zone.php"><span>채비스테이</span></a></li>
					<li><a href="station.php"><span>메가스테이션</span></a></li>
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
					<li><a href="brand_story.php"><span>채비 브랜드 소개</span></a></li>
					<li><a href="price.php"><span>채비 요금제</span></a></li>
					<li><a href="app.php"><span>채비 APP</span></a></li>
					<li><a href="zone.php"><span>채비스테이</span></a></li>
					<li><a href="station.php"><span>메가스테이션</span></a></li>
				</ul>
			</div>
		</div>
	</aside>
	<!-- // -->

	<aside id="rightSidebar">
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
	</aside>
</article>