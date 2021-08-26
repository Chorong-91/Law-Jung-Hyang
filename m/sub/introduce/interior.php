<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/head.php"; ?>
<style type="text/css">
.swiper-container {margin:0 auto; width:96%;}
.paging_navi {overflow:hidden; padding:20px 0;}
.paging_navi .swiper-pagination-bullet {float:left; width:20%; height:auto; background:none; margin-right:6.5%;}
.paging_navi .swiper-pagination-bullet:nth-of-type(4n) {margin-right:0;}
</style>
</head>
<body>
<div id="wrap" class="sub_wrap">
	<!-- header -->
	<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/header.php"; ?>
	<!-- //header -->

	<!-- sideMenu -->
	<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/sideMenu.php"; ?>
	<!-- //sideMenu -->
	
	<!-- container -->
	<div id="container">
		<div class="contentsArea">
			<div class="mainVisual">
				<img src="/m/images/sub/introduce/interior-visual.jpg" alt="" />
			</div>
			<!-- subTab -->
			<?php include $_SERVER['DOCUMENT_ROOT']."/m/sub/introduce/subTab.php"; ?>
			<!-- //subTab -->
			<img src="/m/images/sub/introduce/interior.jpg" alt="" />

			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/sub/introduce/1.jpg" alt="" /></a></div>
					<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/sub/introduce/2.jpg" alt="" /></a></div>
					<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/sub/introduce/3.jpg" alt="" /></a></div>
					<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/sub/introduce/4.jpg" alt="" /></a></div>
					<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/sub/introduce/5.jpg" alt="" /></a></div>
					<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/sub/introduce/6.jpg" alt="" /></a></div>
					<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/sub/introduce/7.jpg" alt="" /></a></div>
					<div class="swiper-slide"><a href="javascript:;"><img src="/m/images/sub/introduce/8.jpg" alt="" /></a></div>
				</div>
				<div class="paging_navi">
				</div>
				<script type="text/javascript">
					var interior = new Swiper('.swiper-container',{
						autoplay:4000,
						loop:true,
						pagination: '.paging_navi',
						paginationClickable: true,
						paginationBulletRender: function (index, className) {
							return '<span class="' + className + '"><img src="/m/images/sub/introduce/thumb-' + (index + 1) + '.jpg" alt="" /></span>';
						}
					});
				</script>
			</div>
		</div>
	</div>
	<!-- //container -->

	<!-- footer -->
	<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/footer.php"; ?>
	<!-- //footer -->
</div>
</body>
</html>
