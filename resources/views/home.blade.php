@extends('layouts.content_logged')

@section('title','首页')

@section('header')
	@parent

	<link rel="stylesheet" type="text/css" href="/css/home.css">
@stop

@section('footer')
	@parent
	<script src="/js/index_home/modernizr.custom.72835.js"></script>
	<script src="/js/index_home/jquery.circlemouse.js"></script>
	<script src = "/js/index_home/home.js"></script> 
@stop

@section('content')

<div>
<!-- ng-controller="testController" -->
	<div class = "pictureSlide">
		<div id="myCarousel" class="carousel slide">
		<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		<!-- 轮播（Carousel）项目 -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="/images/img1.jpg" alt="First slide">
			</div>
			<div class="item">
				<img src="/images/img2.jpg" alt="Second slide">
			</div>
			<div class="item">
				<img src="/images/img3.jpg" alt="Third slide">
			</div>
		</div>
		<!-- 轮播（Carousel）导航 -->
		<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div> 

	</div>

		<!-- 查看纪念册 -->
	<div id = "albumContainer" ng-controller="albumController">
		<p id = "albumTitle">我的纪念册</p>

		<!-- <div class = 'no-line normal-trigger-area'>
			<i class="fa fa-trash-o fa-lg"></i>
			<a href = '#' id = 'circle' class = 'ec-circle' style = "background: url(images/mo.jpg);">
				<h3>aaa</h3>
			</a>
			
		</div> -->
	</div>
</div>
@stop