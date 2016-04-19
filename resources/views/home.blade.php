@extends('layouts.content')

@section('title','首页')

@section('header')
	@parent
	<link rel="stylesheet" type="text/css" href="/css/home.css">
@stop

@section('footer')
	@parent
	<!-- <script src="/js/jquery.sliphover.min.js"></script>
	<script src="/js/freewall.js"></script>
	<script src = "/js/home.js"></script> -->
	<!-- <script src = "/js/<jquery class="ssd-vertical-nav"></jquery>igation.min.js"></script> -->
@stop

@section('content')

<!-- 
	<div id="container" class="free-wall">
	    <div class="book-set">
	        <img src="/images/mo.jpg" width="100%" title="this isasdfsdafsdfdcaption">
	    </div>

	    <div class="book-set">
	        <img src="/images/mo.jpg" width="100%" title="this is the caption">
	    </div>
	</div> -->

	<!-- <div id = "container">
		<div id = "book1" class = "book-set">
			
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
         <img src="/images/mo.jpg" alt="First slide">
      </div>
      <div class="item">
         <img src="/images/b2.jpg" alt="Second slide">
      </div>
      <div class="item">
         <img src="/images/b3.jpg" alt="Third slide">
      </div>
   </div>
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 


	</div>






@stop