/**
 * Created by Zhou Canzhen
 * 2016/05/06
 */
yinjiApp.controller('cpyIndexController',
	function($scope,$http){
		$scope.deployedOrder = {};

		$http.get("/cpy/getOrders")
		.success(function (response)
		{
			console.log(response);
			//首页这里只显示前5个订单
			for (var i = 0 ; i < 5; i++){
				if(response[i] != null)
					$scope.deployedOrder[i] = response[i];
			}
		});
	});