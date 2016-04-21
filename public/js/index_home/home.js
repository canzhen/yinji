// $(document).ready(function(){
// 	// $(".test").css("display", "none");

// 	$(".book-set").hover(function(){
// 		// window.alert("dafsdfsd");
// 		$(".test").slideDown();
// 	});
// });

// var wall = new freewall("#freewall");
// wall.reset({
// 	selector: '#book1',
// 	animate: true,
// 	cellW: 200,
// 	cellH: 'auto',
// 	onResize: function() {
// 		wall.fitWidth();
// 	}
// });

// wall.container.find('#book1 img').load(function() {
// 	wall.fitWidth();
// });

// //call sliphover
// $('#freewall').sliphover();

var wall = new freewall("#container");
			wall.reset({
				selector: '.book-set',
				animate: true,
				cellW: 200,
				cellH: 'auto',
				onResize: function() {
					wall.fitWidth();
				}
			});
			
			wall.container.find('.book-set img').load(function() {
				wall.fitWidth();
			});

			//call sliphover
			$('#container').sliphover();