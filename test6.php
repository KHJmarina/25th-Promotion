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


		<meta http-equiv="X-UA-Compatible" content="ie=edge">


		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    	<!-- Link Swiper's CSS -->
    	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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


		<!-- 중간 스와이프 -->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide graphModal_scroll">
					
					<!-- 슬라이드 1 -->
					<!-- 슬라이드 1 start -->
					<div class="container category_area">
						<div class="category_tit">
							<h2>운동 후 회복능력이 <br />
								<!-- 상태에 따라 컬러가 다른 텍스트는 span 태그 안에 클래스명 변경 -->
								<!-- 안심(high)/보통(normal)/주의(low)/와인(wine) 괄호속 class명으로 변경 -->
								<span class="low">낮아요</span>
								<!-- <span class="noraml">보통이에요</span> -->
								<!-- <span class="high">높아요</span> -->
							</h2>
						</div>
						<!-- zeplin 항목 69종 -->
						<div class="category_item">
							<p>
								격렬한 운동 및 신체 활동 후에 가지는 휴식은 근육, 조직, 인대 등의 손상을 예방하기 위해 필수적인 요소입니다.
								평균적으로 근육 및 조직의 회복 시간은 24시간에서 48시간 정도 소요되는데, 이는 개인의 회복 능력에 따라 달라질 수 있습니다.
							</p>
							<div class="item_circle">
								<!-- 상태에 따라 컬러가 다른 텍스트는 care_circle 옆에 해당 클래스명 적용 -->
								<!-- 주의(care_low)는 class명으로 변경 -->
								<div class="care_circle care_low">
									<div class="txt_cont">
										<span>주의
									</div>
								</div>
								<!-- 보통(care_normal)은 괄호속 class명으로 변경 -->
								<!-- <div class="care_circle care_normal">
									<div class="txt_cont">
										<span>보통
									</div>
								</div> -->
								<!-- 안심(care_high)은 괄호속 class명으로 변경 -->
								<!-- <div class="care_circle care_high">
									<div class="txt_cont">
										<span>안심
									</div>
								</div> -->
							</div>
							<div class="item_img">
								<!-- promotion_img.css에 항목69종(상세73종) zeplin 속 전체 이미지 링크 -->
								<img src="../img/promotion/category_img_28.webp" width="100%" height="100%">
							</div>
						</div>
					</div>

					<div class="container detail_area detail_mp">
						<!-- 내용 -->
						<div class="mb-30">
							<h2 >총 4개의 유전인자 중 <br />
								<span>3개의 유전변이 발견</span>
							</h2>
							<h1>(한국인 평균 : 3개)
								<a class="question_box" id="btn-open-popup">
									<i class="tooltip_more"></i>
								</a>
							</h1>
							<p>유전적으로 관절과 근육 회복력이 낮은 수준으로, 운동 후 회복이 원활하지 못하므로 무리한 운동을 피하고 운동 후 반드시 적절한 휴식이 필요합니다.</p>
						</div>
						<div>
							<div class="gene_listBox">
								<div class="txt_list">
									<strong>뼈·연골형성 유전자</strong>
									<span>GDF5</span>
								</div>
								<div class="gene_found">
									<span class="gene_yes">발견</span>
								</div>
							</div>
							<div class="gene_listBox">
								<div class="txt_list">
									<strong>활성산소 제거 유전자</strong>
									<span>SOD2</span>
								</div>
								<div class="gene_found">
									<span class="gene_no">미발견</span>
								</div>
							</div>
						</div>
						<div class="link_arrow">
							<a>전체보기</a>
							<div class="img_box">
								<i class="select_box_V_black"></i>
							</div>
						</div>
					</div>

					<!-- 추천 영양소 및 기능성 원료 -->
					<div class="nutrient_area">
						<h1>추천 영양소 및 기능성 원료</h1>
						<ul>
							<li>비타민 B2</li>
							<li>Collactive 콜라겐펩타이드</li>
							<li>저분자콜라겐펩타이드</li>
							<li>쌀겨추출물</li>
							<li>프로바이오틱스HY7714(L.plantarum)</li>
						</ul>
					</div>

					<!-- 푸터 -->
					<div class="result_footer">
						<h1>본 검사 결과는 질병의 진단 및 치료의 목적으로 사용될 수 없으며, 의학적인 소견이 필요한 경우 의사와 상담하시기 바랍니다.</h1>
						<p>분석안내서</p>
						<h1>©Macrogen, Inc. All Rights Reserved. <br />
							본 콘텐츠는 저작권법에 따라 보호받는 저작물로 저작권자 ㈜마크로젠의 동의 없이 무단으로 사용, 배포, 편집, 수정을 금지합니다.
						</h1>
					</div>

					<!-- 슬라이드 1 end -->
				</div>
				

				<!-- 슬라이드 2 -->
				<!-- 슬라이드 2 start -->
				<div class="swiper-slide">
					<div class="container category_area">
						<div class="category_tit">
							<h2>
								<span class="wine">레드 와인을</span>
								<br />더 선호할 수 있어요
							</h2>
						</div>
						<!-- zeplin 항목 69종 -->
						<div class="category_item">
							<p>
								격렬한 운동 및 신체 활동 후에 가지는 휴식은 근육, 조직, 인대 등의 손상을 예방하기 위해 필수적인 요소입니다.
								평균적으로 근육 및 조직의 회복 시간은 24시간에서 48시간 정도 소요되는데, 이는 개인의 회복 능력에 따라 달라질 수 있습니다.
							</p>
							<div class="item_circle">
								<div class="wine_circle">
									<div class="txt_cont">
										<span>레드<br />와인형
									</div>
								</div>
							</div>
							<div class="item_img">
								<img src="../img/promotion/category_img_50.webp" width="100%" height="100%">
							</div>
						</div>
					</div>

					<div class="container detail_area detail_mp">
						<!-- 내용 -->
						<div class="mb-30">
							<h3>(유전변이 개수 그래프가 제시되지 않습니다.)</h3>
							<p>유전적으로 폴리페놀 성분이 풍부한 레드 와인에 대한 선호도가 높은 편입니다. 단, 섭취 시 아래 '당신을 위한 TIP'을 참고하여 섭취량을 조절해 주시기 바랍니다.</p>
						</div>
						<div>
							<div class="gene_listBox">
								<div class="txt_list">
									<strong>후각 감지 유전자</strong>
									<span>HLA-DOA</span>
								</div>
								<div class="gene_found">
									<span class="gene_yes">발견</span>
								</div>
							</div>
							<div class="gene_listBox">
								<div class="txt_list">
									<strong>미각 감지 유전자</strong>
									<span>PRKCH</span>
								</div>
								<div class="gene_found">
									<span class="gene_yes">발견</span>
								</div>
							</div>
						</div>
						<div class="link_arrow">
							<a>전체보기</a>
							<div class="img_box">
								<i class="select_box_V_black"></i>
							</div>
						</div>
					</div>

					<!-- 추천 영양소 및 기능성 원료 -->
					<div class="nutrient_area">
						<h1>추천 영양소 및 기능성 원료</h1>
						<ul>
							<li>비타민 B2</li>
							<li>Collactive 콜라겐펩타이드</li>
							<li>저분자콜라겐펩타이드</li>
							<li>쌀겨추출물</li>
							<li>프로바이오틱스HY7714(L.plantarum)</li>
						</ul>
					</div>

					<!-- 푸터 -->
					<div class="result_footer">
						<h1>본 검사 결과는 질병의 진단 및 치료의 목적으로 사용될 수 없으며, 의학적인 소견이 필요한 경우 의사와 상담하시기 바랍니다.</h1>
						<p>분석안내서</p>
						<h1>©Macrogen, Inc. All Rights Reserved. <br />
							본 콘텐츠는 저작권법에 따라 보호받는 저작물로 저작권자 ㈜마크로젠의 동의 없이 무단으로 사용, 배포, 편집, 수정을 금지합니다.
						</h1>
					</div>

					<!-- 슬라이드 2 end -->
				</div>

				<div class="swiper-slide">슬라이드 3번입니다</div>


				<!-- 모달 팝업 시작 -->
				<div class="graphModal">
					<div class="graphModal_body">
						<div style="height:25px; margin-bottom: 20px;">
							<button type="button" class="graphModal_close" id="btn-close-popup">×</button>
							<h1>
								한국인 평균 변이 수 : 3개
							</h1>
						</div>
						<!-- 그래프 영역표시 -->
						<div style="height: 200px; width: 100%; border: 1px solid #d3d3d3; color: #d3d3d3;">그래프 영역</div>
					</div>
				</div>
				<!-- 모달 팝업 끝-->

			</div>

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

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

/* 스와이프 */
var mySwiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

/* 모달 팝업 */
const graphModal = document.querySelector('.graphModal');
const graphModal_scroll = document.querySelector('.graphModal_scroll');

const btnOpenPopup = document.querySelector('#btn-open-popup');
btnOpenPopup.addEventListener('click', () => {
	graphModal.style.display = 'block';
	graphModal_scroll.style.width = '100%';
	graphModal_scroll.style.height = '100%';
	graphModal_scroll.style.overflow = 'hidden';
});

const btnClosePopup = document.querySelector('#btn-close-popup');
btnClosePopup.addEventListener('click', () => {
	graphModal.style.display = 'none';
	graphModal_scroll.style.overflow = 'visible';
});
</script>
	
<?php include_once 'ctrl/config.db.close.php'; ?>