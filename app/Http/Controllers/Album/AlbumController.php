<?php

namespace App\Http\Controllers\Album;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{	
	/**
	 * 展示纪念册
	 * @return  数据库中所有纪念册的结果集
	 */
    public function displayAlbum(){
    	$resSet = \DB::table('albums')->get();

    	return $resSet;
    }

    /**
     * 创建纪念册
     */
    public function addAlbum(){
    	$uid = $_SESSION['userId'];
    	$uname = $_SESSION['userName'];
    	$category = $_GET['category'];
    	$albumName = $_GET['albumName'];
    	$authorName = $_GET['authorName'];
    	$motto = $_GET['motto'];
    	$description = $_GET['description'];

    	$eid = \DB::table('albums')
	        ->insertGetId(
	            array(
	                'user_id' => $uid,
	                'category' => $category,
	                'name' => $albumName,     
	                'author_name' => $authorName, 
	                'motto' => $motto,
	                'description' => $description,
	                'saving_path' => "\images\mo.jpg"       
	            )
	        );
    	return "success";
    }

    /**
     * 获得当前纪念册的信息
     * @return 若当前存在纪念册编号 则返回当前纪念册的信息数组
     *         若不存在 返回false 
     */
    public function getCurAlbumInfo(){
    	if($_SESSION['curAlbum'] == 0){
    		return "false";
    	}else{
    		$res = \DB::table('albums')
    			->where('id', $_SESSION['curAlbum'])
    			->get();
    		return $res;
    	}
    }

    /**
     * 更新纪念册信息
     * @return 成功信息
     */
    public function updateAlbum(){
        $sss = $_SESSION['curAlbum'];
    	$uid = $_SESSION['userId'];
    	$category = $_GET['category'];
    	$albumName = $_GET['albumName'];
    	$authorName = $_GET['authorName'];
    	$motto = $_GET['motto'];
    	$description = $_GET['description'];


    	\DB::table('albums')
    		->where('id', $sss)
    		->update(
                array(
                    'category' => $category, 
                    'name' => $albumName,
                    'author_name' => $authorName,
                    'motto' => $motto,
                    'description' => $description
                )
            );
    	
        return "success";
    }

    /**
     * 删除纪念册
     * @return 成功信息
     */
    public function deleteAlbum(){
        $sss = $_GET['albumId'];
        
        \DB::table('albums')
            ->where('id', $sss)
            ->delete();

        $_SESSION['curAlbum'] = 0;

        return "success";
    }

    /**
     * 设置当前纪念册id以便进入纪念册获取数据
     * @return 成功信息
     */
    public function showAlbum(){
        $albumId = $_GET['albumId'];
        $_SESSION['curAlbum'] = $albumId;
        return "success";
    }
}
