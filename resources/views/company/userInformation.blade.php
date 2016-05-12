@extends('layouts.cpy_sidebar')

@section('title','用户信息查看')
@section('cpy_subtitle','个人信息')
@section('cpy_subtitle_small','user information')

@section('header')
	@parent
	<link rel="stylesheet" type="text/css" href="/css/company/userInformation.css">
@stop

@section('footer')
	@parent
	<script src="/js/user-information.js"></script>
@stop

@section('sidebar-content')
<div ng-controller="userInfoCtrl" style="padding-left:2%;">

	<form class="form-inline">
		<span>用户名：@{{ username }}</span>
		<button class="btn btn-sm" data-toggle="modal" data-target="#editUserNameModal">修改</button>
	</form>
	<div class="divide-line"></div>
	<form class="form-inline">
		<span>登录密码：已设置</span>
		<button class="btn btn-sm" data-toggle="modal" data-target="#editPwdModal">修改</button>
	</form>
	<div class="divide-line"></div>
	<form class="form-inline">
		<span>验证手机：<small style="color:@{{ ifMobile }}">
				<span ng-show="ifMobile=='red'">未设置</span>
				<span ng-show="ifMobile=='green'">@{{ phoneNumber }}</span></small></span>
		<button class="btn btn-sm">设置</button>
	</form>


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
								<table style="float:right;" border="0" cellpadding="0" cellspacing="0">
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