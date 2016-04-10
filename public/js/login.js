/**
* Created by Zhou Canzhen
* 2016/03/28
*/
yinjiApp.controller('loginController',
function loginController($scope,$http,$rootScope){
	//check name and pwd
	if ($scope.remember == null)
		$scope.remember = false;
	$scope.login = function(){
		$http({
			method: 'POST',
			url:'/login',
			params:{
				'username':$scope.username,
				'password':$scope.pwd,
				'remember':$scope.remember
			}
		})
        .success(function(data) {
            console.log(data);
            if (data==1) {
				$scope.errMsg = '登录成功，自动跳转页面...';
				window.setTimeout("window.location='intended'",1000);
            } else {
				$scope.errMsg = '登录失败，用户名或密码错误...';
            }
        });
	};

	$scope.addUser = function(){
		$http({
			method:'GET',
			url:"/db/addUser",
			params:{
				'username':$scope.username,
				'email':'scx@163.com',
				'password':$scope.pwd,
				'privilege':'user'
			}
		})
	};
});