$(function(){
	// 导航下拉
	var $DropArea = $(".classifyDropArea").is(":visible"),
		$DropMenu = $(".classifyDropArea > li");

	if(!$DropArea){
		$(".allClassifyArea").hover(function(){
			$(".classifyDropArea").slideDown(300);
		},function(){
			$(".classifyDropArea").slideUp(300);
		})
	}
	// $DropMenu.hover(function(){
	// 	// $(".dropPop").slideDown(300);
	// 	$(".dropPop").animate({ 'opacity': 1}, 300);
	// },function(){
	// 	// $(".dropPop").slideUp(300);
	// 	$(".dropPop").animate({ 'opacity': 0}, 300);
	// })

	// 返回顶部
	$('.goTop').click(function() {
		$('html, body').animate({  
	        scrollTop:0
	    }, 300); 
	});
	if (window.screen.width >= 1280) {
        $('.fixedArea').css({'right': '0'});
    } else {
        $('.fixedArea').css({'left': '50%', 'margin-left': '610px'});
    }
})

//搜索
function common_search() {
	var searchValue = document.getElementById('searchValue');
	var reg = /^\s+|\s+$/g;
	if (searchValue.value.replace(reg, '') == "" || searchValue.value == "请输入关键字") {
		searchValue.focus();
		window.open("http://search.pingan.com/search/s", "_blank");
		return false;
	}
	var emallContext = "http://search.pingan.com/search/s";
	var httpUrl = emallContext + '?keyword=' + encodeURIComponent(searchValue.value);
	window.open(httpUrl, "_blank");
}