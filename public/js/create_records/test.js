// 使时间选择器显示出来
yinjiApp.controller('checkOneRecordCtrl',
    function($scope,$http) {
        var temp={};

        $scope.records = {};

            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: function (dateText, inst) {
                    $http.get("/album_create_records/select")
                        .success(function (response)
                        {
                            //$scope.records = response;
                            var index=0;
                            for (var i = 0; i < response.length; i++) {
                                var tmpTime = response[i].showTime.split(' ');
                                if (tmpTime[0] == dateText) {
                                    alert("匹配一个！");
                                    //$scope.records[index]=response[i];

                                    temp[index]=response[i];
                                    index=index+1;
                                    //alert($scope.records[index-1].showTime);
                                }
                            }
                            $scope.records=temp;
                            //console.log($scope.record);
                            alert($scope.records);
                            alert(temp.length);
                            //for (var inn = 0; inn < $scope.records.length; inn++) {
                            //    alert("bbbbb");
                            //    alert($scope.records[0].showTime);
                            //alert($scope.records[1].showTime);
                            //}
                            //alert("shishi!");
                            //alert(response[0].showTime);
                            //alert(dateText);
                        });
                    }
                });
        })