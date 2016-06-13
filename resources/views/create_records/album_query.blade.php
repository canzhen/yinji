@extends('layouts.content')

@section('title','生成相簿')

@section('header')
  @parent
  <link rel="stylesheet" type="text/css" href="/css/create_records/style.css">  
  <link rel="stylesheet" type="text/css" href="/css/create_records/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="/css/create_records/test.css">
  <link rel="stylesheet" type="text/css" href="/css/create_records/button.css">
@stop

@section('footer')
  @parent 
  <script src="/js/create_records/jquery.min.js"></script>
  <script src="/js/create_records/jquery-ui.min.js"></script>
  <script src="/js/create_records/test.js"></script>
@stop

@section('content')
<!-- 页面上面的背景 -->
<div class="bg_top">
    <!-- 右上角的图案 -->
    <div class="header_bg">
    </div>
</div>
<div ng-controller="checkOneRecordCtrl">
<div class="page_box page_box_bg">
<div class="home_menu"><a href="/album_cover"></a></div>
	<!-- 用户查看自定义日期中的内容 -->
  <div class="index_left page_left about_l">
    <!-- 时间选择器 -->
    <div class="user_time">
          <br/>选择一个日期查看那天的记录：<br/><br/>
        <div id="datepicker"></div>
    </div>
  </div>
  <div class="index_right page_right job_r">
    <table border="0" width="400" cellpadding="0" style="border-collapse: collapse; font-size:12px; margin-top:80px; margin-left:30px;" id="table1">
    		<tr>
    		<script language="JavaScript" type="text/javascript">
            function scroll(n)
            {
            temp=n;
            document.getElementById('News').scrollTop=document.getElementById('News').scrollTop+temp;
            if (temp==0) return;
            setTimeout("scroll(temp)",20);
            }
            </script>
    			<td width="53%" valign="top">
    			<div id="News" style="border:0px dashed; OVERFLOW: hidden; WIDTH: 360px; HEIGHT: 480px; color:#875d44; line-height:20px;">
    				<div align="center">
    					<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" id="table31">
    						<tr>
    						   <td>
                                <div class="page_right_2" >
                                <div class="job_top"></div>
                                    <div ng-repeat="x in records| orderBy:'showTime':true">
                                   <div class="my_records2" >
                                    <div class="mydiv1112">
                                        <p class="datep1" ng-bind="x.showTime"></p>
                                        <p class="diary" ng-bind="x.description"></p>
                                        <div class="divpic" ng-repeat="y in x.arr_path">
                                            <img class="mypic2" src="@{{y}}" />
                                        </div>
                                        <br/>
                                        <div class="my_records_button2">
                                            <input  class="button button-pill button-tiny" type="submit" value="修改" ng-click="getRecordDetail(x)">
                                            <input  class="button button-pill button-tiny" type="submit" value="删除" ng-click="deleteRecord(x)">
                                        </div>
                                    </div>
                                   </div>
                                </div>
                                </div>
                              </td>
    						</tr>
    					</table>
    				</div>
    			</div>
    			</td>
    			<td width="2%" valign="top">
    					<img onmousedown="scroll(-3)" onmouseover="scroll(-3)" style="CURSOR: hand" onmouseout="scroll(0)" border="0" src="images/create_records/job_06.jpg"  title="按下鼠标速度会更快">				
    					<img onmousedown="scroll(3)" onmouseover="scroll(3)" style="CURSOR: hand;margin-top:450px; float:left;" onmouseout="scroll(0)"  border="0" src="images/create_records/job_09.jpg"  title="按下鼠标速度会更快">
    			</td>
    			
    		</tr>
    	</table>
	  <div class="modal fade" id="oneRecordDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
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

  <!-- 左面菜单 -->
  <div class="page_right_menu" >
    <ul>
      <li class="menu_1"><a href="/album_index" title="关于工厂——纪念册简介"></a></li>
      <li class="menu_2"><a href="/album_show_records" title="广播站——纪念册内容"></a></li>
     <!-- <li class="menu_3"><a href="blog/" title="团队博客"></a></li>-->
      <li class="menu_5"><a href="/album_create_records" title="厂区仓库——创建记录"></a></li>
      <li class="menu_6"><a class="on" href="/album_query" title="招兵买马——查找纪念册内容"></a></li>
      <li class="menu_4"><a href="/album_order" title="游乐园--下订单"></a></li>
    </ul>
  </div>

</div>
</div>
<!-- 书的下半部分的背景 -->
<div class="page_bot"></div>
@stop

@section('dif')
	<!--$_SESSION['ifLoggedIn'] == 'y'-->
		@if(isset($_SESSION['ifLoggedIn']))
			@if($_SESSION['ifLoggedIn'] == 'y')
					<div class="top-nav">
						<ul class="res" > 
							<li class = "topLine"><a href="#">纪念册</a>
								 <ul>
									<li class = "spec"><a href="#">查看纪念册</a></li>
									<li><a href="#">创建纪念册</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">刊印</a>
								
							</li>
							<li class = "topLine"><a href="#">个人信息</a>
								<ul>
									<li class = "spec"><a href="/user-information">查看个人信息</a></li>
									<li><a href="#">管理收货地址</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input  type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					<a href="/auth/logout" id = "logoffBtn">注销</a>
				</div>
			@endif
		@else
			<div class="top-nav">
						<ul class="res" > 
							<li class = "topLine"><a href="#">服务</a>
								 <ul>
									<li class = "spec"><a href="#">纪念册</a></li>
									<li><a href="#">刊印</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">关于</a>
								
							</li>
							<li class = "topLine"><a href="#">联系我们</a></li>
						</ul>
					</div>
				</div>

				<div class="header-right">
				    <div class="search">
						<input type="text" value="查找" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找';}"/>
						<input type="submit"  value=""/>		
					</div>
					<a href="login" id = "loginBtn">登录</a>
				</div>
			@endif
	@stop
