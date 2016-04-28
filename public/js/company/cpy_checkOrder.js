/**
 * Created by Zhou Canzhen
 * 2016/04/28
 */
yinjiApp.controller('checkOrderCtrl',
	function($scope,$http){
		$scope.deployedOrder = {};

		$http.get("/cpy/getOrders")
		.success(function (response)
		{
			//console.log(response);
			$scope.deployedOrder = response;
		});
	});