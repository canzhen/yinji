@extends('layouts.cpy_sidebar')

@section('title','模板查看')
@section('cpy_subtitle','模板查看')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/company/cpy_checkTemplate/cpy_checkTemplate.css">
	<link rel="stylesheet" href="/css/company/cpy_checkTemplate/showBigImg.css">
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_checkTemplate.js"></script>
@stop


@section('sidebar-content')

	<div ng-controller="checkTemplateCtrl" class="container-fluid">
		<div class="row" id="mainbody">
			<div class="thumbnail" ng-repeat="x in deployedImgs" on-finish-render-filters>
				<a href="#@{{ x.template_name }}">
					<div class="imgs">
						<img id="img" ng-src="@{{ x.saving_path }}">
					</div>
				</a>
				<div class="captain">
					<div class="title">@{{ x.template_name }}</div>
					<div class="description">@{{ x.description }}</div>
					<div class="time">创建时间：@{{ x.created_at }}</div>
					<div class="time">修改时间：@{{ x.updated_at }}</div>
					<div class="author">作者：@{{ x.author_name }}</div>
					<div class="author"><a href="" ng-click="deleteTemplate(x)">删除模板</a></div>
				</div>
				<div class="lb-overlay" id="@{{ x.template_name }}">
					<a href="#" class="lb-close">x Close</a>
					<img src="@{{ x.saving_path }}" alt="image01" />
					<div>
						<h3>pointe <span>/point/</h3>
						<p>Dance performed on the tips of the toes</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop