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
		<div class="row">
			<div class="span1">
				{{HTML::image('company/template/yinji/DSC_0123_副本.jpg')}}
			</div>

		</div>
	</div>
@stop