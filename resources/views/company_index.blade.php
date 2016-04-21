@extends('layouts.sidebar')

@section('title','公司首页')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/company_index.css">
	<link rel="stylesheet" href="/css/lib/bootstrap/fileinput.css">
@stop

@section('footer')
	@parent
	<script src="/js/lib/fileinput/jquery.min.js"></script>
	<script src="/js/lib/fileinput/fileinput.js" type="text/javascript"></script>
	<script src="/js/lib/fileinput/fileinput_locale_zh.js" type="text/javascript"></script>
	<script src="/js/lib/fileinput/bootstrap.min.js" type="text/javascript"></script>
@stop


@section('sidebar-content')
	<form enctype="multipart/form-data">
		<div class="form-group">
			<input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
		</div>
		<hr>
		<div class="form-group">
			<input id="file-2" type="file" class="file" readonly data-show-upload="false">
		</div>
	</form>
@stop