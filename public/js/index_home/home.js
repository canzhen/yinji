window.orderId = 0;
// $(function() {		
// 	$('.ec-circle').circlemouse({
// 		onMouseEnter	: function( el ) {
// 			el.addClass('ec-circle-hover');
// 		},
// 		onMouseLeave	: function( el ) {	
// 			el.removeClass('ec-circle-hover');	
// 		},
// 		onClick			: function( el ) {	
// 			alert('clicked');	
// 		}
// 	});
// });

function deleteAlbum(obj){
	Iid = obj.substring(3);
	//lert(Iid);

	$.ajax({
		type: 'get',
		url: '/deleteAlbum',
		
		data: {
			'albumId': Iid	
		},
		dataType : "text",
		success : function(data) {
			if(data != null){
				console.log(data);
				alert("删除成功!");
				window.location.href = "/home";
			}
		},
		error : function() {
			alert("false");
		}
	});	
}

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

		//展示纪念册
		$http({
			method: 'GET',//注意，这里必须要用GET方法
			url:'/displayAlbum',
		})
		.success(function(data) {
			if(data != null){
				
				for(var i = 0; i < data.length; i++){
					var reg = new RegExp(/\\/,"g"); 
					var newstr = data[i].saving_path.replace(reg,"/"); 
					var ele = "<div class = 'no-line normal-trigger-area'><i id = 'del" + data[i].id + "' class='fa fa-trash-o fa-lg' onclick = 'deleteAlbum(this.id)'></i><a href = 'javascript:void(0)' id = 'circle" + data[i].id + "' class = 'ec-circle' style = 'background: url(" + newstr + ");'><h3>" + data[i].name + "</h3></a></div>";
					$("div#albumContainer").append(ele);
				}

				$('.ec-circle').circlemouse({
					onMouseEnter	: function( el ) {
						el.addClass('ec-circle-hover');
					},
					onMouseLeave	: function( el ) {	
						el.removeClass('ec-circle-hover');	
					},
					onClick			: function( el ) {	
						var clickId = el[0].id;
						//获得点击纪念册的id
						clickId = clickId.substring(6);
						$scope.gotoAlbum(clickId);
					}
				});
			}
			else{
				console.log("false");
				
			}
		});


		//显示订单
		$http({
			method: 'GET',//注意，这里必须要用GET方法
			url:'/displayOrder',
		})
		.success(function(data) {
			if(data != null){
				console.log(data);
				for(var i = 0; i < data.length; i++){
					var ele = "<tr><td>" + data[i].album_name + "</td><td>" + data[i].order_date + "</td><td><a onclick = 'deleteOrder(" + data[i].id + ", this)'>删除订单</a>&nbsp;&nbsp;&nbsp;<a data-toggle='modal' data-target='#orderDetailModal' onclick = 'selectOrderId(" + data[i].id + ")'>评价订单</a></td></tr>"
					$("tbody#tableBody").append(ele);
				}
			}
			else{
				console.log("false");
			}
		});


		$scope.gotoAlbum = function(num){
			console.log(num);
			$http({
				method: 'GET',
				url: '/showAlbum',
				params:{
					'albumId': num
				}
			})
			.success(function(data){
				if(data != null){
					window.location.href = '/album_cover';
				}
			});
		};

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