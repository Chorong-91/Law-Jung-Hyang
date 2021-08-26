<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php"; ?>
<style type="text/css">
.interior {width:850px; margin:0 auto;}
.interior #bx-pager {overflow:hidden; margin-top:60px;}
.interior #bx-pager a {float:left; margin-right:25px; margin-bottom:25px;}
.interior #bx-pager a.mr0 {margin-right:0;}
</style>
</head>
<body>
<div id="wrap" class="sub_wrap">
	<div class="wrapper">
		
		<!-- container -->
		<div id="container">

			<!-- header -->
			<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
			<!-- //header -->

			<!-- content -->
			<div id="contents">
				<div class="subVisual" style="background:url(/images/sub/introduce/introduce-visual.jpg) center no-repeat;">
					<?php include $_SERVER['DOCUMENT_ROOT']."/sub/introduce/subTab.php"; ?>
				</div>
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">
					<div class="subWrap">
						<img src="/images/sub/introduce/interior.jpg" alt="" />

						<div class="interior">
							<ul>
								<li><img src="/images/sub/introduce/interior/1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/interior/2.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/interior/3.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/interior/4.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/interior/5.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/interior/6.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/interior/7.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/interior/8.jpg" alt="" /></li>
							</ul>
							<div id="bx-pager" style="z-index:9999; width:675px; margin:65px auto 0;">
								<a data-slide-index="0" href=""><img src="/images/sub/introduce/interior/thumb-1.jpg"></a>
								<a data-slide-index="1" href=""><img src="/images/sub/introduce/interior/thumb-2.jpg"></a>
								<a data-slide-index="2" href=""><img src="/images/sub/introduce/interior/thumb-3.jpg"></a>
								<a data-slide-index="3" href="" class="mr0"><img src="/images/sub/introduce/interior/thumb-4.jpg"></a>
								<a data-slide-index="4" href=""><img src="/images/sub/introduce/interior/thumb-5.jpg"></a>
								<a data-slide-index="5" href=""><img src="/images/sub/introduce/interior/thumb-6.jpg"></a>
								<a data-slide-index="6" href=""><img src="/images/sub/introduce/interior/thumb-7.jpg"></a>
								<a data-slide-index="7" href="" class="mr0"><img src="/images/sub/introduce/interior/thumb-8.jpg"></a>
							</div>
							<script type="text/javascript">
								$(document).ready(function(){
									$('.interior ul').bxSlider({
										auto: true,
										puase : 3000,
										controls: false,
										stopAutoOnClick : true,
										pagerCustom : '#bx-pager'
									});
								});
							</script>
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
</body>
</html>
