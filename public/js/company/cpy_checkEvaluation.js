yinjiApp.controller('checkEvaluationCtrl',
	function($scope,$http){
		$scope.evaluations = {};
		$http.get("/cpy/getEvaluations")
		.success(function (response)
		{
			//console.log(response);
			
			$scope.evaluations = response;
		});



		$scope.getGoodEva= function(){
			$http({
				method:'GET',
				url:'/cpy/getGoodEva',
			})
			.success(function (response){
				$scope.evaluations = response;
			});
		}

		$scope.getBadEva= function(){
			$http({
				method:'GET',
				url:'/cpy/getBadEva',
			})
			.success(function (response){
				$scope.evaluations = response;
			});
		}
	});