
<?php
	$fileInfo = explode("/", $_SERVER['REQUEST_URI']);
	$fileName = $fileInfo[count($fileInfo)-1];
	$folderName = $fileInfo[count($fileInfo)-2];

	$mobileKeyWords = array ('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'Windows CE;', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson', 'Mobile', 'Symbian', 'Opera Mobi', 'Opera Mini', 'IEmobile');
	for ($i = 0; $i < count($mobileKeyWords); $i++) {
		if (strpos($_SERVER['HTTP_USER_AGENT'],$mobileKeyWords[$i]) == true) {
			header("Location:http://lawjh.co.kr/m/");
			exit;
		}
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=yes" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="naver-site-verification" content="1d616622c8852d952808c97f029290133228a04e"/>
<title>법무법인정향</title>
<link type="text/css" href="/common/css/ui.css" rel="stylesheet" />
<script src="/common/js/jquery-1.12.4.min.js"></script>
<script src="/common/js/jquery.easing.1.3.min.js"></script>
<script src="/common/js/bxslider.min.js" type="text/javascript"></script>
<script src="/common/js/ui.js"></script>
<!--[if lt IE 9]>
<script src="/common/js/IE9.js"></script>
<![endif]-->
