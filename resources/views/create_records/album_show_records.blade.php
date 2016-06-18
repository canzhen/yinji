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
    <div class="bg_top">
      <!-- 右上角的图案 -->
      <div class="header_bg">
      </div>
    </div>
    <!-- 书的图形 -->
    <div class="page_box page_box_bg">
    <!-- 回到主页的按钮 -->
      <div class="home_menu"><a href="/album_cover"></a></div>
        <!-- 纪念册内容展示区 -->
      	<div class="t_box">
           <!-- 纪念册内容展示区 -->
          <iframe width="570" height="516" class="share_self" style="margin:60px auto auto 130px;"  frameborder="0" scrolling="yes" src="/album_records"></iframe>
        </div>  
        <!-- 右边导航栏 -->
        <div class="page_right_menu" >
          <ul>
            <li class="menu_1"><a href="/album_index" title="关于工厂——纪念册简介"></a></li>
            <li class="menu_2"><a class="on" href="/album_show_records" title="广播站——纪念册内容"></a></li>
            <li class="menu_5"><a href="/album_create_records" title="厂区仓库——创建记录"></a></li>
            <li class="menu_6"><a href="/album_query" title="招兵买马——查找纪念册内容"></a></li>
            <li class="menu_4"><a href="/album_order" title="游乐园--下订单"></a></li>
          </ul>
        </div>
    </div>
     <!-- 书的下半部分的背景 -->
    <div class="page_bot"></div>
@stop

@section('dif')
	<?php
	if(!isset($_SESSION)){
		session_start();
	}
	?>
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
					
					<label>欢迎您					
						<?php 
							if(!isset($_SESSION)){
								session_start();
							}
							echo $_SESSION['userName'];
						?>
					~</label>&nbsp;&nbsp;&nbsp;
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