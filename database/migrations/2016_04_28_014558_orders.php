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

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_name')->references('name')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });

        DB::table('orders')->insert(
            array(
                array(
                    'user_name' => 'jp',
                    'album_name' => '我的减肥日记',
                    'price'=> 38,
                    'quantity' => 23,
                    'address' => '山西省阳泉市盂县xx镇',
                    'status'=> '已付款',
                    'comment'=>'可不可以给我弄瘦一点啊！'
                ),
                array(
                    'user_name' => 'zcz',
                    'album_name' => '我的减肥日记',
                    'price'=> 48,
                    'quantity' => 32,
                    'address' => '福建省厦门市思明区厦大海滨7-602',
                    'status'=> '已付款',
                    'comment'=>''
                ),
                array(
                    'user_name' => 'yhc',
                    'album_name' => '我当主席的日子',
                    'price'=> 55,
                    'quantity' => 11,
                    'address' => '辽宁省沈阳市和平区',
                    'status'=> '送货中',
                    'comment'=>'我要帅帅哒'
                ),
                array(
                    'user_name' => 'jp',
                    'album_name' => '我的减肥日记',
                    'price'=> 33,
                    'quantity' => 25,
                    'address' => '山西省阳泉市盂县xx镇',
                    'status'=> '已送达',
                    'comment'=>''
                ),
                array(
                    'user_name' => 'yhc',
                    'album_name' => '我当主席的日子',
                    'price'=> 22,
                    'quantity' => 12,
                    'address' => '辽宁省沈阳市和平区',
                    'status'=> '送货中',
                    'comment'=>'我要帅帅哒'
                ),
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
