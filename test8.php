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
		<link rel="stylesheet" type="text/css" href="../css/promotion.css">
		<?php //페이지 별 전용 css 호출 ?>
		<script src = '../js/jquery-1.9.1.js'></script>
		<script src="../js/wow.min.js"></script>
		<script>
				 new WOW().init();
		</script>
	</head>

	<body>
		<!-- <div class="modal_scroll"> -->

		<?php
		include_once "../header.php"; //navigation
		?>

		<!-- 당첨 시작 -->
		<div class="container bg_purple" >
			<div class="index_main mt-140">
				<h1>
					국내 1위 유전자 전문분석 
				</h1>
				<h2>
					마크로젠 25주년 프로모션
				</h2>
			</div>
		</div>
		<div class="container bg_purple" >
			<div class="index_feature">
				<div class="index_page bg_yellow">
					<div class="index_txt">
						<div class="tit">매일 1분간 선.착.순</div>
						<div class="sub">300명 무료</div>
					</div>
					<div class="index_icon_01"></div>
				</div>
			</div>
		</div>
		<div class="container bg_purple" >
			<div class="index_cont mb-50">
				<div class="btn_ok white">로그인</div>
				<div class="btn_ok clear">회원가입</div>
			</div>
		</div>
		<!-- 당첨 끝-->
		
		<?php
		include_once "../footer.php";
		?>

		<!-- </div> -->
	</body>
</html>

<?php
include_once '../ctrl/config.db.close.php';
?>