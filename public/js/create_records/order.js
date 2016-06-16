// 实现点加号减号时数量的变化
$(function() {
    var text = $("#text_box");

    $("#add").click(function() {
        text.val(parseInt(text.val()) + 1)
        setPrice();
    })

    $("#min").click(function() {
        text.val(parseInt(text.val()) - 1)

        var tValue = $("#text_box").val();
        if (tValue <= 0) {
            //alert('不能为负！');
            text.val(parseInt(text.val()) + 1)
        }
        setPrice();
    })

    function setPrice(){
        var tValue = $("#text_box").val();
        $("#price").text(tValue * 10);
    }
})

function deleteOrder(){
    $.ajax({
        type: 'get',
        url: '/deleteOrder',

        dataType : "text",
        success : function(data) {
            if(data != null){
                console.log(data);
                //alert("删除成功!");
                //window.location.href = "/home";
            }
        },
        error : function() {
            alert("false");
        }
    }); 
    
}

yinjiApp.controller('orderController',
    function createAlbumController($scope,$http,$rootScope){
        
        // $("#text_box1").keyup(function () {
        //     $(this).val($(this).val().replace(/\D|^0/g, ''));
        // }).bind("paste", function () {  //CTR+V事件处理    
        //     $(this).val($(this).val().replace(/\D|^0/g, ''));
        // }).css("ime-mode", "disabled"); //CSS设置输入法不可用 

        
        $scope.addOrder = function(){
            if($("#text_box2").val() > $("#text_box1").val()){
                alert("页码错误");
            }
            else{
                var commentText = $scope.oComment;
                if(commentText ==  "" || commentText == null){
                    commentText = "";
                }
                
                $http({
                method: 'GET',//注意，这里必须要用GET方法
                url:'/addOrder',
                params:{
                    'oName': $scope.oName,
                    'oPhone': $scope.oPhone,
                    'oAddress' : $scope.oAddress,
                    'oComment' : commentText,
                    'oNum' : 0,
                    'oPrice' : 0

                }
            })
            .success(function(data) {
                if(data != null){
                    console.log(data);
                }
                else{
                    console.log("false");
                }
            });
            }
            //alert("safasd");
            
            
        }


    });