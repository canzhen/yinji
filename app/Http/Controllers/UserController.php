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
}
