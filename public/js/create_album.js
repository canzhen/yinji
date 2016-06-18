window.allImg = new Array("img1_baby", "img2_health", "img3_travel", "img4_love", "img5_live", "img6_other");
window.imgCategory = "0";
window.curAlbumId = 0;

function testSub(){
	if (checkAlbumInput()){
		return true;
	}
	return false;
	//return true;
}

function checkAlbumInput() {
			var b1 = true;
			var b2 = true;
			var b3 = true;
			var b4 = true;
			var b5 = true;
			//判断纪念册名
			var aname = document.getElementsByName("aName");
			var athor = document.getElementsByName("aAuthor");
			var acover = document.getElementsByName("aCover");
			var acat = document.getElementsByName("catNum");
			var ades = document.getElementsByName("aDesc");
			

			if (aname[0].value == null || aname[0].value == "") {
				b1 = false;
				alert("请输入纪念册名称");
			}
			if (athor[0].value == null || athor[0].value == "") {
				b2 = false;
				alert("请输入作者名称");
			}
			if (acover[0].value == null || acover[0].value == "") {
				b3 = false;
				alert("请输入封面语");
			}
			//判断纪念册类别
			if (acat[0].value == "" || acat[0].value == null) {
				b4 = false;
				alert("请选择纪念册类别");
			}
			if (ades[0].value == "" || ades[0].value == null) {
				b5 = false;
				alert("请选择纪念册简介");
			}
			return (b1 && b1 && b3 && b4 && b5);
	}

yinjiApp.controller('albumController',
	function createAlbumController($scope, $http, $rootScope) {


		// $http({
		// 	method: 'GET',//注意，这里必须要用GET方法
		// 	url:'/getCurAlbum',
		// })
		// .success(function(data){
		// 	if(data != null){
		// 	
		// 	
		// 		console.log(data);
		// 		//alert("success");
		// 		curAlbumId = data;
		// 	}
		// });

		// $http({
		// 	method: 'GET',//注意，这里必须要用GET方法
		// 	url:'/getCurAlbumInfo',
		// })
		// .success(function(data){
		// 	if(data != null){
		// 		if(data == "false"){

		// 		}
		// 		else{
		// 			//alert("success");
		// 			curAlbumId = data;
		// 			nameOfAlbum = data.nameOfAlbum;
		// 			document.getElementById("input-1").focus();
		// 			var str = "#" + allImg[data[0].category - 1];
		// 			//console.log(str);
		// 			//$(str).addClass("hasBorder");
		// 			imgCategory = data[0].category;
		// 			$(str).removeClass('noBorder');
		// 			$(str).addClass("hasBorder");
		// 			$("#input-1").focus();
		// 			$("#input-1").val(data[0].name);
		// 			$("#input-2").focus();
		// 			$("#input-2").val(data[0].author_name);
		// 			$("#input-3").focus();
		// 			$("#input-3").val(data[0].motto);
		// 			$("#input-3").blur();
		// 			$("#albumDesc").val(data[0].description);
		// 			$("#test").focus();
		// 			window.location.href = "#top";
		// 		}
		// 	}else{
		// 		console.log(data);
		// 	}
		// });


		//创建纪念册
		$scope.createAlbum = function () {
			//输入验证通过
			// var fff = $("form");
			// console.log(fff);
			//var ff = document.getElementById("doc1").files;
			//console.log(ff);
			//document.getElementById("subBtn").submit();
			//$("imgForm").submit();
			
			
			if ($scope.checkAlbumInput()) {
				if ($scope.nameOfAuthor == null || $scope.nameOfAuthor == "")
					//$scope.nameOfAuthor = $_SESSION['userName'];

					if ($scope.contentOfDesc == null || $scope.contentOfDesc == "")
						$scope.contentOfDesc = "作者很懒，什么都没有留下";

				//document.getElementById("imgForm").submit();
				//$('#imgForm').submit();
				//$('#imgForm').submit();

				$http({
					method: 'GET',//注意，这里必须要用GET方法
					url: '/addAlbum',
					params: {
						'category': imgCategory,
						'albumName': $scope.nameOfAlbum,
						'authorName': $scope.nameOfAuthor,
						'motto': $scope.nameOfMotto,
						'description': $scope.contentOfDesc
					}
				})
					.success(function (data) {
						if (data != null) {
							console.log(data);
							//$('#imgForm').submit();
							
							alert("创建成功!");
							window.location.href = "/showAlbums";
						}
					});
			}
			else {
				alert("failed");
			}
		}


		/**
		 * 判断“创建纪念册”输入条件是否完整
		 * @return {[bool]} [是否输入完整]
		 */
		$scope.checkAlbumInput = function () {
			var bName = true;
			var bCategory = true;
			//判断纪念册名
			if ($scope.nameOfAlbum == null || $scope.nameOfAlbum == "") {
				bName = false;
				alert("请输入纪念册名称");
			}
			//判断纪念册类别
			if (imgCategory == 0) {
				bCategory = false;
				alert("请选择纪念册类别");
			}
			return (bName && bCategory);
		}
	});

