<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
	
	/**
	* Login Method,created to check with the database
	* 
	* Created by Zhou canzhen on 2016/03/28
	*/
	public function postLogin(){
		$name = $_GET['username'];
		$password = $_GET['password'];
		$remember = $_GET['remember'];
		$data = array('name'=>$name,'password'=>$password);

		if (\Auth::attempt($data,$remember)){
			$privilege = \DB::table('users')
						->where('name', '=',$name)
						->pluck('privilege');
			if (strcmp($privilege[0],'admin')==0){
				$_SESSION['privilege']='admin';
			}else{
				$_SESSION['privilege']='user';
			}
			return 1;//login success,it's just normal user
		}else{
			return 0;
		}
	}
	
	public function gotoIntenedPage(){
		return \Redirect::intended('/');
	}
	

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
	
	
    protected $redirectPath = '/auth/success';
    protected $loginPath = '/auth/error';
}
