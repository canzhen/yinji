@extends('layouts.header')

@section('header')
	@parent
	<!-- Custom CSS -->
	<link href="/css/company/cpy_sidebar/cpy_sidebar.css" rel="stylesheet">
	<!-- Morris Charts CSS -->
	<link href="/css/company/cpy_sidebar/morris.css" rel="stylesheet">
	<link href="/css/company/cpy_sidebar/metisMenu.min.css" rel="stylesheet">
	<link href="/css/company/cpy_sidebar/timeline.css" rel="stylesheet">
	<link href="/css/company/cpy_sidebar/dataTables.bootstrap.css" rel="stylesheet">
	<link href="/css/company/cpy_sidebar/responsive.dataTables.css" rel="stylesheet">
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_sidebar/cpy_sidebar.js"></script>
	<!-- Morris Charts JavaScript -->
	<script src="/js/company/cpy_sidebar/raphael.min.js"></script>
	<script src="/js/company/cpy_sidebar/morris.min.js"></script>
	<script src="/js/company/cpy_sidebar/morris-data.js"></script>
	<script src="/js/company/cpy_sidebar/metisMenu.min.js"></script>
@stop

@section('body')

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand mbxs" style="font-size:20px" href="/cpy_index">印迹</a>
			</div>
			<!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right">

				<!--消息提醒-->
				<!--
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-messages">
						<li>
							<a href="#">
								<div>
									<strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
								</div>
								<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
								</div>
								<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
								</div>
								<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a class="text-center" href="#">
								<strong>Read All Messages</strong>
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</li>
				-->
				<!--消息提醒结束-->

				<!--任务完成情况-->
				<!--
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-tasks">
						<li>
							<a href="#">
								<div>
									<p>
										<strong>Task 1</strong>
										<span class="pull-right text-muted">40% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only">40% Complete (success)</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<p>
										<strong>Task 2</strong>
										<span class="pull-right text-muted">20% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<p>
										<strong>Task 3</strong>
										<span class="pull-right text-muted">60% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<p>
										<strong>Task 4</strong>
										<span class="pull-right text-muted">80% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete (danger)</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a class="text-center" href="#">
								<strong>See All Tasks</strong>
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</li>
				-->
				<!--任务完成情况结束-->



				<!--新消息提醒-->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-alerts">
						<li>
							<a href="#">
								<div>
									<i class="fa fa-comment fa-fw"></i> 新评论
									<span class="pull-right text-muted small">4 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<i class="fa fa-edit fa-fw"></i> 新订单
									<span class="pull-right text-muted small">12 minutes ago</span>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<!--新消息提醒结束-->


				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="/cpy_userInformation"><i class="fa fa-user fa-fw"></i> 个人信息</a>
						</li>
						<li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
						</li>
						<li class="divider"></li>
						<li><a href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a>
						</li>
					</ul>
					<!-- /.dropdown-user -->
				</li>
				<!-- /.dropdown -->
			</ul>
			<!-- /.navbar-top-links -->


			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li class="sidebar-search">
							<div class="input-group custom-search-form">
								<input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
									<i class="fa fa-search"></i>
								</button>
                            </span>
							</div>
							<!-- /input-group -->
						</li>
						<li>
							<a href="/cpy_index"><i class="fa fa-dashboard fa-fw"></i> 首页</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-picture-o fa-fw"></i> 模板管理 <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="/cpy_addTemplate">模板上传</a>
								</li>
								<li>
									<a href="/cpy_checkTemplate">模板修改</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-edit fa-fw"></i> 订单管理 <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="/cpy_checkOrder">订单修改</a>
								</li>
								<li>
									<a href="#">订单回收</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-user fa-fw"></i> 用户管理 <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="#">查看用户</a>
								</li>
								<li>
									<a href="#">用户评价</a>
								</li>
								<li>
									<a href="#">修改用户信息</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-sitemap fa-fw"></i> 公司管理<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="/cpy_info">公司信息</a>
								</li>
								<li>
									<a href="#">销售报表</a>
								</li>
								<li>
									<a href="#">业绩信息 <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="#">业绩信息1</a>
										</li>
										<li>
											<a href="#">业绩信息2</a>
										</li>
										<li>
											<a href="#">业绩信息3</a>
										</li>
									</ul>
									<!-- /.nav-third-level -->
								</li>
								<?php
									echo \Session::get('privilege','default');
									if (\Session::get('privilege','default')=='admin'){
								?>
								<li>
									<a href="#">员工信息</a>
								</li>
								<?php
									}
								?>
							</ul>
							<!-- /.nav-second-level -->
						</li>

					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>


		<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header">
							@yield('cpy_subtitle')<small>　@yield('cpy_subtitle_small')</small>
						</h3>
					</div>
				</div>
				@section('sidebar-content')
				@show
			</div>
		</div>


	</div>
	<!-- /#wrapper -->



@stop
