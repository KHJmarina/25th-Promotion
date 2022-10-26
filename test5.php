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
	</head>
	<body>

		<!--body 시작 -->
		<!-- zeplin. 01_06_나의유전형 상세페이지(새창)_전체보기_그래프 없는 케이스 -->

		<!-- 새창 X버튼 있음-->
		<div class="container new_page">
			<span>와인 선호도</span>
			<button type="button" class="myInfo_close" id="guide-close-popup">×</button>
		</div>
		
		<div class="container detail_area">
			<!-- 상세 내용 -->
			<div class="mb-40">
				<h2 >
					<span>레드 와인을</span> <br /> 더 선호할 수 있어요
				</h2>
				<p>유전적으로 폴리페놀 성분이 풍부한 레드 와인에 대한 선호도가 높은 편입니다. 단, 섭취 시 아래 '당신을 위한 TIP'을 참고하여 섭취량을 조절해 주시기 바랍니다.</p>
				<h3>(유전변이 개수 그래프가 제시되지 않습니다.)</h3>
			</div>
			
			<!-- 와인 그래프 -->
			<div class="gene_circleBox">
				<div class="wine_circle white_wine">
					<div class="txt_cont">
						<span>화이트 <br /> 와인형</span>
					</div>
				</div>
				<div class="wine_circle red_wine">
					<div class="txt_cont">
						<span>레드 <br /> 와인형</span>
					</div>
				</div>
			</div>

		</div>

		<div class="container gene_area">
			<div class="gane_titArea">
				<h2>나의 유전형</h2>
				<span>불리한 유전인자</span>
				<i></i>
			</div>

			<ul>
				<li class="gene_galleryBox">
					<div class="txt_area">
						<div class="txt_list">
							<strong>뼈·연골형성 유전자</strong>
							<span>GDF5</span>
						</div>
					</div>
					<div class="gene_cont">
						<div class="genomic_color">
							<p>
								<span class="gene_basic">A</span>
								<span class="gene_basic">A</span>
							</p>
							<p class="gene_txt">낮음</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_red">A</span>
								<span class="gene_gray">G</span>
							</p>
							<p class="gene_txt">보통</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">G</span>
							</p>
							<p class="gene_txt">높음</p>
						</div>
					</div>
				</li>
				<li class="gene_galleryBox">
					<div class="txt_area">
						<div class="txt_list">
							<strong>아토피 피부염 감수성 관련 유전자</strong>
							<span>TMEM232</span>
						</div>
					</div>
					<div class="gene_cont">
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">G</span>
							</p>
							<p class="gene_txt">낮음</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">A</span>
							</p>
							<p class="gene_txt">보통</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_gray">A</span>
								<span class="gene_gray">A</span>
							</p>
							<p class="gene_txt">높음</p>
						</div>
					</div>
				</li>
			</ul>
			<ul>
				<li class="gene_galleryBox">
					<div class="txt_area">
						<div class="txt_list">
							<strong>타이로신 농도</strong>
							<span>LOC107986521 <br /> (SLC16A10)</span>
						</div>
					</div>
					<div class="gene_cont">
						<div class="genomic_color">
							<p>
								<span class="gene_basic">A</span>
								<span class="gene_basic">A</span>
							</p>
							<p class="gene_txt">낮음</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_red">A</span>
								<span class="gene_gray">G</span>
							</p>
							<p class="gene_txt">보통</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">G</span>
							</p>
							<p class="gene_txt">높음</p>
						</div>
					</div>
				</li>
				<li class="gene_galleryBox">
					<div class="txt_area">
						<div class="txt_list">
							<strong>아토피 피부염 감수성 관련 유전자</strong>
							<span>TMEM232</span>
						</div>
					</div>
					<div class="gene_cont">
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">G</span>
							</p>
							<p class="gene_txt">낮음</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">A</span>
							</p>
							<p class="gene_txt">보통</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_gray">A</span>
								<span class="gene_gray">A</span>
							</p>
							<p class="gene_txt">높음</p>
						</div>
					</div>
				</li>
			</ul>
			<ul>
				<li class="gene_galleryBox">
					<div class="txt_area">
						<div class="txt_list">
							<strong>뼈·연골형성 유전자</strong>
							<span>GDF5</span>
						</div>
					</div>
					<div class="gene_cont">
						<div class="genomic_color">
							<p>
								<span class="gene_basic">A</span>
								<span class="gene_basic">A</span>
							</p>
							<p class="gene_txt">낮음</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_red">A</span>
								<span class="gene_gray">G</span>
							</p>
							<p class="gene_txt">보통</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">G</span>
							</p>
							<p class="gene_txt">높음</p>
						</div>
					</div>
				</li>
				<li class="gene_galleryBox">
					<div class="txt_area">
						<div class="txt_list">
							<strong>아토피 피부염 감수성 관련 유전자</strong>
							<span>TMEM232</span>
						</div>
					</div>
					<div class="gene_cont">
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">G</span>
							</p>
							<p class="gene_txt">낮음</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_basic">G</span>
								<span class="gene_basic">A</span>
							</p>
							<p class="gene_txt">보통</p>
						</div>
						<div class="genomic_color">
							<p>
								<span class="gene_gray">A</span>
								<span class="gene_gray">A</span>
							</p>
							<p class="gene_txt">높음</p>
						</div>
					</div>
				</li>
			</ul>

			<div class="sub_txt">
				- 불리한 유전인자를 적게 가질수록 좋아요.
			</div>
		</div>

		<!-- 푸터 -->
		<div class="result_footer">
			<h1>본 검사 결과는 질병의 진단 및 치료의 목적으로 사용될 수 없으며, 의학적인 소견이 필요한 경우 의사와 상담하시기 바랍니다.</h1>
			<p>분석안내서</p>
			<h1>©Macrogen, Inc. All Rights Reserved. <br />
				본 콘텐츠는 저작권법에 따라 보호받는 저작물로 저작권자 ㈜마크로젠의 동의 없이 무단으로 사용, 배포, 편집, 수정을 금지합니다.
			</h1>
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
	
<?php include_once 'ctrl/config.db.close.php'; ?>


<style>
.gene_circleBox {
  vertical-align: middle;
  width: 100%;
  height: 100px;
  background: #fff;
}
.gene_circleBox .wine_circle {
  float: left;
  position: absolute;
  left: 50%;
  height: 100px;
  width: 100px;
  color: #9e9e9e;
  border-radius: 50%;
  text-align: center;
}
.gene_circleBox .wine_circle:before {
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  content: '';
}
.wine_circle.white_wine{
	background: #f3f3f3;
	transform: translateX(-97%);
}
.wine_circle.red_wine{
	background: #6645f2;
	transform: translateX(-3%);
}
.gene_circleBox .wine_circle .txt_cont {
  display: inline-block;
  vertical-align: middle;
  margin-left: -5px;
}
.wine_circle.white_wine .txt_cont span {
	color: #9e9e9e;
	font-weight: 500;
}
.wine_circle.red_wine .txt_cont span {
	color: #fff;
	font-weight: 500;
}
</style>