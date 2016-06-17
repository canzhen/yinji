@extends('layouts.cpy_sidebar')

@section('title','模板管理')
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
		<?php
		session_start();
		?>
		<div class="row" id="mainbody">
			<div class="thumbnail" ng-repeat="x in deployedTemplates" on-finish-render-filters>
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
					@if(isset($_SESSION['ifLoggedIn'])&&$_SESSION['ifLoggedIn']=='y')
						<div class="author">
							<a href="" ng-click="getTemplateDetail(x)" data-toggle="modal" data-target="#templateDetailModal">修改信息</a>
						</div>
						<div class="author"><a href="" ng-click="deleteTemplate(x)">删除模板</a></div>
					@endif
				</div>
				<div class="lb-overlay" id="@{{ x.template_name }}">
					<a href="#" class="lb-close">x Close</a>
					<img src="@{{ x.saving_path }}" alt="image01" />
					<div>
						<h3>@{{ x.template_name }} <span>/@{{ x.author_name }}/</h3>
						<p>@{{ x.description }}</p>
					</div>
				</div>
			</div>
		</div>



		<!--查看订单详情的弹出框-->
		<div class="modal fade" id="templateDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content"><!--modal的内容-->
					<div class="modal-header">
						<!--关闭modal的按钮-->
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="modalLabel">修改模板信息</h4>
					</div>
					<div class="modal-body">
						<div class="form-inner">
							<form class="myForm">
								<div>
									<span>模板 ID　：</span>@{{ templateDetail.id }}
								</div>
								<div>
									<span>模板名字：</span>
									<input type="text" ng-model="templateDetail.templateName" style="width:20%;"/>.@{{ templateDetail.nameSuffix }}
									<span style="color:red" ng-show="templateDetail.templateName == ''">*模板名字不能为空</span>
								</div>
								<div>
									<span>备注信息：</span>
									<input type="text" ng-model="templateDetail.description"/>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
						<button type="button" class="btn btn-primary" ng-click="editTemplate()"
								ng-disabled="templateDetail.templateName == '' ">修改</button>
					</div>
				</div>
			</div>
		</div>
		<!--查看订单详情的弹出框结束-->



	</div>
@stop