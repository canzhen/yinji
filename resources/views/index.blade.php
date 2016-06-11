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

@section('dif')
	<!--$_SESSION['ifLoggedIn'] == 'y'-->
		@if(isset($_SESSION['ifLoggedIn']))
			@if($_SESSION['ifLoggedIn'] == 'y')
					<div class="top-nav">
						<ul class="res" > 
							<li class = "topLine"><a href="#">纪念册</a>
								 <ul>
									<li class = "spec"><a href="#">查看纪念册</a></li>
									<li><a href="#">创建纪念册</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">刊印</a>
								
							</li>
							<li class = "topLine"><a href="#">个人信息</a>
								<ul>
									<li class = "spec"><a href="/user-information">查看个人信息</a></li>
									<li><a href="#">管理收货地址</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input  type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					<a href="/auth/logout" id = "logoffBtn">注销</a>
				</div>
			@endif
		@else
			<div class="top-nav">
						<ul class="res" > 
							<li class = "topLine"><a href="#">服务</a>
								 <ul>
									<li class = "spec"><a href="#">纪念册</a></li>
									<li><a href="#">刊印</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">关于</a>
								
							</li>
							<li class = "topLine"><a href="#">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					<a href="login" id = "loginBtn">登录</a>
				</div>
			@endif
	@stop