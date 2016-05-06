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
}
