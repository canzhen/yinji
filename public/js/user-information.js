/**
 * Created by Zhou Canzhen
 * 2016/05/12
 */


/*jquery part
 * 检测密码强度
 */
function CheckIntensity(pwd){
    var Mcolor,Wcolor,Scolor,Color_Html;
    var m=0;
    var Modes=0;
    for(i=0;i<pwd.length;i++){
        var charType=0;
        var t=pwd.charCodeAt(i);
        if(t>=48 && t <=57){charType=1;}
        else if(t>=65 && t <=90){charType=2;}
        else if(t>=97 && t <=122){charType=4;}
        else{charType=4;}
        Modes |= charType;
    }

    for(i=0;i<4;i++){
        if(Modes & 1){m++;}
        Modes>>>=1;
    }

    if(pwd.length<=4){m=1;}

    if(pwd.length<=0){m=0;}

    switch(m){
        case 1 :
            Wcolor="pwd pwd_Weak_c";
            Mcolor="pwd pwd_c";
            Scolor="pwd pwd_c pwd_c_r";
            Color_Html="弱";
            break;
        case 2 :
            Wcolor="pwd pwd_Medium_c";
            Mcolor="pwd pwd_Medium_c";
            Scolor="pwd pwd_c pwd_c_r";
            Color_Html="中";
            break;
        case 3 :
            Wcolor="pwd pwd_Strong_c";
            Mcolor="pwd pwd_Strong_c";
            Scolor="pwd pwd_Strong_c pwd_Strong_c_r";
            Color_Html="强";
            break;
        default :
            Wcolor="pwd pwd_c";
            Mcolor="pwd pwd_c pwd_f";
            Scolor="pwd pwd_c pwd_c_r";
            Color_Html="无";
            break;
    }

    document.getElementById('pwd_Weak').className=Wcolor;
    document.getElementById('pwd_Medium').className=Mcolor;
    document.getElementById('pwd_Strong').className=Scolor;
    document.getElementById('pwd_Medium').innerHTML=Color_Html;
}



yinjiApp.controller('userInfoCtrl',
    function userInfoCtrl($scope,$http,$rootScope){
        $scope.userImgSrc = "/images/create_album/profile.jpg";
        //console.log($scope.userImgSrc);
        $scope.msg = "";
        $scope.msgIndex = 0;
        $scope.identicalMsg="";
        $scope.errMsgColor = "red";


        //获取用户名并显示在首页上
        $http.get("/getUserName")
        .success(function (response)
        {
            $scope.username = response;
        });


        //查看该用户是否设置了手机
        $http.get("/usr/checkIfMobile")
        .success(function(response){
            if (response != 0){
                $scope.ifMobile = "green";
                $scope.phoneNumber = response;
            }else{
                $scope.ifMobile = "red";
            }
        })


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

        //更改用户信息（邮箱）
        $scope.editInfo = function(){
            var email = $scope.emailName+"@"+$scope.emailSuffix+".com";
            $http({
                method:'GET',
                url:"/usr/editInfo",
                params:{
                    'username':$scope.username,
                    'email':email
                }
            })
            .success(function (response)
            {
                if (response == 1){
                    alert("修改成功！");
                }else if (response == 0){
                    alert("oops...修改失败...");
                }
            });
        };

        $scope.editUsername = function(){
            $http({
                method:'GET',
                url:"/usr/editUsername",
                params:{
                    'newUsername':$scope.newUsername
                }
            })
            .success(function(response){
                console.log(response);
                if (response == 1){
                    $scope.username = $scope.newUsername;
                    alert("修改用户名成功！");
                }else{
                    alert("修改用户名失败...");
                }

            });
            $('#editUserNameModal').modal('hide');
        }


        //验证当前密码是否正确
        $scope.verifyCurrentPwd = function(){
            $http({
                method:'GET',
                url:"/usr/checkPwd",
                params:{
                    'inputPwd':$scope.oldPwd
                }
            })
            .success(function (response)
            {
                if (response == 0){
                    $scope.errMsgColor = "red";
                    $scope.msg = "当前密码错误！请重新输入！";
                    $scope.msgIndex = 0;
                }else{
                    $scope.errMsgColor = "green";
                    $scope.msg = "当前密码正确，请继续输入";
                    $scope.msgIndex = 1;
                }
            });
        };

        //看两次密码输入是否一致
        $scope.checkIdentical = function(){
            if ($scope.newPwd != $scope.re_newPwd){
                $scope.identicalMsg = "两次输入密码不一致，请重新输入";
                $scope.re_newPwd="";
                $scope.identicalIndex = 0;
            }else{
                $scope.identicalMsg = "";
                $scope.identicalIndex = 1;
            }
        }


        //修改用户密码
        $scope.editPwd = function() {
            $http({
                method:'GET',
                url:"/usr/editPwd",
                params:{
                    'newPwd':$scope.newPwd
                }
            })
            .success(function (response)
            {
                console.log(response);
                if (response==1)
                    alert('修改密码成功！');
                else{
                    alert('oops,修改密码失败，请重试');
                }
            });

            $('#editPwdModal').modal('hide');
        };
});