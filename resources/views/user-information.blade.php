@extends('layouts.content-inner')

@section('title','用户信息查看')
@section('inner-title','账户中心')

@section('header')
	@parent
	<link rel="stylesheet" type="text/css" href="/css/user-information.css">
@stop

@section('footer')
	@parent
	<script src="/js/user-information.js"></script>
@stop

@section('header-right')
	<img id="img" ng-src="@{{ userImgSrc }}" class="img-circle"
		 style="width:50px;height:50px;margin-right:20px;">
	<a href="/home">返回首页</a>
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
	</ul>

	<div id="myTabContent" class="tab-content sidebarContent">
		<!--基本资料-->
		<div class="tab-pane fade in active" id="basicInfo">
			<div style="border:1px solid lightgrey;padding-left:20px;padding-bottom:30px;">

				<h3>基本资料 - <small>修改你的基本资料，将显示在你的个人名片中，并可以让更多的朋友了解和认识你！</small></h3>
				<div style="padding-top:10px;">
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
			<div style="border:1px solid lightgrey;padding-left:20px;padding-bottom:30px;">
				<h3>安全信息 - <small>请尽早完善账户安全信息，更好地保护您的数据安全！</small></h3>
				<div style="padding-top:10px;">
					<form class="form-inline">
						<span>用户名：@{{ username }}</span>
						<button class="btn btn-sm" data-toggle="modal" data-target="#editUserNameModal">修改</button>
					</form>
					<div class="divide-line"></div>
					<form class="form-inline">
						<span>登录密码：<small style="color:green;">已设置</small></span>
						<button class="btn btn-sm" data-toggle="modal" data-target="#editPwdModal">修改</button>
					</form>
					<div class="divide-line"></div>
					<form class="form-inline">
						<span>验证手机：<small style="color:@{{ ifMobile }}">
								<span ng-show="ifMobile=='red'">未设置</span>
								<span ng-show="ifMobile=='green'">@{{ phoneNumber }}</span></small></span>
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
	<div class="modal fade" id="editUserNameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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



	<!--修改密码的弹出框-->
	<div class="modal fade" id="editPwdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">修改密码</h4>
			</div>
			<div class="modal-body">

				<div class="form-inner">
					<form class="dialogForm">
						<div>
							<span >请输入原密码: </span>
							<input ng-blur="verifyCurrentPwd()" ng-model="oldPwd" type="text"/>
							<span style="color:red" ng-show="newUser.name == NULL">*</span>
							<span style="color:@{{errMsgColor}};float:right;" ng-model="msgIndex" >@{{msg}}</span>
						</div>
						<div>
							<form class="form-inline">
								<span >新密码：</span>
								<input name="password" ng-model="newPwd" ng-disabled="oldPwd==NULL||msgIndex==0" type="password" style="margin-left:34px;" onKeyUp="CheckIntensity(this.value)"/>
								<table style="float:right;"  border="0" cellpadding="0" cellspacing="0">
									<tr align="center">
										<td id="pwd_Weak" class="pwd pwd_c">&nbsp;</td>
										<td id="pwd_Medium" class="pwd pwd_c pwd_f">无</td>
										<td id="pwd_Strong" class="pwd pwd_c pwd_c_r">&nbsp;</td>
									</tr>
								</table>
							</form>

						</div>
						<div>
							<span >确认新密码：</span>
							<input ng-model="re_newPwd" ng-disabled="oldPwd==NULL||msgIndex==0" ng-blur="checkIdentical()" type="password" style="margin-left:5px;"/>
							<span style="color:red;">*</span>
							<span style="color:red;" ng-model="identicalIndex">@{{identicalMsg}}</span>
						</div>
					</form>
				</div>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary" ng-click="editPwd()" ng-disabled="oldPwd==NULL||msgIndex==0||identicalIndex==0">确认修改</button>
			</div>
		</div>
	</div>
</div>
</div>
@stop

