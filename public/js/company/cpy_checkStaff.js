/**
 * Created by Zhou Canzhen
 * 2016/04/28
 */
yinjiApp.controller('staffManageCtrl',
	function($scope,$http){
		$scope.deployedCpyUsers = {};
		$http.get("/usr/getCpyUsers")
		.success(function(response){
			console.log("success");
			$scope.deployedCpyUsers = response;
		});
});