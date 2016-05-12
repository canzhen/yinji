/**
 * Created by Zhou Canzhen
 * 2016/05/12
 */
yinjiApp.controller('userInfoCtrl',
    function userInfoCtrl($scope,$http,$rootScope){

        $scope.msg = "";
        $scope.msgIndex = 0;
        $scope.errMsgColor = "red";
        
        //获取用户名并显示在首页上
        $http.get("/getUserName")
        .success(function (response)
        {
            $scope.username = response;
        });

        //查看用户名是否已存在
        $scope.checkUserExist = function(){
            $http({
                method:'GET',
                url:"/usr/checkExistUser",
                params:{
                    'username':$scope.newUsername
                }
            })
            .success(function (response)
            {
                if (response == 1){
                    $scope.errMsgColor = "red";
                    $scope.msg = "对不起，已有该用户名，请重新输入！";
                    $scope.msgIndex = 1;
                }else if (response == 0){
                    $scope.errMsgColor = "green";
                    $scope.msg = "该用户名尚未被使用";
                    $scope.msgIndex = 0;
                }
            });
        };
});