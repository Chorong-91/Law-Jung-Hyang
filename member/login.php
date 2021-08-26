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
						<h2>로그인</h2>
						<!-- <p class="desc"></p> -->
					</div>
					<!-- //타이틀 -->
					
					<!-- 로그인 -->
					<div class="utilFormArea">
						<div class="utilForm">
							<div class="inputCell">
								<p class="cell mgt0"><input type="text" id="user_id" class="input-text" onfocus="removeVal(this);" onblur="initialVal(this);" style="width:100%; background:url(/images/common/txt_id.gif) no-repeat 10px center;" /></p>
								<p class="cell"><input type="password" id="password" class="input-text" onfocus="removeVal(this);" onblur="initialVal(this);" style="width:100%; background:url(/images/common/txt_pw.gif) no-repeat 10px center;"/></p>
								<a href="#" class="btnLogin"><img src="/images/member/btn_login.png" alt="LOGIN" /></a>
							</div>
							<p class="idSave"><input type="checkbox" id="idSave" class="input-check" /> <label for="idSave" class="label">아이디 저장</label></p>
							<div class="findMsg">
								<strong class="alertMsg"><img src="/images/common/icon-exmark.png" alt="" /> 아이디와 비밀번호를 잊으셨나요?</strong>
								<span class="btnFind">
									<a href="/member/find_id.php">아이디 찾기</a>
									<a href="/member/find_pw.php">비밀번호 찾기</a>
								</span>
							</div>
						</div>
					</div>
					<!-- //로그인 -->

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
