@extends('layouts.content')

@section('title','首页')

@section('header')
	@parent
	<link href="/css/index.css" rel="stylesheet" type="text/css" media="all"/>
	
@show

@section('footer')
	@parent
	<script src="/js/index.js"></script>

@show


@section('content')

    <div class="slider">
	    <div class="callbacks_container">
		    <ul class="rslides" id="slider">
		        <li>
			        <div class="banner"></div>
		        </li>

		        <li>
			        <div class="banner1"></div>
		        </li>

		        <li>
			        <div class="banner2"></div>
		        </li>
		    </ul>
		</div>
    </div>
	<!--幻灯片区域结束-->

	<div id="small-dialog5" class="mfp-hide"></div>


@stop