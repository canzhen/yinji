$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});


/**
 * Created by Zhou Canzhen
 * 2016/05/06
 */
yinjiApp.controller('cpyNavController',
    function($scope,$http){
        $scope.evaHour = "";
        $scope.evaMinute = "";
        $scope.evaSecond = "";
        $scope.odHour = "";
        $scope.odMinute = "";
        $scope.odSecond = "";

        var date = new Date(),
            currentHour = date.getHours(),
            currentMinute = date.getMinutes(),
            currentSecond = date.getSeconds(),
            latestOrderTime,latestEvaTime;


        //获取首页订单
        $http.get("/cpy/getEvaluations")
        .success(function (response)
        {
            latestEvaTime = response[response.length-1].created_at.split(" ")[1].split(":");
            $scope.evaHour = currentHour - latestEvaTime[0];
            if ($scope.evaHour < 1){
                $scope.evaMinute = currentMinute - latestEvaTime[1];
                if ($scope.evaMinute < 1)
                    $scope.evaSecond = currentSecond - latestEvaTime[2];
            }
        });


        //获取首页订单
        $http.get("/cpy/getOrders")
        .success(function (response)
        {
            latestOrderTime = response[response.length-1].order_date.split(" ")[1].split(":");
            $scope.odHour = currentHour - latestOrderTime[0];
            if ($scope.odHour < 1){
                $scope.odMinute = currentMinute - latestOrderTime[1];
                if ($scope.odMinute < 1)
                    $scope.odSecond = currentSecond - latestOrderTime[2];
            }
        });


        function getTimeInterval(date){
            var dateDetail = date.split(":");
            return dateDetail[0]*60+dateDetail[1];
        }
});
