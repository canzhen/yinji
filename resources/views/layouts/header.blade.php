<!DOCTYPE html>
<html>

    <head>
        <title>@yield('title') - 印迹</title>
        <script>
        </script>
        @section('header')
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="/css/lib/bootstrap/bootstrap.min.css">
            <link rel="stylesheet" href="/css/lib/bootstrap/bootstrap-theme.min.css">
            <link rel="stylesheet" href="/css/lib/fontAwesome/css/font-awesome.css">
			<link rel='stylesheet' href="/css/lib/myfont.css"/>
        @show
        
    </head>
	
	
    <body ng-app="yinjiApp">
        @section('body')
        @show
        <div>
			@section('footer')
				<script src="/js/lib/jquery.min.js"></script>
				<script src="/js/lib/angularjs/angular.min.js"></script>
				<script src="/js/lib/angularjs/angular-animate.min.js"></script>
				<script src="/js/lib/angularjs/angular-route.min.js"></script>
				<script src="/js/yinji.js"></script>
				<script src="/js/lib/bootstrap.min.js"></script>
			@show
        </div>
    </body>
</html>
