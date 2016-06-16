@extends('layouts.header')

@section('body')
	<!--导航栏-->
	<div class="nav nav-pills" style="background:#fff;">
		<div class="header-content">
			<div class="header-main">
				<div class="header-left">
					<div class="logo">
						<a href="/home"><h1 class="stfyt">@yield('inner-title')</h1></a>
					</div>
				</div>

				<div class="header-right">
					@section('header-right')
					@show
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