yinjiApp.controller('albumController',
	function test($scope,$http,$rootScope){
       // alert("afdasd");
        $http({
				method: 'GET',
				url: '/albumInfo',
				
			})
			.success(function(data){
				if(data != null){
					// window.location.href = '/album_cover';
					console.log(data);
                    $("#albumName").html(data[0].name);
                    $("#albumDes").html(data[0].description);
				}else{
					console.log("false");
				}
			});
	});