
    var options = {  
        beforeSubmit:  formComplete,  //提交前处理 
        success:       showResponse,  //处理完成 
        resetForm: true,  
        dataType:  'json'  
    };  
   $('#record_form').submit(function() {  
        $(this).ajaxSubmit(options);
         var desc=window.parent.document.getElementById('record_desc').value;
         var year=window.parent.document.getElementById('year').options[window.parent.document.getElementById('year').selectedIndex].text;
         var month=window.parent.document.getElementById('month').options[window.parent.document.getElementById('month').selectedIndex].text;
         var day= window.parent.document.getElementById('day').options[window.parent.document.getElementById('day').selectedIndex].text;
         var hour=window.parent.document.getElementById('hour').options[window.parent.document.getElementById('hour').selectedIndex].text;
         var min= window.parent.document.getElementById('min').options[window.parent.document.getElementById('min').selectedIndex].text;

        var d = new Date();
        if(year=="" || month=="" || day=="")
        {
            document.getElementById('date').value = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+ d.getDate()+" "+ d.getHours()+":"+ d.getMinutes()+":"+ d.getSeconds();
        }else{
            document.getElementById('date').value=year+"-"+month+"-"+day+" "+hour+":"+min+":00";
        }
         //document.getElementById('date').value=year+"-"+month+"-"+day+" "+hour+":"+min+":00";
         document.getElementById('content').value=desc;
    }); 
  function submit_record(){
        $('#record_form').submit();
  }
 


function formComplete(formData, jqForm, options) {  
  	return true;
}  
  
function showResponse(responseText, statusText)  {  
   alert(responseText);
}  