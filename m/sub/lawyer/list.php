<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/head.php"; ?>
<style type="text/css">
.lawyerList {overflow:hidden; width:96%; margin:30px auto;}
.lawyerList a {float:left; width:49%; line-height:0; margin-bottom:10px;}
.lawyerList a:nth-of-type(2n) {margin-left:2%;}
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
				<img src="/m/images/sub/lawyer/lawyer03-visual.jpg" alt="" />
			</div>
			<!-- subTab -->
			<?php include $_SERVER['DOCUMENT_ROOT']."/m/sub/lawyer/subTab.php"; ?>
			<!-- //subTab -->
			<ul class="lw-list">
				<?php include $_SERVER['DOCUMENT_ROOT']."/sub/team/lw/contents/list.php"; ?>
			</ul>
		</div>
	</div>
	<!-- //container -->

	<!-- footer -->
	<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/footer.php"; ?>
	<!-- //footer -->
</div>
</body>
</html>
