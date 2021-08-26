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
						<h2>비밀번호 찾기</h2>
						<!-- <p class="desc"></p> -->
					</div>
					<!-- //타이틀 -->
					
					<!-- 비밀번호찾기 -->
					<div class="utilFormArea">
						<div class="utilForm">
							<div class="inputCell">
								<p class="cell mgt0"><input type="text" id="user_id" name="user_id" class="input-text" onfocus="removeVal(this);" onblur="initialVal(this);" style="width:100%; background:url(/images/common/txt_id.gif) no-repeat 10px center;" /></p>
								<p class="cell"><input type="text" id="name" name="name" class="input-text" onfocus="removeVal(this);" onblur="initialVal(this);" style="width:100%; background:url(/images/common/txt_name.gif) no-repeat 10px center;"/></p>
								<p class="cell"><input type="text" id="email" name="email" class="input-text" onfocus="removeVal(this);" onblur="initialVal(this);" style="width:100%; background:url(/images/common/txt_email.gif) no-repeat 10px center;"/></p>
								<a href="/member/find_pw_result.php" class="btnConfirm"><img src="/images/member/btn_confirm.png" alt="확인" /></a>
							</div>
						</div>
						<p class="findMsg"><img src="/images/common/icon-exmark.png" alt="" /> <strong class="alertMsg">저희 신사엘성형외과는 회원 여러분의 소중한 개인정보를 보호하기 위하여 노력을 다하고 있습니다.</strong></p>
					</div>
					<!-- //비밀번호찾기 -->

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
