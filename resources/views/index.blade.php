@extends('layouts.header')

@section('title','印迹 - 登录')

@section('header')
	@parent
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/myfont.css" rel='stylesheet' type='text/css'/>
	<link href="/css/welcome.css" rel='stylesheet' type='text/css'/>
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
	<div class="title-maobixingshu">印迹</div>
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
			<input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
			<div class="key">
				<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
			</div>
		</form>
		<div class="signin">
			<input type="submit" value="Login" >
		</div>
	</div>
	<div class="copy-rights">
	<p>Copyright &copy; 2016.Company name All rights reserved.</p>
	</div>
@stop