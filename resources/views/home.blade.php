@extends('layouts.content')

@section('title','首页')

@section('header')
	@parent
	<link rel="stylesheet" type="text/css" href="/css/home.css">
@stop

@section('footer')
	@parent
	<script src="/js/jquery.sliphover.min.js"></script>
	<script src="/js/freewall.js"></script>
	<script src = "/js/home.js"></script>
	<!-- <script src = "/js/<jquery class="ssd-vertical-nav"></jquery>igation.min.js"></script> -->
@stop

@section('content')
		<!-- 侧边栏的包裹容器 -->
	    <div id="contentLeft">

	        <ul id="leftNavigation">
	            <li>
	                <a href="#"><i class="fa fa-coffee leftNavIcon"></i> About us</a>
	            </li>
	            <li>
	                <a href="#"><i class="fa fa-flask leftNavIcon"></i> Products</a>
	            </li>
	            <li>
	                <a href="#"><i class="fa fa-truck leftNavIcon"></i> Services</a>
	            </li>
	            <li>
	                <a href="#"><i class="fa fa-envelope-o leftNavIcon"></i> Contact us</a>
	            </li>

	        </ul>

	    </div>

	<div id="container" class="free-wall">
		    <div class="book-set">
		        <img src="/images/mo.jpg" width="100%" title="this isasdfsdafsdfdcaption">
		    </div>

		    <div class="book-set">
		        <img src="/images/mo.jpg" width="100%" title="this is the caption">
		    </div>
		</div>

		<script type="text/javascript">
			


		</script>

	<!-- <div id = "container">
		<div id = "book1" class = "book-set">
			
		</div>




	</div> -->






@stop