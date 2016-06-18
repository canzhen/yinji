@extends('layouts.header')

@section('body')
	<!--导航栏-->
	<div class="headerLine">
		<div class="header-content">
			<div class="header-main">
				<div class="header-left">
					<div class="logo">
						<a href="/"><h1 class="stfyt">印迹</h1></a>
					</div>

					 
					@section('dif')
					<?php
						if(!isset($_SESSION)){
							session_start();
						}
					?>
					@if(isset($_SESSION['ifLoggedIn'])&&$_SESSION['ifLoggedIn']=='y')
					<div class="top-nav">
						<ul class="res" > 
							<li class = "topLine"><a href="">纪念册</a>
								<ul>
									<li class = "spec"><a href="/showAlbums">查看纪念册</a></li>
									<li><a href="/create_album">创建纪念册</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="">刊印</a>
								<ul>
									<li class = "spec"><a href="/orderInfo">查看订单</a></li>
								</ul> 
							</li>
							</li>
							<li class = "topLine"><a href="">个人信息</a>
								<ul>
									<li class = "spec"><a href="/user-information">查看个人信息</a></li>
								</ul>
							</li>
							<li class = "topLine"><a href="/about_us">关于</a></li>
							<li class = "topLine"><a href="/contact_us">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input  type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					
					<label>欢迎您，
						<?php 
							if(!isset($_SESSION)){
								session_start();
							}
							echo $_SESSION['userName'];
						?>
					</label>&nbsp;&nbsp;&nbsp;
					<a href="/auth/logout" id = "logoffBtn">注销</a>
				</div>

			
		@else
			<div class="top-nav">
						<ul class="res" >
							<li class = "topLine"><a href="/about_us">关于</a></li>
							<li class = "topLine"><a href="/contact_us">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input id = "searchFor" type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					<a href="login" id = "loginBtn">登录</a>
				</div>
				@endif
				@show

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--导航栏结束-->


	@section('content')
	@show

	<!--版权区域-->
	<div class="footer">
		<p>Copyright &copy;2016.　ZCZ All rights reserved.</p>
	</div> 
	<!--版权区域结束-->

@stop