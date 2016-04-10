@extends('layouts.header')

@section('title','登录')

@section('header')
	@parent
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/login.css" rel='stylesheet' type='text/css'/>
@stop

@section('footer')
	@parent
	<script type="application/x-javascript">
		addEventListener("load",
			function(){setTimeout(hideURLbar,0);},false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<script src="/js/login.js"></script>
@stop

@section('body')
	<div ng-controller="loginController">
		</br></br>
		<div class="mbxs title-maobixingshu">印迹</div>
		<div class="login-form">
			<div class="head-info">
				<label class="lbl-1"> </label>
				<label class="lbl-2"> </label>
				<label class="lbl-3"> </label>
			</div>
			<div class="clear"> </div>
			<div class="avtar">
				<img src="/images/avtar.png" />
			</div>
			
			<form ng-submit="login()">
				<input type="text" class="text gbkt" value="用户名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}" ng-model="username">
				<div class="key">
					<input type="password" value="密码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '密码';}" ng-model="pwd">
				</div>
				<div class="rmbMeArea">
					<input type="checkbox" ng-model="remember">
					<span class="text mbxs"> 记住我</span>　
					<span class="errMsg">
						@{{errMsg}}
					</span>
				</div>
				</br></br>
				<div class="signin">
					<input type="submit" class="gbkt login-font" value="登录" >
				</div>
			</form>
		</div>
		
		</br></br>
		
		<div class="copy-rights">
			<p>
				Copyright &copy; 
				2016.　ZCZ All rights reserved.
			</p>
		</div>
	</div>
@stop