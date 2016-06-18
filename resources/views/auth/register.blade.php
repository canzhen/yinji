@extends('layouts.auth')

@section('title','注册')

@section('header')
	@parent
	<link href="/css/register.css" rel='stylesheet' type='text/css'/>
@show

@section('footer')
	@parent
	<script src="/js/register.js"></script>
@stop

@section('auth')

	<form ng-submit="register()">

		<div class="gbkt" >
			<input type="text" style="font-size:16px;"
				   placeholder="请输入用户名" ng-blur="checkUserExist()" ng-model="username">
			<input type="password" style="font-size:16px;"
				   placeholder="请输入密码" ng-model="pwd">
			<input type="password" style="font-size:16px;"
				   placeholder="请再次输入密码" ng-model="repwd">
			<div style="margin-left:-15%;margin-top:8%;">
				<span style="color:#A9A9A9">请选择用户类型：</span>
				<select ng-model="privilege">
					<option selected="selected">公司职员</option>
					<option>普通用户</option>
				</select>
			</div>
		</div>

		<div class="errMsg gbkt" style="color:@{{errMsgColor}}">
			@{{errMsg}}
		</div>

		</br></br>
		<div class="signin">
			<input type="submit" class="gbxs login-font" value="注册" >
		</div>
	</form>
@stop