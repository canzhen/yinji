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
		  <div class="mydiv111" ng-repeat="x in records| orderBy:'showTime':true">
			  <p class="datep" ng-bind="x.showTime"></p>
			  <p class="diary" ng-bind="x.description"></p>
			  <p name="comPath"></p>
			  <p ng-show="!ifShow" style="padding-left: 15%;padding-top:3%;">
				  您目前还没有任何记录哦，单击<a href="/album_create_records">添加</a>，添加您的第一条记录吧~
			  </p>
			  <div class="divpic">
				  <div ng-repeat="y in x.arr_path">
					  <img class="mypic" src="@{{y}}" name="imgview" onload="DrawImage(this);"/>
				  </div>
			  </div>
			  <br/><br/>
			  <div class="my_records_button">
				  <input  class="button button-pill button-tiny" type="submit" value="编辑" ng-click="getRecordDetail(x)" data-toggle="modal" data-target="#recordDetailModal">
				  <input  class="button button-pill button-tiny" type="submit" value="删除" ng-click="deleteRecord(x)">
			  </div>
			  <br/>

		  </div>



		  <div class="modal fade" id="recordDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			  <div class="modal-dialog" role="document">
				  <div class="modal-content"><!--modal的内容-->
					  <div class="modal-header">
						  <!--关闭modal的按钮-->
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
						  </button>
						  <h4 class="modal-title" id="modalLabel">编辑内容</h4>
					  </div>
					  <div class="modal-body">
						  <div class="form-inner">
							  <form class="myForm">
								  <div>
									  <p>内容：</p>
									  <input type="text" style="width:500px;" ng-model="recordDetail.description"/>
									  <span style="color:red" ng-show="recordDetail.description == ''"></span>
								  </div>
								  <div>
									  <p>自定义时间：</p>
									  <input type="text" ng-model="recordDetail.showTime"/>
									  <span style="color:red" ng-show="recordDetail.showTime == ''"></span>
								  </div>
							  </form>
						  </div>
					  </div>
					  <div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
						  <button type="button" class="btn btn-primary" ng-click="editRecord()"
								  ng-disabled="orderRecord.description == '' || orderRecord.showTime == ''">修改</button>
					  </div>
				  </div>
			  </div>
		  </div>
	</div>
@stop