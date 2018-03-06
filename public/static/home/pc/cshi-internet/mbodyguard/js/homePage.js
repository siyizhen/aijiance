/*
* @Author: EX-CHENXIAPING001
* @Date:   2017-03-09 10:35:27
* @Last Modified by:   Administrator
* @Last Modified time: 2018-03-06 11:17:48
*/

$(function(){
	var elem=$('.productInTab li');
	for(var i=0;i<elem.length;i++){
		(function (w){
			elem[w].onclick=function(){
				$(this).addClass('current').siblings().removeClass('current');
				if(w==0){
					$('.wrapper-product').show();
					$('.wrapper-question,.wrapper-declaration,.wrapper-xuzhi,.wrapper-tiaokuan').hide();
				}else if(w==1){
					$('.wrapper-question').show();
					$('.wrapper-product,.wrapper-declaration,.wrapper-xuzhi,.wrapper-tiaokuan').hide();
				}else if(w==2){
					$('.wrapper-declaration').show();
					$('.wrapper-product,.wrapper-question,.wrapper-xuzhi,.wrapper-tiaokuan').hide();
				}else if(w==3){
					$('.wrapper-xuzhi').show();
					$('.wrapper-declaration,.wrapper-product,.wrapper-question,.wrapper-tiaokuan').hide();
				}else if(w==4){
					$('.wrapper-tiaokuan').show();
					$('.wrapper-declaration,.wrapper-product,.wrapper-question,.wrapper-xuzhi').hide();
				}
			}
		})(i);
	}
	$('.rt-InO,.rtInwrapper,.rt-InT').on('click',function(){
		$(this).addClass('curr').siblings().removeClass('curr');
	});
	$(".stack1").hover(function() {
	    $(".codePic1").show();
	}, function() {
	    $(".codePic1").hide();
	});
	$(".stack2").hover(function() {
	    $(".codePic2").show();
	}, function() {
	    $(".codePic2").hide();
	});
	$(".driftTop").click(function(){
	    $('html,body').animate({scrollTop:'0px'},100);
	    return false;
	})
});
function clickNow(obj){
	$(obj).parents('.conditionTitle').next('.conditionInfo').toggle();
	if ($(obj).hasClass('p-click')){
		$(obj).removeClass('p-click').addClass('p-click-active');
	} else {
		$(obj).removeClass('p-click-active').addClass('p-click');
	}
}