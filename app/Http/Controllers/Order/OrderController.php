<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function addOrder(){
    	$curAlbum = $_SESSION['curAlbum'];

    	$oName = $_GET['oName'];
    	$oPhone = $_GET['oPhone'];
    	$oAddress = $_GET['oAddress'];
    	$oNum = $_GET['oNum'];
    	$oPrice = $_GET['oPrice'];
    	$orderTime = date('y-m-d H:i:s', time());

    	$userId = $_SESSION['userId'];

    	//获得当前纪念册名
    	$curAlbumName = \DB::table('albums')
    					->where('id', $curAlbum)
    					->pluck('name');

    	$eid = \DB::table('orders')
	        ->insertGetId(
	            array(
	                'user_name' => $oName,
	                'album_name' =>$curAlbumName[0],
	                'price' => $oPrice,
	                'quantity' => $oNum,
	                'address' => $oAddress,
	                'status' => "未付款",
	                'order_date' => $orderTime,
	                'delivery_date' => $orderTime,
	                'comment' => "no what"
	            )
	        );

	    return $eid;
    	

    	// return $curAlbum.$curAlbumName[0];	
    }

    public function deleteOrder(){
    	//alert("Adfasf");
    	
    	$tt = \DB::table('orders')
    			->where('id', 7)
    			->delete();


    	return $tt ;
    }
}
