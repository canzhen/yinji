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
