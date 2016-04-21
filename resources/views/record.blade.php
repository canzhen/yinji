@extends('layouts.content')

@section('title','查看纪念册')


@section('header')
	@parent
	<link rel="stylesheet" href="css/record.css">
@stop

@section('footer')
	@parent
	<script src="js/rePic.js"></script>
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
				<input class="datebutton" type="button" value="转到"></input>
			</div>
        </div> <!-- .sidebar-menu -->
		
		<div class="wrap">
		<br/>
		<div class="writediv">
			<p class="label1">你的生活有什么新动态？</p>
			<textarea id="" style="width:650px;height:100px;">输入照片描述……</textarea>
			<br /><br />
			<form>
				<div align="left" style="padding-left:12px" id="imgview">
					<img name="showing1" id="showing1" src="" style="display:none;" alt="预览图片"/>
					<img name="showing2" id="showing2" src="" style="display:none;" alt="预览图片"/>
					<img name="showing3" id="showing3" src="" style="display:none;" alt="预览图片"/>
					<br/>
				</div>
				<div align="center">
					<!-- <input name="imgfile" type="file"multiple id="imgfile" size="20" onchange="viewmypic(showing1,this.form.imgfile);" /> -->
					<input name="imgfile" type="file"multiple id="imgfile" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" onchange="viewmypic(showing1,this.form.imgfile);" />
					<!-- <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple /> -->
					<label for="imgfile"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>       
					<br/>
				</div>
				<div align="right">
					<input class="datebutton" type="button" value="发送"></input>
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