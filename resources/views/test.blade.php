@extends('layouts.content')

@section('title','登录成功')
@section('footer')
	@parent
	<script src="/js/test.js"></script>
@stop

@section('content')
	<div ng-controller="testController" style="margin-left:60px;margin-top:150px;">
		<input type="text" ng-model="myModelObj">
		<input type="file" ng-file-select="onFileSelect($files)">
		<input type="file" ng-file-select="onFileSelect($files)" multiple accept="image/*">
		<div class="button" ng-file-select="onFileSelect($files)" data-multiple="true"></div>
		<div ng-file-drop="onFileSelect($files)" ng-file-drag-over-class="optional-css-class-name-or-function"
			 ng-show="dropSupported">drop files here</div>
		<div ng-file-drop-available="dropSupported=true"
			 ng-show="!dropSupported">HTML5 Drop File is not supported!</div>
		<button ng-click="upload.abort()">Cancel Upload</button>
	</div>
@stop