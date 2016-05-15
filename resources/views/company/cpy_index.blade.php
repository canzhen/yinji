@extends('layouts.cpy_sidebar')

@section('title','公司首页')
@section('cpy_subtitle','主页')
@section('cpy_subtitle_small','zhuye')

@section('header')
	@parent
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_index.js"></script>
@stop


@section('sidebar-content')
	<div ng-controller="cpyIndexController">
		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-info alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<i class="fa fa-info-circle"></i>  <strong>号外号外！</strong> 这里有个帅哥！
				</div>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-comments fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge" ng-bind="evaNum"></div>
								<div>新用户评价</div>
							</div>
						</div>
					</div>
					<a href="/cpy_checkEvaluation">
						<div class="panel-footer">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-tasks fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge">12</div>
								<div>新任务</div>
							</div>
						</div>
					</div>
					<a href="#">
						<div class="panel-footer">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-yellow">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-shopping-cart fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge" ng-bind="undoneOrderNum"></div>
								<div>新订单</div>
							</div>
						</div>
					</div>
					<a href="/cpy_newOrdersManage">
						<div class="panel-footer">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-red">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-support fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge">13</div>
								<div>什么鬼</div>
							</div>
						</div>
					</div>
					<a href="#">
						<div class="panel-footer">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>每日报表</h3>
					</div>
					<div class="panel-body">
						<div id="morris-area-chart"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">

		<!--
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>环状图表</h3>
					</div>
					<div class="panel-body">
						<div id="morris-donut-chart"></div>
						<div class="text-right">
							<a href="#">查看详情 <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
							<a href="#" class="list-group-item">
								<span class="badge">just now</span>
								<i class="fa fa-fw fa-calendar"></i> Calendar updated
							</a>
							<a href="#" class="list-group-item">
								<span class="badge">4 minutes ago</span>
								<i class="fa fa-fw fa-comment"></i> Commented on a post
							</a>
							<a href="#" class="list-group-item">
								<span class="badge">23 minutes ago</span>
								<i class="fa fa-fw fa-truck"></i> Order 392 shipped
							</a>
							<a href="#" class="list-group-item">
								<span class="badge">46 minutes ago</span>
								<i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
							</a>
							<a href="#" class="list-group-item">
								<span class="badge">1 hour ago</span>
								<i class="fa fa-fw fa-user"></i> A new user has been added
							</a>
							<a href="#" class="list-group-item">
								<span class="badge">2 hours ago</span>
								<i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
							</a>
							<a href="#" class="list-group-item">
								<span class="badge">yesterday</span>
								<i class="fa fa-fw fa-globe"></i> Saved the world
							</a>
							<a href="#" class="list-group-item">
								<span class="badge">two days ago</span>
								<i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
							</a>
						</div>
						<div class="text-right">
							<a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			-->
			<div class="col-lg-12">
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
									<th>单价</th>
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
									<td ng-bind="x.price"></td>
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
							<a href="/cpy_checkOrder">查看所有订单 <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
@stop