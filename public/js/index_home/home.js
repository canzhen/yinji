// $(function() {		
// 	$('.ec-circle').circlemouse({
// 		onMouseEnter	: function( el ) {
// 			el.addClass('ec-circle-hover');
// 		},
// 		onMouseLeave	: function( el ) {	
// 			el.removeClass('ec-circle-hover');	
// 		},
// 		onClick			: function( el ) {	
// 			alert('clicked');	
// 		}
// 	});
// });

yinjiApp.controller('albumController',
	function test($scope,$http,$rootScope){
		

		$http({
			method: 'GET',//注意，这里必须要用GET方法
			url:'/displayAlbum',
			
		})
		.success(function(data) {
			if(data != null){
				for(var i = 0; i < data.length; i++){
					var reg = new RegExp(/\\/,"g"); 
					var newstr = data[i].saving_path.replace(reg,"/"); 
					var ele = "<div class = 'normal-trigger-area'><a href = '#' id = 'circle' class = 'ec-circle' style = 'background: url(" + newstr + ");'><h3>" + data[i].name + "</h3></a></div>";
					$("div#albumContainer").after(ele);
				}

				$('.ec-circle').circlemouse({
					onMouseEnter	: function( el ) {
						el.addClass('ec-circle-hover');
					},
					onMouseLeave	: function( el ) {	
						el.removeClass('ec-circle-hover');	
					},
					onClick			: function( el ) {	
						alert('clicked');	
						//console.log(el);
					}
				});
				 // console.log(data);
			}
			else{
				console.log("false");
			}
		});
	});