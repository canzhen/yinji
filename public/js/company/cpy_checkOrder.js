/**
 * Created by Zhou Canzhen
 * 2016/04/28
 */
yinjiApp.controller('checkOrderCtrl',
	function($scope,$http){
		$scope.deployedOrder = {};
		$scope.orderDetail = {};
		var tempDetail = {};

		$http.get("/cpy/getOrders")
		.success(function (response)
		{
			//console.log(response);
			$scope.deployedOrder = response;
		});


		$scope.addOrderDetailQuantity = function(){
			$scope.orderDetail.quantity++;
		}

		$scope.subtractOrderDetailQuantity = function(){
			if($scope.orderDetail.quantity!=0)
				$scope.orderDetail.quantity--;
		}


		$scope.deleteOrder = function(x){

			var result = confirm("你确定要删除吗？");
			if (result == true){
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
		}


		$scope.getOrderDetail = function(x){
			$scope.orderDetail.id = x.id;
			$scope.orderDetail.quantity = x.quantity;
			$scope.orderDetail.price = x.price;
			$scope.orderDetail.status = x.status;
			$scope.orderDetail.address = x.address;
			$scope.orderDetail.comment = x.comment;
			tempDetail = new Array(x,x.quantity,x.price,x.status,x.address,x.comment);
		}

		$scope.editOrder = function(){
			if ($scope.orderDetail.quantity == tempDetail[1]&&
				$scope.orderDetail.price == tempDetail[2]&&
				$scope.orderDetail.status == tempDetail[3]&&
				$scope.orderDetail.address == tempDetail[4]&&
				$scope.orderDetail.comment == tempDetail[5]) {
				alert("对不起，您没有进行任何修改！");
				return;
			}
			if (!/^[0-9]*$/.test($scope.orderDetail.price)) {
				alert("对不起，单价必须为整数！");
				return;
			}
			$http({
				method:'GET',
				url:'/cpy/editOrder',
				params:{
					'id':$scope.orderDetail.id,
					'quantity':$scope.orderDetail.quantity,
					'price':$scope.orderDetail.price,
					'status':$scope.orderDetail.status,
					'address':$scope.orderDetail.address,
					'comment':$scope.orderDetail.comment
				}
			}).success(function(response){
				if (response == 1){
					alert("修改成功！");
					$('#orderDetailModal').modal('hide');
				}
				else {
					alert("oops...修改失败...");
					$('#orderDetailModal').modal('hide');
				}
			});
			updateOrderData($scope.orderDetail);
		}

		function updateOrderData(detail){
			var index = $scope.deployedOrder.indexOf(tempDetail[0])
			$scope.deployedOrder[index].quantity = detail.quantity;
			$scope.deployedOrder[index].price = detail.price;
			$scope.deployedOrder[index].status = detail.status;
			$scope.deployedOrder[index].address = detail.address;
			$scope.deployedOrder[index].comment = detail.comment;
			tempDetail = {};
		}
	});