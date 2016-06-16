@extends('layouts.cpy_sidebar')

@section('title','查看订单')
@section('cpy_subtitle','查看订单')

@section('header')
	@parent
	<link rel="stylesheet" href="">
@stop

@section('footer')
	@parent
	<script src="/js/company/cpy_index.js"></script>
@stop


@section('sidebar-content')
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>销量报表</h3>
				</div>
				<div class="panel-body">
					<div id="morris-area-chart"></div>
				</div>
			</div>
		</div>
	</div>
@stop