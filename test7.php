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

		<?php
		include_once "../header.php"; //navigation
		?>

		<!-- 당첨 시작 -->
		<div class="container bg_violet" >
			<div class="before_main mt-130">
				<div class="logo_white"></div>
			</div>
			<div class="before_main">
				<h1>
					<span>DNA분석</span>을 통해<br />
					내 몸에 대한<br />
					<span>세밀한 특징</span>을<br />
					발견해보세요
				</h1>
			</div>
			<ul class="apply_feature">
				<li>
					<div class="before_img">
					</div>
				</li>
			</ul>
			<div class="before_cont mt-50 mb-50">
				<div class="txt_box">
					<h1>
						시작하기
					</h1>
				</div>
			</div>
		</div>
		<!-- 당첨 끝-->

		
		<?php
		include_once "../footer.php";
		?>

	</body>
</html>

<?php
include_once '../ctrl/config.db.close.php';
?>
