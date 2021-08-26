<? include $_SERVER['DOCUMENT_ROOT']."/include/head.php"; ?>
<? include_once(G5_LIB_PATH.'/thumbnail.lib.php'); ?>
<? add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0); ?>
<div id="wrap" class="sub_wrap">
	<div class="wrapper">
		
		<!-- container -->
		<div id="container">

			<!-- lnb -->
			<? include $_SERVER['DOCUMENT_ROOT']."/include/lnb.php"; ?>
			<!-- //lnb -->

			<!-- content -->
			<div id="contents">
				<div class="subVisual" style="background:url(/images/community/media-visual.jpg) center no-repeat;">
					<?php include $_SERVER['DOCUMENT_ROOT']."/community/subTab.php"; ?>
				</div>
				<!-- ===================== 내용 ===================== -->
				<div class="contentsArea">




				<form name="fsearch" method="get">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sop" value="and">
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="hidden" name = "sfl" id = "sfl" value = "wr_subject||wr_content"/>
					<!-- 검색 -->
					<div class="searchArea">
						<div class="searchForm">
							<div class="searchSel">
								<input type="hidden" id="searchCate" value="searchBoth" />
								<p class="title"><a href="#"><?
								
									// 현재 검색항목
									if (urldecode($_GET['sfl']) == "wr_subject||wr_content" || $_GET['sfl'] == ""){
										echo("내용+제목");
									} else if (urldecode($_GET['sfl']) == "wr_subject"){
										echo("제목");
									} else if (urldecode($_GET['sfl']) == "wr_content"){
										echo("내용");
									}

								
								?></a></p>
								<ul class="list">
									<li><a href="javascript:$('#sfl').value='wr_subject|wr_content';">내용+제목</a></li>
									<li><a href="javascript:$('#sfl').value='wr_content';">내용</a></li>
									<li><a href="javascript:$('#sfl').value='wr_subject';">제목</a></li>
								</ul>
							</div>
							<div class="searchWord"><input type="text" name = "stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="input-word" maxlength="20"/></div>
							<a href="javascript:$('[name=fsearch]').submit();" class="btnSearch">검색</a>
						</div>
					</div>
					<!-- //검색 -->
			    </form>


				<form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
				<input type="hidden" name="stx" value="<?php echo $stx ?>">
				<input type="hidden" name="spt" value="<?php echo $spt ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sst" value="<?php echo $sst ?>">
				<input type="hidden" name="sod" value="<?php echo $sod ?>">
				<input type="hidden" name="page" value="<?php echo $page ?>">
				<input type="hidden" name="sw" value="">

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
						  <?php
							for ($i=0; $i<count($list); $i++) {         ?>
								<tr>
									<td><div class="td">
										<?php
										if ($list[$i]['is_notice']) // 공지사항
											echo '<strong>공지</strong>';
										else if ($wr_id == $list[$i]['wr_id'])
											echo "<span class=\"bo_current\">열람중</span>";
										else
											echo $list[$i]['num'];
										 ?></div>
									</td>
									<td class="subject"><div class="td"><a href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['subject'] ?></a></div></td>
									<td><div class="td"><?php echo $list[$i]['datetime2'] ?></div></td>
									<td><div class="td"><?php echo strip_tags($list[$i]['wr_hit']) ?></div></td>
								</tr>
							<? } // next i?>
							</tbody>
						</table>
					</div>
					<!-- //게시판 -->
					


					<!-- 페이징 -->
					<div class="pagingWrap">
						<div class="paging">
							<?php echo $write_pages;  ?>
						</div>
					</div>
					<!-- //페이징 -->

					<?php if ($rss_href || $write_href) { ?>
					<div class="pagingWrap" style="overflow:hidden;">
						<ul class="btn_bo_user">
							<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btnType2">관리자</a></li><?php } ?>
							<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btnType2">글쓰기</a></li><?php } ?>
						</ul>
					</div>
					<?php } ?>
				    </form>
					<!-- subfooter -->
					<? include $_SERVER['DOCUMENT_ROOT']."/include/subfooter.php"; ?>
					<!-- //subfooter -->


				</div>
				<!-- ===================== //내용 ===================== -->
			</div>

			<!-- //content -->

			<!-- footer -->
			<? include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>
			<!-- //footer -->

			<!-- quick -->
			<? include $_SERVER['DOCUMENT_ROOT']."/include/quick.php"; ?>
			<!-- //quick -->

		</div>
		<!-- //container -->
	</div>
</div>
