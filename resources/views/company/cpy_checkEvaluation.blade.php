@extends('layouts.cpy_sidebar')

@section('title','用户管理')
@section('cpy_subtitle','用户评价')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/company/cpy_checkOrder.css">
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_checkEvaluation.js"></script>
@stop


@section('sidebar-content')
	<div ng-controller="checkEvaluationCtrl" class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-money fa-fw"></i>评价列表</h3>
			</div>
			<div class="panel-body">
				<div class="dataTables_wrapper">
					<a href="" ng-click="getGoodEva()">好评</a>
					<a href="" ng-click="getBadEva()">差评</a>
					<table class="table table-bordered table-hover table-striped" id="dataTable"
						   style="margin-top:10px;">
						<thead>
						<tr>
							<th>评价编码</th>
							<th>订单信息</th>
							<th>用户名</th>
							<th>评价内容</th>
							<th>时间</th>
							<!--<th>操作</th>-->
						</tr>
						</thead>
						<tbody>
						<tr ng-repeat="x in evaluations">
							<td ng-bind="x.id"></td>
							<td ng-bind="x.order_id"></td>
							<td ng-bind="x.user_name"></td>
							<td ng-bind="x.content"></td>
							<td ng-bind="x.created_at"></td>
							<!--<td>
								<a href="" ng-click="" data-toggle="modal" data-target="#orderDetailModal">操作</a>
							</td>-->
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
@stop