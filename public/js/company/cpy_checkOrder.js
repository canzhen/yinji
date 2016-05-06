/**
 * Created by Zhou Canzhen
 * 2016/04/28
 */
yinjiApp.controller('checkOrderCtrl',
	function($scope,$http){
		$scope.deployedOrder = {};
		$scope.orderDetail = {};

		$http.get("/cpy/getOrders")
		.success(function (response)
		{
			//console.log(response);
			$scope.deployedOrder = response;
		});

		$scope.deleteOrder = function(x){
			$http({
				method:'GET',
				url:'/cpy/deleteOrder',
				params:{
					'id':x.id
				}
			})
			.success(function(response){
				if (response==1){
					alert('删除id为'+x.id+'的订单成功！');
					$scope.deployedOrder.splice($scope.deployedOrder.indexOf(x),1);
				}else if (response==0) {
					alert("oops,删除失败！");
				}
			});
		}


		$scope.getOrderDetail = function(x){
			$scope.orderDetail.quantity = x.quantity;
			$scope.orderDetail.price = x.price;
			$scope.orderDetail.status = x.status;
			$scope.orderDetail.address = x.address;
			$scope.orderDetail.comment = x.comment;
		}
});