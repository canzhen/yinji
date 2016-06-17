@extends('layouts.cpy_sidebar')

@section('title','模板管理')
@section('cpy_subtitle','模板上传')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/company/cpy_addTemplate.css">
	<link rel="stylesheet" href="/css/lib/bootstrap/fileinput.css">
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_addTemplate.js"></script>
	<script src="/js/lib/fileinput/fileinput_locale_zh.js" type="text/javascript"></script>
	<script src="/js/lib/bootstrap.min.js" type="text/javascript"></script>
@stop


@section('sidebar-content')
	<?php
		session_start();
	?>
	@if(isset($_SESSION['ifLoggedIn'])&&$_SESSION['ifLoggedIn']=='y')
		<div class="upload-form">
			<form enctype="multipart/form-data"
				  onsubmit="return iframeCallback(this, pageAjaxDone)"><!--确保匿名上载文件的正确编码-->
				<div class="form-group">
					<input id="file-1" type="file" multiple class="file" name="myfile"
						   data-overwrite-initial="false" data-min-file-count="2" >
				</div>
			</form>
		</div>
	@else
		对不起，您尚未登录，请您<a href="/auth/login">登录</a>后访问此界面！
	@endif

@stop