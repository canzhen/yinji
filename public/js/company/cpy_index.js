/**
 * Created by Zhou Canzhen
 * 2016/05/06
 */
yinjiApp.controller('cpyIndexController',
	function($scope,$http){
		$scope.deployedOrder = {};
		$scope.undoneOrderNum;
		$scope.evaNum;

		//获取首页报表数据
		function setMorrisChart(rawData){
			var data = [];
			for (var e in rawData){
				data.push({time:e,count:rawData[e]});
			}
			Morris.Line({
				element: 'morris-area-chart',
				data: data,
				xkey: 'time',
				ykeys: ['count'],
				labels: ['订单数'],
				pointSize: 2,
				hideHover: 'auto',
				resize: true
			});
		}


		//获取首页订单
		$http.get("/cpy/getOrders")
		.success(function (response)
		{
			//首页这里只显示前5个订单
			for (var i = 0 ; i < 5; i++){
				if(response[i] != null)
					$scope.deployedOrder[i] = response[i];
			}
			//获取首页报表数据
			var date,orderDate,data=new Object();
			for (i=0; i<response.length; i++){
				date = (response[i].order_date.split(" "))[0];
				if (data[date] == null)
					data[date] = 1;
				else
					data[date]++;
			}
			setMorrisChart(data);
		});

		$http.get("/cpy/getIndexMsg")
		.success(function (response)
		{
			$scope.undoneOrderNum=response.undoneOrderNum;
			$scope.evaNum=response.evaNum;
		});

	});