$(document).ready( function() {

	/*菜单的切换*/
	var $mainmenu = $('.sidebar-item-level1');
	var $submenu = $('.sidebar-item-level2');
	var $item = $('.sidebar-item-level2').find('li').find('a');
	$submenu.hide();//初始化时隐藏
	$mainmenu.on("click",function() {
		/*子菜单的下滑*/
		$(this).next('.sidebar-item-level2').slideToggle(100).
				siblings('.sidebar-item-level2').slideUp(100);//其余子菜单上滑
	});
	/*保证二级菜单被单击后左边显示横条*/
	$('a[href="' + window.location.href.substr(21) + '"]').addClass('chosen');

	/*保证刷新时tab页不改变*/
	$('a[href="' + window.location.href.substr(21) + '"]').parent().parent().show();

	/*设置属性来控制小箭头的改变*/
	$('a[href="' + window.location.href.substr(21) + '"]').parent().parent().setAttribute("display",1);
	$('a[href="' + window.location.href.substr(21) + '"]').parent().parent().siblings('.sidebar-item-level1').setAttribute("diaplay",0);
});

