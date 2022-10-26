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
			<div class="guide_main mt-130">
				<div class="backward_arrow"></div>
				<h1>
					알려드립니다
				</h1>
			</div>
			<ul class="tabs">
				<li class="guide_tab on" data-tab="tab-1">검사 신청/취소</li>
				<li class="guide_tab" data-tab="tab-2">키트 배송/반송</li>
			</ul>
			<!-- 검사 신청 -->
			<div id="tab-1" class="tab_cont on">
				<div class="guide_cont">
					<h1>
						검사 신청 안내
					</h1>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								마크로젠 유전자 검사는 무료 서비스로 회원 1명당 1번의 검사 기회(타액 채취 키트 1개+분석1회)만 제공됩니다.
							</h2>
						</div>
					</div>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								단, 정상적으로 타액 채취가 되었으나 분석개시 이후 타액 내 DNA 양이 분석 기준에 충족하지 못할 경우 분석기관의 판단에 따라  추가 1회까지 키트를 재발송해드립니다.<br/>
								(재발송 대상 SMS로 별도 안내 예정)
							</h2>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								1회 재채취 이후에도 추가 채취가 필요한 경우 2회 이상<br />
								키트 재배송 불가
							</h3>
						</div>
					</div>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								고객 과실로 키트가 오염되거나 분실 된 경우 키트를 재발송해드리기 어려우며, 이후 검사 진행이 어려운 점 유의해주세요.
							</h2>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								키트 수령 주소 오입력
							</h3>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								키트 수령 이후 부터~ 택배사 회수 전까지 택배사 과실이 아닌 본인 과실로 키트가 분실되었을 경우 (ex. 택배 반송시, 반송 지정일에 지정 회수 장소에 물품이 없을 경우)
							</h3>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								보존액을 일부만 섞어서 보낼 경우
							</h3>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								뚜껑을 제대로 닫지 않아 타액이 새버린 경우
							</h3>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								채취한 타액을 본인 키트가 아닌 타인 키트 박스에 포장하여 분석 기관에 보냈을 경우
							</h3>
						</div>
					</div>
				</div>
				<div class="guide_cont">
					<h1>
						검사 취소 안내
					</h1>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								검사 취소는 신청 당일 오후 23시 59분까지만 가능합니다. 
							</h2>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								당일 내 배송지 등록이 되지 않으면 자동 취소됩니다.
							</h3>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								검사 취소시 익일 오전 10시부터 다시 신청할 수 있습니다.
							</h3>
						</div>
					</div>
				</div>
				<div class="guide_cont">
					<h1>
						검사 문의 안내
					</h1>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								이벤트 및 검사에 대한 문의 사항이 있으시면 마크로젠 서비스관리부(02-2180-7220)로 연락주세요.
							</h2>
						</div>
					</div>
				</div>
				<div class="btn_ok">문의하기</div>
			</div>

			<!-- 키트 배송 -->
			<div id="tab-2" class="tab_cont">
				<div class="guide_cont">
					<h1>
						키트 배송 안내
					</h1>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								우체국 택배로 신청시 입력한 주소로 배송되며, 배송비는 마크로젠이 부담합니다.
							</h2>
						</div>
					</div>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								키트 출고 이후 배송 관련 문의는 우체국 택배 고객센터로 문의해주세요.
							</h2>
						</div>
					</div>
				</div>
				<div class="guide_cont">
					<h1>
						키트 반송 안내
					</h1>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								우체국 택배 반송 접수만 가능합니다.
							</h2>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								단, 키트 수령일로부터 30일이 지났을 경우 우체국 택배의 방문 반송 접수가 불다능하여, 마크로젠에서 반송접수가 어렵습니다. 
							</h3>
						</div>
					</div>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								우체국 택배로 반송시 배송비는 마크로젠이 부담합니다. 타 택배사, 퀵, 튿송 등으로 반송시 배송비 부과되며 검사 진행이 어려우니 유의해주세요.
							</h2>
						</div>
						<div class="sub_cont">
							<span>-</span>
							<h3>
								단, 파업 등으로 우체국택배 이용 불가시에는 (사이트 내 별도 고지예정) 타 택배사 착불 택배로 반송 가능하며 배송비는 마크로젠이 부담합니다. 이 경우에도 퀵 또는 특송으로 반송시 배송비를 부과하며 검사 진행이 어렵습니다.
							</h3>
						</div>
					</div>
					<div>
						<div class="tit_cont">
							<span>·</span>
							<h2>
								우체국 택배 반송 접수 이후 반송일/장소 변경 및 취소 관련 문의는 우체국 택배 고객센터로 문의해주세요.
							</h2>
						</div>
					</div>
				</div>
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
$(document).ready(function(){
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('on');
		$('.tab_cont').removeClass('on');

		$(this).addClass('on');
		$("#"+tab_id).addClass('on');
	})
})
</script>