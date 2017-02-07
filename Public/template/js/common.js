// JavaScript Document
document.write('<script type="text/javascript" src="http://cdr.ahpcpx.com/QQchat.j?webid=znh25125762" charset="utf-8"><\/script>');


function checksearch() {
    if ($("#key").val() == '' || $("#key").val() == '请输入内容关键字') {
        alert('请输入搜索关键字!');
        return false;
    }
    return true;
}

	$('.btn-top').click(function(){
		$('body,html').animate({scrollTop:0}, 600);
		return false;
	})

 
 function showqq2() {
          
	$("#izl_rmenu").each(function(){
		$(this).find(".btn-wx").mouseenter(function(){
			$(this).find(".pic").fadeIn("fast");
		});
		$(this).find(".btn-wx").mouseleave(function(){
			$(this).find(".pic").fadeOut("fast");
		});
		$(this).find(".btn-phone").mouseenter(function(){
			$(this).find(".phone").fadeIn("fast");
		});
		$(this).find(".btn-phone").mouseleave(function(){
			$(this).find(".phone").fadeOut("fast");
		});

	});
	var lastRmenuStatus=false;
	$(window).scroll(function(){//bug
		var _top=$(window).scrollTop();
		if(_top>200){
			$("#izl_rmenu").data("expanded",true);
		}else{
			$("#izl_rmenu").data("expanded",false);
		}
		if($("#izl_rmenu").data("expanded")!=lastRmenuStatus){
			lastRmenuStatus=$("#izl_rmenu").data("expanded");
			if(lastRmenuStatus){
				$("#izl_rmenu .btn-top").slideDown();
			}else{
				$("#izl_rmenu .btn-top").slideUp();
			}
		}
	});
 
 }
 showqq2();
 
 
$(function(){
	$('.menu li.m:last').css("background","none");
})