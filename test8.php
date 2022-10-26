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

        <!-- <link rel="stylesheet" type="text/css" href="../css/promotion.css"> -->
		<link rel="stylesheet" type="text/css" href="../css/promotion_nanum.css">
	</head>
	<body>

		<!--body 시작 -->
		<!-- zeplin. 01_06_나의유전형 상세페이지(새창)_전체보기_1형 -->

		<!-- 새창 X버튼 있음-->
		<div class="container new_page">
			<span>분석 안내서</span>
			<span class="ver">(버전 DTC_V4.0)</span>
			<button type="button" class="myInfo_close" id="guide-close-popup">×</button>
		</div>
		
		<div class="container info_white mt-56">
			<div class="mb-40">
				<ul style="">
					<li style="">리포트 코드</li>
					<li style="">0000000</li>
				</ul>
				<ul>
					<li>검체적합성</li>
					<li>적합</li>
				</ul>
				<ul>
					<li>검사방법</li>
					<li>Microarray Chip</li>
				</ul>
				<ul>
					<li>버전</li>
					<li>DTC_V4.0</li>
				</ul>
				<ul>
					<li>검체접수일 및 종류</li>
					<li>2020.11.02 (타액)</li>
				</ul>
				<ul>
					<li>결과 보고일</li>
					<li>2020.11.11</li>
				</ul>
			</div>
			<dl>
				<dt>정도관리 결과 안내</dt>
				<dd>본 검사는 microarray 내 심어진 SNP marker의 각 allele별 signal을 이용하여 유전형을 판독하는 검사로써, 매 검사 시 chip control probe 결과를 확인하여 검사 과정에 문제가 없었는지 확인하고 있습니다.</dd>
			</dl>
		</div>

		<div class="container info_lightgray">
			<dl>
				<dt>내부정도관리 결과</dt>
				<dd>본 검사 대상물은 마크로젠 분자유전검사실 내부정도관리 지침에 따른 기준을 통과하였습니다.</dd>
			</dl>
			<dl>
				<dt>외부정도관리 결과</dt>
				<dd>마크로젠 분자유전검사실은 한국유전자검사평가원에서 연 2회 시행하는 외부정도관리를 통해 검사과정의 품질관리가 매우 우수함을 의미하는 A등급을 획득하여 엄격히 관리되고 있습니다.</dd>
			</dl>
		</div>

		<div class="container info_whiteLine">
			<table>
				<tbody>
					<tr>
						<th rowspan="2">QC Result</th>
						<td>passed</td>
						<td>failed</td>
					</tr>
					<tr>
						<td style="">&#128504;</td>
						<td></td>	
					</tr>
				</tbody>
			</table>
		</div>

		<div class="container info_white">
			<dl>
				<dt>검사실 책임자 확인</dt>
				<dd>본 검사대상물은 질병관리본부의 관리 감독을 받는 ‘유전체분석 전문기업 마크로젠’의 숙련된 검사 담당자에 의해 소중히 다루어지며, 검사실 내·외부정도관리 지침에 따른 기준을 통과하여 위와 같이 결과를 보고합니다.</dd>
			</dl>
			<div class="sign_area">
				<div class="sign_imgArea">
					<div class="sign_01"></div>
				</div>
				<div class="sign_imgArea">
					<div class="sign_02"></div>
				</div>
			</div>
			<div class="sign_area">
				<div class="sign_imgArea"></div>
				<div class="sign_imgArea">
					<div class="sign_03"></div>
				</div>
			</div>
		</div>

		<div class="container info_lightgray">
			<p><span>·</span>본 검사는 보험비등재 조제시약(검사실 자체 개발 검사) 검사입니다.</p>
			<p><span>·</span>본 검사는 마이크로어레이 기술에 기반하고 있으며 검사항목에 필요한 유전자형을 정확도 100%로 분석해냄을 표준물질에 대해 표준기술로써 검증하였습니다.</p>
			<p><span>·</span>본 검사 결과는 질병의 진단 및 치료의 목적으로 사용될 수 없으며, 의학적인 소견이 필요한 경우 의사와 상담하시기 바랍니다.</p>
		</div>
		
		<div class="container info_white">
			<dt>검사실 정보</dt>
			<div class="macrogen_info" style="width:100%; margin: auto;">
				<i>
					<div class="macrogen_CI"></div>
				</i>
				<p style="">
					보건복지부 제 47호 유전자 검사기관 <br />
					(주)마크로젠 분자유전검사실<br />
					서울시 금천구 벚꽃로 254, 11층<br />
					02-2180-7174
				</p>
			</div>
		</div>		
		<!--body 끝-->

		<?php include_once "footer.php"; ?>
	</body>
</html>
	
<?php include_once 'ctrl/config.db.close.php'; ?>

