<?php
include_once "../ctrl/contents.php";
include_once "../ctrl/config.db.php";
include_once "../ctrl/config.session.user.php";
include_once "../ctrl/config.lang.php";
include_once "../ctrl/sessionAlive.php";
?>
<html ng-app>
	<head>
		<?php
		include_once "../head_tag.php";
		//080312 jihan <head> 태그 내 부분은 head_tag.php 파일로 옮김
		?>

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

        <!-- <link rel="stylesheet" type="text/css" href="../css/promotion.css"> -->
		<link rel="stylesheet" type="text/css" href="../css/promotion_nanum.css">
	</head>
	<body>

		<!--body 시작 -->
		<!-- zeplin. 01_06_솔루션 상세페이지(새창) -->

		<!-- 새창 X버튼 있음-->
		<div class="container new_page">
			<span>김다은님의 운동 솔루션</span>
			<button type="button" class="myInfo_close" id="guide-close-popup">×</button>
		</div>

		<!-- 상단 서브 메뉴 -->
		<div class="container slider_barMenu">
			<nav class="sub_menu">
				<ul>
					<li onClick="menu_click(this)" class="on"><a href="#" class="on_color">영양소</a></li>
					<li onClick="menu_click(this)"><a href="#">운동</a></li>
					<li onClick="menu_click(this)"><a href="#">피부&amp;모발</a></li>
					<li onClick="menu_click(this)"><a href="#">식습관</a></li>
					<li onClick="menu_click(this)"><a href="#">개인특성</a></li>
					<li onClick="menu_click(this)"><a href="#">건강관리</a></li>
				</ul>
			</nav>
		</div>
		
		<div class="container solution_cont">
			<!-- 솔루션 -->
			<div class="solution_area">
				<ul>
					<li class="txt_area">
						<div class="txt_list">
							<h1>솔루션, 하나!</h1>
							<h2>연어</h2>
						</div>
					</li>
					<li class="img_area">
						<img src="../img/promotion/solution_01.webp" width="100%" height="100%">
					</li>
				</ul>
				<ul>
					<p>
						대부분의 양질의 단백질에 아르기닌이 풍부하게 함유되어 있으나, 그중에서도 연어나 청어는 단백질을 구성하는 아미노산의 70%가 아르기닌으로 다른 식품대비 월등함.
					</p>
				</ul>
			</div>
			<div class="solution_area">
				<ul>
					<li class="txt_area">
						<div class="txt_list">
							<h1>솔루션, 둘!</h1>
							<h2>달걀</h2>
						</div>
					</li>
					<li class="img_area">
						<img src="../img/promotion/solution_02.webp" width="100%" height="100%">
					</li>
				</ul>
				<ul>
					<p>
						필수아미노산을 모두 함유하고 있어 완전 단백질이라 불리는 달걀, 특히 노른자에는 아르기닌이 풍부하게 함유되어 있습니다. <br />
						콜레스테롤 함유량도 높은 편이므로 하루권장량인 2개 이하로 섭취합니다.
					</p>
				</ul>
			</div>
			<div class="solution_area">
				<ul>
					<li class="txt_area">
						<div class="txt_list">
							<h1>솔루션, 셋!</h1>
							<h2>식욕 억제 호르몬 조절</h2>
						</div>
					</li>
					<li class="img_area">
						<img src="../img/promotion/solution_03.webp" width="100%" height="100%">
					</li>
				</ul>
				<ul>
					<p>
						살짝 숨이 차고 땀이 날 정도의 유산소 운동을 주 3회 이상 실천합니다. 건강 상태 및 심폐 기능에 따라 가벼운 근력 운동을 병행해 주는 것도 혈관 노화를 예장하고 관리하는데 많은 도움이 될 수 있습니다.
					</p>
				</ul>
			</div>
		</div>

		<!-- 하단 탭 -->
		<div class="menu_tab">
			<div class="menu_frame">
				<div class="menu_area">
					<a class="menu_icon1"></a>
				</div>
				<div class="menu_area">
					<a class="menu_icon2"></a>
				</div>
				<div class="menu_area">
					<a class="menu_icon3"></a>
				</div>
				<div class="menu_area">
					<a class="menu_icon4"></a>
				</div>
			</div>
		</div>
		
		<!--body 끝-->

		<?php include_once "footer.php"; ?>
	</body>
</html>

<script>
/* 상단 서브 메뉴 */
function menu_click(el) {   
	$('.sub_menu ul li').removeClass('on');
	$(el).addClass('on');
	$('.sub_menu ul li a').removeClass('on_color');
	$(el).find('a').addClass('on_color');
}
</script>
	
<?php include_once 'ctrl/config.db.close.php'; ?>