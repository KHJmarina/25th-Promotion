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
				<div class="btn_ok" id="btn-open-popup">개인정보 입력 팝업</div>
			</div>
		</div>
		<!-- 당첨 끝-->


		<!-- 개인정보 입력 모달 팝업 시작 -->
		<div class="myInfo">
			<div class="myInfo_body">
				<button type="button" class="myInfo_close" id="btn-close-popup">×</button>
				<h1>
					<input type="checkbox" id="allCk" />전체 동의하기
				</h1>
				<h2>
					<div>
						<input type="checkbox" id="checkbox1" />
						<a class="myInfo_arrow" id="guide-open-popup"> ＞ </a>
						<label>[필수] 개인정보 수집 및 이용에 대한 동의</label><br/>
					</div>
					<div>
					<input type="checkbox" id="checkbox2" />
						<a class="myInfo_arrow"> ＞ </a>
						<label>[필수] 민감정보 수집 및 이용에 대한  동의</label><br/>
					</div>

					<div>
					<input type="checkbox" id="checkbox3" />
						<a class="myInfo_arrow"> ＞ </a>
						<label>[필수] 키트 반송 예약 서비스 이용</label><br/>
					</div>

					<div>
						<input type="checkbox" />
						<a class="myInfo_arrow"> ＞ </a>
						<label>[선택] 프로모션 알림 수신 동의</label><br/>
					</div>
					
				</h2>
				<div class="btn_ok" id="btn_ok">동의</div>
			</div>
		</div>
		<!-- 모달 팝업 끝-->


		<!-- 개인정보 상세보기 팝업 시작 -->
		<div class="guide_myInfo">
			<div class="guide_myInfo_body">
				<button type="button" class="myInfo_close" id="guide-close-popup">×</button>
				<div class="guide_main">
					<h2>
						개인정보 수집 및 이용에 대한 동의
					</h2>
				</div>
				<div class="guide_cont mb-50">
					<div>
						<div class="tit_cont">
							<h2>
								1. 개인정보 수집목적 및 이용목적
							</h2>
							<h2>
								가. 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산 콘텐츠 제공, 구매 및 요금 결제, 물품배송 또는 청구지 등 발송, 금융거래 본인 인증 및 금융 서비스
							</h2>
							<h2>
								나. 회원 관리 회원제 서비스 이용에 따른 본인 확인, 개인 식별, 불량회원의 부정 이용 방지와 비인가 사용방지, 가입 의사 확인, 연령확인, 만14세 미만 아동 개인정보 수집 시 법정 대리인 동의여부 확인, 불만처리 등 민원처리, 고지사항 전달
							</h2>
						</div>
						<div class="tit_cont">
							<h2>
								2. 수집하는 개인정보 항목: 이름, 생년월일, 성별, 로그인ID , 비밀번호, 자택 전화번호, 휴대전화번호, 이메일, 14세 미만 가입자의 경우 법정대리인의 정보
							</h2>
						</div>
						<div class="tit_cont">
							<h1>[개인특성과 유전자의 관계]</h1>
							<div>
								<div class="tit_cont">
									<h2>
										본 검사 서비스에서 제공하는 개인특성을 포함한 웰니스 항목은 아래 유전자 간의 복잡한 상호작용은 물론 유전자의 환경적 요소간의 상호작용의 결과물이라고 설명할 수 있습니다.
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="btn_ok" id="btn-open-popup">설명을 이해하고 검사 신청</div>
				</div>
			</div>
		</div>
		<!-- 팝업 끝-->
		
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
const guide_myInfo = document.querySelector('.guide_myInfo');
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

/* 개인정보 상세보기 팝업 열기 */
const guideOpenPopup = document.querySelector('#guide-open-popup');
guideOpenPopup.addEventListener('click', () => {
	guide_myInfo.style.display = 'block';
	modal_scroll.style.width = '100%';
	modal_scroll.style.height = '100%';
	modal_scroll.style.overflow = 'hidden';
});
/* 개인정보 상세보기 팝업 닫기 */
const guideClosePopup = document.querySelector('#guide-close-popup');
guideClosePopup.addEventListener('click', () => {
	/* 팝업 닫기 */
	guide_myInfo.style.display = 'none';
	modal_scroll.style.overflow = 'visible';
});

</script>