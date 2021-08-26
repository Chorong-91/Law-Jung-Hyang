<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?
    $fileInfo = explode("/", $_SERVER['REQUEST_URI']);
    $fileName = $fileInfo[count($fileInfo)-1];
    $folderName = $fileInfo[count($fileInfo)-2];
?>
<div id="wrap" class="main_wrap">
<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/m/include/sideMenu.php"; ?>

<?php if($bo_table == 'notice') { ?>
<img src="/m/img/notice-visual.jpg" />
<?php } ?>

<?php if($bo_table == 'media') { ?>
<img src="/m/img/media-visual.jpg" />
<?php } ?>

<?php if($bo_table == 'newsletter') { ?>
<img src="/m/img/news-visual.jpg" />
<?php } ?>

<?php if($bo_table == 'recent') { ?>
<img src="/m/img/recent-visual.jpg" />
<?php } ?>

<?php if($bo_table != '') { ?>
<div class="subTab">
	<a href="#" class="subTabBtn">정향소식</a>
	<p class="btn4">
		<a href="/bbs/board.php?bo_table=notice">공지사항</a>
		<a href="/bbs/board.php?bo_table=media">언론보도</a>
		<a href="/bbs/board.php?bo_table=newsletter">뉴스레터</a>
		<a href="/bbs/board.php?bo_table=recent">최근업무사례</a>
	</p>
</div>
<?php } ?>


