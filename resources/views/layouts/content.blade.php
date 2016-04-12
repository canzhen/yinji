@extends('layouts.header')

@section('body')
	<!--导航栏-->
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="header-left">
					<div class="logo">
						<a href="#"><h1 class="stfyt">印迹</h1></a>
					</div>
					
					<div class="top-nav">
						<ul class="res" > 
							<li><a href="#" class="stfyt">服务</a></li>
							<li><a href="#" class="stfyt">关于</a></li>
							<li><a href="#" class="stfyt">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input class="stfyt" type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					<a href="login" class="stfyt">登录</a>
				</div>

				<div class="clearfix"> </div>
				
			</div>

			<!-- <div id = "login">
				<a href="login" class="stfyt">登录</a>
			</div -->
		</div>
	</div>
	<!--导航栏结束-->

	@section('content')
	@show

	<!--版权区域-->
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<p>Copyright &copy;
				2016.　ZCZ All rights reserved.</p>
			</div>
		</div>
	</div>
	<!--版权区域结束-->

@stop