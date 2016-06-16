@extends('layouts.cpy_sidebar')

@section('title','查看订单')
@section('cpy_subtitle','查看订单')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/company/cpy_checkOrder.css">
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_checkOrder.js"></script>
@stop


@section('sidebar-content')
	<div ng-controller="checkOrderCtrl" class="col-lg-12">
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
							<th>下单日期</th>
							<th>单价</th>
							<th>数量</th>
							<th>订单状态</th>
							<th>用户账号</th>
							<th>发货地址</th>
							<th>备注信息</th>
							<?php
								if (isset($_SESSION['ifLoggedIn']) && $_SESSION['ifLoggedIn'] == "y"){
							?>
								<th>操作</th>
							<?php
								}
							?>
						</tr>
						</thead>
						<tbody>
						<tr ng-repeat="x in deployedOrder">
							<td ng-bind="x.id"></td>
							<td ng-bind="x.order_date"></td>
							<td ng-bind="x.price"></td>
							<td ng-bind="x.quantity"></td>
							<td ng-bind="x.status"></td>
							<td ng-bind="x.user_name"></td>
							<td ng-bind="x.address"></td>
							<td ng-bind="x.comment"></td>
							<?php
								if (isset($_SESSION['ifLoggedIn']) && $_SESSION['ifLoggedIn'] == "y"){
							?>
								<td>
									<a href="" ng-click="deleteOrder(x)">删除</a>　
									<a href="" ng-click="getOrderDetail(x)" data-toggle="modal" data-target="#orderDetailModal">修改</a>
								</td>
							<?php
								}
							?>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="text-right">
					<a href="#">查看所有订单 <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>


		<!--查看订单详情的弹出框-->
			<div class="modal fade" id="orderDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content"><!--modal的内容-->
					<div class="modal-header">
						<!--关闭modal的按钮-->
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="modalLabel">修改订单</h4>
					</div>
					<div class="modal-body">
						<div class="form-inner">
							<form class="myForm">
								<div>
									<span>订单编号：&nbsp @{{ orderDetail.id }}</span>
								</div>
								<div class="row" style="padding-left:15px;">
									<span>订单数量：</span>
                                    <button class="btn btn-default" type="button" ng-click="subtractOrderDetailQuantity()">
                                        -
                                    </button>
                                    <input style="width:7%;" type="text" ng-model="orderDetail.quantity"/>
                                    <button class="btn btn-default" type="button" ng-click="addOrderDetailQuantity()">
                                        +
                                    </button>
									<span style="color:red" ng-show="orderDetail.quantity == ''">*此项必填</span>
								</div>
								<div>
									<span>订单单价：</span>
									<input type="text" ng-model="orderDetail.price" style="width:12%;"/>
									<span style="color:red" ng-show="orderDetail.price == ''">*此项必填</span>
                                    <span style="color:red" ng-show="orderDetail.price<0">*单价必须大于0</span>
								</div>
								<div>
									<span>订单状态：</span>
									<select ng-model="orderDetail.status">
										<option>已发货</option>
										<option>已送达</option>
										<option>送货中</option>
										<option>已付款</option>
										<option>未付款</option>
									</select>
									<!--<input type="text" ng-model="orderDetail.status"/>-->
									<span style="color:red" ng-show="orderDetail.status == ''">*此项必填</span>
								</div>
								<div>
									<span>发货地址：</span>
									<input type="text" ng-model="orderDetail.address"/>
									<span style="color:red" ng-show="orderDetail.address == ''">*此项必填</span>
								</div>
								<div>
									<span>备注信息：</span>
									<input type="text" ng-model="orderDetail.comment"/>
									<span style="color:red" ng-show="orderDetail.comment == ''">*此项必填</span>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
						<button type="button" class="btn btn-primary" ng-click="editOrder()"
								ng-disabled="orderDetail.quantity == '' ||orderDetail.price<0
								|| orderDetail.price == ''|| orderDetail.status == ''
								|| orderDetail.adress == ''">修改</button>
					</div>
				</div>
			</div>
		</div>

	</div>
@stop