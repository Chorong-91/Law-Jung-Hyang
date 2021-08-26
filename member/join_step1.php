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
							<li class="on"><p class="li"><span>STEP 01</span>약관동의</p></li>
							<li><p class="li"><span>STEP 02</span>회원정보 입력</p></li>
							<li class="last-child"><p class="li"><span>STEP 03</span>회원가입 완료</p></li>
						</ol>
						<!-- //회원가입단계 -->
						
						<ul class="agreeMsg">
							<li>* 회원가입을 위하여 아래의 내용을 읽고 동의해 주세요.</li>
							<li>* 아래 내용이 변동되는 경우에는 별도 공지 없이 홈페이지의 공지사항을 통해 알려드립니다.</li>
						</ul>
						
						<!-- 이용약관 -->
						<h2 class="utilTitle">이용약관 동의</h2>
						<div class="agreeBox">
						</div>
						<p class="agreeTxt"><input type="checkbox" id="agree_terms" class="input-check" name="agree01"> <label class="label" for="agree_terms">이용약관에 동의합니다.</label></p>
						<!-- //이용약관 -->

						<!-- 개인정보 -->
						<h2 class="utilTitle">개인정보 수집, 이용 동의</h2>
						<div class="agreeBox">
						</div>
						<p class="agreeTxt"><input type="checkbox" id="agree_parivate" class="input-check" name="agree02"> <label class="label" for="agree_parivate">개인정보 수집, 이용에 동의합니다.</label></p>
						<!-- //개인정보 -->
						
						<!-- 버튼 -->
						<div class="btnArea">
							<a href="/member/login.php" class="btnType4">취소하기</a>
							<a href="/member/join_step2.php" class="btnType3">가입하기</a>
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
