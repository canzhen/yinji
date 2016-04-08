<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/test', function () {
    return view('test');
});


/*
 * 数据库方面的操作
 */

//注册用户
Route::get('/db/addUser', function() {
    $name=$_GET['username'];
    $email=$_GET['email'];
    $privilege=$_GET['privilege'];
    $password=$_GET['password'];
    $id = DB::table('users')
        ->insertGetId(
            array(
                'name' => $name,
                'email' => $email,
                'privilege' => $privilege,
                'password' => Hash::make($password)
            )
        );
});
//登录验证密码
Route::get('/db/checkPwd', function() {
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
});

/*
 * 身份验证方面的操作
 */
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/intended','Auth\AuthController@gotoIntenedPage');

Route::get('/auth/success', function() {
	return view('auth.success');
});

Route::get('/auth/error', function() {
	return view('auth.error');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
