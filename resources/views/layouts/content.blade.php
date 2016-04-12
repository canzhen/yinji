@extends('layouts.header')

@section('body')
	<!--导航栏-->
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="header-left">
					<div class="logo">
						<a href="/"><h1 class="stfyt">印迹</h1></a>
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
<<<<<<< HEAD
			</div>

			<div id = "login">
				<a href="/login">登录</a>
=======
				
>>>>>>> origin/gui
			</div>
		</div>
	</div>
	<!--导航栏结束-->

	@section('content')
	@show

	<!--版权区域-->
<<<<<<< HEAD
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<p>Copyright &copy; 2016.Company name All rights reserved. Yinji</p>
			</div>
		</div>
	</div>
=======
	<!-- <div class="footer">
		<p>Copyright &copy;2016.　ZCZ All rights reserved.</p>
	</div> -->
>>>>>>> origin/gui
	<!--版权区域结束-->

@stop