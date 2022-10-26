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

		<!-- 준비중 시작 -->
		<div class="container">
			<div class="apply_main mt-130">
				<div class="backward_arrow"></div>
				<h1>
					준비중
				</h1>
				<h2>
					조금만 기다려 주세요!
				</h2>
			</div>
			<ul class="apply_feature">
				<li>
					<div class="ready_icon">
						<em></em>
					</div>
				</li>
			</ul>
			<div class="ready_cont mb-50">
				<h2>
					무료 검사 신청 오픈까지
				</h2>
				<h1>
					00시 00분 00초 남음
				</h1>
				<div class="btn_ok">매일 오전 10:00 오픈</div>
			</div>
		</div>
		<!-- 준비중 끝-->

		<?php
		include_once "../footer.php";
		?>
	</body>
</html>
<?php
include_once '../ctrl/config.db.close.php';
?>
