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
//Route::group(['middleware'=>'auth'], function(){//中间件，拦截，用于身份验证

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/test', function () {
        return view('test');
    });

    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/register', function () {
        return view('auth.register');
    });

    Route::get('/home', function () {
        return view('home');
    });
	
	Route::get('/record', function () {
        return view('record');
    });

    //用户创建纪念册
    Route::get('/create_album', function () {
        return view('create_album');
    });

//});

/*
 * 数据库方面的操作
 */
Route::get('/auth/addUser',function(){
    $name=$_GET['username'];
    $password=$_GET['password'];
    $privilege='user';
    $id = \DB::table('users')
        ->insertGetId(
            array(
                'name' => $name,
                'password' => Hash::make($password),
                'privilege' => $privilege
            )
        );
    return $id;
});
//Route::get('/auth/addUser','Auth\AuthController@addUser');//添加用户
Route::get('/auth/checkUser','Auth\AuthController@checkUser');//查看是否有用户存在
Route::get('/auth/checkPwd','Auth\AuthController@checkPwd');//查看用户名密码是否正确

/*
 * 身份验证方面的操作
 */
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');
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
