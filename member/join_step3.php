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
						<h2>회원가입</h2>
						<!-- <p class="desc"></p> -->
					</div>
					<!-- //타이틀 -->

					<div class="joinContent">
						<!-- 회원가입단계 -->
						<ol class="joinStep">
							<li><p class="li"><span>STEP 01</span>약관동의</p></li>
							<li><p class="li"><span>STEP 02</span>회원정보 입력</p></li>
							<li class="last-child on"><p class="li"><span>STEP 03</span>회원가입 완료</p></li>
						</ol>
						<!-- //회원가입단계 -->
						
						<p class="joinComplete"><span>법무법인정향<span>에 정상적으로 가입되었습니다.</p>
						<div class="joinComplete2">
							<p class="p">저희 법무법인정향은 회원 여러분의 소중한 개인정보를 보호하기 위하여 최선의 노력을 다하고 있습니다. <span>로그인 버튼 클릭 후 로그인 페이지로 이동됩니다.</span></p>
						</div>
						
						<!-- 버튼 -->
						<div class="btnArea mgt30">
							<a href="/member/login.php"><img src="/images/member/btn_login.png" alt="로그인" /></a>
						</div>
						<!-- //버튼 -->
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
