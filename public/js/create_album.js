window.allImg = new Array("img1_baby","img2_health","img3_travel","img4_love","img5_live","img6_other");
window.imgCategory = "0";


yinjiApp.controller('albumController',
	function createAlbumController($scope,$http,$rootScope){
		//创建纪念册
		$scope.createAlbum = function(){
			//输入验证通过
			if($scope.checkAlbumInput()){
				if($scope.nameOfAuthor == null || $scope.nameOfAuthor == "")
					$scope.nameOfAuthor = $_SESSION['userName'];

				if($scope.contentOfDesc == null || $scope.contentOfDesc == "") 
					$scope.contentOfDesc = "作者很懒，什么都没有留下";

				$http({
					method: 'GET',//注意，这里必须要用GET方法
					url:'/testSession',
					// params:{
					// 	'userId': $_SESSION['userId'],
					// 	'albumName': $scope.nameOfAlbum,
					// 	'category': imgCategory,
					// 	'description': $scope.contentOfDesc,
					// 	'authorName': $scope.nameOfAuthor,
					// 	'motto': $scope.nameOfMotto
					// }
				})
				.success(function(data){
					console.log(data);
					if(data != null){
						
					}
				});
			}
			else{
				alert("failed");
			}
		}

		/**
		 * 判断“创建纪念册”输入条件是否完整
		 * @return {[bool]} [是否输入完整]
		 */
		$scope.checkAlbumInput = function(){
			var bName = true;
			var bCategory = true;
			//判断纪念册名
			if($scope.nameOfAlbum == null || $scope.nameOfAlbum == ""){
				bName = false;
				alert("请输入纪念册名称");
			}
			//判断纪念册类别
			if(imgCategory == 0){
				bCategory = false;
				alert("请选择纪念册类别");
			}
			return (bName && bCategory);
		}
	});









// 封面设计文本框输入
( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
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
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

// 封面设计文本框输入
(function() {
	// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
	if (!String.prototype.trim) {
		(function() {
			// Make sure we trim BOM and NBSP
			var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
			String.prototype.trim = function() {
				return this.replace(rtrim, '');
			};
		})();
	}

	[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
		// in case the input is already filled..
		if( inputEl.value.trim() !== '' ) {
			classie.add( inputEl.parentNode, 'input--filled' );
		}

		// events:
		inputEl.addEventListener( 'focus', onInputFocus );
		inputEl.addEventListener( 'blur', onInputBlur );
	} );

	function onInputFocus( ev ) {
		classie.add( ev.target.parentNode, 'input--filled' );
	}

	function onInputBlur( ev ) {
		if( ev.target.value.trim() === '' ) {
			classie.remove( ev.target.parentNode, 'input--filled' );
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
	var docObj=document.getElementById("doc");

	var imgObjPreview=document.getElementById("preview");
	if(docObj.files &&docObj.files[0])
	{
		//火狐下，直接设img属性
		imgObjPreview.style.display = 'block';
		imgObjPreview.style.width = '200px';
		imgObjPreview.style.height = '200px'; 
		//imgObjPreview.src = docObj.files[0].getAsDataURL();
		 
		//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
		imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
	}else{
		//IE下，使用滤镜
		docObj.select();
		var imgSrc = document.selection.createRange().text;
		var localImagId = document.getElementById("localImag");
		//必须设置初始大小
		localImagId.style.width = "200px";
		localImagId.style.height = "250px";
		//图片异常的捕捉，防止用户修改后缀来伪造图片
		try{
			localImagId.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
			localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
		}catch(e){
			alert("您上传的图片格式不正确，请重新选择!");
			return false;
		}
		imgObjPreview.style.display = 'none';
		document.selection.empty();
	}
	return true;
}


//下面用于图片上传预览功能
function setImagePreview1(avalue) {
	var docObj=document.getElementById("doc1");

	var imgObjPreview=document.getElementById("preview1");
	if(docObj.files &&docObj.files[0])
	{
		//火狐下，直接设img属性
		imgObjPreview.style.display = 'block';
		imgObjPreview.style.width = '500px';
		imgObjPreview.style.height = '550px'; 
		//imgObjPreview.src = docObj.files[0].getAsDataURL();
		 
		//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
		imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
	}else{
		//IE下，使用滤镜
		docObj.select();
		var imgSrc = document.selection.createRange().text;
		var localImagId = document.getElementById("localImag1");
		//必须设置初始大小
		localImagId.style.width = "500px";
		localImagId.style.height = "550px";
		//图片异常的捕捉，防止用户修改后缀来伪造图片
		try{
			localImagId.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
			localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
		}catch(e){
			alert("您上传的图片格式不正确，请重新选择!");
			return false;
		}
		imgObjPreview.style.display = 'none';
		document.selection.empty();
	}
	return true;
}

//点击图片边框变红
function changecolor(obj, num){
	for(var i = 0; i < allImg.length; i++){
		document.getElementById(allImg[i]).className = 'noBorder';
	}
	document.getElementById(obj).className = 'hasBorder';
	imgCategory = num;
}

