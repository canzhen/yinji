<?php
namespace App\Http\Controllers;

use App\User;
use App\Template;
use App\Order;
use App\Album;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends BaseController
{

	public function getUsers(){
		return User::all();
	}

	public function getCurrentUser(){
		return \Auth::user()->name;
	}

	public function checkExistUser(){
		$username=$_GET['username'];
		$count = User::where('name', '=',$username)->count();
		if ($count == 1 )
			return 1;
		else return 0;
	}

	public function editUsername(){
		session_start();
		$username = $_SESSION['userName'];
		$newUsername = $_GET['newUsername'];
		//$currentUser = User::where('name','=',$username)->first();

		$result = User::where('name','=',$username)->update(array('name'=>$newUsername));
		if ($result != null){
			$_SESSION['userName']=$newUsername;
			return 1;
		}
		else return 0;
	}

	public function checkPwd(){
		session_start();
		$username=$_SESSION['userName'];
		$inputPwd = $_GET['inputPwd'];

		if (
			\Auth::validate(
				array(
					'name'=>$username,
					'password'=>$inputPwd
				)
			)
		){
			return 1;
		}else{
			return 0;
		}
	}


	public function editPwd(){
		session_start();
		$name=$_SESSION['userName'];
		$pwd=$_GET['newPwd'];

		
		$user = User::where('name',$name)->update(array('password'=>\Hash::make($pwd)));
		$result = false;
		if ($user != null)
			$result = true;
		if ($result)
			return 1;
		else
			return 0;
	}


	public function checkIfMobile(){
		session_start();
		$name = $_SESSION['userName'];

		$user = User::where('name','=',$name)->first();
		if ($user->phone_number == null)
			return 0;
		else
			return $user->phone_number;
	}

	public function getCpyUsers(){
		return User::where('privilege','=','staff')->get();//只能看到员工信息，不能看到admin管理层的信息
	}
}
