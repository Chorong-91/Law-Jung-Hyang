<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/head.php"; ?>
<style type="text/css">
.teamList {width:96%; margin:0 auto; line-height:0;}
.teamList a {display:block; margin-top:10px; width:100%;}
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
				<img src="/m/images/sub/team/team-visual.jpg" alt="" />
			</div>
			<!-- subTab -->
			<?php include $_SERVER['DOCUMENT_ROOT']."/m/sub/team/subTab.php"; ?>
			<!-- //subTab -->
			<div class="teamList">
				<a href="/m/sub/team/team01.php"><img src="/m/images/sub/team/teamMain-1.jpg" alt="" /></a>
				<a href="/m/sub/team/team02.php"><img src="/m/images/sub/team/teamMain-2.jpg" alt="" /></a>
				<a href="/m/sub/team/team03.php"><img src="/m/images/sub/team/teamMain-3.jpg" alt="" /></a>
				<a href="/m/sub/team/team04.php"><img src="/m/images/sub/team/teamMain-4.jpg" alt="" /></a>
				<a href="/m/sub/team/team05.php"><img src="/m/images/sub/team/teamMain-5.jpg" alt="" /></a>
				<a href="/m/sub/team/team06.php"><img src="/m/images/sub/team/teamMain-6.jpg" alt="" /></a>
				<a href="/m/sub/team/team07.php"><img src="/m/images/sub/team/teamMain-7.jpg" alt="" /></a>
				<a href="/m/sub/team/team08.php"><img src="/m/images/sub/team/teamMain-8.jpg" alt="" /></a>
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
