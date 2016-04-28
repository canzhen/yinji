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
            //$table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('album_name')->references('name')->on('albums')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
