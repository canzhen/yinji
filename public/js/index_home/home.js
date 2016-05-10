$(function() {		
	$('.ec-circle').circlemouse({
		onMouseEnter	: function( el ) {
			el.addClass('ec-circle-hover');
		},
		onMouseLeave	: function( el ) {	
			el.removeClass('ec-circle-hover');	
		},
		onClick			: function( el ) {	
			alert('clicked');	
		}
	});
});

yinjiApp.controller('testController',
	function test($scope,$http,$rootScope){
		$http({
			method: 'GET',//注意，这里必须要用GET方法
			url:'/testSession',
			
		}).success(function(data) {
			if(data != null){
				console.log(data);
			}
			else{
				console.log("false");
			}
		});
	});

function test(){
	alert("adfsd");
}


// var wall = new freewall("#imgContainer");
// 	wall.reset({
// 		selector: '.book-set',
// 		animate: true,
// 		cellW: 200,
// 		cellH: 'auto',
// 		onResize: function() {
// 			wall.fitWidth();
// 		}
// 	});

// 	wall.container.find('.book-set img').load(function() {
// 		wall.fitWidth();
// 	});

// 	//call sliphover
// 	$('#imgContainer').sliphover();

