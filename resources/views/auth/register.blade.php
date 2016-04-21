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