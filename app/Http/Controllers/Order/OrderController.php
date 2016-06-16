<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function addOrder(){
    	$curAlbum = $_SESSION['curAlbum'];

    	$oName = $_GET['oName'];
    	$oPhone = $_GET['oPhone'];
    	$oAddress = $_GET['oAddress'];
		$oComment = $_GET['oComment'];
    	$oNum = $_GET['oNum'];
    	$oPrice = $_GET['oPrice'];
		
    	$orderTime = date('y-m-d H:i:s', time());

    	$userId = $_SESSION['userId'];
		$curUserName = \DB::table('users')
    					->where('id', $userId)
    					->pluck('name');

		$oTem = $_GET['oTemplate'];

    	//获得当前纪念册名
    	$curAlbumName = \DB::table('albums')
    					->where('id', $curAlbum)
    					->pluck('name');

    	$eid = \DB::table('orders')
	        ->insertGetId(
	            array(
	                'user_name' => $curUserName[0],
	                'album_name' =>$curAlbumName[0],
	                'price' => $oPrice,
	                'quantity' => $oNum,
	                'address' => $oAddress,
	                'status' => "未付款",
	                'order_date' => $orderTime,
	                'delivery_date' => $orderTime,
	                'comment' => $oComment,
					'template' => $oTem
	            )
	        );

		//模版使用次数自增
		\DB::table('templates')->where('id', $oTem)->increment('count');

	    return $eid;
    }


    public function deleteOrder(){
		$oId = $_GET['orderId'];

    	$tt = \DB::table('orders')
    			->where('id', $oId)
    			->delete();
    	return $tt ;
    }

	public function getTemplates(){
		$resSet = \DB::table('templates')->get();
    	return $resSet;
	}

	public function displayOrder(){
		$resSet = \DB::table('orders')->get();
    	return $resSet;
	}

	public function assessOrder(){
		$detail = $_GET['assessDetail'];
		$orderId = $_GET['orderId'];

		\DB::table('orders')->where('id', $orderId)->update(['assess' => $detail]);
	}
}
