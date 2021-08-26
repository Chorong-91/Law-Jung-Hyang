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

					<div class="joinContent joinForm">
						<!-- 회원가입단계 -->
						<ol class="joinStep">
							<li><p class="li"><span>STEP 01</span>약관동의</p></li>
							<li class="on"><p class="li"><span>STEP 02</span>회원정보 입력</p></li>
							<li class="last-child"><p class="li"><span>STEP 03</span>회원가입 완료</p></li>
						</ol>
						<!-- //회원가입단계 -->
						
						<h2 class="utilTitle">기본정보입력</h2>
						<!-- 입력폼 -->
						<div class="tblType1">
							<table cellpadding="0" cellspacing="0">
								<colgroup>
									<col width="105" /><col />
								</colgroup>
								<tbody>
									<tr>
										<th><div class="th">성명</div></th>
										<td>
											<div class="td">
												<input type="text" name="name" id="name" class="input-text" style="width:50%; max-width:355px; margin-right:5px;" />
												<strong class="alertMsg" style="width:39%"><img src="/images/common/icon-exmark.png" alt="" /> 반드시 실명으로 기재하여 주세요.</strong>
											</div>
										</td>
									</tr>
									<tr>
										<th><div class="th">아이디</div></th>
										<td>
											<div class="td">
												<input type="text" name="user_id" id="user_id"  class="input-text" style="width:50%; max-width:355px; margin-right:-4px;"   name="user_id" id="user_id" onkeydown="$('#dup').val('');"  />
												<a href="#" class="btnStyle" onclick="javascript:chkDupId()">중복확인</a>
											</div>
										</td>
									</tr>
									<tr>
										<th><div class="th">비밀번호</div></th>
										<td>
											<div class="td">
												<input type="password" name="password" id="password" class="input-text" style="width:50%; max-width:355px; margin-right:5px;" />
												<strong class="alertMsg" style="width:39%"><img src="/images/common/icon-exmark.png" alt="" /> 6~12자리이여야 합니다.</strong>
											</div>
										</td>
									</tr>
									<tr>
										<th><div class="th">비밀번호 확인</div></th>
										<td>
											<div class="td">
												<input type="passwordggg" name="password_re" id="password_re" class="input-text" style="width:50%; max-width:355px;" />
											</div>
										</td>
									</tr>
									<tr>
										<th><div class="th">주소</div></th>
										<td>
											<div class="td">
												<input type="text" name="zip1" id="zip1" class="input-text" style="width:25%; max-width:170px;" /> -
												<input type="text" name="zip2" id="zip2" class="input-text" style="width:25%; max-width:170px; margin-right:-4px;" />
												<a href="#" class="btnStyle" onclick="showLayer('#findZipcode' , 'modalpop'); return false;">주소검색</a>
												<p class="mgt10"><input type="text" class="input-text" style="width:100%;" name="address1" id="address1" /></p>
											</div>
										</td>
									</tr>
									<tr>
										<th><div class="th">휴대폰</div></th>
										<td>
											<div class="td">
												<select class="select" style="width:29%; max-width:95px;" name="cell_no1" id="cell_no1">
		                                        	<option VALUE='' >선택</option>
		                                        	<option value="010">010</option>
		                                        	<option value="011">011</option>
		                                        	<option value="016">016</option>
		                                        	<option value="017">017</option>
		                                        	<option value="018">018</option>
		                                        	<option value="019">019</option>
												</select>
												- <input type="text" class="input-text" style="width:29%; max-width:95px;"  name="cell_no2" id="cell_no2"  maxlength="4"  />
												- <input type="text" class="input-text" style="width:29%; max-width:95px;" name="cell_no3" id="cell_no3" maxlength="4"  />
												<span class="agreeChoice">
													<input type="radio" id="smsY" name="sms_yn" value="Y" class="input-radio" /> <label for="smsY" class="label mgr10">수신동의</label>
													<input type="radio" id="smsN" name="sms_yn" value="N" class="input-radio" /> <label for="smsN" class="label">수신거부</label>
												</span>
											</div>
										</td>
									</tr>
									<tr>
										<th><div class="th">이메일</div></th>
										<td>
											<div class="td">
												<input type="text" name="email" id="email" class="input-text" style="width:40%; max-width:210px;" />
												@ <input type="text" class="input-text" style="width:40%; max-width:210px;" name="email_domain" id="email_domain"  />
												<span class="agreeChoice">
													<input type="radio" id="emailY" class="input-radio" /> <label for="emailY" class="label mgr10">수신동의</label>
													<input type="radio" id="emailN" class="input-radio" /> <label for="emailN" class="label">수신거부</label>
												</span>
												<p class="mgt10"><strong class="alertMsg"><img src="/images/common/icon-exmark.png" alt="" /> 수신거부시 임시비밀번호를 받을수없습니다.</strong></p>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- //입력폼 -->
						
						<!-- 버튼 -->
						<div class="btnArea mgt30">
							<a href="/member/login.php" class="btnType4">취소하기</a>
							<a href="/member/join_step3.php" class="btnType3">입력완료</a>
						</div>
						<!-- //버튼 -->
					</div>
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
