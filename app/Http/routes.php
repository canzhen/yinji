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
Route::group(['middleware'=>'web'],function(){
    date_default_timezone_set('PRC');//设置默认时区到中国的时区


    Route::get('/', function () {
        return view('home');
    });

    //在前端获取当前用户名
    Route::get('/getUserName',function(){
        if(!isset($_SESSION)){
            session_start();
        }
        if (isset($_SESSION['userName']) && $_SESSION['userName'] != "")
            return $_SESSION['userName'];
        else return "";
    });

    //在前端获取当前用户权限
    Route::get('/getUserPrivilege',function(){
        if(!isset($_SESSION)){
            session_start();
        }
        return $_SESSION['privilege'];
    });

Route::group(['middleware'=>'auth'], function() {//中间件，拦截，用于登录验证


    Route::get('/album_create_records', function () {
        return view('create_records\album_create_records');
    });

    //用户创建纪念册
    Route::get('/create_album', function () {
        return view('create_album');
    });

    //用户个人信息查看与修改界面
    Route::get('/user-information',function(){
        return view('user-information');
    });

    Route::get('/orderInfo',function(){
        return view('orderInfo');
    });


    /*记录部分的界面*/
    // 记录简介页面
    Route::get('/album_index', function () {
        return view('create_records.album_index');
    });

    // 记录封面页面
    Route::get('/album_cover', function () {
        return view('create_records.album_cover');
    });

    // 创建记录页面
    Route::get('/album_create_records', function () {
        return view('create_records.album_create_records');
    });

    // 查找记录页面
    Route::get('/album_query', function () {
        return view('create_records.album_query');
    });
    // 展示记录页面
    Route::get('/album_show_records', function () {
        return view('create_records.album_show_records');
    });
    // 记录页面
    Route::get('/album_records', function () {
        return view('create_records.album_records');
    });

    /*记录部分的界面结束*/


    // 上传文件页面
    Route::get('/album_fileupload', function () {
        return view('create_records.album_fileupload');
    });
    // 下订单页面
    Route::get('/album_order', function () {
        return view('create_records.album_order');
    });

});


Route::group(['middleware'=>'checkCpyUsers'], function() {//中间件，拦截，用于公司身份验证
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

    Route::get('/cpy_checkOrder', function () {
        return view('company.cpy_checkOrder');
    });

    Route::get('/cpy_info', function () {
        return view('company.cpy_info');
    });

    Route::get('/cpy_newOrdersManage', function () {
        return view('company.cpy_newOrdersManage');
    });

    Route::get('/cpy_paidOrders', function () {
        return view('company.cpy_paidOrder');
    });

    Route::get('/cpy_deliverOrders', function () {
        return view('company.cpy_deliverOrder');
    });

    Route::get('/cpy_publishOrders', function () {
        return view('company.cpy_publishOrder');
    });

    Route::get('/cpy_receivedOrders', function () {
        return view('company.cpy_receivedOrder');
    });

    Route::get('/cpy_checkEvaluation', function () {
        return view('company.cpy_checkEvaluation');
    });

    Route::get('/cpy_salesReport',function(){
        return view('company.cpy_salesReport');
    });

    Route::get('/cpy_checkStaff',function(){
        return view('company.cpy_checkStaff');
    });

    Route::get('/cpy_checkUser',function(){
        return view('company.cpy_checkUser');
    });

    Route::get('/cpy_userInformation', function () {
        return view('company.userInformation');
    });
});
/*公司部分结束*/

    Route::get('/cpyUserError',function(){
       return view('errors.cpyUserError');
    });

    Route::get('/getRequest', function () {
        //var files = Request.Files;
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
});


/*
 * 公司方面的操作
 */
Route::get('/cpy/getOrders','CpyController@getOrders');
Route::get('/cpy/deleteOrder','CpyController@deleteOrder');
Route::get('/cpy/editOrder','CpyController@editOrder');
Route::post('/cpy/uploadTemplate','CpyController@uploadTemplate');
Route::get('/cpy/getTemplates','CpyController@getTemplates');
Route::get('/cpy/editTemplate','CpyController@editTemplate');
Route::get('/cpy/deleteTemplate','CpyController@deleteTemplate');

Route::get('/cpy/getIndexMsg','CpyController@getIndexMsg');
Route::get('/cpy/getUndoneOrders','CpyController@getUndoneOrders');

Route::get('/cpy/receivedOrders','CpyController@receiveOrders');
Route::get('/cpy/publishOrders','CpyController@publishOrders');
Route::get('/cpy/paidOrders','CpyController@paiOrders');
Route::get('/cpy/deliverOrders','CpyController@deliverOrders');

Route::get('/cpy/getEvaluations','CpyController@getEvaluations');
Route::get('/cpy/getGoodEva','CpyController@getGoodEva');
Route::get('/cpy/getBadEva','CpyController@getBadEva');
Route::get('/auth/addUser','Auth\AuthController@addUser');//添加用户
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


/**
 * 用户方面的操作
 */
Route::get('/usr/checkExistUser','UserController@checkExistUser');
Route::get('/usr/editUsername','UserController@editUsername');
Route::get('/usr/checkPwd','UserController@checkPwd');
Route::get('/usr/editPwd','UserController@editPwd');
Route::get('/usr/checkIfMobile','UserController@checkIfMobile');
Route::get('/usr/getCpyUsers','UserController@getCpyUsers');
Route::get('/usr/getCommonUsers','UserController@getCommonUsers');


// 展示纪念册
Route::get('/displayAlbum', 'Album\AlbumController@displayAlbum');
// 添加纪念册
Route::get('/addAlbum', 'Album\AlbumController@addAlbum');
// 获得当前纪念册的信息
Route::get('/getCurAlbumInfo', 'Album\AlbumController@getCurAlbumInfo');
//获得当前纪念册ID
Route::get('/getCurAlbum', function(){
    if(!isset($_SESSION)){
        session_start();
    }
    return $_SESSION['curAlbum'];
});
// 更新纪念册
Route::get('/updateAlbum', 'Album\AlbumController@updateAlbum');
// 删除纪念册
Route::get('/deleteAlbum', 'Album\AlbumController@deleteAlbum');
Route::get('/showAlbum', 'Album\AlbumController@showAlbum');

Route::get('/addOrder', 'Order\OrderController@addOrder');

Route::get('/deleteOrder', 'Order\OrderController@deleteOrder');
Route::get('/displayOrder', 'Order\OrderController@displayOrder');
Route::get('/assessOrder', 'Order\OrderController@assessOrder');
Route::get('/showAlbums', function() {
    return view('/showAlbums');
});

Route::get('/create_album/uploadImg', 'Album\AlbumController@test');

Route::get('/albumInfo', 'Album\AlbumController@albumInfo');
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


/*
 * 控制器和路由
 */

 //绑定RecordController的增加函数和record.blade.php
 Route::post('/album_create_records/add','RecordController@addRecord');
 //Route::post('/album_create_records/add_new','RecordController@addRecordNew');
 Route::get('/album_create_records/select','RecordController@selectRecord');
 Route::get('/album_create_records/delete','RecordController@deleteRecord');
 Route::get('/album_create_records/edit','RecordController@editRecord');

 Route::get('/album_query/select','RecordController@selectRecord');


Route::get('/getTemplates','Order\OrderController@getTemplates');