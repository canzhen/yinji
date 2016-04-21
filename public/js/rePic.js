function viewmypic(mypic,imgfile) {        
	if (imgfile.value){
		var imgview=document.getElementById("imgview");
		var str=imgfile.value;
		var arr=str.split(",");
		for(var i=0;i<arr.length;i++){
			var img=document.createElement("img");
			img.src=arr[i];
			img.border=3;
			img.width=200;
			img.height=200;
			imgview.appendChild(img);
		}
	}        
}                 