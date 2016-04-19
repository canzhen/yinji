@extends('layouts.header')

@section('body')
	<!--导航栏-->
	<div class="header">
		<div class="header-content">
			<div class="header-main">
				<div class="header-left">
					<div class="logo">
						<a href="/"><h1 class="stfyt">印迹</h1></a>
					</div>
					
					<div class="top-nav">
						<ul class="res" > 
							<li class = "topLine"><a href="#">服务</a>
								 <ul>
									<li class = "spec"><a href="#">公司介绍</a></li>
									<li><a href="#">公司文化</a></li>
									<li><a href="#">企业实力</a></li>
									<li><a href="#">先进科技</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">关于</a>
								<ul>
									<li class = "spec"><a href="#">公司ddd</a></li>
									<li><a href="#">公司文化</a></li>
									<li><a href="#">企业实力</a></li>
									<li><a href="#">先进科技</a></li>
								</ul> 
							</li>
							<li><a href="#">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input  type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					<a href="login" >登录</a>
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
		<p>Copyright &copy;2016.　ZCZ All rights reserved.</p>
	</div> 
	<!--版权区域结束-->

@stop