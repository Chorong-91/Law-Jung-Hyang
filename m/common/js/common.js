$(document).ready(function(){	
});	

function fnContentImgResize(_obj){
	$('.'+_obj+' img').each(function() {
		var tmpContentImgWidth = $(this).width();
		if (tmpContentImgWidth>1024){
			$(this).attr('width','1024px');
		}
	});
}

function pop_close()
{
	$('.140825pop').hide();
}

