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