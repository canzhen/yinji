/**
 * Created by Zhou Canzhen
 * 2016/06/10
 */
yinjiApp.controller('checkUserCtrl',
	function($scope,$http){
		$scope.deployedCpyUsers = {};
		$http.get("/usr/getCommonUsers")
		.success(function(response){
			console.log("success");
			$scope.deployedCpyUsers = response;
		});
});