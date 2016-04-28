@extends('layouts.cpy_sidebar')

@section('title','公司首页')
@section('cpy_subtitle','查看订单')

@section('header')
	@parent
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_checkOrder.js"></script>
@stop


@section('sidebar-content')
	<div ng-controller="checkOrderCtrl" class="col-lg-4">
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
							<th>订单日期</th>
							<th>订单数量</th>
							<th>订单状态</th>
							<th>用户账号</th>
							<th>发货地址</th>
							<th>备注信息</th>
						</tr>
						</thead>
						<tbody>
						<tr ng-repeat="x in deployedOrder">
							<td ng-bind="x.id"></td>
							<td ng-bind="x.order_date"></td>
							<td ng-bind="x.quantity"></td>
							<td ng-bind="x.status"></td>
							<td ng-bind="x.user_name"></td>
							<td ng-bind="x.address"></td>
							<td ng-bind="x.comment"></td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="text-right">
					<a href="#">查看所有订单 <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
@stop