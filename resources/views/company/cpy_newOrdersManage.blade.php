@extends('layouts.cpy_sidebar')

@section('title','订单管理')
@section('cpy_subtitle','未完成订单')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/company/cpy_checkOrder.css">
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_newOrdersManage.js"></script>
@stop


@section('sidebar-content')
	<div ng-controller="newOrdersCtrl" class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-money fa-fw"></i>订单列表</h3>
			</div>
			<div class="panel-body">
				<div class="dataTables_wrapper">
					<table class="table table-bordered table-hover table-striped" id="dataTable">
						<thead>
						<tr>
							<th>订单编号</th>
							<th>日期</th>
							<th>单价</th>
							<th>数量</th>
							<th>订单状态</th>
							<th>用户账号</th>
							<th>发货地址</th>
							<th>备注信息</th>
							<th>操作</th>
						</tr>
						</thead>
						<tbody>
						<tr ng-repeat="x in unDoneOrders">
							<td ng-bind="x.id"></td>
							<td ng-bind="x.order_date"></td>
							<td ng-bind="x.price"></td>
							<td ng-bind="x.quantity"></td>
							<td ng-bind="x.status"></td>
							<td ng-bind="x.user_name"></td>
							<td ng-bind="x.address"></td>
							<td ng-bind="x.comment"></td>
							<td>
								<a href="" ng-click="" data-toggle="modal" data-target="#orderDetailModal">操作</a>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
@stop