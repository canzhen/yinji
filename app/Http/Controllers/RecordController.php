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
		$record =new Record();
		//$data['name']
		$record -> description = Request::input('description');
		//$record -> picpath = Request::input('imgfile');
		$img1 = Request::input('imgfile[0]');
		echo $img1;

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
}
