<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php"; ?>
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
				<div class="subVisual" style="background:url(/images/sub/introduce/location-visual.jpg) center no-repeat;">
					<?php include $_SERVER['DOCUMENT_ROOT']."/sub/introduce/subTab.php"; ?>
				</div>
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">
					<div class="subWrap">
						<div id="daumRoughmapContainer1465968723335" class="root_daum_roughmap root_daum_roughmap_landing" style="margin:0 auto;"></div>

						<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
						<script charset="UTF-8">
							new daum.roughmap.Lander({
								"timestamp" : "1465968723335",
								"key" : "bcue",
								"mapWidth" : "1100",
								"mapHeight" : "500"
							}).render();
						</script>
						<img src="/images/sub/introduce/location.jpg" alt="" />
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
