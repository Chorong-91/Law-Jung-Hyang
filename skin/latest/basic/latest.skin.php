<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


 for ($i=0; $i<count($list); $i++) {  ?>

		<li><a href="<?=$list[$i]['href']?>"><span class="title"><?=$list[$i]['subject']?></span> <span class="date"><?=date("Y.m.d", strtotime($list[$i]['wr_datetime']))?></span></a></li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>

		<li><a href="javascript:;"><span class="title">게시물이 없습니다</span> <span class="date"></span></a></li>
    <?php }  ?>