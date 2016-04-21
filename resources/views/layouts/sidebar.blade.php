@extends('layouts.header')

@section('header')
	@parent
	<link rel="stylesheet" href="/css/layouts/sidebar.css">
@stop

@section('footer')
	@parent
	<script src="/js/layouts/sidebar.js"></script>
@stop

@section('body')
<div ng-controller="SiderCtrl" class="sidebar">

	<div class="sidebar-title">
		<img class="nav-logo" alt="Brand" src="/images/logo.png">
		<span class="nav-name">印 迹</span>
		<span class="nav-name-small">Yinji</span>
	</div>

    <div>
        <a  href="/" style="text-decoration:none">
	    <div  class="sidebar-item-level1">
	    	<span  class="sidebar-item-level1-icon">
			<i class="fa fa-home fa-fw"></i>
			</span>
			印迹首页
		</div>
		</a>
	</div>
	<div class="sidebar-item-level1">
		<span class="sidebar-item-level1-icon" style="font-size:13px;margin-left:2px;">
		<i class="fa fa-book fa-fw"></i>
		</span>
		模板管理
	</div>
	<ul class="sidebar-item-level2">
		<li><a href="/">模板上传</a></li>
		<li><a href="/">模板查看</a></li>
	</ul>


	<div class="sidebar-item-level1">
		<span class="sidebar-item-level1-icon">
		<i class="fa fa-edit fa-fw"></i>
		</span>
		订单管理
	</div>
	<ul class="sidebar-item-level2">
		<li ><a href="/">查看订单</a></li>
		<li><a href="/">订单回收</a></li>
	</ul>

	<div class="sidebar-item-level1">
		<span class="sidebar-item-level1-icon">
		<i class="fa fa-user fa-fw"></i>
		</span>
		用户管理
	</div>
	<ul class="sidebar-item-level2">
		<li><a href="/">查看用户</a></li>
		<li><a href="/">用户评价</a></li>
		<li><a href="/">修改信息</a></li>
	</ul>


	<div class="sidebar-item-level1">
		<span class="sidebar-item-level1-icon">
		<i class="fa fa-cogs fa-fw"></i>
		</span>
		公司管理
	</div>
	<ul class="sidebar-item-level2">
		<li><a href="/">公司信息</a></li>
		<li><a href="/">销售报表</a></li>
		<li><a href="/">业绩信息</a></li>
		<li><a href="/">员工信息</a></li>
	</ul>

	<a  href="/auth/logout" style="text-decoration:none">
		<div class="sidebar-item-level1 sidebar-item-auth">

			<span  class="sidebar-item-level1-icon">
			<i class="fa fa-external-link fa-fw"></i>
			</span>
			退出登录
		</div>
	</a>

</div>

<div class="sidebar-content">
	@section('sidebar-content')
	@show
</div>

@stop
