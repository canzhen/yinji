@extends('layouts.header')

@section('header')
	@parent
	<!-- Custom CSS -->
	<link href="/css/company/cpy_sidebar/sb-admin.css" rel="stylesheet">
	<!-- Morris Charts CSS -->
	<link href="/css/company/cpy_sidebar/morris.css" rel="stylesheet">
@stop

@section('footer')
	@parent
	<!-- Morris Charts JavaScript -->
	<script src="/js/company/cpy_sidebar/raphael.min.js"></script>
	<script src="/js/company/cpy_sidebar/morris.min.js"></script>
	<script src="/js/company/cpy_sidebar/morris-data.js"></script>
@stop

@section('body')

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">SB Admin</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
					<ul class="dropdown-menu message-dropdown">
						<li class="message-preview">
							<a href="#">
								<div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
									<div class="media-body">
										<h5 class="media-heading"><strong>John Smith</strong>
										</h5>
										<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
								</div>
							</a>
						</li>
						<li class="message-preview">
							<a href="#">
								<div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
									<div class="media-body">
										<h5 class="media-heading"><strong>John Smith</strong>
										</h5>
										<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
								</div>
							</a>
						</li>
						<li class="message-preview">
							<a href="#">
								<div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
									<div class="media-body">
										<h5 class="media-heading"><strong>John Smith</strong>
										</h5>
										<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
								</div>
							</a>
						</li>
						<li class="message-footer">
							<a href="#">Read All New Messages</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
					<ul class="dropdown-menu alert-dropdown">
						<li>
							<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
						</li>
						<li>
							<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">View All</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li class="active">
						<a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
					</li>
					<li>
						<a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
					</li>
					<li>
						<a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
					</li>
					<li>
						<a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
					</li>
					<li>
						<a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
					</li>
					<li>
						<a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
					</li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="demo" class="collapse">
							<li>
								<a href="#">Dropdown Item</a>
							</li>
							<li>
								<a href="#">Dropdown Item</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
					</li>
					<li>
						<a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>


		<div class="sidebar-content">
			@section('sidebar-content')
			@show
		</div>


	</div>
	<!-- /#wrapper -->





<!--
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
-->

@stop
