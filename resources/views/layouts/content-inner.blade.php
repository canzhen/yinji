@extends('layouts.header')

@section('body')
	<!--导航栏-->
	<div class="nav nav-pills" style="background:#fff;">
		<div class="header-content">
			<div class="header-main">
				<div class="header-left">
					<div class="logo">
						<a href="/"><h1 class="stfyt">账户中心</h1></a>
					</div>
				</div>

				<div class="header-right">
					<img src="/images/create_album/prof	ile.jpg" class="img-circle" style="width:50px;height:50px;margin-right:20px;">
					<a href="/">返回首页</a>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--导航栏结束-->

	@section('content')
	@show

	<!--版权区域-->
	<div class="footer">
		<img src="/images/logo.png" class="img-circle" style="display:table-cell;ext-align:center;margin:0 auto;height:60px;width:60px;">
		<p>Copyright &copy;2016.　ZCZ All rights reserved.</p>
	</div>
	<!--版权区域结束-->

@stop