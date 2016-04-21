/**
 * Created by Zhou Canzhen
 * 2016/04/10
 */
yinjiApp.controller('authController',
	function loginController($scope,$http,$rootScope){
		$scope.errMsgColor = 'red';//设置错误消息为红色
		$userChecked = false;//先设置为未验证用户名
		//当用户输完用户名，立即验证用户名是否已存在
		$scope.checkUserExist = function(){
			if ($scope.username != null){
				$http({
					method: 'GET',//注意，这里必须要用GET方法
					url:'/auth/checkUser',
					params:{
						'username':$scope.username
					}
				}).success(function(data) {
					if (data == 0) {
						$scope.errMsgColor = "red";//登录失败，错误消息为红色
						$scope.errMsg = '对不起，该用户名已存在';
					} else {
						$scope.errMsgColor = "green";//登录成功，为绿色
						$userChecked = true;//将userChecked设置为true
						$scope.errMsg = '该用户名未被注册';
					}
				});
			}
		}

		//验证用户名密码
		$scope.register = function(){
			console.log('pwd:',$scope.pwd);
			console.log('repwd',$scope.repwd);
			if ($scope.username == null){
				$scope.errMsgColor = "red";//错误消息为红色
				$scope.errMsg = "请输入用户名";
			}else if ($scope.pwd == null) {
				$scope.errMsgColor = "red";//错误消息为红色
				$scope.errMsg = "请输入密码";
			}else if($scope.repwd == null){
				$scope.errMsgColor = "red";//错误消息为红色
				$scope.errMsg = "请再次输入密码进行确认";
			}else if ($scope.pwd != $scope.repwd ) {
				$scope.errMsgColor = "red";//错误消息为红色
				$scope.errMsg = "对不起，两次密码输入不一致，请重新输入";
			}else if($userChecked == true){
				$http({
					method: 'GET',//注意，这里必须要用GET方法
					url:'/auth/addUser',
					params:{
						'username':$scope.username,
						'password':$scope.pwd
					}
				})
				.success(function(data) {//返回新增用户的id
					console.log(data);
					if (data != null) {
						$scope.errMsgColor = "green";//登录成功，为绿色
						$scope.errMsg = '注册成功，自动登录...';
						$http({
							method: 'POST',
							url:'/auth/login',
							params:{
								'username':$scope.username,
								'password':$scope.pwd,
								'remember':true
							}
						});
						//window.setTimeout("window.location='intended'",1000);
					} else {
						$scope.errMsgColor = "red";//错误消息为红色
						$scope.errMsg = 'oops，注册失败...猿猿正在努力查找错误原因中...';
					}
				});
			}else if ($userChecked == false){
				$scope.errMsgColor = "red";//错误消息为红色
				$scope.errMsg = '对不起，该用户名已存在';
			}

		};
	});