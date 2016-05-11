yinjiApp.controller('newOrdersCtrl',
	function($scope,$http){
		$scope.unDoneOrders = {};

		$http.get("/cpy/getUndoneOrders")
		.success(function (response)
		{
			//console.log(response);
			$scope.unDoneOrders = response;
		});


	});