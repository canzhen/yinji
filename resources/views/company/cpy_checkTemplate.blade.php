@extends('layouts.cpy_sidebar')

@section('title','模板查看')
@section('cpy_subtitle','模板查看')

@section('header')
	@parent
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_checkTemplate.js"></script>
@stop


@section('sidebar-content')
	<div ng-controller="checkTemplateCtrl" class="container">
		<span class="col-lg-1 carousel-inner img-responsive img-rounded">
			<img src="company/template/yinji/1.jpg">
		</span>
		<span class="col-lg-1 carousel-inner img-responsive img-rounded">
			<img src="company/template/yinji/1.jpg">
		</span>
		<span class="col-lg-1 carousel-inner img-responsive img-rounded">
			<img src="company/template/yinji/1.jpg">
		</span>
	</div>
@stop