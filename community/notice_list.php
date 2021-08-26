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
				<div class="subVisual" style="background:url(/images/community/notice-visual.jpg) center no-repeat;">
					<?php include $_SERVER['DOCUMENT_ROOT']."/community/subTab.php"; ?>
				</div>
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">

					<!-- 검색 -->
					<div class="searchArea">
						<div class="searchForm">
							<div class="searchSel">
								<input type="hidden" id="searchCate" value="searchBoth" />
								<p class="title"><a href="#">내용+제목</a></p>
								<ul class="list">
									<li><a href="#searchBoth">내용+제목</a></li>
									<li><a href="#searchContent">내용</a></li>
									<li><a href="#searchTitle">제목</a></li>
								</ul>
							</div>
							<div class="searchWord"><input type="text" class="input-word" /></div>
							<a href="#" class="btnSearch">검색</a>
						</div>
					</div>
					<!-- //검색 -->

					<!-- 게시판 -->
					<div class="bbsList mgt10">
						<table cellpadding="0" cellspacing="0">
							<colgroup>
								<col width="10%" /><col width="64%" /><col width="15%" /><col width="11%" />
							</colgroup>
							<thead>
								<tr>
									<th><div class="th">번호</div></th>
									<th><div class="th">제 목</div></th>
									<th><div class="th">작성일</div></th>
									<th class="last-child"><div class="th">조회</div></th>
								</tr>
							</thead>
							<tbody class="al_c">
								<tr>
									<td><div class="td">10</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">9</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">8</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">7</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">6</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">5</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">4</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">3</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">2</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
								<tr>
									<td><div class="td">1</div></td>
									<td class="subject"><div class="td"><a href="/community/notice_view.php">Title</a></div></td>
									<td><div class="td">2016.04.10</div></td>
									<td><div class="td">100</div></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- //게시판 -->
					
					<!-- 페이징 -->
					<div class="pagingWrap">
						<div class="paging">
							<a href="#" class="pagingFirst"><span>처음</span></a>
							<a href="#" class="pagingPrev"><span>이전</span></a>
							<a href="#">1</a>
							<a href="#" class="current">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">100</a>
							<a href="#" class="pagingNext"><span>다음</span></a>
							<a href="#" class="pagingLast"><span>끝</span></a>
						</div>
					</div>
					<!-- //페이징 -->
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
