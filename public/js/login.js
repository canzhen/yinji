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
				$scope.errMsg = '��¼�ɹ�������1����Զ���ת......';
				window.setTimeout("window.location='intended'",1000);
            } else {
				$scope.errMsg = '�û����������������������';                
            }
        });
	};
});