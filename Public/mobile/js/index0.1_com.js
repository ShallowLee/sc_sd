$(function() {
	//顶部导航切换
	$(".navico").click(function() {
		$(this).toggleClass('clickon');
		$(".topnav").slideToggle();
		return false;
	});

//	function checCur(obj,oldvalue) {
//		if(obj.length<=0){return;}
//		obj.focusin(function() {
//			var curVal = $.trim($(this).val());
//			if (curVal == oldvalue) {
//				$(this).val("");
//			}
//			this.style.color = '#333';
//		});
//		obj.focusout(function() {
//			var curVal = $.trim($(this).val());
//			if (curVal == "") {
//				$(this).val(oldvalue);
//			}
//			this.style.color = '#999';
//		});
//	}
//	checCur($("input[name='kw']"),"想找什么创业项目？");
	//搜索切换
	$("#js-search li").click(function() {
		var curoldvalue = $(this).attr("data-content");
		var $kwobj=$("input[name='kw']");
		$(this).addClass('current').siblings().removeClass('current');
		$("#search-form").attr("action", $(this).attr("data-href"));
		$kwobj.attr("value", curoldvalue)
//		checCur($kwobj,curoldvalue);
		var indexi = $("#js-search li").index($(this));
		$("#js-search li").each(function(i) {
			//判断是否为当前点击项
			if (indexi == i) {
				if ($(this).has("a").length > 0) {
					$(this).html($(this).find("a").text());
				}
			} else {
				if (!($(this).has("a").length > 0)) {
					$(this).html("<a title='" + $(this).text() + "' href='javascript:;'>" + $(this).text() + "</a>");
				}
			}

		});
	});
    //显示更多分类
    $('.loadmore').on('click',function(){
        var self = $(this),
        dd = self.prev().find('dd'),
        h = dd.find('a').height(),
        show_h = h * 3;
        all_h = Math.ceil(dd.find('a').length / 3) * h;
        if(dd.height() == show_h){
                self.parent().addClass('close');
            dd.animate({"height":all_h},300,function(){
            })
        }else if(dd.height() == all_h){
            dd.animate({"height":show_h},300,function(){
                self.parent().removeClass('close');
            })
        }

    })
});