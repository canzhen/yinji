<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;

use App\Order;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function addOrder(){
		if(!isset($_SESSION)){
			session_start();
		}
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

		$newOrder = new Order;
		$newOrder->user_name = $curUserName[0];
		$newOrder->album_name = $curAlbumName[0];
		$newOrder->price = $oPrice;
		$newOrder->quantity = $oNum;
		$newOrder->address = $oAddress;
		$newOrder->status = "未付款";
		$newOrder->order_date = $orderTime;
		$newOrder->delivery_date = $oComment;
		$newOrder->comment = "";
		$newOrder->template = $oTem;
		$eid = $newOrder->save();

		//模版使用次数自增
		\DB::table('templates')->where('id', $oTem)->increment('count');

	    //return $eid;

		return $curAlbumName[0];
    }


    public function deleteOrder(){
		$oId = $_GET['orderId'];

    	$tt = \DB::table('orders')
    			->where('id', $oId)
    			->delete();
    	return $tt ;
    }

	public function getTemplates(){
		if(!isset($_SESSION)){
			session_start();
		} 
		$curName = $_SESSION['userName'];
		$resSet = \DB::table('templates')->get();
    	return $resSet;
		//return $curName;

	}

	public function displayOrder(){
		if(!isset($_SESSION)){
			session_start();
		}
		$curName = $_SESSION['userName'];
		$resSet = \DB::table('orders')->get();
    	return $resSet;
	}

	public function assessOrder(){
		$detail = $_GET['assessDetail'];
		$orderId = $_GET['orderId'];

		\DB::table('orders')->where('id', $orderId)->update(['assess' => $detail]);
	}
}
