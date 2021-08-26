<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/head.php"; ?>
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
				<img src="/m/images/sub/introduce/location-visual.jpg" alt="" />
			</div>
			<!-- subTab -->
			<?php include $_SERVER['DOCUMENT_ROOT']."/m/sub/introduce/subTab.php"; ?>
			<!-- //subTab -->
			<div id="daumRoughmapContainer1465968723335" class="root_daum_roughmap root_daum_roughmap_landing" style="margin:30px auto 0;"></div>

			<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1465968723335",
					"key" : "bcue",
					"mapWidth" : "400",
					"mapHeight" : "400"
				}).render();
			</script>

			<img src="/m/images/sub/introduce/location.jpg" alt="" />
		</div>
	</div>
	<!-- //container -->

	<!-- footer -->
	<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/footer.php"; ?>
	<!-- //footer -->
</div>
</body>
</html>
