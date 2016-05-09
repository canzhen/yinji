<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');//订单号
            $table->string('user_name');//下订单的账户名
            $table->string('album_name');//要制作的相册名称
            $table->float('price');//相簿单价
            $table->integer('quantity');//购买相簿的数量
            $table->string('address');//地址
            $table->string('status');//订单状态
            $table->timestamp('order_date');//下单日期
            $table->timestamp('delivery_date');//发货日期
            $table->string('comment')->nullable();//备注
            $table->timestamps();
        });

//        Schema::table('orders', function (Blueprint $table) {
//            $table->foreign('album_name')->references('name')->on('albums')->onDelete('cascade');
//        });

        DB::table('orders')->insert(
            array(
                array(
                    'user_name' => 'jp',
                    'album_name' => '我的减肥日记',
                    'price'=> 43,
                    'quantity' => 1,
                    'address' => '山西省阳泉市盂县xx镇！',
                    'status'=> '已付款',
                    'comment'=>'可不可以给我弄瘦一点啊！'
                )
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
