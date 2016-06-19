@extends('layouts.cpy_sidebar')

@section('title','公司信息')
@section('cpy_subtitle','关于我们')

@section('header')
	@parent
	<link href="/css/about_us.css" rel="stylesheet">
@stop

@section('footer')
	@parent
@stop


@section('sidebar-content')
	<div class="col-lg-12">
		<div class="col-lg-4">
			<img class="leftImg" src="/images/logo.png">
		</div>
		<div class="rightText">
			当今社会压力越来越大，生活的节奏变得越来越快，人们的感情变得比以前更加需要宣泄，
			他们在qq、在朋友圈发动态。但却总有一些不想让别人知道的小心思，
			如若要每次在发动态时都设置权限，却又觉得太麻烦。再者，如今的人们变得越来越细腻，
			在浮华的尘世中想找到属于自己的净土，人们愿意把网络上的、手机拍的照片打印下来，
			放在相框里或者摆放在架子上，总之这是纪念自己生活的一种方式。
			也有越来越多的人愿意花钱把相片打印成精美的相册，珍藏着。
			而<b>印迹</b>正是这样一个公司，用精美的纪念册记录你美好的人生。<br/>
			印迹是一家年轻的公司，但我们会继续努力！
		</div>

	</div>
@stop