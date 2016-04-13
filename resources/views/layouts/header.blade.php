<!DOCTYPE html>
<html>

    <head>
        <title>@yield('title') - 印迹</title>
        @section('header')
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="/css/lib/bootstrap/bootstrap.min.css">
            <link rel="stylesheet" href="/css/lib/bootstrap/bootstrap-theme.min.css">
            <link rel="stylesheet" href="/css/lib/fontAwesome/css/font-awesome.css">
			<link rel='stylesheet' href="/css/lib/myfont.css"/>
            <link rel="stylesheet" href="/css/content.css"  type="text/css" media="all"/>
        @show
        
    </head>
	
	
    <body ng-app="yinjiApp">
        @section('body')
        @show
        @section('footer')
            <script src="/js/lib/jquery.min.js"></script>
            <script src="/js/lib/angularjs/angular.min.js"></script>
            <script src="/js/lib/angularjs/angular-animate.min.js"></script>
            <script src="/js/lib/angularjs/angular-route.min.js"></script>
            <script src="/js/yinji.js"></script>
            <script src="/js/lib/bootstrap.min.js"></script>
        @show
    </body>
</html>
