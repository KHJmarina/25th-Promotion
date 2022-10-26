<?php
include_once "../ctrl/contents.php";
include_once "../ctrl/config.db.php";
include_once "../ctrl/config.session.user.php";
include_once "../ctrl/config.lang.php";
include_once "../ctrl/sessionAlive.php";

$_SESSION['user_email'] = 'cdffee1@naver.com';
$user_name = '테스트';
if(!isset($_SESSION['user_email']))
{
	echo '
	<script type="text/javascript">
		top.location.href="/user/login";
	</script>';
	exit;
}
?>
<html>
	<head>

		<?php
		include_once "../head_tag.php";
		//080312 jihan <head> 태그 내 부분은 head_tag.php 파일로 옮김
		?>
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- <link rel="stylesheet" type="text/css" href="../css/my_ko.css?ver=2"> -->
        <link rel="stylesheet" type="text/css" href="../css/promotion.css">
	</head>
	<body>
		<?php
          include_once "../header.php"; //navigation
		?>
		<!--body 시작 -->
		<div class="container pd_ver5">
			<div class="myPage_tit mt-130">
				<div class="txtBox_center">
					<h1 class="txt_tit">
						<span>김다은</span>님의 결과입니다
					</h1>
				</div>
				<div class="txtBox_center pb-30">
					<h2 class="txt_sub">결과지 파일의 비밀번호는 
						<span>출생년도 4자리</span>(ex.1990)입니다.
					</h2>
				</div>
			</div>
		</div>

		<div class="container bg_lightgray myPage_contArea pd_ver5">
			<div class="myPage_cont">
				<div class="myPage_area">
					<ul class="myPage_top">
						<li class="myPage_id">
							<span>KIT ID</span>
							1803460014616tes
						</li>
						<li class="myPage_date">2023/01/22</li>
					</ul>
					<ul class="myPage_center">
						<li class="img_area">
							<div class="mypage_icon"></div>
						</li>
						<li class="kit_txt">
							<div>
								<span>넷마블 힐러비</span>
							</div>
							<strong>MGS 더플러스 29</strong>
						</li>
						<li class="btn_middle btn_delivery">
							<span>배송중</span>
						</li>
					</ul>
					<ul class="myPage_bottom">
						<li class="btn_left">문의하기</li>
						<li class="btn_right">배송조회</li>
					</ul>
				</div>

				<div class="myPage_area">
					<ul class="myPage_top">
						<li class="myPage_id">
							<span>KIT ID</span>
							1803460014616tes
						</li>
						<li class="myPage_date">2023/01/22</li>
					</ul>
					<ul class="myPage_center">
						<li class="img_area">
							<div class="mypage_icon"></div>
						</li>
						<li class="kit_txt">
							<div>
								<span>넷마블 힐러비</span>
							</div>
							<strong>MGS 더플러스 29</strong>
						</li>
						<a class="btn_middle">
							<span class="btn_orange">리포트 보기</span>
						</a>
					</ul>
					<ul class="myPage_bottom">
						<li class="btn_left">문의하기</li>
						<li class="btn_right">
							<span>
								<div class="tab3_icon"></div>Download
							</span>
						</li>
					</ul>
				</div>

				<div class="myPage_area">
					<ul class="myPage_top">
						<li class="myPage_id">
							<span>KIT ID</span>
							1803460014616tes
						</li>
						<li class="myPage_date">2023/01/22</li>
					</ul>
					<ul class="myPage_center">
						<li class="kit_txt">
							<div>
								<span>넷마블 힐러비</span>
							</div>
							<strong>MGS 더플러스 69</strong>
						</li>
						<a class="btn_middle">
							<span class="btn_orange">리포트 보기</span>
						</a>
					</ul>
					<ul class="myPage_bottom">
						<li class="btn_left">문의하기</li>
						<li class="btn_right">
							<span>
								<div class="tab3_icon"></div>Download
							</span>
						</li>
					</ul>
				</div>

				<div class="myPage_link pt-10 pb-30">
					<div class="link_center">
						<a class="link_btn" href = '/my_question_list'>문의내역조회</a>
						<a class="link_btn" href = '/user/mod_user_info?doing=mod'>내 정보 수정</a>
					</div>
				</div>

			</div>
		</div>

		<div class="myInfo_link">
			<div class="link_center">
				<a href = '/user/mod_user_info?doing=withdraw'>회원탈퇴</a>
				<span></span>
				<a href = '/user/mod_user_info?doing=modPw'>비밀번호 변경</a>
			</div>
		</div>

		<!--body 끝-->
		<?php include_once "footer.php"; ?>
	</body>
	</html>



<script>
	$(document).ready(function(){
		<?
			 // 설문 종료 이후 사용자가 다운로드 버튼을 또 누르지 않아도 자동으로 리포트가 다운받아질수 있도록
			 // survice_survey_proc.php 에서 flag 값을 전달해줌
			 // flag 값이 바뀌면 새로고침 후 전달된 kitid의 다운로드 버튼을 자동으로 누름
		?>
		$('#report_download_flag').on('change', function() {
			var kitid = $(this).val();
			$("#my_table").load(window.location.href + " #my_table");

			setTimeout(function(){
				var button_id = 'download_' + kitid;
				$('#' + button_id).trigger('click');
			}, 500)
		})
	})
</script>
<?php include_once 'ctrl/config.db.close.php'; ?>

