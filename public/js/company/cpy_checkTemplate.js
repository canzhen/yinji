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
			//下面是在table render完成后执行的js

			var maxWidth = 210,maxHeight = 210;
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

				}
			})
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
