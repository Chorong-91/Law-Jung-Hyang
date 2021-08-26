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
				<div class="subVisual" style="background:url(/images/community/case-visual.jpg) center no-repeat;">
					<?php include $_SERVER['DOCUMENT_ROOT']."/community/subTab.php"; ?>
				</div>
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">

					<!-- 게시판 -->
					<div class="bbsView">
						<table cellpadding="0" cellspacing="0">
							<colgroup>
								<col width="10%" /><col width="38%" /><col width="11%" /><col width="20%" /><col width="10%" /><col width="11%" />
							</colgroup>
							<tbody>
								<tr>
									<th><div class="th">제목</div></th>
									<td colspan="5"><div class="td">Title</div></td>
								</tr>
								<tr>
									<th><div class="th">글쓴이</div></th>
									<td><div class="td">법무법인정향</div></td>
									<th><div class="th">작성일</div></th>
									<td><div class="td">2016.04.10</div></td>
									<th><div class="th">조회수</div></th>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td colspan="6" class="bbsViewContent">
										<div class="td">
											내용<br />
											내용<br />
											내용<br />
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="line"></div>
					</div>
					<!-- //게시판 -->
			
					<!-- 버튼 -->
					<div class="btnArea al_r">
						<a href="/community/case_list.php" class="btnType2">목록</a>
					</div>
					<!-- //버튼 -->
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
