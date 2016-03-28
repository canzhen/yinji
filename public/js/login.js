/**
* Created by Zhou Canzhen
* 2016/03/28
*/
yinjiApp.controller('loginController',
function loginController($scope,$http,$rootScope){
	//check name and pwd
	$scope.errMsg = 'test';
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
            if (data==1) {
				$scope.errMsg = '登录成功！将在1秒后自动跳转......';
				window.setTimeout("window.location='intended'",1000);
            } else {
				$scope.errMsg = '用户名或密码错误，请重新输入';                
            }
        });
	};
});