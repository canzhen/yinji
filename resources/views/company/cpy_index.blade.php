@extends('layouts.sidebar')

@section('title','公司首页')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/company/cpy_addTemplate.css">
	<link rel="stylesheet" href="/css/lib/bootstrap/fileinput.css">
@stop

@section('footer')
	@parent
	<script src="/js/lib/jquery.min.js"></script>
	<script src="/js/company/cpy_addTemplate.js"></script>
	<script src="/js/lib/fileinput/fileinput_locale_zh.js" type="text/javascript"></script>
	<script src="/js/lib/bootstrap.min.js" type="text/javascript"></script>
@stop


@section('sidebar-content')

@stop