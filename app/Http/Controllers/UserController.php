<?php
namespace App\Http\Controllers;

use App\User;
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
		$count = DB::table('users')
			->where('name', '=',$username)->count();
		if ($count == 1 )
			return 1;
		else return 0;
	}
}
