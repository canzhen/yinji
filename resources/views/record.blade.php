@extends('layouts.content')

@section('title','查看纪念册')


@section('header')
	@parent
	<link rel="stylesheet" href="css/record.css">
@stop

@section('footer')
	@parent
	<script src="{{asset('js/rePic.js')}}"></script>
	<script src="js/create_album/vendor/modernizr-2.6.2.min.js"></script>
@stop

@section('body')
	<div style="background:url(/images/record/background.jpg)">
		<div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="/images/record/profile.jpg" alt="用户头像">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title">用户名字</h3>
                                <p class="profile-description">我的时光书</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class="fa fa fa-heart"></i>纪念册风格</a></li>
                        <li><a href="#about"><i class="fa fa-photo"></i>编辑封面</a></li>
                        <li><a href="#projects"><i class="fa fa-pencil"></i>填写简介</a></li>  
                    </ul>
                </div>
            </div>
        </div>
        <!-- SIDEBAR -->
		<div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                    <img src="/images/record/profile.jpg" alt="用户头像">
                </div>
                <h3 class="profile-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户名字</h3>
                <p class="profile-description">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的时光书</p>
            </div> <!-- top-section -->
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="#top"><i class="label1"></i>我的时光书</a></li>
                    <!-- <li><a href="#contact"><i class="fa fa-link"></i>Contact Me</a></li> -->            <!--宝宝注释掉了-->
                </ul>
            </div> <!-- .main-navigation -->
			
			<div class="divdate">
				<div class="divdate2">
					<select class="selectdate">
						<option >2016</option>
						<option >2015</option>
						<option >2014</option>
						<option >2013</option>
					</select>
					<p class="selectdatep">&nbsp;&nbsp;年</p>
				</div>
				<div class="divdate2">
					<select class="selectdate">
						<option >1</option><option >2</option><option >3</option><option >4</option><option >5</option><option >6</option>
						<option >7</option><option >8</option><option >9</option><option >10</option><option >11</option><option >12</option>
					</select>
					<p class="selectdatep">&nbsp;&nbsp;月</p>
				</div>
				<div class="divdate2">
					<select class="selectdate">
						<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
						<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
						<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
						<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
						<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
					</select>
					<p class="selectdatep">&nbsp;&nbsp;日</p>
				</div>
				<input class="datebutton" type="button" value="转到"/>
			</div>
        </div> <!-- .sidebar-menu -->

		<div class="wrap">
		<br/>
			<div class="writediv">
				<form action="/record/add" method="post" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<p class="label1">你的生活有什么新动态？</p>
					<textarea name="description" style="width:650px;height:120px;margin-top:10px"></textarea>
					<br /><br />
						<div align="left" style="padding-left:12px" id="imgview">
							<img name="showing1" id="showing1" src="" style="display:none;" alt="预览图片"/>
						</div>
					<br/>
						<div align="center">
							<input name="imgfile" type="file"multiple id="imgfile" size="10" onchange="viewmypic(showing1,this.form.imgfile);" />
							<br/>
						</div>
				<div>
					<input type="button" class="userDefineTime" value="自定义时间:" onclick="ableTime();"/>
					<select id="year" name="year" class="">
						<option ></option>
						<option >2016</option>
						<option >2015</option>
						<option >2014</option>
						<option >2013</option>
					</select>
					<span class="userDefineTime">年 </span>
					<select  name="month" class="" ><option ></option>
						<option >01</option><option >02</option><option >03</option><option >04</option>
						<option >05</option><option >06</option><option >07</option><option >08</option>
						<option >09</option><option >10</option><option >11</option><option >12</option>
					</select>
					<span class="userDefineTime">月 </span>
					<select name="day" class="" ><option ></option>
						<option>01</option><option>02</option><option>03</option><option>04</option><option>05</option>
						<option>06</option><option>07</option><option>08</option><option>09</option><option>10</option>
						<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
						<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
						<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
					</select>
					<span class="userDefineTime">日 </span>
					<select name="hour" class=""><option ></option>
						<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option>
						<option>05</option><option>06</option><option>07</option><option>08</option><option>09</option>
						<option>10</option><option>11</option><option>12</option><option>13</option><option>14</option>
						<option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>
						<option>20</option><option>21</option><option>22</option><option>23</option>
					</select>
					<span class="userDefineTime">:  </span>
					<select name="min" class=""><option ></option>
						<option>00</option><option>05</option><option>10</option><option>15</option><option>20</option><option>25</option>
						<option>30</option><option>35</option><option>40</option><option>45</option><option>50</option><option>55</option>
					</select>
				</div>
				<div align="right">
					<input class="datebutton" type="submit" value="发送"/>
				</div>
			</form>
		</div>
		
		<br/><br/><br/><br/>
		<div>
		<div class="mydiv111">
			<p class="datep">2016年4月13日 16:30</p>
			<p class="diary">培根土豆小饼</p>
			<div class="divpic">
				<img class="mypic" src="/images/record/g1.jpg" />
				<img src="/images/record/g2.jpg" class="mypic"/>
				<img src="/images/record/g4.jpg" class="mypic"/>
			</div>
		</div>
		<br/>
		<div class="mydiv111">
			<p class="datep">2016年4月11日 15:04</p>
			<p class="diary">一到下午这个时候又困…又饿…怎么破？…</p>
			<div class="divpic">
				<img src="/images/record/g3.jpg" class="mypic"/>
			</div>
		</div>
		<br/>
		<div class="mydiv111">
			<p class="datep">2016年4月10日 10:30</p>
			<p class="diary">【喷香牛肉焖饭】营养丰富又香味十足，煮出来的米饭油光发亮特别的诱惑！绵绵的土豆，微甜的胡萝卜，牛肉香深入米饭，撒一把葱花搅拌下开动啦！</p>
			<div class="divpic">
				<img src="/images/record/g5.jpg" class="mypic"/>
				<img src="/images/record/g6.jpg" class="mypic"/>
				<img src="/images/record/g7.jpg" class="mypic"/>
				<img src="/images/record/g8.jpg" class="mypic"/>
				<img src="/images/record/g9.jpg" class="mypic"/>
				<img src="/images/record/g10.jpg" class="mypic"/>
				<img src="/images/record/g11.jpg" class="mypic"/>
				<img src="/images/record/g12.jpg" class="mypic"/>
				<img src="/images/record/g13.jpg" class="mypic"/>
			</div>
		</div>
		</div>
	</div>
	
	<table id="links">
      <tr>
         <td>
         | Home Page | The Night Sky | The Moon | The Planets | The Messier Objects | Stars |
         </td>
      </tr>
   </table>
		
@stop