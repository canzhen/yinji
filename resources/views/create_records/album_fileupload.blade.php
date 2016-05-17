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
    <script src="/js/create_records/jquery.form.js"></script>
    <script src="/js/create_records/submit_record.js"></script>
    <!-- 上传文件要引的JS文件结束 -->
@stop

@section('content')
	 <form id="record_form" action="/record/add_new" method="post" enctype="multipart/form-data" class="text-center" target="_top">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
	      <input type="file" name="files[]" id="demo-fileInput-4" multiple="multiple">
        <input type="text" id="date" name="date" value="" style="visibility:hidden">
        <input type="text" id="content" name="content" value="" style="visibility:hidden">
          <input  type="submit" class="btn-custom green" value="提交">
	</form>
@stop

