@extends('layouts.header')

@section('body')
	<!--导航栏-->
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="header-left">
					<div class="logo">
						<a href="index.html"><h1>印记</h1></a>
					</div>
					
					<div class="top-nav">
						<ul class="res"> 
							<li><a href="services.html">服务</a></li>
							<li><a href="about.html">关于</a></li>
							<li><a href="contact.html">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--导航栏结束-->


	<div id = "login">
		<a href="contact.html">登录</a>
	</div>

	@section('content')
	@show

	<!--版权区域-->
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<p>Copyright &copy; 2015.Company name All rights reserved. Yinji</p>
			</div>
		</div>
	</div>
	<!--版权区域结束-->

@stop