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

		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>

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
			<div class="apply_main mt-130">
				<div class="backward_arrow"></div>
				<h1>
					축 당첨!
				</h1>
				<h2>
					300명 선착순 당첨을 축하드려요~!
				</h2>
			</div>
			<ul class="apply_feature">
				<li>
					<div class="prize_icon">
						<em></em>
					</div>
				</li>
			</ul>
			<div class="apply_cont mb-50">
				<h1>
					축하해 ^O^
				</h1>
				<h2>
					배송지 등록은<br/>오늘 23시까지 등록해주세요
				</h2>
				<div class="btn_ok" id="btn-open-popup">팝업 확인용 버튼</div>
			</div>
		</div>
		<!-- 당첨 끝-->

		<!-- 선착순마감 시작 -->
		<div class="container" style="display:none;">
			<div class="apply_main mt-130">
				<div class="backward_arrow"></div>
				<h1>
					선착순 마감
				</h1>
				<h2>
					아쉽지만 내일 다시 도전해보아요!
				</h2>
			</div>
			<ul class="apply_feature">
				<li>
					<div class="close_icon">
						<em></em>
					</div>
				</li>
			</ul>
			<div class="apply_cont mb-50">
				<h1>
					도전해 'O'
				</h1>
				<h2>
					내일 아침 10시에<br/>다시 도전해주세요
				</h2>
				<div class="btn_ok">팝업 확인용 버튼</div>
			</div>
		</div>
		<!-- 선착순마감 끝-->

		<!-- 반송완료 시작 -->
		<div class="container" style="display:none;">
			<div class="apply_main mt-130">
				<div class="backward_arrow"></div>
				<h1>
					반송 완료
				</h1>
				<h2>
					키트 반송 신청이 완료되었어요!
				</h2>
			</div>
			<ul class="apply_feature">
				<li>
					<div class="return_icon">
						<em></em>
					</div>
				</li>
			</ul>
			<div class="apply_cont mb-50">
				<h1>
					방문 수거 예정
				</h1>
				<h2>
					방문 수거 예정이니 문 앞에 꼭 놔주세요<br/>반송 문의: 우체국택배(1588-1300)
				</h2>
				<div class="btn_ok">팝업 확인용 버튼</div>
			</div>
		</div>
		<!-- 반송완료 끝-->


		<!-- 모달 팝업 시작 -->
		<div class="modal">
			<div class="modal_body">
				<h1>
					팝업 타이틀
				</h1>
				<h2>
					내용 첫째줄<br/>내용 둘째줄
				</h2>
				<div class="btn_ok" id="btn-close-popup">확인</div>
			</div>
		</div>
		<!-- 모달 팝업 끝-->
		
		<?php
		include_once "../footer.php";
		?>

		</div>
	</body>
</html>

<?php
include_once '../ctrl/config.db.close.php';
?>



<script>
const modal = document.querySelector('.modal');
const modal_scroll = document.querySelector('.modal_scroll');

const btnOpenPopup = document.querySelector('#btn-open-popup');
btnOpenPopup.addEventListener('click', () => {
	modal.style.display = 'block';
	modal_scroll.style.width = '100%';
	modal_scroll.style.height = '100%';
	modal_scroll.style.overflow = 'hidden';
});

const btnClosePopup = document.querySelector('#btn-close-popup');
btnClosePopup.addEventListener('click', () => {
	modal.style.display = 'none';
	modal_scroll.style.overflow = 'visible';
});
</script>