// JavaScript Document
// 전체메뉴열기,닫기
jQuery(function(){
	$('.btnAllMenu a').bind('click', function(){
//		$('#header').toggleClass('allMenuOpen');
		$('#wrap').addClass('sideMenuOpen');
		return false;
	});
	$('#header .allMenu .btn_close').bind('click', function(){
		$('#header').removeClass('allMenuOpen');
		return false;
	});
});
function sideMenuClose(){
	$('#wrap').removeClass('sideMenuOpen');
	$('#wrap').removeClass('quickMenuOpen');
}
jQuery(function(){
	$('#sideMenuSection .sideMenuList .cate strong a').not('.link').bind('click', function(){
		if($(this).parents('.cate').hasClass('on')){
			$('#sideMenuSection .sideMenuList .cate').removeClass('on');
		}
		else{
			$('#sideMenuSection .sideMenuList .cate').removeClass('on');
			$(this).parents('.cate').addClass('on');
		}
		return false;
	});
});

// 좌측메뉴열기
function sideMenuOpen(){
	$("<div class='modalScreen'></div>").clone().prependTo("#wrap");
	$('#wrap').addClass('sideMenuOpen');
};
function sideMenuClose(){
	$('#wrap').removeClass('sideMenuOpen');
	$('.modalScreen').remove();
};

$(function(){
	$('.subTab > a').click(function(){
		if ($(this).hasClass('on')) {
			$(this).removeClass('on');
			$('.subTab p').hide();
		}
		else {
			$(this).addClass('on');
			$('.subTab p').show();
		}
		return false;
	});
});