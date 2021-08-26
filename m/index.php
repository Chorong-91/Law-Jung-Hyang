<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/head.php"; ?>
<style type="text/css">
.layerPopup {position:absolute; top:10%; left:10%; width:80%; background:#111; z-index:5;}
.layerPopup img {width:100%; max-width:100%;}
.layerPopup .popupFooter {padding:10px; overflow:hidden;}
.layerPopup .popupFooter input,.layerPopup .popupFooter label {float:left; margin-top:3px;}
.layerPopup .popupFooter label {font-size:3vw; color:#fff; padding-left:5px; line-height:1em;}
.layerPopup .popupFooter a {float:right;}
.layerPopup .bx-wrapper {position:relative;}
.layerPopup .bx-controls {position:absolute; bottom:10px; left:0; width:100%; text-align:center; z-index:99999;}
.layerPopup .bx-controls .bx-pager-item {display:inline-block; padding:0 5px;}
.layerPopup .bx-controls .bx-pager-item a {display:block; width:12px; height:12px; font-size:0; background:#fff; border-radius:100%;}
.layerPopup .bx-controls .bx-pager-item a.active {background:#0078fe}
</style>
</head>
<body>
<div id="wrap" class="main_wrap">
	<!-- header -->
	<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/header.php"; ?>
	<!-- //header -->

	<!-- sideMenu -->
	<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/sideMenu.php"; ?>
	<!-- //sideMenu -->

	<!-- container -->
	<div id="container">
		<!-- 메인비주얼 -->
		<div id="mainVisual" class="mainVisual swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/main/mainVisual-1.jpg" alt="" /></a></div>
				<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/main/mainVisual-2.jpg" alt="" /></a></div>
				<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/main/mainVisual-3.jpg" alt="" /></a></div>
				<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/main/mainVisual-4.jpg" alt="" /></a></div>
				<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/main/mainVisual-5.jpg" alt="" /></a></div>
			</div>
			<div class="paging_navi mainVisualNavi">
			</div>
			<script type="text/javascript">
				var mainVisual = new Swiper('.mainVisual',{
					pagination: '.mainVisualNavi',
					autoplay:4000,
					loop:true,
					paginationClickable: true
				});
			</script>

			<!-- 탭메뉴 -->
			<div class="mainTab">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><a href="/m/sub/team/team01.php"><img src="/m/images/main/mainTab-1.png" alt="건설" /></a></div>
					<div class="swiper-slide"><a href="/m/sub/team/team02.php"><img src="/m/images/main/mainTab-2.png" alt="국방" /></a></div>
					<div class="swiper-slide"><a href="/m/sub/team/team03.php"><img src="/m/images/main/mainTab-3.png" alt="금융" /></a></div>
					<div class="swiper-slide"><a href="/m/sub/team/team04.php"><img src="/m/images/main/mainTab-4.png" alt="원자력" /></a></div>
					<div class="swiper-slide"><a href="/m/sub/team/team05.php"><img src="/m/images/main/mainTab-5.png" alt="의료" /></a></div>
					<div class="swiper-slide"><a href="/m/sub/team/team06.php"><img src="/m/images/main/mainTab-6.png" alt="이혼" /></a></div>
					<div class="swiper-slide"><a href="/m/sub/team/team07.php"><img src="/m/images/main/mainTab-7.png" alt="특허" /></a></div>
					<div class="swiper-slide"><a href="/m/sub/team/team08.php"><img src="/m/images/main/mainTab-8.png" alt="형사" /></a></div>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
			<script type="text/javascript">
				var mainTab = new Swiper('.mainTab',{
					autoplay:4000,
					slidesPerView: 3,
					slidesPerGroup: 3,
					nextButton: '.mainTab .swiper-button-next',
					prevButton: '.mainTab .swiper-button-prev',
					loop:true
				});
			</script>
			<!-- //탭메뉴 -->
		</div>
		<!-- //메인비주얼 -->

		<!-- 배너 -->
		<div class="mainBanner">
			<a href="/m/sub/team/teamMain.php"><img src="/m/images/main/mainBanner-1.jpg" alt="" /></a>
			<a href="tel:025358004"><img src="/m/images/main/mainBanner-2.jpg" alt="" /></a>
			<a href="/m/sub/lawyer/list.php"><img src="/m/images/main/mainBanner-3.jpg" alt="" /></a>
			<a href="javascript:;"><img src="/m/images/main/mainBanner-4.jpg" alt="" /></a>
			<a href="/m/sub/introduce/location.php"><img src="/m/images/main/mainBanner-5.jpg" alt="" /></a>
		</div>
		<!-- //배너 -->


		<!-- <div class="layerPopup" id="layer-20200420" style="z-index:5;">
			<a href="/bbs/board.php?bo_table=notice&wr_id=14"><img src="/img/popup/20200420.jpg"></a>
			<div class="popupFooter">
				<input type="checkbox" value="N" id="today" onclick="setCookie('layer-20200420', 'Y', 1); closePop('layer-20200420');" />
				<label for="today" onclick="setCookie('layer-20200420', 'Y', 1); closePop('layer-20200420');">오늘 하루 이 창을 띄우지않음</label>
				<a href="#" onclick="closePop('layer-20200420'); return false;"><img src="/img/popup/btn_close.gif" alt="닫기" /></a>
			</div>
		</div> -->

	</div>
	<!-- //container -->


		<script type="text/javascript">

		function setCookie( name, value, expiredays ){
			var todayDate = new Date();
			todayDate.setDate( todayDate.getDate() + expiredays );
			document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
		}

		function getCookie( name ){
			var nameOfCookie = name + "=";
			var x = 0;
			while ( x <= document.cookie.length ){
				var y = (x+nameOfCookie.length);
				if ( document.cookie.substring( x, y ) == nameOfCookie ) {
					if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 ){
						endOfCookie = document.cookie.length;
					}
					return unescape( document.cookie.substring( y, endOfCookie ) );
				}
				x = document.cookie.indexOf( " ", x ) + 1;
				if ( x == 0 ) break;
			}
			return "";
		}

		function closePop(name) {
			$('#'+name).hide();
			$('#'+name).remove();
		}

		if ( getCookie("layer-20200420") == "Y" ){
			closePop('layer-20200420');
		}
		</script>
	<!-- footer -->
	<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/footer.php"; ?>
	<!-- //footer -->
</div>


</body>
</html>
