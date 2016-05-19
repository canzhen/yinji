/**
 * Created by gyf on 2016/5/10.
 */
yinjiApp.controller('checkRecordCtrl',
    function($scope,$http){
        $scope.records = {};
        $scope.recordDetail = {};
        var tempDetail = {};
        //分页
        $scope.start        = 0;
        $scope.showLimit    = 10;
        $scope.count        = 0;

        $http.get("/album_create_records/select")
        .success(function (response)
        {
            $scope.records = response;
            for(var i=0;i<$scope.records.length;i++){
                var paths=$scope.records[i].picPath;
                var tmparrPath=paths.split(';');
                var arrPath=new Array(tmparrPath.length-1);
                for(var j=0;j<(tmparrPath.length-1);j++){
                    arrPath[j]=tmparrPath[j];
                }
                $scope.records[i].arr_path=arrPath;
            }
        });

        $scope.page = function(x){
            $http({
                method:'GET',
                url:'/album_create_records/select/'+x,
                params:{
                    'pageNum':x.id
                }
            }).success(function(response){
                $scope.records = response;
                });
        }

        $scope.deleteRecord = function(x){
            $http({
                method:'GET',
                url:'/album_create_records/delete',
                params:{
                    'id':x.id
                }
            })
                .success(function(response){
                    if (response==1){
                        alert('删除id为'+x.id+'的记录成功！');
                        $scope.records.splice($scope.records.indexOf(x),1);
                    }else if (response==0) {
                        alert("oops,删除失败！");
                    }
                });
        }

        $scope.getRecordDetail = function(x){
            $scope.recordDetail.id = x.id;
            $scope.recordDetail.description = x.description;
            $scope.recordDetail.showTime = x.showTime;
            tempDetail = new Array(x,x.id,x.description,x.showTime);
        }

        $scope.editRecord = function(){
            $http({
                method:'GET',
                url:'/album_create_records/edit',
                params:{
                    'id':$scope.recordDetail.id,
                    'description':$scope.recordDetail.description,
                    'showTime':$scope.recordDetail.showTime
                }
            }).success(function(response){
                if (response == 1){
                    alert("修改成功！");
                    $('#recordDetailModal').modal('hide');
                }
                else {
                    alert("oops...修改失败...");
                    $('#recordDetailModal').modal('hide');
                }
            });
            updateRecordData($scope.recordDetail);
        }

        function updateRecordData(detail){
            var index = $scope.records.indexOf(tempDetail[0])
            $scope.records[index].description = detail.description;
            $scope.records[index].showTime = detail.showTime;
            tempDetail = {};
        }
    }
);