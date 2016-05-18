// 实现点加号减号时数量的变化
$(function(){
    var t = $("#text_box");

    $("#add").click(function(){       
        t.val(parseInt(t.val())+1)
        setTotal();
    })
    $("#min").click(function(){
        t.val(parseInt(t.val())-1)
         setTotal();
    })
       function setTotal(){
     var tt = $("#text_box").val();
     var  pbinfoid=$("#pbinfoid").val();
        if(tt<=0){
        alert('不能为负！');
        t.val(parseInt(t.val())+1)
        }
        // else{
        // window.location.href = "shopping!updateMyCart.action?pbinfoid="+pbinfoid+"&number="+tt;
        // }
    }
   
})