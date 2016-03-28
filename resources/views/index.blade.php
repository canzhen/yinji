@extends('layouts.header')

@section('title','登录')

@section('header')
	@parent
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/myfont.css" rel='stylesheet' type='text/css'/>
	<link href="/css/index.css" rel='stylesheet' type='text/css'/>
@stop

@section('footer')
	@parent
	<script type="application/x-javascript"> 
		addEventListener("load",
			function(){setTimeout(hideURLbar,0);},false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
@stop

@section('body')
	<!--SIGN UP-->
	</br></br></br></br>
	<div class="mbxs title-maobixingshu">印迹</div>
	</br></br>
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
		<form>
			<input type="text" class="text gbkt" value="用户名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}" >
			<div class="key">
				<input type="password" value="密码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '密码';}">
			</div>
		</form>
		<div class="signin">
			<input type="submit" class="gbkt login-font" value="登录" >
		</div>
	</div>
	</br></br>
	<div class="copy-rights">
	<p>Copyright &copy; 2016.Company name All rights reserved.</p>
	</div>
@stop