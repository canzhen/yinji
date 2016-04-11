@extends('layouts.auth')

@section('header')
	@parent
	<link href="/css/login.css" rel='stylesheet' type='text/css'/>
@show

@section('footer')
	@parent
	<script type="application/x-javascript">
		addEventListener("load",
			function(){setTimeout(hideURLbar,0);},false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<script src="/js/login.js"></script>
@stop

@section('auth')
	<div class="avtar">
		<img src="/images/avtar.png" />
	</div>

	<form ng-submit="login()">
		<input type="text" class="gbkt" placeholder="用户名"
			   ng-model="username">
		<input type="password" class="gbkt"  placeholder="密码"
			  ng-model="pwd">
		<div class="rmbMeArea">
			<input type="checkbox" ng-model="remember">
			<span class="text mbxs"> 记住我</span>　
					<span class="registerArea mbxs">
						还不是会员？ <a href="register">注册</a>
					</span>
		</div>
		<div class="errMsg gbkt" style="color:@{{ errMsgColor }}">
			@{{errMsg}}
		</div>
		</br></br>
		<div class="signin">
			<input type="submit" class="gbxs login-font" value="登录" >
		</div>
	</form>
@stop