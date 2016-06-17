@extends('layouts.content')

@section('title','生成相簿')

@section('header')
  @parent
  <link rel="stylesheet" type="text/css" href="/css/create_records/style.css">   
@stop

@section('footer')
  @parent 
@stop

@section('content')

  <!-- 页面上面的背景 -->

  <!-- 页面上面的背的风格和进口量景 -->

  <div class="bg_top">
    <div class="header_bg"><!-- 右上角的图案 -->
    </div>
  </div>
  <div class="page_box" style="height:646px;">
    <div class="index_left">
      
      
    </div>
    <!-- 纪念册封面 -->
    <div class="index_right"> <a href="#"><img src="images/create_records/cloud_05.jpg" alt="纪念册封面" /></a></div>
    <div class="index_menu">  
      <ul>
        <li class="menu_1"><a href="/album_index" title="关于工厂——纪念册简介"></a></li>
        <li class="menu_2"><a href="/album_show_records" title="广播站——纪念册内容"></a></li>
        <li class="menu_5"><a href="/album_create_records" title="厂区仓库——创建记录"></a></li>
        <li class="menu_6"><a href="/album_query" title="招兵买马——查找纪念册内容"></a></li>
        <li class="menu_4"><a href="/album_order" title="游乐园--下订单"></a></li>
      </ul>  
    </div>
  </div>
@stop

@section('dif')
	<!--$_SESSION['ifLoggedIn'] == 'y'-->
		@if(isset($_SESSION['ifLoggedIn'])&&$_SESSION['ifLoggedIn']=='y')	
			<div class="top-nav">
						<ul class="res" > 
							<li class = "topLine"><a href="#">纪念册</a>
								<ul>
									<li class = "spec"><a href="/showAlbums">查看纪念册</a></li>
									<li><a href="/create_album">创建纪念册</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">刊印</a>
								<ul>
									<li class = "spec"><a href="/orderInfo">查看订单</a></li>
								</ul> 
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