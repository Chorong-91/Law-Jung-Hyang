<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/head.php"; ?>
<style type="text/css">
.lawyerList {overflow:hidden; width:1100px; margin:80px auto;}
.lawyerList li {float:left; margin-right:17px; margin-bottom:17px;}
.lawyerList li:nth-of-type(3n) {margin-right:0;}
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
				<div class="subVisual" style="background:url(/images/sub/team/team-visual.jpg) center no-repeat;">
					<?php include $_SERVER['DOCUMENT_ROOT']."/sub/team/subTab.php"; ?>
				</div>
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">
					<div class="subWrap">
						<ul class="lawyerList">
							<?php include $_SERVER['DOCUMENT_ROOT']."/sub/team/foreign/contents/list.php"; ?>
						</ul>
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
