window.imgList = "";
window.temId = 0;



function selectTemplate(objId){
    for (var i = 0; i < imgList.length; i++) {
        var tmp = "img" + imgList[i].id;
		document.getElementById(tmp).className = 'noBorder';
	}
	document.getElementById(objId).className = 'hasBorder';
    temId = objId;
    
    //console.log(oTem);
}

yinjiApp.controller('orderController',
    function createAlbumController($scope,$http,$rootScope){
        
        // $("#text_box1").keyup(function () {
        //     $(this).val($(this).val().replace(/\D|^0/g, ''));
        // }).bind("paste", function () {  //CTR+V事件处理    
        //     $(this).val($(this).val().replace(/\D|^0/g, ''));
        // }).css("ime-mode", "disabled"); //CSS设置输入法不可用 

        // for(var i = 0; i < 9; i++){
        //     var ele = "<>";
		// 	$("div#albumContainer").after(ele);
        // }

        $http({
            method: 'GET',//注意，这里必须要用GET方法
            url:'/getTemplates',
            
        })
        .success(function(data) {
            if(data != null){
                console.log(data);
                imgList = data;
                for(var i = 0; i < data.length; i++){
                    var ele = "<img src = '" + data[i].saving_path + "' id = 'img" + data[i].id + "' title = '" + data[i].description + "' onclick = 'selectTemplate(this.id)' class = 'noBorder'>";
                    $("div.order_text").append(ele);
                }
                if(data.length != 0){
                    temId = "img" + data[0].id;
                    document.getElementById(temId).className = "hasBorder";
                }
                 
            }
            else{
                console.log("false");
            }
        });

        
        $scope.addOrder = function(){
<<<<<<< HEAD
            if($("#text_box2").val() == 0 || $("#text_box1").val() == 0){
=======
            
            if($("#text_box2").val() < $("#text_box1").val()){
>>>>>>> d66a417a02acaa3755d91df5b496faa927fb490d
                alert("页码错误");
            }else{
                if($("#text_box2").val() < $("#text_box1").val()){
                
                }
                else{
                    var pageRange = $("#text_box1").val() + "-" + $("#text_box2").val();
                    var pagePrice = ($("#text_box2").val() - $("#text_box1").val()) * 10;//单价10块一张。。。
                    
                    var commentText = $scope.oComment;
                    if(commentText ==  "" || commentText == null){
                        commentText = "无";
                    }

<<<<<<< HEAD
                    if(temId == 0){
                        var oTem = 0;
                    }else{
                        var oTem = temId.substring(3,4);

                    }
                    
                    $http({
                        method: 'GET',//注意，这里必须要用GET方法
                        url:'/addOrder',
                        params:{
                            'oName': $scope.oName,
                            'oPhone': $scope.oPhone,
                            'oAddress' : $scope.oAddress,
                            'oComment' : commentText,
                            'oNum' : 1,
                            'oPrice' : pagePrice,
                            'oTemplate' : oTem
                        }
                    })
                    .success(function(data) {
                        if(data != null){
                            console.log(data);
                            alert("成功！");
                            window.location.href = "/";
                        }
                        else{
                            console.log("false");
                        }
                    });
                }
=======
                if(temId == 0){
                    //console.log("00000");
                    var oTem = 0;
                }else{
                    var oTem = temId.substring(3,4);

                }
                
                $http({
                    method: 'GET',//注意，这里必须要用GET方法
                    url:'/addOrder',
                    params:{
                        'oName': $scope.oName,
                        'oPhone': $scope.oPhone,
                        'oAddress' : $scope.oAddress,
                         'oComment' : commentText,
                         'oNum' : pageRange,
                         'oPrice' : pagePrice,
                         'oTemplate' : oTem
                    }
                })
                .success(function(data) {
                    if(data != null){
                        console.log(data);
                        alert("成功！");
                        window.location.href = "/orderInfo";
                    }
                    else{
                        console.log("false");
                    }
                });
>>>>>>> d66a417a02acaa3755d91df5b496faa927fb490d
            }

            
        }
    });