function saveChange() {
	//alert("save");
	var newCategory = imgCategory;
	var newNameOfAlbum = $("#input-1").val();
	var newNameOfAuthor = $("#input-2").val();
	var newNameOfMotto = $("#input-3").val();
	var newContentOfDesc = $("#albumDesc").val();

	// $http({
	// 	method: 'GET',//注意，这里必须要用GET方法
	// 	url:'/updateAlbum',
	// 	params:{
	// 		'category': newCategory,			
	// 		'albumName': newNameOfAlbum,
	// 		'authorName': newNameOfAuthor,
	// 		'motto': newNameOfMotto,
	// 		'description': newContentOfDesc
	// 	}
	// })
	// .success(function(data){
	// 	if(data != null){
	// 		console.log(data);
	// 		//alert("修改成功!");
	// 	}
	// });

	$.ajax({
		type: 'get',
		url: '/updateAlbum',

		data: {
			'category': newCategory,
			'albumName': newNameOfAlbum,
			'authorName': newNameOfAuthor,
			'motto': newNameOfMotto,
			'description': newContentOfDesc
		},
		dataType: "text",
		success: function (data) {
			if (data != null) {
				console.log(data);
				//alert("修改成功!");
				window.location.href = "/home";
			}
		},
		error: function () {
			alert("false");
		}
	});
}


function deleteAlbum() {
	$.ajax({
		type: 'get',
		url: '/deleteAlbum',

		dataType: "text",
		success: function (data) {
			if (data != null) {
				console.log(data);
				//alert("修改成功!");
				window.location.href = "/home";
			}
		},
		error: function () {
			alert("false");
		}
	});
}

//点击图片边框变红
function changecolor(obj, num) {
	for (var i = 0; i < allImg.length; i++) {
		document.getElementById(allImg[i]).className = 'noBorder';
	}
	document.getElementById(obj).className = 'hasBorder';
	imgCategory = num;
	document.getElementById("hiddenText").value = imgCategory;
}



// 封面设计文本框输入
(function (window) {

	'use strict';

	// class helper functions from bonzo https://github.com/ded/bonzo

	function classReg(className) {
		return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
	}

	// classList support for class management
	// altho to be fair, the api sucks because it won't accept multiple classes at once
	var hasClass, addClass, removeClass;

	if ('classList' in document.documentElement) {
		hasClass = function (elem, c) {
			return elem.classList.contains(c);
		};
		addClass = function (elem, c) {
			elem.classList.add(c);
		};
		removeClass = function (elem, c) {
			elem.classList.remove(c);
		};
	}
	else {
		hasClass = function (elem, c) {
			return classReg(c).test(elem.className);
		};
		addClass = function (elem, c) {
			if (!hasClass(elem, c)) {
				elem.className = elem.className + ' ' + c;
			}
		};
		removeClass = function (elem, c) {
			elem.className = elem.className.replace(classReg(c), ' ');
		};
	}

	function toggleClass(elem, c) {
		var fn = hasClass(elem, c) ? removeClass : addClass;
		fn(elem, c);
	}

	var classie = {
		// full names
		hasClass: hasClass,
		addClass: addClass,
		removeClass: removeClass,
		toggleClass: toggleClass,
		// short names
		has: hasClass,
		add: addClass,
		remove: removeClass,
		toggle: toggleClass
	};

	// transport
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(classie);
	} else {
		// browser global
		window.classie = classie;
	}

})(window);

