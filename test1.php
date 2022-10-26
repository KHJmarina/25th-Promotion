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

        <!-- <link rel="stylesheet" type="text/css" href="../css/promotion.css"> -->
		<link rel="stylesheet" type="text/css" href="../css/promotion_nanum.css">
		<link rel="stylesheet" type="text/css" href="../css/promotion_img.css">
	</head>
	<body>

		<!--body 시작 -->
		<!-- 최상단 로고 및 지놈스토리 이동-->
		<div class="container mystory_area">
			<div class="logo_box">
				<div class="logo_white"></div>
			</div>
			<a href="#" class="mystory_iconArea">
				<div class="icon_box">
					<i class="mystory_icon"></i>
				</div>
			</a>
			<div class="mystory_name">김다은님의 지놈스토리</div>
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

		
		<div class="container result_cont">
			<!-- 타이틀 및 이미지 -->
			<div class="cont_titBox">
				<h1>&#35 근력 운동 관리형</h1>
				<h2>써니사이드 Up<br />혈관건강 Up</h2>
			</div>
			<dl>
				<!-- <dd></dd> -->
				<img src="../img/promotion/main_img.webp" width="220" height="220">
			</dl>

			<div class="cont_subBox">
				<!-- 내용 및 이동버튼 -->
				<div class="cont_txtBox">
					<h2>근력 운동 시 그 효과가<br />낮을 가능성이 다소 높아요.</h2>
					<h3>평소 단거리 달리기, 웨이트 운동 등을 했을 때 쉽게 지치거나 부상이 잦은 편이라면 더욱 주의를 기울여 주세요. 특히 30세 즈음부터는 근육량이 서서히 감소하기 때문에 기초대사량 유지 및 건강 개선을 위해 내게 맞는 근력 운동의 종류 및 강도를 선택하여 꾸준히 실천하는 것이 중요합니다.</h3>
					<a class="mt-44">
						<span>솔루션 보기</span>
						<div class="img_box">
							<i class="select_box_V"></i>
						</div>
					</a>
				</div>

				<!-- 운동 항목 -->
				<div class="sportItem_area">
					<!-- 우측 탭 영역 -->
					<div class="sportItem_tab">운동 항목
						<ul class="tabs">
							<li class="guide_tab on" data-tab="tab-1"></li>
							<li class="guide_tab" data-tab="tab-2"></li>
						</ul>
					</div>

					<!-- 1 리스트형 -->
					<div id="tab-1" class="tab_cont on">
						<div class="item_listBox">
							<div class="txt_area">
								<div class="txt_list">
									<strong class="title_post">근력운동 적합성</strong>
									<span class="state_concerned">낮음</span>
								</div>
							</div>
							<div class="img_area">
								<img src="../img/promotion/sport_icon_01.webp" width="80" height="80">
							</div>
						</div>
						<div class="item_listBox">
							<div class="txt_area">
								<div class="txt_list">
									<strong class="title_post">체중감량 후 체중회복가능성(요요가능성)</strong>
									<span class="state_awared">보통</span>
								</div>
							</div>
							<div class="img_area">
								<img src="../img/promotion/sport_icon_02.webp" width="80" height="80">
							</div>
						</div>
						<div class="item_listBox">
							<div class="txt_area">
								<div class="txt_list">
									<strong class="title_post">와인 선호도</strong>
									<span class="state_choice">화이트 와인형</span>
								</div>
							</div>
							<div class="img_area">
								<img src="../img/promotion/category_img_50.webp" width="80" height="80">
							</div>
						</div>
						<div class="item_listBox">
							<div class="txt_area">
								<div class="txt_list">
									<strong class="title_post">근육 발달 능력</strong>
									<span class="state_awared">보통</span>
								</div>
							</div>
							<div class="img_area">
								<img src="../img/promotion/sport_icon_04.webp" width="80" height="80">
							</div>
						</div>
						<div class="item_listBox">
							<div class="txt_area">
								<div class="txt_list">
									<strong class="title_post">단거리 질주 능력</strong>
									<span class="state_awared">보통</span>
								</div>
							</div>
							<div class="img_area">
								<img src="../img/promotion/sport_icon_05.webp" width="80" height="80">
							</div>
						</div>
						<div class="item_listBox">
							<div class="txt_area">
								<div class="txt_list">
									<strong class="title_post">발목 부상 위험도</strong>
									<span class="state_good">높음</span>
								</div>
							</div>
							<div class="img_area">
								<img src="../img/promotion/sport_icon_06.webp" width="80" height="80">
							</div>
						</div>
						<div class="item_listBox">
							<div class="txt_area">
								<div class="txt_list">
									<strong class="title_post">악력</strong>
									<span class="state_concerned">낮음</span>
								</div>
							</div>
							<div class="img_area">
								<img src="../img/promotion/sport_icon_07.webp" width="80" height="80">
							</div>
						</div>
						<div class="item_listBox">
							<div class="txt_area">
								<div class="txt_list">
									<strong class="title_post">운동 후 회복능력</strong>
									<span class="state_concerned">주의</span>
								</div>
							</div>
							<div class="img_area">
								<img src="../img/promotion/sport_icon_08.webp" width="80" height="80">
							</div>
						</div>
						<!-- 화살표 -->
						<div class="move_arrow">
							<div class="arrow_mine"></div>
						</div>
					</div>


					<!-- 2 갤러리형 -->
					<div id="tab-2" class="tab_cont">
						<ul>
							<li class="item_galleryBox">
								<div class="img_area">
									<img src="../img/promotion/gallery_icon_01.webp" width="120" height="120">
								</div>
								<div class="txt_area">
									<div class="txt_list">
										<strong>근력운동 적합성</strong>
										<span class="state_concerned">낮음</span>
									</div>
								</div>
							</li>
							<li class="item_galleryBox">
								<div class="img_area">
									<img src="../img/promotion/gallery_icon_02.webp" width="120" height="120">
								</div>
								<div class="txt_area">
									<div class="txt_list">
										<strong>체중감량 후 체중회복가능성(요요가능성)</strong>
										<span class="state_awared">보통</span>
									</div>
								</div>
							</li>
						</ul>
						<ul>
							<li class="item_galleryBox">
								<div class="img_area">
									<img src="../img/promotion/gallery_icon_03.webp" width="120" height="120">
								</div>
								<div class="txt_area">
									<div class="txt_list">
										<strong>근력운동 적합성</strong>
										<span class="state_good">안심</span>
									</div>
								</div>
							</li>
							<li class="item_galleryBox">
								<div class="img_area">
									<img src="../img/promotion/gallery_icon_04.webp" width="120" height="120">
								</div>
								<div class="txt_area">
									<div class="txt_list">
										<strong>근력 운동 적합성</strong>
										<span class="state_awared">보통</span>
									</div>
								</div>
							</li>
						</ul>
						<ul>
							<li class="item_galleryBox">
								<div class="img_area">
									<img src="../img/promotion/gallery_icon_05.webp" width="120" height="120">
								</div>
								<div class="txt_area">
									<div class="txt_list">
										<strong>근력운동 적합성</strong>
										<span class="state_concerned">낮음</span>
									</div>
								</div>
							</li>
							<li class="item_galleryBox">
								<div class="img_area">
									<img src="../img/promotion/gallery_icon_06.webp" width="120" height="120">
								</div>
								<div class="txt_area">
									<div class="txt_list">
										<strong>근력 운동 적합성</strong>
										<span class="state_awared">보통</span>
									</div>
								</div>
							</li>
						</ul>
						<ul>
							<li class="item_galleryBox">
								<div class="img_area">
									<img src="../img/promotion/gallery_icon_07.webp" width="120" height="120">
								</div>
								<div class="txt_area">
									<div class="txt_list">
										<strong>근력운동 적합성</strong>
										<span class="state_good">높음</span>
									</div>
								</div>
							</li>
							<li class="item_galleryBox">
								<div class="img_area">
									<img src="../img/promotion/gallery_icon_08.webp" width="120" height="120">
								</div>
								<div class="txt_area">
									<div class="txt_list">
										<strong>근력 운동 적합성</strong>
										<span class="state_concerned">낮음</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- 화살표 -->
						<div class="move_arrow">
							<div class="arrow_mine"></div>
						</div>
					</div>

				</div>
				<!-- 운동 항목 끝 -->

				<!-- 푸터 -->
				<div class="result_footer">
					<h1>본 검사 결과는 질병의 진단 및 치료의 목적으로 사용될 수 없으며, 의학적인 소견이 필요한 경우 의사와 상담하시기 바랍니다.</h1>
					<p>분석안내서</p>
					<h1>©Macrogen, Inc. All Rights Reserved. <br />
						본 콘텐츠는 저작권법에 따라 보호받는 저작물로 저작권자 ㈜마크로젠의 동의 없이 무단으로 사용, 배포, 편집, 수정을 금지합니다.
					</h1>
				</div>

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
$(document).ready(function(){
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('on');
		$('.tab_cont').removeClass('on');

		$(this).addClass('on');
		$("#"+tab_id).addClass('on');
	})
})

/* 상단 서브 메뉴 */
function menu_click(el) {   
	$('.sub_menu ul li').removeClass('on');
	$(el).addClass('on');
	$('.sub_menu ul li a').removeClass('on_color');
	$(el).find('a').addClass('on_color');
}
</script>
	
<?php include_once 'ctrl/config.db.close.php'; ?>