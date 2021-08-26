<?
	include("_common.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php"; ?>
<? include_once(G5_LIB_PATH.'/latest.lib.php'); ?>
<script type="text/javascript">
jQuery(function(){

	$(window).bind('load resize', function(){
		var mainMenu = $('.mainMenu').height();
		var mgt = $(window).height()-mainMenu;
		var mvH = $(window).height()-96;
		$('#contents').css('margin-top',mgt);
		$('.mainVisual,.mainVisual li,.mainVisual li img, .mainVisual .bx-viewport').css('height',mvH);
	});

	$(window).bind('scroll', function(){
		var headerH = $('#header').height();
		var visualH = $('.mainVisual').height();
		if ($(window).scrollTop() >= headerH+visualH-170) {
			$('.mainMenu').addClass('top').css({'position':'fixed', 'top':'96px', 'background':'#fff'});
		}
		else {
			$('.mainMenu').removeClass('top').css({'position':'absolute', 'top':'0', 'background':'none'});
		}
	});

});
</script>
<style type="text/css">
.layerPopup {position:absolute; top:96px; left:0px; background:#111; z-index:5;}
.layerPopup .popCont {display:none; position:absolute; top:0; right:-800px;}
.layerPopup .popCont.on {display:block;}
.layerPopup .popupFooter {padding:10px; overflow:hidden;}
.layerPopup .popupFooter input,.layerPopup .popupFooter label {float:left; margin-top:3px;}
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
	<div class="wrapper">

		<!-- container -->
		<div id="container">

			<!-- header -->
			<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
			<!-- //header -->

			<div class="mainVisual">
				<ul>
					<li style="background:url(/images/main/mainVisual-1.jpg) center no-repeat;"><a href="javascript:;"><img src="/images/main/mainVisual.png" alt="" /></a></li>
					<li style="background:url(/images/main/mainVisual-2.jpg) center no-repeat;"><a href="javascript:;"><img src="/images/main/mainVisual.png" alt="" /></a></li>
					<li style="background:url(/images/main/mainVisual-3.jpg) center no-repeat;"><a href="javascript:;"><img src="/images/main/mainVisual.png" alt="" /></a></li>
					<li style="background:url(/images/main/mainVisual-4.jpg) center no-repeat;"><a href="javascript:;"><img src="/images/main/mainVisual.png" alt="" /></a></li>
					<li style="background:url(/images/main/mainVisual-5.jpg) center no-repeat;"><a href="javascript:;"><img src="/images/main/mainVisual.png" alt="" /></a></li>
				</ul>
				<script type="text/javascript">
					$(document).ready(function(){
						$('.mainVisual ul').bxSlider({
							auto: true,
							controls: false,
							stopAutoOnClick: false,
							mode : 'fade'
						});
					});
				</script>
			</div>

			<!-- content -->
			<div id="contents">
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">
					<div class="mainMenu">
						<ul class="hover">
							<li><a href="/sub/center/realestate.php"><img src="/images/main/mainMenu-8.png" alt="" /></a></li>
							<li><a href="/sub/center/military.php"><img src="/images/main/mainMenu-3.png" alt="" /></a></li>
							<li><a href="/sub/center/insurance.php"><img src="/images/main/mainMenu-5.png" alt="" /></a></li>
							<li><a href="/sub/center/energy.php"><img src="/images/main/mainMenu-2.png" alt="" /></a></li>
							<li><a href="/sub/center/medical.php"><img src="/images/main/mainMenu-6.png" alt="" /></a></li>
							<li><a href="/sub/center/divorce.php"><img src="/images/main/mainMenu-4.png" alt="" /></a></li>
							<li><a href="/sub/center/business.php"><img src="/images/main/mainMenu-7.png" alt="" /></a></li>
							<li><a href="/sub/center/criminal.php"><img src="/images/main/mainMenu-1.png" alt="" /></a></li>
						</ul>
					</div>

					<div class="mainRolling">
						<ul>
							<li>
								<a href="/sub/team/lawyer16.php"><img src="/images/main/mainRolling-2.png" alt="차철순" /></a>
								<a href="/sub/team/lawyer04.php"><img src="/images/main/mainRolling-1.png" alt="유진영" /></a>
								<a href="/sub/team/lawyer06.php"><img src="/images/main/mainRolling-3.png" alt="차성원" /></a>
								<a href="/sub/team/lawyer02.php"><img src="/images/main/mainRolling-4.png" alt="고승우" /></a>
								<a href="/sub/team/lawyer08.php"><img src="/images/main/mainRolling-5.png" alt="강호석" /></a>
							</li>
							<li>
								<a href="/sub/team/lawyerKHC.php"><img src="/images/main/mainRolling-6.png" alt="권홍철" /></a>
								<a href="/sub/team/lawyer09.php"><img src="/images/main/mainRolling-9.png" alt="김태균" /></a>
								<a href="/sub/team/lawyer11.php"><img src="/images/main/mainRolling-11.png" alt="엄정웅" /></a>
								<a href="/sub/team/lawyer12.php"><img src="/images/main/mainRolling-13.png" alt="조성구" /></a>
								<a href="/sub/team/lawyerLRH.php"><img src="/images/main/mainRolling-LRH.png" alt="이래훈" /></a>
							</li>
							<li>
								<a href="/sub/team/lawyerPGH.php"><img src="/images/main/mainRolling-PGH.png" alt="박건호" /></a>
								<a href="/sub/team/lawyerASH.php"><img src="/images/main/mainRolling-ASH.png" alt="안세훈" /></a>
								<a href="/sub/team/lawyerYJH.php"><img src="/images/main/mainRolling-YJH.png" alt="윤준호" /></a>
								<a href="/sub/team/lawyerPJH.php"><img src="/images/main/mainRolling-PJH.png" alt="박진현" /></a>
								<a href="/sub/team/lawyerJDS.php"><img src="/images/main/mainRolling-JDS.png" alt="장두식" /></a>
							</li>
							<li>
								<a href="sub/team/lawyerKYR.php"><img src="/images/main/mainRolling-KYR.png" alt="김예림" /></a>
								<a href="sub/team/lawyerKHK.php"><img src="/images/main/mainRolling-KHK.png" alt="김혜겸" /></a>
								<a href="sub/team/lawyerKHC2.php"><img src="/images/main/mainRolling-KHC2.png" alt="김호철" /></a>
								<a href="sub/team/lawyerNYS.php"><img src="/images/main/mainRolling-NYS.png" alt="남윤석" /></a>
								<a href="sub/team/lawyerMKH.php"><img src="/images/main/mainRolling-MKH.png" alt="민경현" /></a>
							</li>
							<li>
								<a href="sub/team/lawyerPJS.php"><img src="/images/main/mainRolling-PJS.png" alt="박재성" /></a>
								<a href="sub/team/lawyerBMW.php"><img src="/images/main/mainRolling-BMW.png" alt="방민우" /></a>
								<a href="sub/team/lawyerSGY.php"><img src="/images/main/mainRolling-SGY.png" alt="송가영" /></a>
								<a href="sub/team/lawyerYBH2.php"><img src="/images/main/mainRolling-YBH2.png" alt="윤보형" /></a>
								<a href="sub/team/lawyerYJINH.php"><img src="/images/main/mainRolling-YJINH.png" alt="윤진호" /></a>

							</li>
							<li>
								<a href="sub/team/lawyerLSH.php"><img src="/images/main/mainRolling-LSH.png" alt="이상호" /></a>
								<a href="sub/team/lawyerLYW.php"><img src="/images/main/mainRolling-LYW.png" alt="이여원" /></a>
								<a href="sub/team/lawyerLHM.php"><img src="/images/main/mainRolling-LHM.png" alt="이한명" /></a>
								<a href="sub/team/lawyerIJY.php"><img src="/images/main/mainRolling-IJY.png" alt="임정엽" /></a>
								<a href="sub/team/lawyerJEJ.php"><img src="/images/main/mainRolling-JEJ.png" alt="정은주" /></a>

							</li>
							<li>
								<a href="sub/team/lawyerJJY2.php"><img src="/images/main/mainRolling-JJY2.png" alt="정재영" /></a>
								<a href="sub/team/lawyerCYH.php"><img src="/images/main/mainRolling-CYH.png" alt="최용희" /></a>
								<a href="sub/team/lawyerCWG.php"><img src="/images/main/mainRolling-CWG.png" alt="최원기" /></a>


							</li>


						</ul>
						<script type="text/javascript">
							$(document).ready(function(){
								$('.mainRolling ul').bxSlider({
									auto: true,
									stopAutoOnClick: false,
									touchEnabled : (navigator.maxTouchPoints > 0),
									pager: false
								});
								$('.mainRolling li a').hover(function(){
									var onImg = $(this).find('img').attr('src').replace('.png','_hover.png');
									$(this).find('img').attr('src',onImg);
								},function(){
									var offImg = $(this).find('img').attr('src').replace('_hover.png','.png');
									$(this).find('img').attr('src',offImg);
								});
							});
						</script>
					</div>

					<div class="mainContents">
						<ul>
							<li><a href="/sub/center/divorce.php"><img src="/images/main/mainContents-1.jpg" alt="" /></a></li>
							<li><img src="/images/main/mainContents-2.jpg" alt="" /></li>
							<li><a href="/sub/introduce/contribute.php"><img src="/images/main/mainContents-3.jpg" alt="" /></a></li>
							<li><img src="/images/main/mainContents-4.jpg" alt="" /></li>
							<li><a href="/sub/introduce/location.php"><img src="/images/main/mainContents-5.jpg" alt="" /></a></li>
						</ul>
					</div>

					<div class="mainBoard">
						<div class="inner">
							<div class="boardList">
								<h2><a href="/bbs/board.php?bo_table=notice">공지사항 <span><img src="/images/main/btnMore.gif"></span></a></h2>
								<ul>
									<?
								        echo latest("basic", "notice",5, 25);
									?>
								</ul>
							</div>

							<div class="boardList">
								<h2><a href="/bbs/board.php?bo_table=newsletter">뉴스레터 <span><img src="/images/main/btnMore.gif"></span></a></h2>
								<ul>
									<?
								        echo latest("basic", "newsletter",5, 25);
									?>
								</ul>
							</div>

							<div class="boardList">
								<h2><a href="/bbs/board.php?bo_table=recent">최근업무사례 <span><img src="/images/main/btnMore.gif"></span></a></h2>
								<ul>
									<?
								        echo latest("basic", "recent",5, 25);
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- ===================== //내용 ===================== -->
			</div>
			<!-- //content -->

			<!-- footer -->
			<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>
			<!-- //footer -->

		</div>
		<!-- //container -->
	</div>
</div>




<!-- <div class="layerPopup" id="layer-20200420" style="width:400px; z-index:99;">
	<a href="/bbs/board.php?bo_table=notice&wr_id=14"><img src="/img/popup/20200420.jpg"></a>
	<div class="popupFooter">
		<input type="checkbox" value="N" id="today" onclick="setCookie('layer-20200420', 'Y', 1); closePop('layer-20200420');" />
		<label for="today" onclick="setCookie('layer-20200420', 'Y', 1); closePop('layer-20200420');"><img src="/img/popup/label_today.gif" alt="오늘 하루 열지않기" /></label>
		<a href="#" onclick="closePop('layer-20200420'); return false;"><img src="/img/popup/btn_close.gif" alt="닫기" /></a>
	</div>
</div> -->



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


</body>
</html>
