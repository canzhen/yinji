@extends('layouts.cpy_sidebar')

@section('title','用户管理')
@section('cpy_subtitle','查看用户')

@section('footer')
	@parent
	<script src="/js/company/cpy_checkUser.js"></script>
@stop


@section('sidebar-content')
	<?php
		if(!isset($_SESSION)){
			session_start();
		}
	?>
	@if(isset($_SESSION['ifLoggedIn'])&&$_SESSION['ifLoggedIn']=='y')

	<div class="panel-body" ng-controller="checkUserCtrl">
		<div class="dataTables_wrapper">
			<table class="table table-bordered table-hover table-striped" id="dataTable">
				<thead>
				<tr>
					<th>姓名</th>
					<th>邮箱</th>
					<th>电话号码</th>
				</tr>
				</thead>
				<tbody>
				<tr ng-repeat="x in deployedCpyUsers">
					<td ng-bind="x.name"></td>
					<td ng-bind="x.email"></td>
					<td ng-bind="x.phone_number"></td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	@else
		对不起，您尚未登录，请您<a href="/auth/login">登录</a>后访问此界面！
	@endif
@stop