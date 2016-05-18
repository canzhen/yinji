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
