window.orderId = 0;

//删除订单
function deleteOrder(objId, obj){
	console.log(objId);

	$.ajax({
		type: 'get',
		url: '/deleteOrder',
		
		data: {
			'orderId': objId	
		},
		dataType : "text",
		success : function(data) {
			if(data != null){
				console.log(data);
				alert("删除成功!");
				deleteCurRow(obj);
			}
		},
		error : function() {
			alert("false");
		}
	});	
}

function deleteCurRow(obj){
	var tr = obj.parentNode.parentNode;  

	var tbody = tr.parentNode;  

	tbody.removeChild(tr);  
	//只剩行首时删除表格  
	if(tbody.rows.length==1) {  
		tbody.parentNode.removeChild(tbody);  
	}  
}

function selectOrderId(objId){
	orderId = objId;
	console.log(orderId);
}

yinjiApp.controller('albumController',
	function test($scope,$http,$rootScope){

		//显示订单
		$http({
			method: 'GET',//注意，这里必须要用GET方法
			url:'/displayOrder',
		})
		.success(function(data) {
			data = data.reverse();
			if(data != null){
				console.log(data);
				for(var i = 0; i < data.length; i++){
					var ele = "<tr><td>" + data[i].album_name + "</td><td>" + data[i].order_date + "</td><td>" + data[i].status + "</td><td><a onclick = 'deleteOrder(" + data[i].id + ", this)'>删除订单</a>&nbsp;&nbsp;&nbsp;<a data-toggle='modal' data-target='#orderDetailModal' onclick = 'selectOrderId(" + data[i].id + ")'>评价订单</a></td></tr>"
					$("tbody#tableBody").append(ele);
				}
			}
			else{
				console.log("false");
			}
		});

		$scope.editOrder = function(){
			console.log($scope.detail);
			$('#orderDetailModal').modal('hide');

			$http({
				method: 'GET',
				url: '/assessOrder',
				params:{
					'orderId' : orderId,
					'assessDetail': $scope.detail
					
				}
			})
			.success(function(data){
				if(data != null){
					// window.location.href = '/album_cover';
					console.log("评价成功");
				}else{
					console.log("false");
				}
			});
		}
	});