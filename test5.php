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
			<div class="apply_main mt-130">
				<div class="backward_arrow"></div>
				<h1>
					신청 완료
				</h1>
				<h2>
					유전자 검사 신청이 완료되었어요!
				</h2>
			</div>
			<ul class="apply_feature">
				<li>
					<div class="package_icon">
						<em></em>
					</div>
				</li>
			</ul>
			<div class="apply_cont mb-50">
				<h1>
					키트 배송 준비중
				</h1>
				<h2>
				평일 1~2일 이내 도착 예정<br/>(공휴일/휴무일 제외)
				</h2>
			</div>
			<div class="apply_cont mb-50">
				<h3>
					이후 진행 과정을 알려드려요!
				</h3>
				<div class="order_area">
					<div class="order_num">
						<span>1</span>
					</div>
					<div class="order_txt">
						<h4>배송 받은 후 키트 번호와 구성품을 확인해주세요</h4>
					</div>
				</div>
				<div class="order_area">
					<div class="order_num">
						<span>2</span>
					</div>
					<div class="order_txt">
						<h4>동의서를 작성해주신 후 타액을 채취해주세요</h4>
					</div>
				</div>
				<div class="order_area">
					<div class="order_num">
						<span>3</span>
					</div>
					<div class="order_txt">
						<h4>키트를 반송해주세요</h4>
						<h5>반송 신청 후 2일 이내 수거예정</h5>
					</div>
				</div>
				<div class="order_area">
					<div class="order_num">
						<span>4</span>
					</div>
					<div class="order_txt">
						<h4>분석 결과를 확인해주세요</h4>
						<h5>반송 완료 후 2주 뒤 확인가능</h5>
					</div>
				</div>
				<div class="btn_ok" id="btn-open-popup">확인</div>
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



<script>

/* 개인정보확인 팝업 열기 */
const myInfo = document.querySelector('.myInfo');
const modal_scroll = document.querySelector('.modal_scroll');

const btnOpenPopup = document.querySelector('#btn-open-popup');
btnOpenPopup.addEventListener('click', () => {
	myInfo.style.display = 'block';
	modal_scroll.style.width = '100%';
	modal_scroll.style.height = '100%';
	modal_scroll.style.overflow = 'hidden';
});

/* 개인정보확인 팝업 닫기 */
const btnClosePopup = document.querySelector('#btn-close-popup');
btnClosePopup.addEventListener('click', () => {
	/* 팝업 닫기 */
	myInfo.style.display = 'none';
	modal_scroll.style.overflow = 'visible';
	/* 체크박스 해제 */
	$('input:checkbox').prop('checked',false);
	/* 버튼색 비활성화 */
	document.getElementById('btn_ok').style.background = '#9e9e9e';
});

/* checkbox 전체 체크 */
$('#allCk').click(function(){
	var checked = $('#allCk').is(':checked');
	if(checked)
		$('input:checkbox').prop('checked',true);
		document.getElementById('btn_ok').style.background = '#5900dc';
});

</script>