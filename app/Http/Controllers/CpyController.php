<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Template;
use App\Order;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evaluation;

class CpyController extends Controller
{

    /**
     * 加载首页信息
     * @return 未完成订单的数量、总评论数
     */
    public function getIndexMsg(){
        $undoneOrderNum=Order::where('status','未付款')->count();
        $evaNum=Evaluation::all()->count();
        return array('undoneOrderNum' => $undoneOrderNum, 'evaNum' => $evaNum);
    }
    /**
     * 获取未完成订单信息
     * @return 未完成订单信息数组
     */
    public function getUndoneOrders(){
        return Order::where('status','未付款')->get();
    }

    public function paiedOrders(){
        return Order::where('status','已付款')->get();
    }

    public function deliverOrders(){
        return Order::where('status','送货中')->get();
    }

    public function publishOrders(){
        return Order::where('status','已发货')->get();
    }
    
    public function receiveOrders(){
        return Order::where('status','已送达')->get();
    }
    /**
     * 获取所有评价
     * @return 所有评价
     */
    public function getEvaluations(){
        return Evaluation::where([])->orderBy('created_at', 'desc')->get();
    }
    /**
     * 获取所有好评
     * @return 所有好评
     */
    public function getGoodEva(){
        return Evaluation::where('content','like','%漂亮%')->orWhere('content','like','%精致%')
            ->orWhere('content','like','%棒%')->orWhere('content','like','%很好看%')->orderBy('created_at', 'desc')->get();
    }
    /**
     * 获取所有差评
     * @return 所有差评
     */
    public function getBadEva(){
        return Evaluation::where('content','like','%不好%')->orWhere('content','like','%丑%')->orderBy('created_at', 'desc')->get();
    }
    /**
     * 获取所有订单
     * @return 所有订单
     */
    public function getOrders(){
        return Order::all();
    }

    /**
     * 删除订单
     * @return int
     */
    public function deleteOrder(){
        $orderId = $_GET['id'];
        if (Order::where('id',$orderId)->delete())
            return 1;
        else return 0;
    }

    /**
     * 编辑订单状态
     * @return int
     */
    public function editOrder(){
        $id = $_GET['id'];
        $quantity = $_GET['quantity'];
        $price = $_GET['price'];
        $status = $_GET['status'];
        $address = $_GET['address'];
        $comment = $_GET['comment'];
        if (Order::where('id',$id)->update(array(
            'quantity'=>$quantity,
            'price'=>$price,
            'status'=>$status,
            'address'=>$address,
            'comment'=>$comment
        )))
            return 1;
        else return 0;
    }


    /**
     * 上传公司模板到服务器，同时在数据库中新增数据
     * @return mixed
     */
    public function uploadTemplate(){


        $path = app_path()."\\..\\public\\company\\template\\".$_SESSION['userName'].'\\';
        if (!empty($_FILES)){
            //得到上传文件的临时流
            $tempFile = $_FILES['myfile']['tmp_name'];
            //得到文件原名
            $fileName = iconv("UTF-8","GB2312",$_FILES['myfile']['name']);
            //$fileParts = pathinfo($_FILES['myfile']['name']);
            //保存服务器地址，若不存在该文件夹，则新建
            if (!is_dir($path))
                mkdir($path,0777,true);

            //往templates表中新增数据
            $author_name = $_SESSION['userName'];
            $saving_path = "company\\template\\".$_SESSION['userName'].'\\'.$fileName;
            $response = 0;//初始化默认回复为0
            if ($this->addTemplate($fileName,$author_name,$saving_path,"没有描述")){
                //成功往数据库添加数据之后才把图片保存到硬盘，这样可以防止重名
                $info = array('response'=>$fileName);
                if($tempFile == null)
                    $response = 'tempFile是null啊！！！';
                if (move_uploaded_file($tempFile,$path.$fileName)){
                    $response = 1;
                }else{
                    switch($_FILES['myfile']['error']){
                        case 1:
                        case 2:
                            $response = "对不起，您上传的图片超过限制大小，请压缩后上传！";
                            break;
                        case 3:
                            $reponse = "上传失败，只有部分图片被上传，请重新上传！";
                            break;
                        case 5:
                            $reponse = "上传失败，上传图片大小为0！";
                            break;
                        default:
                            $reponse = "对不起，上传失败！";
                            break;
                    }
                }
            }

            //$info = array('response'=>$_FILES['myfile']['error']);
            return json_encode(array('response'=>$response));
        }
    }

    /**
     * 添加模板
     * @param $template_name 模板名称
     * @param $author_name 作者名称
     * @param $saving_path 模板保存路径
     * @param $description 模板描述
     *
     * @return 是否添加模板成功
     */
    public function addTemplate($template_name,$author_name,$saving_path,$description){
        try{
            $result = Template::create(
                array(
                    'template_name'=>$template_name,
                    'author_name'=>$author_name,
                    'saving_path'=>$saving_path,
                    'description'=>$description
                ));
            if ($result != null)
                return true;
            else return false;
        }catch(QueryException $e){
            return false;
        }

    }


    public function editTemplate(){
        $id = $_GET['id'];
        $template_name = $_GET['template_name'];
        $description = $_GET['description'];
        if (Template::where('id',$id)->update(array(
            'template_name'=>$template_name,
            'description'=>$description
        )))
            return Template::where('id',$id)->pluck('updated_at');
        else return 0;
    }

    /**
     * 获取所有模板
     * @return 返回所有的模板
     */
    public function getTemplates(){
        return Template::all();
    }

    /**
     * 删除某个模板
     * @return 是否删除成功
     */
    public function deleteTemplate(){
        $name = $_GET['name'];
        if (Template::where('template_name',$name)->delete())
            return 1;
        else return 0;
    }


}
