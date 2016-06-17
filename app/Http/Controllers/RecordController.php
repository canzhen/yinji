<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Record;
use App\user;

class RecordController extends Controller
{
    public function addRecord()
	{
		session_start();
		//获取表单数据
		$record = new Record();
		//$temp=$_SESSION['userName'];
		$record -> autherName = $_SESSION['userName'];

		$record -> albumId = $_SESSION['curAlbum'];
		//author_name
		$record-> description = $_POST['content'];

		$tempPath="";
		$file = Request::file('files');
		$lenth = count($file);
		for ($i = 0; $i < $lenth; $i++) {
			if ($file[$i]!= null) {
				$clientName = $file[$i]->getClientOriginalName();
				$tmpName = $file[$i]->getFileName();
				$realPath = $file[$i]->getRealPath();
				$extension = $file[$i]->getClientOriginalExtension();
				$mimeTye = $file[$i]->getMimeType();
				$newName = md5(date('ymdhis') . $clientName) . "." . $extension;
				$path = $file[$i]->move(public_path() . '\uploads\record', $newName);
				$tempPath = $tempPath . "/uploads/record/" . $newName . ";";
			}
		}
		$record->picPath =$tempPath;

		$record -> showTime = $_POST['date'];
		//数据插入到数据库中
		$record->save();
		//提醒成功
		echo "alert('发送成功')";
		//页面重定向
		return redirect('/album_create_records');
	}

	public function selectRecord()
	{
		session_start();
		//$name="gyf";
		$name=$_SESSION['userName'];
		$albumID=$_SESSION['curAlbum'];
		return Record::where('autherName',$name)->where('albumId',$albumID)->get();
		//return Record::where('autherName',$name)->get();
	}

	public function deleteRecord(){
		$recordId = $_GET['id'];
		if (Record::where('id',$recordId)->delete())
			return 1;
		else return 0;
	}

	public function editRecord(){
		$id = $_GET['id'];
		$description = $_GET['description'];
		$showTime = $_GET['showTime'];
		if (Record::where('id',$id)->update(array(
				'description'=>$description,
				'showTime'=>$showTime
		)))
			return 1;
		else return 0;
	}
}
