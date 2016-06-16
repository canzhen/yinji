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
	<div ng-controller="albumController">
		<div id = "albumContainer" >
			
				<p id = "albumTitle">我的纪念册</p>

			<!-- <div class = 'no-line normal-trigger-area'>
				<i class="fa fa-trash-o fa-lg"></i>
				<a href = '#' id = 'circle' class = 'ec-circle' style = "background: url(images/mo.jpg);">
					<h3>aaa</h3>
				</a>
				
			</div> -->
			
		</div>

		<div class="htmleaf-container">
			<p id = "albumOrder">我的订单</p>
			<table class="blue" id = "orderTable">
				<thead>
					<tr>
						<th id = "firstCol">纪念册名</th>
						<th id = "secondCol">订阅日期</th>
						<th id = "thirdCol">操作</th>
					</tr>
				</thead>
				<tbody id = "tableBody">

				</tbody>
			</table>
		</div>

		<div class="modal fade" id="orderDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content" id = "orderModal"><!--modal的内容-->
					<div class="modal-header">
						<!--关闭modal的按钮-->
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="modalLabel">评价订单</h4>
					</div>
					<div class="modal-body" >
						<div class="form-inner">
							<textarea ng-model="detail" placeholder = "评价一下吧。。。"></textarea>
							
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
						<button type="button" class="btn btn-primary" ng-click="editOrder()">评价</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	

</div>
@stop

@section('dif')
	<!--$_SESSION['ifLoggedIn'] == 'y'-->
		@if(isset($_SESSION['ifLoggedIn']))
		
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