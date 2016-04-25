@extends('layouts.header')

@section('title','登录')

@section('header')
	@parent
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/auth.css" rel='stylesheet' type='text/css'/>
@show

@section('body')
	<div ng-controller="authController">
		</br></br>
		<div class="mbxs title-maobixingshu">印迹</div>
		<div class="auth-form">
			<div class="head-info">
				<label class="lbl-1"> </label>
				<label class="lbl-2"> </label>
				<label class="lbl-3"> </label>
			</div>
			<div class="clear"> </div>
			@section('auth')
			@show
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