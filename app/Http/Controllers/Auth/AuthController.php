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
			$res = \DB::table('users')->where('name', '=',$name)->get();
            //$res = User::where('name',$name)->get(); 
            
            $_SESSION['userId'] = $res[0]->id;//获得用户id
            $_SESSION['userName'] = $res[0]->name;//获得用户姓名
            //$_SESSION['curAlbum']
            //$_SESSION['privilege'] = $res[0]->privilege;//获得权限
            //测试
            $_SESSION['curAlbum'] = 1;
            $privilege = $res[0]->privilege;
            $_SESSION['ifLoggedIn'] = 'y';//set the value to yes

            if (strcmp($privilege,'superadmin')==0){
				$_SESSION['privilege']='superadmin';
				return 3;
			}else if (strcmp($privilege,'staff')==0 ||
						strcmp($privilege,'admin')==0){
				$_SESSION['privilege']='company';
				return 2;
			}else{
				$_SESSION['privilege']='admin';
				return 1;
			}

		}else{
			\Session::put('ifLoggedIn','n');//set the value to no
			return 0;//密码错误
		}
	}

	/**
	 * User log out of this system
	 * @return mixed
	 *
	 * Created by Zhou Canzhen on 2016/04/21
	 */
	public function getLogout() {
		if(\Auth::check())
		{
			\Auth::logout();
			$_SESSION['ifLoggedIn']='n';
		}
		return \Redirect::intended('/');
	}


	public function gotoIntenedPage(){
		return \Redirect::intended('/');
	}



	/**
	 * addUser method, used to add one line
	 * in database to create a new user
	 *
	 * Created by Zhou canzhen on 2016/03/28
	 */
	public function addUser(){
		$name=$_GET['username'];
		$password=$_GET['password'];
		$privilege='user';
		$id = \DB::table('users')
			->insertGetId(
				array(
					'name' => $name,
					'password' => \Hash::make($password),
					'privilege' => $privilege
				)
			);
		return $id;
	}



	/**
	 * Check if the user exists in database
	 * @return int
	 *
	 * Created by Zhou Canzhen on 2016/04/21
	 */
	public function checkUser(){
		$name = $_GET['username'];
		$result = \DB::table('users')->where('name','=',$name)->first();
		if ($result != NULL){
			return 0;
		}else return 1;
	}

	/**
	 * Check if the password is right according to the
	 * user in database
	 * @return int
	 *
	 * Created by Zhou Canzhen on 2016/04/21
	 */
	public function checkPwd(){
		$name=$_SESSION['editPwdUserName'];
		$inputPwd = $_GET['inputPwd'];

		if (\Auth::validate(
			array(
				'name'=>$name,
				'password'=>$inputPwd))){
			return 1;//登录成功
		}else{
			return 0;//登录失败
		}
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
