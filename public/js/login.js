/**
* Created by Zhou Canzhen
* 2016/03/28
*/
yinjiApp.controller('authController',
function loginController($scope,$http,$rootScope){
	//验证用户名密码是否正确
	if ($scope.remember == null)
		$scope.remember = false;
	$scope.login = function(){
		if ($scope.username == null){
			$scope.errMsg = "请输入用户名";
		}else if ($scope.pwd == null){
			$scope.errMsg = "请输入密码";
		}else{
			$http({
				method: 'POST',
				url:'/auth/login',
				params:{
					'username':$scope.username,
					'password':$scope.pwd,
					'remember':$scope.remember
				}
			})
			.success(function(data) {

				

				console.log(data);
				if (data==0) {
					$scope.errMsgColor = "red";//登录失败，错误消息为红色
					$scope.errMsg = '登录失败，用户名或密码错误...';
				} else {
					$scope.errMsgColor = "green";//登录成功，为绿色
					$scope.errMsg = '登录成功，自动跳转页面...';
					if (data==2){//公司用户
						window.setTimeout("window.location='/cpy_index'",1000);
					}else{
						window.setTimeout("window.location='/intended'",1000);
					}
				}
			});
		}

	};
});