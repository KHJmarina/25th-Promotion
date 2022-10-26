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
		<div class="modal_scroll">

		<?php
		include_once "../header.php"; //navigation
		?>

		<!-- 당첨 시작 -->
		<div class="container" >
			<div class="return_main mt-130">
				<div class="backward_arrow"></div>
				<h1>
					반송 신청 전,<br />마지막으로 확인해주세요
				</h1>
			</div>
			<div class="return_cont mb-50">
				<div class="return_area">
					<input type="checkbox" id="checkbox1" />
					<label>키트 설명서 확인하기</label><br/>
				</div>
				<div class="return_area">
					<input type="checkbox" id="checkbox2" />
					<label>키트 고유번호 확인하기</label><br/>
					<div>
						<span>·</span>
						<h3>
							서비스 이용 문의를 위해 배송받은 키트의 고유번호와 아래 번호와 일치하는지 꼭 확인해주세요
						</h3>
					</div>
					<div class="kit_num">
						<h2>홍길동님의 키트 고유번호</h2>
						<p>MG20220000003</p>
					</div>
					<div class="kit_mark">
						<div class="mark"><span>!</span></div>
						<label style="display: inline-block;">키트 번호가 달라요</label>
					</div>
				</div>
				<div class="return_area">
					<input type="checkbox" id="checkbox3" />
					<label>반송 신청 준비하기</label><br/>
					<div>
						<span>·</span>
						<h3>
							지정 택배 반송 신청이 아닌 특송, 등기, 퀵서비스로 반송시 왕복택배비가 청구될 수 있으며, 반송 현황은 마이지놈스토리에서 조회할 수 없으니 참고 부탁드립니다.
						</h3>
					</div>
				</div>
				<div class="btn_ok" id="btn-open-popup">키트 반송 준비 완료</div>
			</div>
		</div>
		<!-- 당첨 끝-->
		
		<?php
		include_once "../footer.php";
		?>

		</div>
	</body>
</html>

<?php
include_once '../ctrl/config.db.close.php';
?>