<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php"; ?>
<style type="text/css">
.rolling {width:1100px; margin:0 auto 50px; position:relative;}
.rolling li {float:left;}
.rolling .bx-wrapper {margin:0 auto;}
.rolling .bx-wrapper .bx-prev {position:absolute; top:0; left:0; display:block; font-size:0; width:35px; height:55px; background:url(/images/sub/introduce/btnL.jpg) no-repeat;}
.rolling .bx-wrapper .bx-next {position:absolute; top:0; right:0; display:block; font-size:0; width:35px; height:55px; background:url(/images/sub/introduce/btnR.jpg) no-repeat;}
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
				<div class="subVisual" style="background:url(/images/sub/introduce/contribute-visual.jpg) center no-repeat;">
					<?php include $_SERVER['DOCUMENT_ROOT']."/sub/introduce/subTab.php"; ?>
				</div>
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">
					<div class="subWrap">
						<div style="overflow:hidden; height:900px;"><img src="/images/sub/introduce/contribute.jpg" alt="" /></div>
						<!-- <div class="rolling">
							<ul>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
								<li><img src="/images/sub/introduce/contribute-1.jpg" alt="" /></li>
							</ul>
							<script type="text/javascript">
								$(document).ready(function(){
									$('.rolling ul').bxSlider({
										slideWidth: 200,
										minSlides: 3,
										maxSlides: 5,
										slideMargin: 5,
										auto : true,
										pager : false
									});
								});
							</script>
						</div> -->
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
