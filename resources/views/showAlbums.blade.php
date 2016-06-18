@extends('layouts.content')

@section('title','首页')

@section('header')
	@parent
	<link rel="stylesheet" type="text/css" href="/css/home.css">
	<link rel="stylesheet" type="text/css" href="/css/home/reset.css" />
	<link rel="stylesheet" type="text/css" href="/css/home/htmleaf-demo.css">
	<link rel="stylesheet" href="/css/home/style.css">
@stop

@section('footer')
	@parent
	<script src="/js/index_home/modernizr.custom.72835.js"></script>
	<script src="/js/index_home/jquery.circlemouse.js"></script>
	<script src = "/js/index_home/home.js"></script>
@stop

@section('content')


<div>
	<!-- 查看纪念册 -->

	<div ng-controller="albumController">
		<div id = "albumContainer">
			<p id="albumTitle" ng-show="ifShow">我的纪念册</p>
		</div>
		<p ng-show="!ifShow" style="padding-left: 10%;padding-top:3%;">对不起，您目前尚未有任何纪念册哦~点击<a href='/create_album'>添加</a>，添加您的第一本纪念册吧！</p>
	</div>

</div>
@stop




