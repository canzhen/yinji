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
	public function addRecordNew(){
		$date=$_POST['date'];
		$content=$_POST['content'];

		return $date;
	}
    public function addRecord()
	{
		//获取表单数据
		$record = new Record();
		//$record -> template_name = $_SESSION['userName'];
		//author_name
		$record-> description = $_POST['content'];

		$tempPath="";
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
				$path = $file[$i]->move(app_path().'\storage\uploads\record', $newName);
				$tempPath = $tempPath."/storage/uploads/record/" . $newName . ";";
			}
	}
		$record->picPath =$tempPath;

		$record -> showTime = $_POST['date'];
		//数据插入到数据库中
		$record->save();
		//提醒成功
		echo "<script>alert('发送成功')</script>";
		//页面重定向
		return redirect('/album_create_records');
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
		if (Template::where('id',$recordId)->delete())
			return 1;
		else return 0;
	}

	public function editRecord(){
		$id = $_GET['id'];
		$price = $_GET['price'];
		$status = $_GET['status'];
		$address = $_GET['address'];
		$comment = $_GET['comment'];
		if (Template::where('id',$id)->update(array(
				'price'=>$price,
				'status'=>$status,
				'address'=>$address,
				'comment'=>$comment
		)))
			return 1;
		else return 0;
	}
}
