/**
 * Created by gyf on 2016/5/10.
 */
yinjiApp.controller('checkRecordCtrl',
    function($scope,$http){
        $scope.records = {};
        $scope.recordDetail = {};
        var tempDetail = {};

        $http.get("/record/select")
        .success(function (response)
        {
            //console.log(response);
            alert(response);

            $scope.records = response;



        });

        $scope.paginationConf = {
            currentPage: 1,
            itemsPerPage: 5
        };

        $scope.deleteRecord = function(x){
            $http({
                method:'GET',
                url:'/record/delete',
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
            $scope.recordDetail.picpath= x.picpath;
            $scope.recordDetail.showTime = x.showTime;
            tempDetail = new Array(x,x.id,x.description, x.picpath,x.showTime);
        }

        $scope.editRecord = function(){
            if ($scope.recordDetail.description == tempDetail[1]&&
                $scope.recordDetail.picpath == tempDetail[2]&&
                $scope.recordDetail.showTime == tempDetail[3]&&
                $scope.recordDetail.address == tempDetail[4]&&
                $scope.recordDetail.comment == tempDetail[5])
                alert("对不起，您没有进行任何修改！");
            else{
                $http({
                    method:'GET',
                    url:'/cpy/editOrder',
                    params:{
                        'id':$scope.recordDetail.id,
                        'quantity':$scope.recordDetail.quantity,
                        'price':$scope.recordDetail.price,
                        'status':$scope.recordDetail.status,
                        'address':$scope.recordDetail.address,
                        'comment':$scope.recordDetail.comment
                    }
                }).success(function(response){
                    if (response == 1){
                        alert("修改成功！");
                        $('#orderDetailModal').modal('hide');
                    }
                    else {
                        alert("oops...修改失败...");
                        $('#orderDetailModal').modal('hide');
                    }
                });
                updateOrderData($scope.orderDetail);
            }
        }

        function updateOrderData(detail){
            var index = $scope.records.indexOf(tempDetail[0])
            $scope.records[index].quantity = detail.quantity;
            $scope.records[index].price = detail.price;
            $scope.records[index].status = detail.status;
            $scope.records[index].address = detail.address;
            $scope.records[index].comment = detail.comment;
            tempDetail = {};
        }
    }
);