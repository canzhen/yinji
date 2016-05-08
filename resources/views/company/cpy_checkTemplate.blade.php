@extends('layouts.cpy_sidebar')

@section('title','模板查看')
@section('cpy_subtitle','模板查看')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/company/cpy_checkTemplate.css">
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_checkTemplate.js"></script>
@stop


@section('sidebar-content')
	<div ng-controller="checkTemplateCtrl" class="container-fluid">
		<div class="row" id="mainbody">
			<div class="thumbnail" ng-repeat="x in deployedImgs" on-finish-render-filters>
				<a href="#">
					<div class="imgs"">
						<img ng-src="@{{ x.saving_path }}">
					</div>
				</a>
				<div class="captain">
					<div class="title">@{{ x.template_name }}</div>
					<div class="description">@{{ x.description }}</div>
					<div class="author">作者：@{{ x.author_name }}</div>
					<div class="author"><a href="" ng-click="deleteTemplate(x)">删除模板</a></div>
				</div>
			</div>
		</div>
	</div>
@stop