@extends('layouts.content')

@section('title','我的订单')

@section('header')
	@parent
	<link rel="stylesheet" type="text/css" href="/css/home/reset.css" />
	<link rel="stylesheet" type="text/css" href="/css/home/htmleaf-demo.css">
	<link rel="stylesheet" href="/css/home/style.css">
    <link rel="stylesheet" type="text/css" href="/css/home.css">
@stop

@section('footer')
	@parent
    <script src = "/js/orderDetail.js"></script> 
@stop

@section('content')


<div>
    <div ng-controller="albumController" id = "topDiv">


		<div class="htmleaf-container">
			<div class="row" style="padding-left: 12%;">
				<div class="col-lg-12">
					<h3 class="page-header" style="font-size:20px;">
						我的订单
					</h3>
				</div>
			</div>
            <table class="gray" id = "orderTable">
                <thead>
                    <tr>
                        <th id = "firstCol">纪念册名</th>
                        <th id = "secondCol">订阅日期</th>
                        <th id = "thirdCol">订单状态</th>
                        <th id = "forthCol">操作</th>
                    </tr>
                </thead>
                <tbody id = "tableBody">

                </tbody>
            </table>
        </div>

        <div class="modal fade" id="orderDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id = "orderModal"><!--modal的内容-->
                    <div class="modal-header">
                        <!--关闭modal的按钮-->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modalLabel">评价订单</h4>
                    </div>
                    <div class="modal-body" >
                        <div class="form-inner">
                            <textarea ng-model="detail" placeholder = "评价一下吧。。。"></textarea>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary" ng-click="editOrder()">评价</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

