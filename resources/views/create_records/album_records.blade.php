@extends('layouts.test')

@section('title','生成相簿')

@section('header')
  @parent
  <link rel="stylesheet" type="text/css" href="/css/create_records/style.css">   
  <link rel="stylesheet" type="text/css" href="/css/create_records/button.css">  
@stop

@section('footer')
  @parent
  <script src="js/record/re_checkRecord.js"></script>
@stop

@section('content')
	  <div ng-controller="checkRecordCtrl">
		  <div class="mydiv111" ng-repeat="x in records">
			  <p class="datep" ng-bind="x.showTime"></p>
			  <p class="diary" ng-bind="x.description"></p>
			  <div class="divpic" ng-bind="x.picPath">
				  <img class="mypic" src="@{{}}" />
			  </div>
			  <br/><br/>
			  <div class="my_records_button">
				  <input  class="button button-pill button-tiny" type="submit" value="修改" ng-click="getOrderDetail(x)" data-toggle="modal" data-target="#orderDetailModal">
				  <input  class="button button-pill button-tiny" type="submit" value="删除">
			  </div>
			  <br/>
		  </div>
		  <tm-pagination conf="paginationConf"></tm-pagination>
	  </div>
@stop