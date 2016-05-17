@extends('layouts.test')

@section('title','生成相簿')

@section('header')
  @parent
    <link rel="stylesheet" type="text/css" href="/css/create_records/style.css">   
  <!-- 上传文件要引的CSS -->
   <link rel="stylesheet" type="text/css" href="/css/create_records/reset.css">
 <link rel="stylesheet" type="text/css" href="/css/create_records/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/create_records/default.css">
    <link rel="stylesheet" type="text/css" href="/css/create_records/jquery.filer.css">
    <link rel="stylesheet" type="text/css" href="/css/create_records/jquery.filer-dragdropbox-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/create_records/tomorrow.css">
    <link rel="stylesheet" type="text/css" href="/css/create_records/custom.css">
    <!-- 上传文件要引的CSS文件结束 -->
@stop

@section('footer')
  @parent 
  <!-- 上传文件要引的JS -->
   <script>window.jQuery || document.write('<script src="/js/create_records/jquery-2.1.1.min.js"><\/script>')</script> 
    <script src="/js/create_records/jquery.filer.min.js"></script>
    <script src="/js/create_records/prettify.js"></script>
    <script src="/js/create_records/custom.js"></script>
    <!-- 上传文件要引的JS文件结束 -->
@stop

@section('content')
	 <form action="" method="get" enctype="multipart/form-data" class="text-center">
	      <input type="file" name="files[]" id="demo-fileInput-4" multiple="multiple">
	      <input type="submit" class="btn-custom green" value="提交">
	</form>
@stop

