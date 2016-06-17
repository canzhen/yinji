@extends('layouts.header')

@section('header')
	@parent
	<!-- Custom CSS -->
	<link href="/css/layouts/cpy_sidebar/cpy_sidebar.css" rel="stylesheet">
	<!-- Morris Charts CSS -->
	<link href="/css/layouts/cpy_sidebar/morris.css" rel="stylesheet">
	<link href="/css/layouts/cpy_sidebar/metisMenu.min.css" rel="stylesheet">
	<link href="/css/layouts/cpy_sidebar/timeline.css" rel="stylesheet">
	<link href="/css/layouts/cpy_sidebar/dataTables.bootstrap.css" rel="stylesheet">
	<link href="/css/layouts/cpy_sidebar/responsive.dataTables.css" rel="stylesheet">
@stop

@section('footer')
	@parent
	<script src="/js/layouts/cpy_sidebar/cpy_sidebar.js"></script>
	<!-- Morris Charts JavaScript -->
	<script src="/js/layouts/cpy_sidebar/raphael.min.js"></script>
	<script src="/js/layouts/cpy_sidebar/morris.min.js"></script>
	<script src="/js/layouts/cpy_sidebar/metisMenu.min.js"></script>
@stop

@section('body')
	<?php
	session_start();
	?>
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

			<ul class="nav navbar-top-links navbar-right" ng-controller="cpyNavController">

				<?php
					if (isset($_SESSION['ifLoggedIn']) && $_SESSION['ifLoggedIn'] == "y"){
						echo "欢迎您，";
						echo $_SESSION['userName'];
				?>
				<!--新消息提醒-->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-alerts">
						<li ng-show="evaHour!='' ||evaMinute!=''||evaSecond!=''">
							<a href="/cpy_checkEvaluation">
								<div>
									<i class="fa fa-comment fa-fw"></i> 新评价
									<span class="pull-right text-muted small">
										<span ng-show="evaHour != ''">@{{ evaHour }} 小时</span>
										<span ng-show="evaMinute != ''">@{{ evaMinute }} 分钟</span>
										<span ng-show="evaSecond != ''">@{{ evaSecond }} 秒</span>
										<span>前</span>
									</span>
								</div>
							</a>
						</li>
						<li class="divider" ng-show="evaHour!='' ||evaMinute!=''||evaSecond!=''"></li>
						<li  ng-show="odHour!='' ||odMinute!=''||odSecond!=''">
							<a href="/cpy_checkOrder">
								<div>
									<i class="fa fa-edit fa-fw"></i> 新订单
									<span class="pull-right text-muted small">
										<span ng-show="odHour != ''">@{{ odHour }} 小时</span>
										<span ng-show="odMinute != ''">@{{ odMinute }} 分钟</span>
										<span ng-show="odSecond != ''">@{{ odSecond }} 秒</span>
										<span ng-show="odHour!='' ||odMinute!=''||odSecond!=''">前</span>
									</span>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<!--新消息提醒结束-->


				<!--用户设置开始-->

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="/cpy_userInformation"><i class="fa fa-user fa-fw"></i> 个人信息</a></li>
						<li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a></li>
						<li class="divider"></li>
						<li><a href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a></li>
					</ul>
				</li>
				<?php
					}else{
				?>
				<li class="dropdown">
					<a href="/auth/login"><i class="fa fa-sign-in fa-fw"></i> 登录</a>
				</li>
				<?php
					}
				?>
				<!--用户设置结束-->
			</ul>



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
									<a href="/cpy_checkTemplate">模板查看</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-edit fa-fw"></i> 订单管理 <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="/cpy_checkOrder">全部订单</a>
								</li>
								<li>
									<a href="/cpy_newOrdersManage">未付款订单</a>
									<a href="/cpy_paiedOrders">已付款订单</a>
									<a href="/cpy_deliverOrders">送货中订单</a>
									<a href="/cpy_publishOrders">已发货订单</a>
									<a href="/cpy_receivedOrders">已送达订单</a>
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
									<a href="/cpy_checkEvaluation">用户评价</a>
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
									<a href="cpy_salesReport">销量报表</a>
								</li>
								<?php
									if (isset($_SESSION['ifLoggedIn']) &&
											$_SESSION['ifLoggedIn']=='y'&&
											$_SESSION['privilege']=='admin'){
								?>
								<li>
									<a href="/cpy_staffManagement">员工信息</a>
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
