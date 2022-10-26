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

    <script type="text/javascript" src="/events/sandbox_js/jquery.rwdImageMaps.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="../css/animate.css">

    <!-- <link rel="stylesheet" type="text/css" href="../css/sandbox_dtc.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/promotion.css">

</head>
<body>
<?php
include_once "../header.php"; //navigation
?>
<!--body 시작 -->
<div class="container p-lr">
    <div class="promotion_main mt-100">
        <div class="event_mainTit"></div>
        <!-- <dt></dt>
        <h3>
            유전자 분석 최다 항목 69종
        </h3>
        <h4>(세부항목73)</h4>
        <h2>
            더플러스 ALL IN ONE<br>전액 무료
        </h2> -->
    </div>
    <dl class="pro_intro">
        <div class="main_package"></div>
    </dl>
</div>

<!-- 카드 슬라이드 영역 -->
<div class="card_container bg_gray">
    <div class="slider-wrap">
        <div class="swiper mySwiperCard">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="card_view card_color1">
                      <p>유전자 시퀀싱 전문기업</p>
                      <div class="tit">한국 1위 /세계 5위<br />글로벌 지놈센터 운영</div>
                      <div class="sub">( 8개국가 )</div>
                      <div class="icon_box">
                        <div class="slide_icon_01"></div>
                      </div>
                  </div>
                </div>
                <div class="swiper-slide">
                <div class="card_view card_color2">
                      <p>한국인 특화 유전자 검사</p>
                      <div class="tit">세계 최고 정밀도를 인정받은<br />한국인 표준 게놈 수립</div>
                      <div class="sub">( Nature. 2016 Oct 13 )</div>
                      <div class="icon_box">
                        <div class="slide_icon_02"></div>
                      </div>
                  </div>
                </div>
                <div class="swiper-slide">
                <div class="card_view card_color3">
                      <p>믿을 수 있는 개인정보</p>
                      <div class="tit">유전체 분석 업계 최초<br />개인정보보호 관리체계 인증</div>
                      <div class="sub">( ISMS-P )</div>
                      <div class="icon_box">
                        <div class="slide_icon_03"></div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</div>


<!-- 리포트 키 가로 스와이프 -->
<div class="container">
    <div class="report_intro">
        <!-- <div>
			<h1>
				#커피에 대한 진심
			</h1>
			<h2>
				카페인 의존성
			</h2>
		</div> -->

		<div class="swiper-container mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="sample_icon_01"></div>
				</div>
				<div class="swiper-slide">
					<div class="sample_icon_02"></div>
				</div>
				<div class="swiper-slide">
					<div class="sample_icon_03"></div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-scrollbar"></div>
		</div>
		
		<div>
			<a class="report_detail" href="javascript:;">리포트 자세히 보기</a>
		</div>

    </div>
</div>

<!-- 동영상 -->
<div class="container bg_gray">
    <div class="video_intro">
        <!-- <h1>
            검사 키트 동영상 가이드
        </h1> -->
        <div class="testKit_guide"></div>
        <div class="video_area">
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-mcS3A6r53E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <h2>버튼 클릭시 영상이 재생됩니다</h2>
    </div>
</div>

<div class="container">
    <div class="banner_area">
        <div class="main_banner"></div>
    </div>
</div>

<!-- QNA -->
<div class="container sandbox_qna mb-50">
    <div class="sec_faq container-fluid">
        <div class="panel-group" id="faqAccordion" ng-init = "selectedTab = 'all'">
            <h3>
                <?php
                // 자주하는 질문들
                if ($userLang == 'ko')
                {
                    echo "자주 찾는 질문";
                }
                ?>
            </h3>

            <div id="loadtext"> </div>
            <script type="text/javascript">
                //디폴트
                $(document).ready(function() {
                    String.prototype.replaceAll = function(org, dest) {
                        return this.split(org).join(dest);
                    }
                    $.ajax({
                        type: "post",
                        url: "/ctrl/getBbs.php?from=healthy_songdo_start",
                        data: {'category': "" , 'bbsName' : "faq", 'userLang' : "<?php echo $userLang;?>" },
                        cache: false,
                        success: function(data) {
                            var data_trim = data.replaceAll("healthy_songdo_start?selectLang=ko","").trim();
                            $("#loadtext").html(data_trim);
                        }
                    });
                });

                //a 태그 클릭시
                $('a').click(function() {
                    var category = $( this ).attr('id');
                    $.ajax({
                        type: "post",
                        url: "/ctrl/getBbs.php?from=healthy_songdo_start",
                        data: {'category': category , 'bbsName' : "faq" , 'userLang' : "<?php echo $userLang;?>" },
                        cache: false,
                        success: function(data) {
                            var data_trim = data.replaceAll("healthy_songdo_start?selectLang=ko","").trim();
                            $("#loadtext").html(data_trim);
                        }
                    });
                });
            </script>
        </div>
        <hr/>
		<div class="btn_ok" id="btn-open-popup">신청하기</div>
    </div>

</div>
<?php
include_once "../footer.php";
?>
</body>
</html>
<?php
include_once '../ctrl/config.db.close.php';
?>





<script>
var swiper_card = new Swiper(".mySwiperCard", {
spaceBetween: 30,
centeredSlides: true,
autoplay : {  // 자동 슬라이드 설정 , 비 활성화 시 false
  delay : 3000   // 시간 설정
},
pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type : 'bullets', // 버튼 모양 결정 "bullets", "fraction"
},
// navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
// },
});



/* 하단 커피에 대한 진심 스와이프 부분 */
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1, // 한 슬라이드만 출력
  // pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true, // 페이지네이션 버튼 클릭시 스와이프 작동
  // },
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
  },
  breakpoints: {
    768: {
        slidesPerView: 1, // 한 화면에 한개의 슬라이드 출력
        centeredSlides: true, // 첫번째 슬라이드가 가운데에 오도록 설정
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    },
  },
});
</script>


