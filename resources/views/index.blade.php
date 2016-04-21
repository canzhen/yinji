@extends('layouts.content')

@section('title','首页')

@section('header')
	@parent
	<link href="/css/index.css" rel="stylesheet" type="text/css" media="all"/>
@stop

@section('footer')
	@parent
	<script src="/js/index_home/index.js"></script>
@stop


@section('content')

    <!-- <div class="slider">
	    <div class="callbacks_container">
		    <ul class="rslides" id="slider">
		        <li>
			        <div class="banner"></div>
		        </li>

		        <li>
			        <div class="banner1"></div>
		        </li>

		        <li>
			        <div class="banner2"></div>
		        </li>
		    </ul>
		</div>
    </div> -->

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
	<!--幻灯片区域结束-->

	<div id="small-dialog5" class="mfp-hide"></div>


@stop