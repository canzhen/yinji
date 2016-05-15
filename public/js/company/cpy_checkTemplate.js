/**
 * Created by Zhou Canzhen
 * 2016/05/06
 */

yinjiApp.controller('checkTemplateCtrl',
	function($scope,$http){
		$scope.deployedImgs = {};

		$http.get("/cpy/getTemplates")
		.success(function(response){
			$scope.deployedImgs = response;
		});

		$scope.$on('ngRepeatFinished', function (ngRepeatFinishedEvent) {
			//选项卡滑动切换通用
			jQuery(function(){jQuery(".hoverTag .chgBtn").hover(function(){jQuery(this).parent().find(".chgBtn").removeClass("chgCutBtn");jQuery(this).addClass("chgCutBtn");var cutNum=jQuery(this).parent().find(".chgBtn").index(this);jQuery(this).parents(".hoverTag").find(".chgCon").hide();jQuery(this).parents(".hoverTag").find(".chgCon").eq(cutNum).show();})})

			//选项卡点击切换通用
			jQuery(function(){jQuery(".clickTag .chgBtn").click(function(){jQuery(this).parent().find(".chgBtn").removeClass("chgCutBtn");jQuery(this).addClass("chgCutBtn");var cutNum=jQuery(this).parent().find(".chgBtn").index(this);jQuery(this).parents(".clickTag").find(".chgCon").hide();jQuery(this).parents(".clickTag").find(".chgCon").eq(cutNum).show();})})

			//图库弹出层
			$(".mskeLayBg").height($(document).height());
			$(".mskeClaose").click(function(){$(".mskeLayBg,.mskelayBox").hide()});
			$(".imgs").click(function(){
				$(".mske_html").html($(this).find(".hidden").html());
				$(".mskeLayBg").show();
				$(".mskelayBox").fadeIn(300);
				//alert('成功！');
			});
			$(".mskeTogBtn").click(
				function(){
					$(".msKeimgBox").toggleClass("msKeimgBox2");
					$(this).toggleClass("mskeTogBtn2")}
			);
			//屏蔽页面错误
			jQuery(window).error(function(){
				return true;
			});
			jQuery("img").error(function(){
				$(this).hide();
			});


			/*
			 * 图片自适应
			 */
			var maxWidth = 250,maxHeight = 250;
			//为图片设置自适应大小
			//$("#mainbody img").addClass("carousel-inner img-responsive img-rounded");

			//默认绑定div类型class
			$("#mainbody>div").addClass("col-md-2 col-sm-6 thumbnail");

			//为img绑定自动调整大小的onload方法
			$(".imgs>img").bind("load",function(){
				AutoResizeImage(maxWidth,maxHeight,this);
			});

			//图片大小自动脚本
			function AutoResizeImage(maxWidth, maxHeight, objImg) {

				var img = new Image();
				img.src = objImg.src;
				var hRatio;
				var wRatio;
				var Ratio = 1;
				var w = img.width;
				var h = img.height;
				wRatio = maxWidth / w;
				hRatio = maxHeight / h;
				if (maxWidth == 0 && maxHeight == 0) {
					Ratio = 1;
				} else if (maxWidth == 0) { //
					if (hRatio < 1) Ratio = hRatio;
				} else if (maxHeight == 0) {
					if (wRatio < 1) Ratio = wRatio;
				} else if (wRatio < 1 || hRatio < 1) {
					Ratio = (wRatio <= hRatio ? wRatio : hRatio);
				}
				if (Ratio < 1) {
					w = w * Ratio;
					h = h * Ratio;
				}
				objImg.height = h;
				objImg.width = w;

			}

		});

		$scope.deleteTemplate = function(x){
			$http({
				method:'GET',
				url:'/cpy/deleteTemplate',
				params:{
					'name':x.template_name
				}
			})
			.success(function(response){
				if (response==1) {
					alert("删除成功！");
					$scope.deployedImgs.splice($scope.deployedImgs.indexOf(x),1);
				}else if (response==0)
					alert("oops，删除失败...");
			});
		}
});

yinjiApp.directive('onFinishRenderFilters', function ($timeout) {

	return {
		restrict: 'A',
		link: function(scope, element, attr) {
			if (scope.$last === true) {
				$timeout(function() {
					scope.$emit('ngRepeatFinished');
				});
			}
		}
	};
});