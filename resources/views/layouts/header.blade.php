<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title') - 印迹</title>
        @section('header')
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="/css/lib/bootstrap/bootstrap-theme.min.css">
            <link rel="stylesheet" href="/css/lib/fontAwesome/css/font-awesome.css">
			<link rel='stylesheet' href="/css/lib/myfont.css"/>
            <link rel="stylesheet" href="/css/content.css"  type="text/css" media="all"/>
            <link rel="stylesheet" href="/css/lib/bootstrap/bootstrap.min.css">

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
            <script src="/js/lib/angularjs/angular-file-upload.min.js"></script>
            <script src="/js/yinji.js"></script>
            <script src="/js/lib/bootstrap.min.js"></script>
        @show
    </body>
</html>
