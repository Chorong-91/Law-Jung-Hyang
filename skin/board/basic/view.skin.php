<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include $_SERVER['DOCUMENT_ROOT']."/include/head.php"; ?>
</head>
<body>
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

					<!-- 게시판 -->
					<div class="bbsView">
						<table cellpadding="0" cellspacing="0">
							<colgroup>
								<col width="10%" /><col width="38%" /><col width="11%" /><col width="20%" /><col width="10%" /><col width="11%" />
							</colgroup>
							<tbody>
								<tr>
									<th><div class="th">제목</div></th>
									<td colspan="5"><div class="td"><?php
									if ($category_name) echo $view['ca_name'].' | '; // 분류 출력 끝
									echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
									?></div></td>
								</tr>
								<tr>
									<th><div class="th">글쓴이</div></th>
									<td><div class="td"><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></div></td>
									<th><div class="th">작성일</div></th>
									<td><div class="td"><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></div></td>
									<th><div class="th">조회수</div></th>
									<td><div class="td"><?php echo number_format($view['wr_hit']) ?></div></td>
								</tr>
								<tr>
									<td colspan="6" class="bbsViewContent">
										<div class="td">
										<?
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

//            for ($i=0; $i<=count($view['file']); $i++) {
            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                    echo get_view_thumbnail($view['file'][$i]['view']);
                }
            }

            echo "</div>\n";
        }
         ?>

        <!-- 본문 내용 시작 { -->
<?php echo get_view_thumbnail($view['content']); ?>
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
						<?php if ($update_href) { ?><a href="<?php echo $update_href ?>" class="btnType2">수정</a><?php } ?>
						<?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" class="btnType2" onclick="del(this.href); return false;">삭제</a><?php } ?>

						<a href="<?php echo $list_href ?>" class="btnType2">목록</a>
					</div>
					<!-- //버튼 -->

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
</body>
</html>
<style type = "text/css">
	.bbsViewContent p {
		font-family:initial;
	}
</style>