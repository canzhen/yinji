@extends('layouts.sidebar')

@section('title','公司首页')

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

	<div class="upload-form">
		<form enctype="multipart/form-data"><!--确保匿名上载文件的正确编码-->
			<div class="form-group">
				<input id="file-1" type="file" multiple class="file"
					   data-overwrite-initial="false" data-min-file-count="2">
			</div>
		</form>
	</div>
@stop