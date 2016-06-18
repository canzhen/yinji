@extends('layouts.content')

@section('title','生成相簿')

@section('header')
  @parent
    <link rel="stylesheet" type="text/css" href="/css/create_records/style.css">
    <link rel="stylesheet" type="text/css" href="/css/create_records/bootstrap.min.css">
@stop

@section('footer')
  @parent 
  <script src="/js/create_records/jquery.form.js"></script>
  <script type="text/javascript">
  	window.onload=function(){
  		var myDate = new Date();

  		var year=myDate.getFullYear();   //获取完整的年份(4位,1970-????)
  		var month=myDate.getMonth()+1;      //获取当前月份(0-11,0代表1月)
  		var day=myDate.getDate();       //获取当前日(1-31)
  		var hour=myDate.getHours();      //获取当前小时数(0-23)
  		var minute=myDate.getMinutes();    //获取当前分钟数(0-59)

  		if(month<10){
  			month='0'+month;
  		}
  		for(;minute%5!=0;){
  			minute--;
  		}
  		$("#year").val(year);
  		$("#month").val(month);
  		$("#day").val(day);
  		$("#hour").val(hour);
  		$("#min").val(minute);
  	}
  </script>
@stop
 
@section('content')
  <!-- 页面上面的背景 -->
    <div class="bg_top">
      <!-- 右上角的图案 -->
      <div class="header_bg">
      </div>
    </div>
    <!-- 书的图形 -->
    <div class="page_box page_box_bg">
    <!-- 回到主页的按钮 -->
	    <div class="home_menu"><a href="/album_cover"></a></div>
	    <!-- 左侧页面 -->
	    <div class="index_left page_left create_l">
	      <div class="create_text">
	        <h1>请在这里添加文字:</h1>
            <div class="userTime">
		        <!-- 自定义时间 -->
		    	<!-- <input type="button" class="userDefineTime" value="自定义时间:" onclick="ableTime();"/> -->
		    	<b>自定义时间：</b>
				<select id="year" name="year" class="">
					<option ></option>
					<option >2016</option>
					<option >2015</option>
					<option >2014</option>
					<option >2013</option>
				</select>
				<span class="userDefineTime">年 </span>
				<select  id="month" name="month" class="" ><option ></option>
					<option >01</option><option >02</option><option >03</option><option >04</option>
					<option >05</option><option >06</option><option >07</option><option >08</option>
					<option >09</option><option >10</option><option >11</option><option >12</option>
				</select>
				<span class="userDefineTime">月 </span>
				<select id="day" name="day" class="" ><option ></option>
					<option>01</option><option>02</option><option>03</option><option>04</option><option>05</option>
					<option>06</option><option>07</option><option>08</option><option>09</option><option>10</option>
					<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
					<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
					<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
					<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
				</select>
				<span class="userDefineTime">日 </span>
				<select id="hour" name="hour" class=""><option ></option>
					<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option>
					<option>05</option><option>06</option><option>07</option><option>08</option><option>09</option>
					<option>10</option><option>11</option><option>12</option><option>13</option><option>14</option>
					<option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>
					<option>20</option><option>21</option><option>22</option><option>23</option>
				</select>
				<span class="userDefineTime">:  </span>
				<select id="min" name="min" class=""><option ></option>
					<option>00</option><option>05</option><option>10</option><option>15</option><option>20</option><option>25</option>
					<option>30</option><option>35</option><option>40</option><option>45</option><option>50</option><option>55</option>
				</select>
			</div>

			<!-- <P>这里用来写用户对该纪念册的简介</P> -->
	        <textarea name="description" id="record_desc" style="width:330px;height:250px;"></textarea>
	      </div>
	    </div>
  	    
  	    <!-- 右侧页面 -->
    	<div class="index_right page_right create_r"> 
    	    <div class="create_picture">
    	    <!-- 上传文件 -->
				<iframe width="400" height="400" class="share_self"   
				frameborder="0" scrolling="yes" src="/album_fileupload"></iframe>
				<!-- 上传文件结束 -->
    	    </div>

    	</div>

		<!-- 右边导航栏 -->
        <div class="page_right_menu" >
          <ul>
            <li class="menu_1"><a href="/album_index" title="关于工厂——纪念册简介"></a></li>
            <li class="menu_2"><a href="/album_show_records" title="广播站——纪念册内容"></a></li>
            <li class="menu_5"><a class="on"  href="/album_create_records" title="厂区仓库——创建记录"></a></li>
            <li class="menu_6"><a href="/album_query" title="招兵买马——查找纪念册内容"></a></li>
            <li class="menu_4"><a href="/album_order" title="游乐园--下订单"></a></li>
          </ul>
        </div>
    </div>
     <!-- 书的下半部分的背景 -->
    <div class="page_bot"></div>
@stop

@section('dif')
	<!--$_SESSION['ifLoggedIn'] == 'y'-->
		@if(isset($_SESSION['ifLoggedIn'])&&$_SESSION['ifLoggedIn']=='y')	
			<div class="top-nav">
						<ul class="res" > 
							<li class = "topLine"><a href="#">纪念册</a>
								<ul>
									<li class = "spec"><a href="/showAlbums">查看纪念册</a></li>
									<li><a href="/create_album">创建纪念册</a></li>
								</ul> 
							</li>
							<li class = "topLine"><a href="#">刊印</a>
								<ul>
									<li class = "spec"><a href="/orderInfo">查看订单</a></li>
								</ul> 
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