// 封面设计文本框输入
(function () {
	// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
	if (!String.prototype.trim) {
		(function () {
			// Make sure we trim BOM and NBSP
			var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
			String.prototype.trim = function () {
				return this.replace(rtrim, '');
			};
		})();
	}

	[].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
		// in case the input is already filled..
		if (inputEl.value.trim() !== '') {
			classie.add(inputEl.parentNode, 'input--filled');
		}

		// events:
		inputEl.addEventListener('focus', onInputFocus);
		inputEl.addEventListener('blur', onInputBlur);
	});

	function onInputFocus(ev) {
		classie.add(ev.target.parentNode, 'input--filled');
	}

	function onInputBlur(ev) {
		if (ev.target.value.trim() === '') {
			classie.remove(ev.target.parentNode, 'input--filled');
		}
	}
})();

// !function(e){
// 	"use strict";
// 	e(".navigation").singlePageNav({currentClass:"active"})
// 	,e(".toggle-menu").click(function(){
// 		return e(".responsive-menu").
// 		stop(!0,!0).slideToggle(),!1
// 		})}(jQuery);



//下面用于图片上传预览功能
function setImagePreview(avalue) {
	var docObj = document.getElementById("doc");
  
	var imgObjPreview = document.getElementById("preview");
	//alert(imgObjPreview.src);
	if (docObj.files && docObj.files[0]) {
		//火狐下，直接设img属性
		imgObjPreview.style.display = 'block';
		imgObjPreview.style.width = '200px';
		imgObjPreview.style.height = '200px';
		//imgObjPreview.src = docObj.files[0].getAsDataURL();

		//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
		imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);

	} else {
		//IE下，使用滤镜
		docObj.select();
		var imgSrc = document.selection.createRange().text;
		var localImagId = document.getElementById("localImag");
		//必须设置初始大小
		localImagId.style.width = "200px";
		localImagId.style.height = "250px";
		//图片异常的捕捉，防止用户修改后缀来伪造图片
		try {
			localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
			localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
		} catch (e) {
			alert("您上传的图片格式不正确，请重新选择!");
			return false;
		}
		imgObjPreview.style.display = 'none';
		document.selection.empty();

	}
	//var tmp = document.getElementById("preview").value;
	//	alert(tmp);
	return true;
}


//下面用于图片上传预览功能
function setImagePreview1(avalue) {
	
	var docObj = document.getElementById("doc1");

	var imgObjPreview = document.getElementById("preview1");
	if (docObj.files && docObj.files[0]) {
		//火狐下，直接设img属性
		imgObjPreview.style.display = 'block';
		imgObjPreview.style.width = '500px';
		imgObjPreview.style.height = '550px';
		//imgObjPreview.src = docObj.files[0].getAsDataURL();

		//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
		imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
	} else {
		//IE下，使用滤镜
		docObj.select();
		var imgSrc = document.selection.createRange().text;
		var localImagId = document.getElementById("localImag1");
		//必须设置初始大小
		localImagId.style.width = "500px";
		localImagId.style.height = "550px";
		//图片异常的捕捉，防止用户修改后缀来伪造图片
		try {
			localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
			localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
		} catch (e) {
			alert("您上传的图片格式不正确，请重新选择!");
			return false;
		}
		imgObjPreview.style.display = 'none';
		document.selection.empty();
	}
	return true;
}

function change2event(obj){
	setImagePreview1();
	getvl(obj);
}