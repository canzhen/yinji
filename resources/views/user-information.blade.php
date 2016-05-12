@extends('layouts.content-inner')

@section('title','用户信息查看')

@section('header')
	@parent
	<link rel="stylesheet" type="text/css" href="/css/user-information.css">
@stop

@section('footer')
	@parent
	<script src="/js/user-information.js"></script>
@stop

@section('content')
<div ng-controller="userInfoCtrl" style="margin-top:40px;">

	<ul id="myTab" class="nav nav-stacked sidebarUl">
		<li class="active">
			<a href="#basicInfo" data-toggle="tab">
				基本资料
			</a>
		</li>
		<li>
			<a href="#safetyInfo" data-toggle="tab">
				账户安全
			</a>
		</li>
		<li class="dropdown">
			<a href="#" id="myTabDrop1" class="dropdown-toggle"
			   data-toggle="dropdown">Java
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				<li><a href="#jmeter" tabindex="-1" data-toggle="tab">jmeter</a></li>
				<li><a href="#ejb" tabindex="-1" data-toggle="tab">ejb</a></li>
			</ul>
		</li>
	</ul>

	<div id="myTabContent" class="tab-content sidebarContent">
		<!--基本资料-->
		<div class="tab-pane fade in active" id="basicInfo">
			<div style="border:1px solid lightgrey;padding-left:20px;padding-bottom:20px;">

				<h3>基本资料 - <small>修改你的基本资料，将显示在你的个人名片中，并可以让更多的朋友了解和认识你！</small></h3>
				<div>
					<h4>用户名：</h4>
					<input type="text" readonly="readonly" class="form-control" ng-model="username">
					<h4>邮箱：</h4>
					<div class="input-group">
						<input type="text" class="form-control">
						<span class="input-group-addon">@</span>
						<input type="text" class="form-control">
						<span class="input-group-addon">.com</span>
					</div>
					<button class="btn btn-default" style="margin-top:20px;">确认修改</button>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="safetyInfo">
			<div style="border:1px solid lightgrey;padding-left:20px;padding-bottom:20px;">
				<h3>安全信息 - <small>请尽早完善账户安全信息，更好地保护您的数据安全！</small></h3>
				<div>
					<form class="form-inline">
						<span>用户名：@{{ username }}</span>
						<button class="btn btn-sm" data-toggle="modal" data-target="#editUserName">修改</button>
					</form>
					<div class="divide-line"></div>
					<form class="form-inline">
						<h4>登录密码：已设置</h4>
						<button class="btn btn-sm">修改</button>
					</form>
					<div class="divide-line"></div>
					<form class="form-inline">
						<h4>验证手机：未设置</h4>
						<button class="btn btn-sm">设置</button>
					</form>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="jmeter">
			<p>jMeter 是一款开源的测试软件。它是 100% 纯 Java 应用程序，用于负载和性能测试。</p>
		</div>
		<div class="tab-pane fade" id="ejb">
			<p>Enterprise Java Beans（EJB）是一个创建高度可扩展性和强大企业级应用程序的开发架构，部署在兼容应用程序服务器（比如 JBOSS、Web Logic 等）的 J2EE 上。
			</p>
		</div>
	</div>


	<!--修改用户名的弹出框-->
	<div class="modal fade" id="editUserName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">修改用户名</h4>
				</div>
				<div class="modal-body">

					<div class="form-inner">
						<form>
							<div>
								<span >请输入新用户名:</span>
								<input ng-blur="checkUserExist()" ng-model="newUsername" type="text"/>
								<span style="color:red" ng-show="newUser.name == NULL">*</span>
								<span style="color:@{{errMsgColor}};float:right;" ng-model="msgIndex" >@{{msg}}</span>
							</div>
						</form>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" ng-click="editUsername()" ng-disabled="newUsername == NULL">确认修改</button>
				</div>
			</div>
		</div>
	</div>

</div>
@stop