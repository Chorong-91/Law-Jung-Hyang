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
				<div class="subVisual" style="background:url(/images/member/login-visual.jpg) center no-repeat;">
					<?php include $_SERVER['DOCUMENT_ROOT']."/member/subTab.php"; ?>
				</div>
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">

					<!-- 타이틀 -->
					<div class="pageTitle mgt50">
						<h2>아이디 찾기</h2>
						<!-- <p class="desc"></p> -->
					</div>
					<!-- //타이틀 -->
					
					<!-- 아이디찾기결과 -->
					<div class="findResultArea">
						<p class="findResult">
							<strong>member</strong>님의 아이디는 <strong class="id">member</strong> 입니다.
						</p>
						<p class="alertMsg"><img src="/images/common/icon-exmark.png" alt="" /> 저희 법무법인정향은 회원 여러분의 소중한 개인정보를 보호하기 위하여 노력을 다하고 있습니다.</p>
					</div>
					<div class="alignC">
						<a href="/member/find_pw.php" class="btnType4">비밀번호 찾기</a>
						<a href="/member/login.php" class="btnType1">로그인하기</a>
					</div>
					<!-- //아이디찾기결과 -->

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
