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
}
