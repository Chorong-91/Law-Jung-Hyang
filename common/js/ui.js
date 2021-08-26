jQuery(function(){
	$('.hover a').hover(function(){
		var onImg = $(this).find('img').attr('src').replace('.png','_hover.png');
		$(this).find('img').attr('src',onImg);
	},function(){
		var offImg = $(this).find('img').attr('src').replace('_hover.png','.png');
		$(this).find('img').attr('src',offImg);
	})
});



// 검색
jQuery(function(){
	$('.searchArea .searchForm .searchSel .title a').bind('click', function(){
		$(this).parent().next('.list').show();
		return false;
	});
	$('.searchArea .searchForm .searchSel').bind('mouseleave', function(){
		$(this).find('.list').hide();
		return false;
	});
	$('.searchArea .searchForm .searchSel .list li a').bind('click', function(){
		$('.searchArea .searchForm .searchSel .title a').text($(this).text());
		var val = $(this).attr('href').replace('#','');
		$('#searchCate').val(val);
		$(this).parents('.list').hide();
		return false;
	});
});

// 인풋값
function initialVal(ele){
	if( $(ele).val() == '' ){
		$(ele).removeClass('bgnone');
	}
};
function removeVal(ele){
	$(ele).addClass('bgnone');
};
