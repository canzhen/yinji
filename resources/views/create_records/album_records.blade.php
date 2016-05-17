@extends('layouts.test')

@section('title','生成相簿')

@section('header')
  @parent
  <link rel="stylesheet" type="text/css" href="/css/create_records/style.css">   
  <link rel="stylesheet" type="text/css" href="/css/create_records/button.css">  
@stop

@section('footer')
  @parent 
@stop

@section('content')
	  <div class="my_records">
	    <div class="mydiv111">
			<p class="datep">2016年4月13日 16:30</p>
			<p class="diary">培根土豆小饼</p>
			<div class="divpic">
				<img class="mypic" src="images/create_records/records/g1.jpg" />
				<img src="images/create_records/records/g2.jpg" class="mypic"/>
				<img src="images/create_records/records/g4.jpg" class="mypic"/>
			</div>
			<br/>
			<div class="my_records_button">
				<input  class="button button-pill button-tiny" type="submit" value="修改">
				<input  class="button button-pill button-tiny" type="submit" value="删除">
			</div>
		</div>
		<!-- <br/> -->
		<div class="mydiv111">
			<p class="datep">2016年4月11日 15:04</p>
			<p class="diary">一到下午这个时候又困…又饿…怎么破？…</p>
			<div class="divpic">
				<img src="images/create_records/records/g3.jpg" class="mypic"/>
			</div>
			<br/>
			<div class="my_records_button">
				<input  class="button button-pill button-tiny" type="submit" value="修改">
				<input  class="button button-pill button-tiny" type="submit" value="删除">
			</div>
		</div>
		<!-- <br/> -->
		<div class="mydiv111">
			<p class="datep">2016年4月10日 10:30</p>
			<p class="diary">【喷香牛肉焖饭】营养丰富又香味十足，煮出来的米饭油光发亮特别的诱惑！绵绵的土豆，微甜的胡萝卜，牛肉香深入米饭，撒一把葱花搅拌下开动啦！</p>
			<div class="divpic">
				<img src="/images/create_records/records/g5.jpg" class="mypic"/>
				<img src="images/create_records/records/g6.jpg" class="mypic"/>
				<img src="images/create_records/records/g7.jpg" class="mypic"/>
				<img src="images/create_records/records/g8.jpg" class="mypic"/>
				<img src="images/create_records/records/g9.jpg" class="mypic"/>
				<img src="images/create_records/records/g10.jpg" class="mypic"/>
				<img src="images/create_records/records/g11.jpg" class="mypic"/>
				<img src="images/create_records/records/g12.jpg" class="mypic"/>
				<img src="images/create_records/records/g13.jpg" class="mypic"/>
			</div>
			<br/>
			<div class="my_records_button">
				<input  class="button button-pill button-tiny" type="submit" value="修改">
				<input  class="button button-pill button-tiny" type="submit" value="删除">
			</div>
		</div>    
	  </div>
@stop