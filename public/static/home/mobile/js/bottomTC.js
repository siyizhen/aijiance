function toshare(showDiv){
		showDiv='.'+showDiv;
		if( !'transform' in document.documentElement.style || !'-webkit-transition' in document.documentElement.style){			
			$(showDiv).slideDown();
		}else{
			$(showDiv).addClass("am-modal-active");	
		}
		if($(".sharebg").length>0){
			$(".sharebg").addClass("sharebg-active");
			
		}else{
			$("body").append('<div class="sharebg"></div>');
			$(".sharebg").addClass("sharebg-active");
		}
		
		$(".sharebg-active,.share_btn,.share_btn1").click(function(){
			if( !'transform' in document.documentElement.style || !'-webkit-transition' in document.documentElement.style){			
				$(showDiv).slideUp();
			}else{
				$(showDiv).removeClass("am-modal-active");	
			}			
			setTimeout(function(){
				$(".sharebg-active").removeClass("sharebg-active");	
				$(".sharebg").remove();	
			},300);
		});
	};	
$(function(){
	if( !'transform' in document.documentElement.style || !'-webkit-transition' in document.documentElement.style){			
		$(".am-share,.am-share1").hide();
		
	}
	/*$("input").focus(function(event) {
		if($(".am-share,.am-share1").css("display")=="block"){
			$(".am-share,.am-share1").hide();
		}		
	});*/
});
	
		
	