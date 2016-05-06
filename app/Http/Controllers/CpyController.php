<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CpyController extends Controller
{
    public function getOrders(){
        return Order::all();
    }

    public function deleteOrder(){
        $orderId = $_GET['id'];
        if (Order::where('id',$orderId)->delete())
            return 1;
        else return 0;
    }

    public function editOrder(){
        $id = $_GET['id'];
        $quantity = $_GET['quantity'];
        $price = $_GET['price'];
        $status = $_GET['status'];
        $address = $_GET['address'];
        $comment = $_GET['comment'];
        if (Order::where('id',$id)->update(array(
            'quantity'=>$quantity,
            'price'=>$price,
            'status'=>$status,
            'address'=>$address,
            'comment'=>$comment
        )))
            return 1;
        else return 0;
    }

    public function uploadTemplate(){

        $path = app_path()."\\..\\public\\company\\template\\".$_SESSION['userName'].'\\';
        if (!empty($_FILES)){
            //得到上传文件的临时流
            $tempFile = $_FILES['file_data']['tmp_name'];
            //得到文件原名
            $fileName = iconv("UTF-8","GB2312",$_FILES['file_data']['name']);
            $fileParts = pathinfo($_FILES['file_data']['name']);
            //保存服务器地址，若不存在该文件夹，则新建
            if (!is_dir($path))
                mkdir($path,0777,true);

            if (move_uploaded_file($tempFile,$path.$fileName)){
                $info = array();
            }else{
                $info = array(
                    'error'=>'上传失败！'
                );
            }

            return json_encode($info);
        }
    }
}
