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

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />


		<meta http-equiv="X-UA-Compatible" content="ie=edge">


		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    	<!-- Link Swiper's CSS -->
    	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- <link rel="stylesheet" type="text/css" href="../css/promotion.css"> -->
		<link rel="stylesheet" type="text/css" href="../css/promotion_nanum.css">


		<!-- <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square-neo.css" rel="stylesheet"> -->

		
	</head>
	<body>

		<!--body 시작 -->
		<!-- 최상단 로고 및 지놈스토리 이동-->
		<div class="container mystory_area">
			<div class="logo_box">
				<div class="logo_white"></div>
			</div>
			<a href="#" class="mystory_iconArea">
				<div class="icon_box">
					<i class="mystory_icon"></i>
				</div>
			</a>
			<div class="mystory_name">김다은님의 지놈스토리</div>
		</div>

		<!-- 문의 구간 -->
		<div class="container container_qna">
				
				<select>
					<option value="" selected disabled hidden >문의 유형을 선택하세요</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<input type="text" name="input text" size="16" maxlength="30" placeholder="제목을 입력하세요. (필수)" />
				<textarea name="comment" rows="5" cols="50" word-break= break-word; placeholder="내용을 입력하세요. (필수)"></textarea>

				<div style="font-size: 14px; color: #9e9e9e; height: 50px; display: flex;">
					<a class="btn_file"></a>
					<p style="font-size: 14px; color: #9e9e9e; margin-left: 14px; line-height: 24px;">
						- 이미지 (jpg, jpge, gif, png) <br />
						- PDF 파일 첨부 (5M이하)
					</p>
				</div>
				<div class="btn_ok">문의 하기</div>

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