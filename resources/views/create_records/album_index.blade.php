@extends('layouts.content')

@section('title','我的纪念册')

@section('header')
  @parent
  <link rel="stylesheet" type="text/css" href="/css/create_records/style.css">   
@stop

@section('footer')
  @parent 
	<script src="/js/create_records/showInfo.js"></script>
@stop

@section('content')
<div ng-controller="albumController">
<!-- 页面上面的背景 -->
  <div class="bg_top">   
    <!-- 右上角的图案 -->
      <div class="header_bg">
      </div>
  </div>
  <div class="page_box page_box_bg">
  <div class="home_menu"><a href="/album_cover"></a></div>
    <div class="index_left page_left about_l">
      <div class="about_text">
        <h1 id = "albumName"></h1>
        <P id = "albumDes"></P>
      </div>
    </div>
    <!-- 纪念册简介右面图片 -->
    <div class="index_right page_right about_r"> </div>
    <div class="page_right_menu" >
       <ul>
        <li class="menu_1"><a class="on" href="/album_index" title="关于工厂——纪念册简介"></a></li>
        <li class="menu_2"><a href="/album_show_records" title="广播站——纪念册内容"></a></li>
        <li class="menu_5"><a href="/album_create_records" title="厂区仓库——创建记录"></a></li>
        <li class="menu_6"><a href="/album_query" title="招兵买马——查找纪念册内容"></a></li>
        <li class="menu_4"><a href="/album_order" title="游乐园--下订单"></a></li>
      </ul>
    </div>
  </div>
	</div>
  <!-- 书的下半部分的背景 -->
  <div class="page_bot"></div>
@stop

