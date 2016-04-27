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

    /*公司部分*/
    Route::get('/cpy_index', function () {
        return view('company.cpy_index');
    });

    Route::get('/cpy_addTemplate', function () {
        return view('company.cpy_addTemplate');
    });

    Route::get('/cpy_checkTemplate', function () {
        return view('company.cpy_checkTemplate');
    });
    /*公司部分结束*/

    Route::get('/getRequest', function () {
        //var files = Request.Files;
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
 * 纪念册操作
 */

//创建纪念册
Route::get('/db/addAlbum', function() {
    $userId = $_GET['userId'];
    $albumName = $_GET['albumName'];
    $category = $_GET['category'];
    $authorName = $_GET['authorName']; 
    $motto = $_GET['motto'];
    $description = $_GET['description'];

    $id = DB::table('albums')
        ->insertGetId(
            array(
                'user_id' => $userId,
                'name' => $albumName,
                'category' => $category,
                'author_name' => $authorName, 
                'motto' => $motto,
                'description' => $description       
            )
        );
    return $id;
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
