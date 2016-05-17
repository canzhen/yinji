<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Record;
use App\user;

class RecordController extends Controller
{
	public function getIndex()
	{
		
	}
	
    public function addRecord()
	{
		//获取表单数据
		$record = new Record();
		//$record -> name = $_SESSION['userName'];
		$record->description = Request::input('description');

		$picPath = Request::input('files');
		$file = Request::file('files');
		$lenth = count($file);
		for ($i = 0; $i < $lenth; $i++) {
			if ($file[$i]->isValid()) {
				$clientName = $file[$i]->getClientOriginalName();
				$tmpName = $file[$i]->getFileName();
				$realPath = $file[$i]->getRealPath();
				$extension = $file[$i]->getClientOriginalExtension();
				$mimeTye = $file[$i]->getMimeType();
				$newName = md5(date('ymdhis') . $clientName) . "." . $extension;
				$path = $file[$i]->move(app_path() . '\storage\uploads\record', $newName);
				$record->picpath = app_path() . '\storage\uploads\record' . $newName + ';';
				$i++;
			}
	}

		$year = Request::input('year');
		$month =  Request::input('month');
		$day =  Request::input('day');
		$hour = Request::input('hour');
		$min = Request::input('min');

		if($year==0000 || $month==00 || $day==00)
		{
			$record -> showTime=date('y-m-d h:i:s',time());
		}else{
			$record -> showTime= $year.'-'.$month.'-'.$day.' '.$hour.':'.$min.':00';
		}

		//数据插入到数据库中
		$record->save();
		//提醒成功
		echo "<script>alert('发送成功')</script>";
		//页面重定向
		return redirect('/record');
	}

	private function picToServer()
	{

	}

	public function selectRecord()
	{
		return Record::all();
	}

	public function deleteRecord(){
		$recordId = $_GET['id'];
		if (Record::where('id',$recordId)->delete())
			return 1;
		else return 0;
	}

	public function editRecord(){
		$id = $_GET['id'];
		$price = $_GET['price'];
		$status = $_GET['status'];
		$address = $_GET['address'];
		$comment = $_GET['comment'];
		if (Order::where('id',$id)->update(array(
				'price'=>$price,
				'status'=>$status,
				'address'=>$address,
				'comment'=>$comment
		)))
			return 1;
		else return 0;
	}
}
