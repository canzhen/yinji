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
	<div ng-controller="homeController">
		<button class="startBtn" ng-click="startYinji()">开启印迹之旅</button>
		<div class = "pictureSlide">
			<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="/images/background/back1.jpg" alt="First slide">
				</div>
				<div class="item">
					<img src="/images/background/back2.jpg" alt="Second slide">
				</div>
				<div class="item">
					<img src="/images/background/back3.jpg" alt="Third slide">
				</div>
				<div class="item">
					<img src="/images/background/back4.jpg" alt="Forth slide">
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div>
@stop
